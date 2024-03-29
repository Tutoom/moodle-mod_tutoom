<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_tutoom;

defined('MOODLE_INTERNAL') || die;
require_once(__DIR__ . '../../locallib.php');
require_once(__DIR__ . '../../lib.php');
require_once($CFG->libdir . '/filelib.php');

use curl;
use stdClass;
use mod_tutoom\local\config;

/**
 * Class to describe Tutoom Meeting.
 *
 * @package   mod_tutoom
 * @copyright 2022 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class meeting {
    public function __construct() {
    }

    /**
     * Return meeting information.
     *
     * @param string $meetingid
     * @param string $tutoomid
     * @return stdClass
     */
    public static function get_meeting_info(string $meetingid, string $tutoomid): stdClass {
        global $DB;

        $cfg = config::get_options();
        $apiurl = $cfg["tutoom_backend_api_url"];

        $config = get_config("mod_tutoom");
        $accountid = $config->account_id;
        $accountsecret = $config->account_secret;

        $results = new stdClass();

        $requesttimestamp = time();
        $checksumrequest = json_decode("{
            \"accountId\": \"$accountid\",
            \"checksum\": \"\",
            \"requestTimestamp\": $requesttimestamp
        }");

        $params = tuttom_generate_checksum('get', "meetings/$meetingid", $checksumrequest, $accountsecret);
        $paramstourl = http_build_query($params, '&amp;', '&');

        $url = $apiurl . "meetings/$meetingid" . "?" . $paramstourl;

        $curl = new curl();
        $curl->setopt(array(
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => array('Content-Type: application/json')
        ));
        $response = $curl->get($url);
        $info = $curl->get_info();

        if ($info['http_code'] >= 300){
            $results->error = json_decode($response);
        }
        else {
            $results = json_decode($response);
            $results->meetingId = $meetingid;

            $seconds = $results->creationTimestamp->{"_seconds"};
            $results->meetingDate = date("g:i A", $seconds);

            if (isset($results->isFinished) && $results->isFinished) {
                $DB->set_field('tutoom', 'meetingid', null, array('id' => $tutoomid));

                $results->meetingId = null;
            }
        }

        return $results;
    }


    /**
     * Generate a url to connect to a tutoom meeting.
     *
     * @param string $meetingid
     * @param string $fullname
     * @param string $role MODERATOR or VIEWER
     * @param string $tutoomid
     * @return string
     */
    public static function join_meeting(string $meetingid, string $fullname, string $role, string $tutoomid): string {
        global $DB, $USER;

        $cfg = config::get_options();
        $appurl = $cfg["tutoom_app_url"];

        $config = get_config("mod_tutoom");
        $accountid = $config->account_id;
        $accountsecret = $config->account_secret;
        $activity_logs_enabled = $config->activity_logs === "1";

        $requesttimestamp = time();
        $checksumrequest = json_decode("{
            \"accountId\": \"$accountid\",
            \"checksum\": \"\",
            \"email\": \"$USER->email\",
            \"meetingId\": \"$meetingid\",
            \"name\": \"$fullname\",
            \"requestTimestamp\": $requesttimestamp,
            \"role\": \"$role\"
        }");

        $params = tuttom_generate_checksum('get', 'join', $checksumrequest, $accountsecret);
        $queryparams = tuttom_generate_params_to_url($params);

        $joinurl = $appurl . '/join?' . $queryparams;

        // Add join log.
        if($activity_logs_enabled){
            $data = new stdClass();

            $tutoom = $DB->get_record('tutoom', array('id' => $tutoomid));

            $data->course = $tutoom->course;
            $data->id = $tutoomid;
            $data->meetingid = $meetingid;

            tutoom_log($data, TUTOOM_LOG_EVENT_JOIN_MEETING);
        }

        return $joinurl;
    }

    /**
     * Creates a tutoom meeting.
     *
     * @param string $courseid
     * @param string $logouturl
     * @param string $coursename
     * @param string $welcomemessage
     * @param string $tutoomid
     * @param bool $recordingenabled
     * @return stdClass
     */
    public static function create_meeting(string $courseid, string $logouturl, string $coursename, string $welcomemessage, string $tutoomid, bool $recordingenabled): stdClass {
        global $DB;

        $cfg = config::get_options();
        $apiurl = $cfg["tutoom_backend_api_url"];

        $config = get_config("mod_tutoom");
        $accountid = $config->account_id;
        $accountsecret = $config->account_secret;
        $activity_logs_enabled = $config->activity_logs === "1";
        $recordingautostart = $config->recording_auto_start === "1" ? "true" : "false";
        $recordingenabled = $recordingenabled ? "true" : "false";

        $results = new stdClass();

        $requesttimestamp = time();
        $checksumrequest = json_decode("{
            \"accountId\": \"$accountid\",
            \"autoStartRecording\": \"$recordingautostart\",
            \"checksum\": \"\",
            \"externalId\": \"$courseid\",
            \"logoutUrl\": \"$logouturl\",
            \"name\": \"$coursename\",
            \"record\": \"$recordingenabled\",
            \"requestTimestamp\": $requesttimestamp,
            \"welcomeMessage\": \"$welcomemessage\"
        }");

        $params = tuttom_generate_checksum('post', 'meetings', $checksumrequest, $accountsecret);

        $url = $apiurl . "meetings";

        $curl = new curl();
        $curl->setopt(array(
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => array('Content-Type: application/json'))
        );
        $response = $curl->post($url, json_encode($params));
        $info = $curl->get_info();

        if ($info['http_code'] >= 300){
            $results->error = json_decode($response);
        } else {
            $jsonresponse = json_decode($response);

            $meetingid = $jsonresponse->id;
            $DB->set_field('tutoom', 'meetingid', $meetingid, array('id' => $tutoomid));

            // Add create log.
            if($activity_logs_enabled){
                $data = new stdClass();

                $tutoom = $DB->get_record('tutoom', array('id' => $tutoomid));

                $data->course = $tutoom->course;
                $data->id = $tutoomid;
                $data->meetingid = $meetingid;

                tutoom_log($data, TUTOOM_LOG_EVENT_CREATE_MEETING);
            }

            $results->id = $meetingid;
        }

        return $results;
    }

    /**
     * End tutoom meeting.
     *
     * @param string $incomingmeetingid
     * @param string $tutoomid
     * @return stdClass
     */
    public static function end_meeting(string $incomingmeetingid, string $tutoomid): stdClass {
        global $DB;

        $cfg = config::get_options();
        $apiurl = $cfg["tutoom_backend_api_url"];

        $config = get_config("mod_tutoom");
        $accountid = $config->account_id;
        $accountsecret = $config->account_secret;
        $activity_logs_enabled = $config->activity_logs === "1";

        $results = new stdClass();

        $requesttimestamp = time();
        $checksumrequest = json_decode("{
            \"accountId\": \"$accountid\",
            \"checksum\": \"\",
            \"meetingId\": \"$incomingmeetingid\",
            \"requestTimestamp\": $requesttimestamp
        }");

        $params = tuttom_generate_checksum('delete', "meetings/$incomingmeetingid", $checksumrequest, $accountsecret);
        $queryparams = tuttom_generate_params_to_url($params);

        $url = $apiurl . "meetings/$incomingmeetingid" . "?" . $queryparams;

        $curl = new curl();
        $curl->setopt(array(
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => array('Content-Type: application/json'))
        );
        $response = $curl->delete($url);
        $info = $curl->get_info();

        if ($curl->error || $info['http_code'] >= 300){
            $results->error = strlen($curl->error) > 0 ? $curl->error : $response;
        } else {
            $DB->set_field('tutoom', 'meetingid', null, array('id' => $tutoomid));
            $results->deleted = true;

            // Add end log.
            if($activity_logs_enabled){
                $data = new stdClass();

                $tutoom = $DB->get_record('tutoom', array('id' => $tutoomid));

                $data->course = $tutoom->course;
                $data->id = $tutoomid;
                $data->meetingid = $incomingmeetingid;

                tutoom_log($data, TUTOOM_LOG_EVENT_END_MEETING);
            }
        }

        return $results;
    }
}
