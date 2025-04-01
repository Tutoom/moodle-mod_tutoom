 
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
$string['modulename_help'] = "Tutoom plugin giver dig mulighed for at oprette inde fra Moodle realtime whiteboard-rum til fjernundervisning.";
$string['message_account_id_not_set'] = "Du skal indstille din organisations Tutoom-konto-id i afsnittet om generelle plugin-indstillinger.";
$string['missingidandcmid'] = "Tutoom-id er forkert. Gå venligst til dit kursus og vælg din aktivitet for at komme korrekt ind i Tutoom.";
$string['index_error_noinstances'] = "Der er ingen forekomster af Tutoom";
$string['tutoom:joinasmoderator'] = "Deltag som moderator i et Tutoom-rum";
$string['tutoom:addinstance'] = "Tilføj et nyt Tutoom-rum/-aktivitet";
$string['config_api_secret_key'] = "Tutoom API hemmelig nøgle";
$string['config_api_secret_key_description'] = "Den hemmelige API-nøgle til din Tutoom-konto";
$string['config_general'] = "Generel konfiguration";
$string['config_general_description'] = "Disse indstillinger bruges <b>altid</b>";
$string['config_activity_logs'] = "Skriv aktivitetslogs";
$string['config_activity_logs_description'] = "Denne mulighed gemmer logfiler, når et rum er oprettet, slettet og brugeren tilslutter sig rummet.";
$string['config_recording'] = "Indspilning";
$string['config_recording_description'] = "Disse indstillinger er funktionsspecifikke";
$string['config_recording_enabled'] = "Optagelse aktiveret som standard";
$string['config_recording_enabled_description'] = "Rum kan optages som standard. Kan redigeres i Tuttom-aktivitetsindstillingerne";
$string['config_recording_auto_start'] = "Automatisk start af optagelse";
$string['config_recording_auto_start_description'] = "Hvis indstillingen er markeret, vil rum begynde at optage, når moderator kommer ind.";
$string['tutoomname'] = "Navn";
$string['mod_form_block_room'] = "Aktivitet/rumindstillinger";
$string['mod_form_field_welcome'] = "Velkomstbesked";
$string['mod_form_field_welcome_default_message'] = "Velkommen til klassen. Du er velkommen til at stille ethvert spørgsmål.";
$string['mod_form_field_record'] = "Rum kan optages";
$string['mod_form_field_room_type'] = "Værelsestype";
$string['mod_form_field_room_type_help'] = "Vælg værelsestype for denne Tutoom.";
$string['room_type_room_with_recordings'] = "Rum med optagelser";
$string['room_type_room_only'] = "Kun værelse";
$string['room_type_recording_only'] = "Kun optagelse";
$string['view_conference_action_start'] = "Start værelse";
$string['view_conference_action_join'] = "Deltag i værelset";
$string['view_conference_action_end'] = "Ende værelse";
$string['view_message_room_not_initalized'] = "Rummet er ikke startet.";
$string['view_message_room_ended'] = "Dette værelse er slut. Genindlæs siden for at fortsætte";
$string['view_message_conference_in_this_room'] = "i dette rum";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Startede kl";
$string['view_message_session_has_user'] = "Der er";
$string['view_message_session_has_users'] = "Der er";
$string['view_message_user'] = "bruger";
$string['view_message_users'] = "brugere";
$string['view_section_title_recordings'] = "Optagelser";
$string['view_message_norecordings'] = "Der er ingen optagelse at vise.";
$string['recording_title'] = "Optagelser";
$string['recording_playback'] = "Afspilning";
$string['recording_name'] = "Navn";
$string['recording_description'] = "Beskrivelse";
$string['recording_preview'] = "Forhåndsvisning";
$string['recording_date'] = "Dato";
$string['recording_time'] = "Tid";
$string['recording_duration'] = "Varighed";
$string['recording_toolbar'] = "Værktøjslinje";
$string['recording_text_empty'] = "Ingen optagelser indtil videre...";
$string['recording_loading'] = "Henter optagelser...";
$string['message_loading'] = "Vent venligst...";
$string['pagination_previous'] = "Tidligere";
$string['pagination_next'] = "Næste";
$string['view_page_error_general'] = "Der er ingen ledige værelser. Kontakt venligst din administrator for at få flere oplysninger.";
$string['view_page_error_empty_credentials'] = "Du skal konfigurere Tutoom API-legitimationsoplysninger, mere information her: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "For at oprette og deltage i Tutoom-rum skal brugerdata udveksles med serveren.";
$string['privacy:metadata:tutoom:fullname'] = "Det fulde navn på den bruger, der har adgang til Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Kursusnavnet på brugeren";
$string['privacy:metadata:tutoom:role'] = "Rollen for brugeren, der har adgang til Moodle. ";