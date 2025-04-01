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
require_once($CFG->libdir . '/filelib.php');

use curl;
use stdClass;
use mod_tutoom\local\config;

/**
 * Class to describe Tutoom Recordings.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class recording {
    public function __construct() {
    }

    /**
     * Return list of recordings. It can return empty list too.
     *
     * @param string $externalid
     * @param int $page
     * @return stdClass
     */
    public static function get_recordings(string $externalid, int $page = 1): stdClass {
        $cfg = config::get_options();
        $apiurl = $cfg["tutoom_backend_api_url"];

        $config = get_config("mod_tutoom");
        $apisecretkey= $config->api_secret_key;


        $results = new stdClass();

        $params = array(
            'page' => $page
        );    
        $url = $apiurl . "recordings/$externalid";

        $curl = new curl();
        $httpHeaders = array();
        $httpHeaders[] = 'Authorization: Bearer '.$apisecretkey;
        $httpHeaders[] = 'Content-Type: application/json';
        $curl->setopt(array(
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => 'Content-Type: application/json',
            'CURLOPT_HTTPHEADER' => $httpHeaders
        ));
        $response = $curl->get($url, $params);
        $info = $curl->get_info();
        $jsonresponse = json_decode($response);

        if ($info['http_code'] === 200){
        
            $results->recordings = $jsonresponse->recordings;
            $results->totalRecords = $jsonresponse->totalRecords;
            $results->pageSize = $jsonresponse->pageSize;

        } else {
            $results->error = $jsonresponse->error;

        }

        return $results;
    }

    /**
     * Generate a url to connect to a tutoom meeting.
     *
     * @param string $meetingid
     * @return stdClass
     */
    public static function join_playback(string $meetingid): stdClass {
        global $USER;

        $cfg = config::get_options();
        $apiurl = $cfg["tutoom_backend_api_url"];

        $config = get_config("mod_tutoom");
        $apisecretkey= $config->api_secret_key;

        $userid = $USER->id;
        $userfullname = "$USER->firstname $USER->lastname";

        $results = new stdClass();
        $params = array(
            'userName' => $userfullname,
        );    
        $url = $apiurl . "recordings/$meetingid/jointoken";

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
        }else {
            $results->error = $jsonresponse->error;
        }

        return $results;
  
    }
}
