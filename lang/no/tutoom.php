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
$string['modulename_help'] = "Tutoom-plugin lar deg lage fra Moodle sanntids tavlerom for fjernundervisning.";
$string['message_account_id_not_set'] = "Du må angi organisasjonens Tutoom-konto-ID i delen for generelle plugininnstillinger.";
$string['missingidandcmid'] = "Tutoom-ID er feil. Vennligst gå til kurset ditt og velg aktiviteten din for å gå inn i Tutoom riktig.";
$string['index_error_noinstances'] = "Det er ingen forekomster av Tutoom";
$string['tutoom:joinasmoderator'] = "Bli med som moderator i et Tutoom-rom";
$string['tutoom:addinstance'] = "Legg til et nytt Tutoom-rom/-aktivitet";
$string['config_api_secret_key'] = "Tutoom API hemmelig nøkkel";
$string['config_api_secret_key_description'] = "Den hemmelige API-nøkkelen til Tutoom-kontoen din";
$string['config_general'] = "Generell konfigurasjon";
$string['config_general_description'] = "Disse innstillingene brukes <b>alltid</b>";
$string['config_activity_logs'] = "Skriv aktivitetslogger";
$string['config_activity_logs_description'] = "Dette alternativet lagrer logger når et rom er opprettet, slettet og bruker blir med i rommet.";
$string['config_recording'] = "Innspilling";
$string['config_recording_description'] = "Disse innstillingene er funksjonsspesifikke";
$string['config_recording_enabled'] = "Opptak er aktivert som standard";
$string['config_recording_enabled_description'] = "Rom kan tas opp som standard. Kan redigeres i Tuttom-aktivitetsinnstillingene";
$string['config_recording_auto_start'] = "Automatisk start av opptak";
$string['config_recording_auto_start_description'] = "Hvis alternativet er merket av, vil rom starte opptaket når moderator kommer inn.";
$string['tutoomname'] = "Navn";
$string['mod_form_block_room'] = "Aktivitet/rominnstillinger";
$string['mod_form_field_welcome'] = "Velkomstmelding";
$string['mod_form_field_welcome_default_message'] = "Velkommen til klassen. Still gjerne spørsmål.";
$string['mod_form_field_record'] = "Rom kan tas opp";
$string['mod_form_field_room_type'] = "Romtype";
$string['mod_form_field_room_type_help'] = "Velg romtype for denne Tutoom.";
$string['room_type_room_with_recordings'] = "Rom med opptak";
$string['room_type_room_only'] = "Kun rom";
$string['room_type_recording_only'] = "Kun opptak";
$string['view_conference_action_start'] = "Start rom";
$string['view_conference_action_join'] = "Bli med på rommet";
$string['view_conference_action_end'] = "Sluttrom";
$string['view_message_room_not_initalized'] = "Rommet har ikke startet.";
$string['view_message_room_ended'] = "Dette rommet er avsluttet. Last inn siden på nytt for å fortsette";
$string['view_message_conference_in_this_room'] = "i dette rommet";
$string['view_message_session_status_on'] = "PÅ NETT";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Startet kl";
$string['view_message_session_has_user'] = "Det er det";
$string['view_message_session_has_users'] = "Det finnes";
$string['view_message_user'] = "bruker";
$string['view_message_users'] = "brukere";
$string['view_section_title_recordings'] = "Opptak";
$string['view_message_norecordings'] = "Det er ingen opptak å vise.";
$string['recording_title'] = "Opptak";
$string['recording_playback'] = "Avspilling";
$string['recording_name'] = "Navn";
$string['recording_description'] = "Beskrivelse";
$string['recording_preview'] = "Forhåndsvisning";
$string['recording_date'] = "Dato";
$string['recording_time'] = "Tid";
$string['recording_duration'] = "Varighet";
$string['recording_toolbar'] = "Verktøylinje";
$string['recording_text_empty'] = "Ingen opptak så langt...";
$string['recording_loading'] = "Henter opptak...";
$string['message_loading'] = "Vennligst vent...";
$string['pagination_previous'] = "Tidligere";
$string['pagination_next'] = "Neste";
$string['view_page_error_general'] = "Det er ingen ledige rom. Kontakt administratoren din for mer informasjon.";
$string['view_page_error_empty_credentials'] = "Du må konfigurere Tutoom API-legitimasjon, mer informasjon her: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "For å opprette og bli med i Tutoom-rom, må brukerdata utveksles med serveren.";
$string['privacy:metadata:tutoom:fullname'] = "Fullt navn på brukeren som har tilgang til Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Kursnavnet til brukeren";
$string['privacy:metadata:tutoom:role'] = "Rollen til brukeren som har tilgang til Moodle.";
