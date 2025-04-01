 
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
$string['modulename_help'] = "Pluginul Tutoom vă permite să creați din interiorul Moodle săli de tablă albă în timp real pentru educație la distanță.";
$string['message_account_id_not_set'] = "Trebuie să setați ID-ul contului Tutoom al organizației dvs. în secțiunea de setări generale a pluginului.";
$string['missingidandcmid'] = "ID-ul Tutoom este incorect. Vă rugăm să mergeți la cursul dvs. și să vă selectați activitatea pentru a intra corect în Tutoom.";
$string['index_error_noinstances'] = "Nu există cazuri de Tutoom";
$string['tutoom:joinasmoderator'] = "Alăturați-vă ca moderator într-o sală Tutoom";
$string['tutoom:addinstance'] = "Adăugați o nouă sală/activitate Tutoom";
$string['config_api_secret_key'] = "Cheia secretă API Tutoom";
$string['config_api_secret_key_description'] = "Cheia secretă API a contului dvs. Tutoom";
$string['config_general'] = "Configurație generală";
$string['config_general_description'] = "Aceste setări sunt <b>întotdeauna</b> utilizate";
$string['config_activity_logs'] = "Scrieți jurnalele de activitate";
$string['config_activity_logs_description'] = "Această opțiune salvează jurnalele atunci când o cameră este creată, ștearsă și utilizatorul se alătură acesteia.";
$string['config_recording'] = "Înregistrare";
$string['config_recording_description'] = "Aceste setări sunt specifice funcției";
$string['config_recording_enabled'] = "Înregistrarea este activată implicit";
$string['config_recording_enabled_description'] = "Camera poate fi înregistrată în mod implicit. Poate fi editabil în setările de activitate Tuttom";
$string['config_recording_auto_start'] = "Înregistrare pornire automată";
$string['config_recording_auto_start_description'] = "Dacă opțiunea este bifată, sălile vor începe înregistrarea când moderatorul va intra.";
$string['tutoomname'] = "Nume";
$string['mod_form_block_room'] = "Setări activitate/cameră";
$string['mod_form_field_welcome'] = "Mesaj de bun venit";
$string['mod_form_field_welcome_default_message'] = "Bun venit la clasa. Simțiți-vă liber să puneți orice întrebare.";
$string['mod_form_field_record'] = "Camera poate fi înregistrată";
$string['mod_form_field_room_type'] = "Tipul camerei";
$string['mod_form_field_room_type_help'] = "Selectați tipul de cameră pentru acest Tutoom.";
$string['room_type_room_with_recordings'] = "Cameră cu înregistrări";
$string['room_type_room_only'] = "Numai camera";
$string['room_type_recording_only'] = "Doar înregistrare";
$string['view_conference_action_start'] = "Camera de start";
$string['view_conference_action_join'] = "Alăturați-vă camerei";
$string['view_conference_action_end'] = "Cameră de capăt";
$string['view_message_room_not_initalized'] = "Camera nu a început.";
$string['view_message_room_ended'] = "Această cameră s-a terminat. Vă rugăm să reîncărcați pagina pentru a continua";
$string['view_message_conference_in_this_room'] = "în această cameră";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "A început la";
$string['view_message_session_has_user'] = "Există";
$string['view_message_session_has_users'] = "Sunt";
$string['view_message_user'] = "utilizator";
$string['view_message_users'] = "utilizatorilor";
$string['view_section_title_recordings'] = "Înregistrări";
$string['view_message_norecordings'] = "Nu există nicio înregistrare de afișat.";
$string['recording_title'] = "Înregistrări";
$string['recording_playback'] = "Redare";
$string['recording_name'] = "Nume";
$string['recording_description'] = "Descriere";
$string['recording_preview'] = "Previzualizare";
$string['recording_date'] = "Data";
$string['recording_time'] = "Timp";
$string['recording_duration'] = "Durată";
$string['recording_toolbar'] = "Bara de instrumente";
$string['recording_text_empty'] = "Nicio înregistrare până acum...";
$string['recording_loading'] = "Se primesc înregistrări...";
$string['message_loading'] = "Va rugam asteptati...";
$string['pagination_previous'] = "Anterior";
$string['pagination_next'] = "Următorul";
$string['view_page_error_general'] = "Nu sunt camere disponibile. Vă rugăm să contactați administratorul pentru mai multe informații.";
$string['view_page_error_empty_credentials'] = "Trebuie să configurați acreditările API Tutoom, mai multe informații aici: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Pentru a crea și a vă alătura sălilor Tutoom, datele utilizatorilor trebuie schimbate cu serverul.";
$string['privacy:metadata:tutoom:fullname'] = "Numele complet al utilizatorului care accesează Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Numele cursului al utilizatorului";
$string['privacy:metadata:tutoom:role'] = "Rolul utilizatorului care accesează Moodle. ";