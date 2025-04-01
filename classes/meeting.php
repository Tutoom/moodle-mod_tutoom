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
 * @copyright 2025 onwards, Tutoom Inc.
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
        $apisecretkey= $config->api_secret_key;

        $results = new stdClass();

        $url = $apiurl . "rooms/$meetingid";

        $curl = new curl();
        $httpHeaders = array();
        $httpHeaders[] = 'Authorization: Bearer '.$apisecretkey;
        $httpHeaders[] = 'Content-Type: application/json';
        $curl->setopt(array(
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => 'Content-Type: application/json',
            'CURLOPT_HTTPHEADER' => $httpHeaders
        ));
        $response = $curl->get($url);
        $info = $curl->get_info();
        $jsonresponse = json_decode($response);

        if ($info['http_code'] === 200){
            
            $results->roomId = $meetingid;
            $results->numParticipants = $jsonresponse->numParticipants;
            $results->roomStatus = $jsonresponse->roomStatus;
            $results->meetingDate = date("g:i A", $jsonresponse->creationTime);

            if (isset($jsonresponse->roomStatus) && $jsonresponse->roomStatus && $jsonresponse->roomStatus === 2) {
                $DB->set_field('tutoom', 'roomid', null, array('id' => $tutoomid));

                $results->roomId = null;
            }
        }else {
            $results->error = $jsonresponse->error;
            
        }

        return $results;
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
        $apisecretkey= $config->api_secret_key;
        $activity_logs_enabled = $config->activity_logs === "1";
        $recordingautostart = $config->recording_auto_start === "1" ? "true" : "false";
        $recordingenabled = $recordingenabled ? "true" : "false";
        
        $results = new stdClass();

        $params = array(
            'roomName' => $coursename,
            'externalId' => $courseid,
            'logoutUrl' => $logouturl,
            'allowRecording' => $recordingenabled,
            'autoStartRecording' => $recordingautostart,
            'welcomeMessage' => $welcomemessage,

        );    
        $url = $apiurl . "rooms/";

        $curl = new curl();
        $httpHeaders = array();
        $httpHeaders[] = 'Authorization: Bearer '.$apisecretkey;
        $httpHeaders[] = 'Content-Type: application/json';
        $curl->setopt(array(
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => $httpHeaders,
        ));
        $response = $curl->post($url, json_encode($params));
        $info = $curl->get_info();
        $jsonresponse = json_decode($response);

        if ($info['http_code'] === 201){
            
            $roomid = $jsonresponse->roomId;
            $DB->set_field('tutoom', 'roomid', $roomid, array('id' => $tutoomid));

            // Add create log.
            if($activity_logs_enabled){
                $data = new stdClass();

                $tutoom = $DB->get_record('tutoom', array('id' => $tutoomid));

                $data->course = $tutoom->course;
                $data->id = $tutoomid;
                $data->roomid = $roomid;

                tutoom_log($data, TUTOOM_LOG_EVENT_CREATE_MEETING);
            }

            $results->roomId = $jsonresponse->roomId;
            $results->numParticipants = $jsonresponse->numParticipants;
            $results->meetingDate = date("g:i A", $jsonresponse->creationTime);
        } else {
             $results->error = $jsonresponse->error;
        }    

        

        return $results;
    }


        /**
     * Generate a url to connect to a tutoom meeting.
     *
     * @param string $meetingid
     * @param string $fullname
     * @param int $role
     * @param string $tutoomid
     * @return stdClass
     */
    public static function join_meeting(string $meetingid, string $fullname, int $role, string $tutoomid): stdClass {
        global $DB, $USER;

        $cfg = config::get_options();
        $apiurl = $cfg["tutoom_backend_api_url"];

        $config = get_config("mod_tutoom");
        $apisecretkey= $config->api_secret_key;
        $activity_logs_enabled = $config->activity_logs === "1";

        $results = new stdClass();
        $params = array(
            'userName' => $fullname,
            'externalUserId' => $USER->id,
            'userRole' => $role,
        );    
        $url = $apiurl . "rooms/$meetingid/jointoken";

        $curl = new curl();
        $httpHeaders = array();
        $httpHeaders[] = 'Authorization: Bearer '.$apisecretkey;
        $httpHeaders[] = 'Content-Type: application/json';
        $curl->setopt(array(
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => $httpHeaders,
        ));
        $response = $curl->post($url, json_encode($params));
        $info = $curl->get_info();
        $jsonresponse = json_decode($response);
            if ($info['http_code'] === 201){

                $results->joinurl = $jsonresponse->joinTokenUrl;
                // Add join log.
                if($activity_logs_enabled){
                    $data = new stdClass();
                    $tutoom = $DB->get_record('tutoom', array('id' => $tutoomid));
                    $data->course = $tutoom->course;
                    $data->id = $tutoomid;
                    $data->roomid = $meetingid;

                    tutoom_log($data, TUTOOM_LOG_EVENT_JOIN_MEETING);
                }
                    
            }else {
                $results->error = $jsonresponse->error;
                $results->error->statuscode = $info['http_code'];
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
        $apisecretkey= $config->api_secret_key;
        $activity_logs_enabled = $config->activity_logs === "1";

        $results = new stdClass();

        $url = $apiurl . "rooms/$incomingmeetingid";

        $curl = new curl();
        $httpHeaders = array();
        $httpHeaders[] = 'Authorization: Bearer '.$apisecretkey;
        $httpHeaders[] = 'Content-Type: application/json';
        $curl->setopt(array(
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => 'Content-Type: application/json',
            'CURLOPT_HTTPHEADER' => $httpHeaders
        ));
        $response = $curl->delete($url);
        $info = $curl->get_info();
        $jsonresponse = json_decode($response);

        if ($info['http_code'] === 201){
            
            $DB->set_field('tutoom', 'roomid', null, array('id' => $tutoomid));
            $results->deleted = true;

            // Add end log.
            if($activity_logs_enabled){
                $data = new stdClass();

                $tutoom = $DB->get_record('tutoom', array('id' => $tutoomid));

                $data->course = $tutoom->course;
                $data->id = $tutoomid;
                $data->roomid = $incomingmeetingid;

                tutoom_log($data, TUTOOM_LOG_EVENT_END_MEETING);
            }
        } else {
            $results->error = $jsonresponse->error;
            $results->error->statuscode = $info['http_code'];
        }

        return $results;
    }
}
