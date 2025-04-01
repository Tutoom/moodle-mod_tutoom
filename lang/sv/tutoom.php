 
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
 * Plugin strings are defined here.
 *
 * @package   mod_tutoom
 * @category  string
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = "Tutoom";
$string['pluginname'] = "Tutoom";
$string['pluginadministration'] = "";
$string['modulenameplural'] = "Tutoom";
$string['modulename_help'] = "Tutoom-plugin låter dig skapa inifrån Moodle whiteboard-rum i realtid för distansutbildning.";
$string['message_account_id_not_set'] = "Du måste ställa in ditt organisations Tutoom-konto-id i avsnittet för allmänna inställningar för plugin.";
$string['missingidandcmid'] = "Tutoom-ID är felaktigt. Gå till din kurs och välj din aktivitet för att gå in i Tutoom korrekt.";
$string['index_error_noinstances'] = "Det finns inga instanser av Tutoom";
$string['tutoom:joinasmoderator'] = "Gå med som moderator i ett Tutoom-rum";
$string['tutoom:addinstance'] = "Lägg till ett nytt Tutoom-rum/-aktivitet";
$string['config_api_secret_key'] = "Tutoom API hemliga nyckel";
$string['config_api_secret_key_description'] = "API:s hemliga nyckel för ditt Tutoom-konto";
$string['config_general'] = "Allmän konfiguration";
$string['config_general_description'] = "Dessa inställningar används <b>alltid</b>";
$string['config_activity_logs'] = "Skriv aktivitetsloggar";
$string['config_activity_logs_description'] = "Detta alternativ sparar loggar när ett rum skapas, tas bort och användaren går med i rummet.";
$string['config_recording'] = "Inspelning";
$string['config_recording_description'] = "Dessa inställningar är funktionsspecifika";
$string['config_recording_enabled'] = "Inspelning aktiverad som standard";
$string['config_recording_enabled_description'] = "Rum kan spelas in som standard. Kan redigeras i Tuttom-aktivitetsinställningarna";
$string['config_recording_auto_start'] = "Automatisk start för inspelning";
$string['config_recording_auto_start_description'] = "Om alternativet är markerat kommer rum att börja spela in när moderator kommer in.";
$string['tutoomname'] = "Namn";
$string['mod_form_block_room'] = "Aktivitet/Rumsinställningar";
$string['mod_form_field_welcome'] = "Välkomstmeddelande";
$string['mod_form_field_welcome_default_message'] = "Välkommen till klassen. Ställ gärna vilken fråga som helst.";
$string['mod_form_field_record'] = "Rum kan spelas in";
$string['mod_form_field_room_type'] = "Rumstyp";
$string['mod_form_field_room_type_help'] = "Välj rumstyp för denna Tutoom.";
$string['room_type_room_with_recordings'] = "Rum med inspelningar";
$string['room_type_room_only'] = "Endast rum";
$string['room_type_recording_only'] = "Endast inspelning";
$string['view_conference_action_start'] = "Start rum";
$string['view_conference_action_join'] = "Gå med i rummet";
$string['view_conference_action_end'] = "Slutrummet";
$string['view_message_room_not_initalized'] = "Rummet har inte startat.";
$string['view_message_room_ended'] = "Detta rum har tagit slut. Ladda om sidan för att fortsätta";
$string['view_message_conference_in_this_room'] = "i det här rummet";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFF-LINE";
$string['view_message_session_started_at'] = "Började kl";
$string['view_message_session_has_user'] = "Det finns";
$string['view_message_session_has_users'] = "Det finns";
$string['view_message_user'] = "användare";
$string['view_message_users'] = "användare";
$string['view_section_title_recordings'] = "Inspelningar";
$string['view_message_norecordings'] = "Det finns ingen inspelning att visa.";
$string['recording_title'] = "Inspelningar";
$string['recording_playback'] = "Uppspelning";
$string['recording_name'] = "Namn";
$string['recording_description'] = "Beskrivning";
$string['recording_preview'] = "Förhandsvisning";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Tid";
$string['recording_duration'] = "Varaktighet";
$string['recording_toolbar'] = "Verktygsfält";
$string['recording_text_empty'] = "Inga inspelningar än så länge...";
$string['recording_loading'] = "Hämtar inspelningar...";
$string['message_loading'] = "Vänligen vänta...";
$string['pagination_previous'] = "Tidigare";
$string['pagination_next'] = "Nästa";
$string['view_page_error_general'] = "Det finns inga tillgängliga rum. Kontakta din administratör för mer information.";
$string['view_page_error_empty_credentials'] = "Du måste konfigurera Tutoom API-uppgifter, mer information här: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "För att skapa och gå med i Tutoom-rum måste användardata utbytas med servern.";
$string['privacy:metadata:tutoom:fullname'] = "Det fullständiga namnet på användaren som har åtkomst till Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Användarens kursnamn";
$string['privacy:metadata:tutoom:role'] = "Rollen för användaren som får åtkomst till Moodle. ";