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
$string['modulename_help'] = "Met de Tutoom-plug-in kunt u realtime whiteboardruimtes maken voor afstandsonderwijs vanuit Moodle.";
$string['message_account_id_not_set'] = "U moet uw Tutoom-account-id van uw organisatie instellen in de algemene plugin-instellingen.";
$string['missingidandcmid'] = "Tutoom-ID is onjuist. Ga naar uw cursus en selecteer uw activiteit om Tutoom correct in te voeren.";
$string['index_error_noinstances'] = "Er zijn geen instanties van Tutoom";
$string['tutoom:joinasmoderator'] = "Word moderator van een Tutoom-ruimte";
$string['tutoom:addinstance'] = "Voeg een nieuwe Tutoom-ruimte/activiteit toe";
$string['config_api_secret_key'] = "Tutoom API-geheime sleutel";
$string['config_api_secret_key_description'] = "De geheime API-sleutel van uw Tutoom-account";
$string['config_general'] = "Algemene configuratie";
$string['config_general_description'] = "Deze instellingen worden <b>altijd</b> gebruikt";
$string['config_activity_logs'] = "Activiteitenlogboeken schrijven";
$string['config_activity_logs_description'] = "Deze optie slaat logs op wanneer een kamer wordt gemaakt, verwijderd en de gebruiker zich bij de kamer voegt.";
$string['config_recording'] = "Opnemen";
$string['config_recording_description'] = "Deze instellingen zijn functiespecifiek";
$string['config_recording_enabled'] = "Opnemen standaard ingeschakeld";
$string['config_recording_enabled_description'] = "Kamer kan standaard worden opgenomen. Kan worden bewerkt in de Tuttom-activiteiteninstellingen";
$string['config_recording_auto_start'] = "Automatische start van opname";
$string['config_recording_auto_start_description'] = "Als de optie is aangevinkt, beginnen de kamers met opnemen zodra de moderator binnenkomt.";
$string['tutoomname'] = "Naam";
$string['mod_form_block_room'] = "Activiteit/kamerinstellingen";
$string['mod_form_field_welcome'] = "Welkomstbericht";
$string['mod_form_field_welcome_default_message'] = "Welkom bij de klas. Stel gerust vragen.";
$string['mod_form_field_record'] = "Kamer kan worden opgenomen";
$string['mod_form_field_room_type'] = "Kamertype";
$string['mod_form_field_room_type_help'] = "Selecteer het kamertype voor deze Tutoom.";
$string['room_type_room_with_recordings'] = "Kamer met opnamen";
$string['room_type_room_only'] = "Alleen kamer";
$string['room_type_recording_only'] = "Alleen opnemen";
$string['view_conference_action_start'] = "Start kamer";
$string['view_conference_action_join'] = "Doe mee aan kamer";
$string['view_conference_action_end'] = "Einde kamer";
$string['view_message_room_not_initalized'] = "De kamer is niet gestart.";
$string['view_message_room_ended'] = "Deze kamer is afgelopen. Laad de pagina opnieuw om door te gaan";
$string['view_message_conference_in_this_room'] = "in deze kamer";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Gestart om";
$string['view_message_session_has_user'] = "Er is";
$string['view_message_session_has_users'] = "Er zijn";
$string['view_message_user'] = "gebruiker";
$string['view_message_users'] = "gebruikers";
$string['view_section_title_recordings'] = "Opnames";
$string['view_message_norecordings'] = "Er zijn geen opnames om te tonen.";
$string['recording_title'] = "Opnames";
$string['recording_playback'] = "Afspelen";
$string['recording_name'] = "Naam";
$string['recording_description'] = "Beschrijving";
$string['recording_preview'] = "Preview";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Tijd";
$string['recording_duration'] = "Duur";
$string['recording_toolbar'] = "Werkbalk";
$string['recording_text_empty'] = "Nog geen opnames...";
$string['recording_loading'] = "Opnames ophalen...";
$string['message_loading'] = "Even geduld...";
$string['pagination_previous'] = "Vorige";
$string['pagination_next'] = "Volgende";
$string['view_page_error_general'] = "Er zijn geen kamers beschikbaar. Neem contact op met uw beheerder voor meer informatie.";
$string['view_page_error_empty_credentials'] = "U moet Tutoom API-referenties configureren, meer informatie hier: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Om Tutoom-kamers te maken en eraan deel te nemen, moeten gebruikersgegevens worden uitgewisseld met de server.";
$string['privacy:metadata:tutoom:fullname'] = "De volledige naam van de gebruiker die toegang heeft tot Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "De cursusnaam van de gebruiker";
$string['privacy:metadata:tutoom:role'] = "De rol van de gebruiker die toegang heeft tot Moodle.";
