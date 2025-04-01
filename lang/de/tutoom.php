 
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

$string['pluginname'] = "Tutoom";
$string['pluginadministration'] = "";
$string['modulenameplural'] = "Tutoom";
$string['modulename_help'] = "Mit dem Tutoom-Plugin können Sie Echtzeit-Whiteboard-Räume für Fernunterricht direkt in Moodle erstellen.";
$string['message_account_id_not_set'] = "Sie müssen die Tutoom-Konto-ID Ihrer Organisation in den allgemeinen Plugin-Einstellungen festlegen.";
$string['missingidandcmid'] = "Die Tutoom-ID ist falsch. Bitte öffnen Sie Ihren Kurs und wählen Sie Ihre Aktivität aus, um Tutoom korrekt zu nutzen.";
$string['index_error_noinstances'] = "Tutoom ist nicht vorhanden.";
$string['tutoom:joinasmoderator'] = "Als Moderator einem Tutoom-Raum beitreten.";
$string['tutoom:addinstance'] = "Neuen Tutoom-Raum/eine neue Tutoom-Aktivität hinzufügen.";
$string['config_api_secret_key'] = "Geheimer Tutoom-API-Schlüssel";
$string['config_api_secret_key_description'] = "Der geheime API-Schlüssel Ihres Tutoom-Kontos";
$string['config_general'] = "Allgemeine Konfiguration";
$string['config_general_description'] = "Diese Einstellungen werden <b>immer</b> verwendet.";
$string['config_activity_logs'] = "Aktivitätsprotokolle erstellen";
$string['config_activity_logs_description'] = "Diese Option speichert Protokolle, wenn ein Raum erstellt, gelöscht und ein Benutzer dem Raum beitritt.";
$string['config_recording'] = "Aufzeichnung";
$string['config_recording_description'] = "Diese Einstellungen sind funktionsspezifisch.";
$string['config_recording_enabled'] = "Aufzeichnung standardmäßig aktiviert";
$string['config_recording_enabled_description'] = "Der Raum kann standardmäßig aufgezeichnet werden. Kann in den Tuttom-Aktivitätseinstellungen bearbeitet werden.";
$string['config_recording_auto_start'] = "Automatischer Start der Aufzeichnung";
$string['config_recording_auto_start_description'] = "Ist diese Option aktiviert, beginnt die Aufzeichnung, sobald der Moderator den Raum betritt.";
$string['tutoomname'] = "Name";
$string['mod_form_block_room'] = "Aktivität/Raumeinstellungen";
$string['mod_form_field_welcome'] = "Begrüßungsnachricht";
$string['mod_form_field_welcome_default_message'] = "Willkommen im Kurs. Sie können gerne Fragen stellen.";
$string['mod_form_field_record'] = "Raum kann aufgezeichnet werden";
$string['mod_form_field_room_type'] = "Raumtyp";
$string['mod_form_field_room_type_help'] = "Wählen Sie den Raumtyp für dieses Tutorial aus.";
$string['room_type_room_with_recordings'] = "Raum mit Aufzeichnungen";
$string['room_type_room_only'] = "Nur Raum";
$string['room_type_recording_only'] = "Nur Aufzeichnung";
$string['view_conference_action_start'] = "Raum starten";
$string['view_conference_action_join'] = "Raum betreten";
$string['view_conference_action_end'] = "Raum beenden";
$string['view_message_room_not_initalized'] = "Der Raum wurde noch nicht gestartet.";
$string['view_message_room_ended'] = "Dieser Raum wurde beendet. Bitte laden Sie die Seite neu, um fortzufahren.";
$string['view_message_conference_in_this_room'] = "in diesem Raum";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Begonnen am";
$string['view_message_session_has_user'] = "Es gibt";
$string['view_message_session_has_users'] = "Es gibt";
$string['view_message_user'] = "Benutzer";
$string['view_message_users'] = "Benutzer";
$string['view_section_title_recordings'] = "Aufnahmen";
$string['view_message_norecordings'] = "Es sind keine Aufnahmen zum Anzeigen vorhanden.";
$string['recording_title'] = "Aufnahmen";
$string['recording_playback'] = "Wiedergabe";
$string['recording_name'] = "Name";
$string['recording_description'] = "Beschreibung";
$string['recording_preview'] = "Vorschau";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Uhrzeit";
$string['recording_duration'] = "Dauer";
$string['recording_toolbar'] = "Symbolleiste";
$string['recording_text_empty'] = "Bisher keine Aufnahmen vorhanden...";
$string['recording_loading'] = "Aufnahmen werden abgerufen...";
$string['message_loading'] = "Bitte warten...";
$string['pagination_previous'] = "Zurück";
$string['pagination_next'] = "Weiter";
$string['view_page_error_general'] = "Es sind keine Räume verfügbar. Bitte wenden Sie sich für weitere Informationen an Ihren Administrator.";
$string['view_page_error_empty_credentials'] = "Sie müssen die Tutoom-API-Zugangsdaten konfigurieren. Weitere Informationen finden Sie hier: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Um Tutoom-Räume zu erstellen und ihnen beizutreten, müssen Benutzerdaten mit dem Server ausgetauscht werden.";
$string['privacy:metadata:tutoom:fullname'] = "Der vollständige Name des Benutzers, der auf Moodle zugreift.";
$string['privacy:metadata:tutoom:coursename'] = "Der Kursname des Benutzers.";
$string['privacy:metadata:tutoom:role'] = "Die Rolle des Benutzers, der auf Moodle zugreift. ";