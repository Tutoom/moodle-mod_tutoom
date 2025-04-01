 
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
$string['modulename_help'] = "El connector Tutoom us permet crear sales de pissarra en temps real de Moodle per a l'educació a distància.";
$string['message_account_id_not_set'] = "Heu de configurar l'identificador del compte de Tutoom de la vostra organització a la secció de configuració general del connector.";
$string['missingidandcmid'] = "L'identificador de Tutoom és incorrecte. Si us plau, aneu al vostre curs i seleccioneu la vostra activitat per entrar correctament a Tutoom.";
$string['index_error_noinstances'] = "No hi ha casos de Tutoom";
$string['tutoom:joinasmoderator'] = "Uneix-te com a moderador a una sala Tutoom";
$string['tutoom:addinstance'] = "Afegeix una nova sala/activitat de Tutoom";
$string['config_api_secret_key'] = "Clau secreta de l'API de Tutoom";
$string['config_api_secret_key_description'] = "La clau secreta de l'API del vostre compte de Tutoom";
$string['config_general'] = "Configuració general";
$string['config_general_description'] = "Aquesta configuració s'utilitza <b>sempre</b>";
$string['config_activity_logs'] = "Escriure registres d'activitats";
$string['config_activity_logs_description'] = "Aquesta opció desa els registres quan es crea, s'elimina una sala i l'usuari s'uneix a la sala.";
$string['config_recording'] = "Gravació";
$string['config_recording_description'] = "Aquests paràmetres són específics de funció";
$string['config_recording_enabled'] = "Enregistrament activat per defecte";
$string['config_recording_enabled_description'] = "L'habitació es pot gravar de manera predeterminada. Es pot editar a la configuració d'activitats de Tuttom";
$string['config_recording_auto_start'] = "Enregistrament d'inici automàtic";
$string['config_recording_auto_start_description'] = "Si l'opció està marcada, les sales començaran a gravar-se quan el moderador entri.";
$string['tutoomname'] = "Nom";
$string['mod_form_block_room'] = "Activitat/Configuració de la sala";
$string['mod_form_field_welcome'] = "Missatge de benvinguda";
$string['mod_form_field_welcome_default_message'] = "Benvinguts a la classe. No dubteu a fer qualsevol pregunta.";
$string['mod_form_field_record'] = "L'habitació es pot gravar";
$string['mod_form_field_room_type'] = "Tipus d'habitació";
$string['mod_form_field_room_type_help'] = "Seleccioneu el tipus d'habitació per a aquest Tutoom.";
$string['room_type_room_with_recordings'] = "Sala amb enregistraments";
$string['room_type_room_only'] = "Només habitació";
$string['room_type_recording_only'] = "Només gravació";
$string['view_conference_action_start'] = "Sala d'inici";
$string['view_conference_action_join'] = "Uneix-te a l'habitació";
$string['view_conference_action_end'] = "Sala final";
$string['view_message_room_not_initalized'] = "La sala no ha començat.";
$string['view_message_room_ended'] = "Aquesta sala s'ha acabat. Torneu a carregar la pàgina per continuar";
$string['view_message_conference_in_this_room'] = "en aquesta sala";
$string['view_message_session_status_on'] = "EN LÍNIA";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Va començar a les";
$string['view_message_session_has_user'] = "Hi ha";
$string['view_message_session_has_users'] = "N'hi ha";
$string['view_message_user'] = "usuari";
$string['view_message_users'] = "usuaris";
$string['view_section_title_recordings'] = "Enregistraments";
$string['view_message_norecordings'] = "No hi ha cap gravació per mostrar.";
$string['recording_title'] = "Enregistraments";
$string['recording_playback'] = "Reproducció";
$string['recording_name'] = "Nom";
$string['recording_description'] = "Descripció";
$string['recording_preview'] = "Vista prèvia";
$string['recording_date'] = "Data";
$string['recording_time'] = "Temps";
$string['recording_duration'] = "Durada";
$string['recording_toolbar'] = "Barra d'eines";
$string['recording_text_empty'] = "No hi ha enregistraments fins ara...";
$string['recording_loading'] = "S'estan rebent gravacions...";
$string['message_loading'] = "Si us plau, espereu...";
$string['pagination_previous'] = "Anterior";
$string['pagination_next'] = "A continuació";
$string['view_page_error_general'] = "No hi ha habitacions disponibles. Poseu-vos en contacte amb el vostre administrador per obtenir més informació.";
$string['view_page_error_empty_credentials'] = "Heu de configurar les credencials de l'API de Tutoom, més informació aquí: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Per crear i unir-se a sales de Tutoom, les dades dels usuaris s'han d'intercanviar amb el servidor.";
$string['privacy:metadata:tutoom:fullname'] = "El nom complet de l'usuari que accedeix a Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "El nom del curs de l'usuari";
$string['privacy:metadata:tutoom:role'] = "El rol de l'usuari que accedeix a Moodle. ";