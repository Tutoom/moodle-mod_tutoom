<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Prints an instance of mod_tutoom.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_tutoom\meeting;
use mod_tutoom\recording;
use mod_tutoom\local\config;

defined('MOODLE_INTERNAL') || die;
require_once(__DIR__ . '/classes/meeting.php');

/**
 * Displays the general view.
 *
 * @param string $id
 * @param object $moduleinstance
 * @param bool $is_moderator
 * @return void
 */
function tutoom_view_render($id, $moduleinstance, $ismoderator) {
    global $OUTPUT, $CFG;

    $config = get_config("mod_tutoom");
    $apisecretkey= $config->api_secret_key;

    $defaulterror = array(
        'error' => true,
        'name' => $moduleinstance->name,
    );

    if (!isset($apisecretkey) || $apisecretkey == '') {
        $error = array_merge($defaulterror, array('errorcode' => 'AUTH_FAILED',
         'errormessage' => get_string('view_page_error_empty_credentials', 'mod_tutoom')));
        echo $OUTPUT->render_from_template("mod_tutoom/view_page", $error);
        return;
    }

    $tutoomid = $moduleinstance->id;
    $meetingid = $moduleinstance->roomid;
    $courseid = $moduleinstance->course;
    $typeroom = $moduleinstance->type;
    $isroomwithrecordings = $typeroom === strval(TUTOOM_TYPE_ALL);
    $isroomonly = $typeroom === strval(TUTOOM_TYPE_ROOM_ONLY);
    $isrecordingonly = $typeroom === strval(TUTOOM_TYPE_RECORDING_ONLY);

    $showrecordings = $isroomwithrecordings || $isrecordingonly;
    $showroominformation = $isroomwithrecordings || $isroomonly;

    $data = array(
        'name' => $moduleinstance->name,
        "ismoderator" => $ismoderator,
        "id" => $id,
        "baseurl" => $CFG->wwwroot.'/mod/tutoom/tutoom_ajax.php',
        "showrecordings" => $showrecordings,
        "showroominformation" => $showroominformation,
    );


    if (isset($meetingid) && $meetingid !== null) {
        $meeetinginfo = meeting::get_meeting_info($meetingid, $tutoomid);

        if (isset($meeetinginfo->roomStatus) && $meeetinginfo->roomStatus && $meeetinginfo->roomStatus === 2) {
            $data["meetingid"] = null;
            echo $OUTPUT->render_from_template("mod_tutoom/view_page", $data);
            return;
        }

        if(isset($meeetinginfo->error)){
            $errorcode = $meeetinginfo->error->code;
            $errormessage = $meeetinginfo->error->message;
            $error = array_merge($defaulterror, array('errorcode' => $errorcode, 'errormessage' => $errormessage));
            echo $OUTPUT->render_from_template("mod_tutoom/view_page", $error);
            return;
        }

        $participantcount = $meeetinginfo->numParticipants;
        $meetingdate = $meeetinginfo->meetingDate;

        $data["meetingid"] = $meetingid;
        $data["meetingdate"] = $meetingdate;
        $data["participantscount"] = $participantcount;
        $data["istextpluralparticipant"] = $participantcount > 1;
    }
    else {
        $data["meetingid"] = null;
    }

    echo $OUTPUT->render_from_template("mod_tutoom/view_page", $data);
}
