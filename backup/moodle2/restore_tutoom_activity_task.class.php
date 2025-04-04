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

/**
 * Class for restore Tutoom.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/mod/tutoom/backup/moodle2/restore_tutoom_stepslib.php');

/**
 * Restore task that provides all the settings and steps to perform one complete restore of the activity.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class restore_tutoom_activity_task extends restore_activity_task {
    /**
     * Define (add) particular settings this activity can have.
     *
     * @return void
     */
    protected function define_my_settings() {
        // No particular settings for this activity.
    }

    /**
     * Define (add) particular steps this activity can have.
     *
     * @return void
     */
    protected function define_my_steps() {
        // Tutoom only has one structure step.
        $this->add_step(new restore_tutoom_activity_structure_step('tutoom_structure', 'tutoom.xml'));
    }

    /**
     * Define the contents in the activity that must be processed by the link decoder.
     *
     * @return array
     */
    public static function define_decode_contents() {
        $contents = array();
        $contents[] = new restore_decode_content('tutoom', array('intro'), 'tutoom');
        return $contents;
    }

    /**
     * Define the decoding rules for links belonging to the activity to be executed by the link decoder.
     *
     * @return array
     */
    public static function define_decode_rules() {
        $rules = array();
        $rules[] = new restore_decode_rule('TUTOOMVIEWBYID', '/mod/tutoom/view.php?id=$1', 'course_module');
        $rules[] = new restore_decode_rule('TUTOOMINDEX', '/mod/tutoom/index.php?id=$1', 'course');
        return $rules;
    }

    /**
     * Define the restoring rules for logs belonging to the activity to be executed by the link decoder.
     *
     * @return array
     */
    public static function define_restore_log_rules() {
        $rules = array();
        $rules[] = new restore_log_rule('tutoom', 'add', 'view.php?id={course_module}', '{tutoom}');
        $rules[] = new restore_log_rule('tutoom', 'update', 'view.php?id={course_module}', '{tutoom}');
        $rules[] = new restore_log_rule('tutoom', 'view', 'view.php?id={course_module}', '{tutoom}');
        $rules[] = new restore_log_rule('tutoom', 'report', 'report.php?id={course_module}', '{tutoom}');
        return $rules;
    }

    /**
     * Define the restoring rules for course associated to the activity to be executed by the link decoder.
     *
     * @return array
     */
    public static function define_restore_log_rules_for_course() {
        $rules = array();
        $rules[] = new restore_log_rule('tutoom', 'view all', 'index.php?id={course}', null);
        return $rules;
    }
}
