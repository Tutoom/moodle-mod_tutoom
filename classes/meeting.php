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
     * @param string $recordid
     * @return stdClass
     */
    public static function get_meeting_info(string $meetingid, string $recordid): stdClass {
        global $CFG, $DB;

        $cfg = config::get_options();
        $apiurl = $cfg["api_url"];

        $accountid = $CFG->tutoom_account_id;
        $accountsecret = $CFG->tutoom_account_secret;
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

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $response = curl_exec($curl);

        $jsonresponse = json_decode($response);
        if (isset($jsonresponse->isFinished) && $jsonresponse->isFinished) {
            $DB->set_field('tutoom', 'meetingid', null, array('id' => $recordid));
        }

        $results = $jsonresponse;
        $results->meetingId = $meetingid;

        curl_close($curl);

        return $results;
    }

    /**
     * Generate a url to connect to a tutoom meeting.
     *
     * @param string $meetingid
     * @param string $fullname
     * @param string $role MODERATOR or VIEWER
     * @param string $appurl
     * @return string
     */
    public static function join_meeting(string $meetingid, string $fullname, string $role, string $appurl): string {
        global $CFG, $USER;

        $accountid = $CFG->tutoom_account_id;
        $accountsecret = $CFG->tutoom_account_secret;

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

        return $joinurl;
    }

    /**
     * Creates a tutoom meeting.
     *
     * @param string $classid
     * @param string $logouturl
     * @param string $coursename
     * @param string $welcomemessage
     * @param string $recordid
     * @return stdClass
     */
    public static function create_meeting(
        string $classid,
        string $logouturl,
        string $coursename,
        string $welcomemessage,
        string $recordid
    ): stdClass {
        global $CFG, $DB;

        $cfg = config::get_options();
        $apiurl = $cfg["api_url"];

        $accountid = $CFG->tutoom_account_id;
        $accountsecret = $CFG->tutoom_account_secret;
        $results = new stdClass();

        $requesttimestamp = time();
        $checksumrequest = json_decode("{
            \"accountId\": \"$accountid\",
            \"checksum\": \"\",
            \"classId\": \"$classid\",
            \"isMoodleSource\": \"true\",
            \"logoutUrl\": \"$logouturl\",
            \"name\": \"$coursename\",
            \"requestTimestamp\": $requesttimestamp,
            \"welcomeMessage\": \"$welcomemessage\"
        }");

        $params = tuttom_generate_checksum('post', 'meetings', $checksumrequest, $accountsecret);

        $url = $apiurl . "meetings";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            $error = curl_error($curl);
        }

        if (isset($error)) {
            $results->error = $error;
        } else {
            $jsonresponse = json_decode($response);

            $meetingid = $jsonresponse->id;
            $DB->set_field('tutoom', 'meetingid', $meetingid, array('id' => $recordid));

            // Set urlapp field to BD which comes from backend API.
            $appurl = $jsonresponse->urlApp;
            $DB->set_field('tutoom', 'urlapp', $appurl, array('id' => $recordid));

            $results->id = $meetingid;
        }

        curl_close($curl);

        return $results;
    }

    /**
     * End tutoom meeting.
     *
     * @param string $incomingmeetingid
     * @param string $recordid
     * @return stdClass
     */
    public static function end_meeting(string $incomingmeetingid, string $recordid): stdClass {
        global $CFG, $DB;

        $cfg = config::get_options();
        $apiurl = $cfg["api_url"];

        $accountid = $CFG->tutoom_account_id;
        $accountsecret = $CFG->tutoom_account_secret;
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

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_exec($curl);

        if (curl_errno($curl)) {
            $error = curl_error($curl);
        }

        if (isset($error)) {
            $results->error = $error;
        } else {
            $DB->set_field('tutoom', 'meetingid', null, array('id' => $recordid));
            $DB->set_field('tutoom', 'urlapp', null, array('id' => $recordid));
            $results->deleted = true;
        }
        curl_close($curl);

        return $results;
    }
}
