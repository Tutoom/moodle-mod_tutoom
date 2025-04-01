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
$string['modulename_help'] = "Il plugin Tutoom ti consente di creare all'interno di Moodle stanze con lavagna in tempo reale per l'istruzione a distanza.";
$string['message_account_id_not_set'] = "Devi impostare l'ID account Tutoom della tua organizzazione nella sezione delle impostazioni generali del plugin.";
$string['missingidandcmid'] = "L'ID Tutoom non è corretto. Vai al tuo corso e seleziona la tua attività per entrare correttamente in Tutoom.";
$string['index_error_noinstances'] = "Non ci sono istanze di Tutoom";
$string['tutoom:joinasmoderator'] = "Unisciti come moderatore a una stanza Tutoom";
$string['tutoom:addinstance'] = "Aggiungi una nuova stanza/attività Tutoom";
$string['config_api_secret_key'] = "Chiave segreta API Tutoom";
$string['config_api_secret_key_description'] = "La chiave segreta API del tuo account Tutoom";
$string['config_general'] = "Configurazione generale";
$string['config_general_description'] = "Queste impostazioni sono <b>sempre</b> utilizzate";
$string['config_activity_logs'] = "Scrivi registri attività";
$string['config_activity_logs_description'] = "Questa opzione salva i registri quando una stanza viene creata, eliminata e un utente si unisce alla stanza.";
$string['config_recording'] = "Registrazione";
$string['config_recording_description'] = "Queste impostazioni sono specifiche della funzionalità";
$string['config_recording_enabled'] = "Registrazione abilitata per impostazione predefinita";
$string['config_recording_enabled_description'] = "La stanza può essere registrata per impostazione predefinita. Può essere modificata nelle impostazioni attività Tuttom";
$string['config_recording_auto_start'] = "Avvio automatico della registrazione";
$string['config_recording_auto_start_description'] = "Se l'opzione è selezionata, le stanze inizieranno a registrare quando entra il moderatore.";
$string['tutoomname'] = "Nome";
$string['mod_form_block_room'] = "Impostazioni attività/stanza";
$string['mod_form_field_welcome'] = "Messaggio di benvenuto";
$string['mod_form_field_welcome_default_message'] = "Benvenuto alla classe. Sentiti libero di fare qualsiasi domanda.";
$string['mod_form_field_record'] = "La stanza può essere registrata";
$string['mod_form_field_room_type'] = "Tipo di stanza";
$string['mod_form_field_room_type_help'] = "Seleziona il tipo di stanza per questo Tutoom.";
$string['room_type_room_with_recordings'] = "Stanza con registrazioni";
$string['room_type_room_only'] = "Solo stanza";
$string['room_type_recording_only'] = "Solo registrazione";
$string['view_conference_action_start'] = "Inizia stanza";
$string['view_conference_action_join'] = "Accedi alla stanza";
$string['view_conference_action_end'] = "Termina stanza";
$string['view_message_room_not_initalized'] = "La stanza non è iniziata.";
$string['view_message_room_ended'] = "Questa stanza è terminata. Ricarica la pagina per continuare";
$string['view_message_conference_in_this_room'] = "in questa stanza";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Iniziato alle";
$string['view_message_session_has_user'] = "C'è";
$string['view_message_session_has_users'] = "Ci sono";
$string['view_message_user'] = "utente";
$string['view_message_users'] = "utenti";
$string['view_section_title_recordings'] = "Registrazioni";
$string['view_message_norecordings'] = "Non ci sono registrazioni da mostrare.";
$string['recording_title'] = "Registrazioni";
$string['recording_playback'] = "Riproduzione";
$string['recording_name'] = "Nome";
$string['recording_description'] = "Descrizione";
$string['recording_preview'] = "Anteprima";
$string['recording_date'] = "Data";
$string['recording_time'] = "Ora";
$string['recording_duration'] = "Durata";
$string['recording_toolbar'] = "Barra degli strumenti";
$string['recording_text_empty'] = "Nessuna registrazione finora...";
$string['recording_loading'] = "Ottenimento registrazioni...";
$string['message_loading'] = "Attendi...";
$string['pagination_previous'] = "Precedente";
$string['pagination_next'] = "Successivo";
$string['view_page_error_general'] = "Non ci sono stanze disponibili. Contatta l'amministratore per maggiori informazioni.";
$string['view_page_error_empty_credentials'] = "Devi configurare le credenziali API di Tutoom, maggiori informazioni qui: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Per creare e partecipare alle stanze di Tutoom, i dati utente devono essere scambiati con il server.";
$string['privacy:metadata:tutoom:fullname'] = "Il nome completo dell'utente che accede a Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Il nome del corso dell'utente";
$string['privacy:metadata:tutoom:role'] = "Il ruolo dell'utente che accede a Moodle.";
