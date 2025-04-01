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
$string['modulename_help'] = "Dodatak Tutoom omogućuje vam stvaranje soba za bijelu ploču u stvarnom vremenu unutar Moodlea za obrazovanje na daljinu.";
$string['message_account_id_not_set'] = "Morate postaviti ID Tutoom računa svoje organizacije u odjeljku s općim postavkama dodatka.";
$string['missingidandcmid'] = "Tutoom ID je netočan. Molimo, idite na svoj tečaj i odaberite svoju aktivnost kako biste ispravno ušli u Tutoom.";
$string['index_error_noinstances'] = "Ne postoje primjerci Tutooma";
$string['tutoom:joinasmoderator'] = "Pridružite se kao moderator Tutoom sobe";
$string['tutoom:addinstance'] = "Dodajte novu Tutoom sobu/aktivnost";
$string['config_api_secret_key'] = "Tutoom API tajni ključ";
$string['config_api_secret_key_description'] = "API tajni ključ vašeg Tutoom računa";
$string['config_general'] = "Opća konfiguracija";
$string['config_general_description'] = "Ove se postavke <b>uvijek</b> koriste";
$string['config_activity_logs'] = "Pišite zapisnike aktivnosti";
$string['config_activity_logs_description'] = "Ova opcija sprema zapise kada se soba stvori, izbriše i kada se korisnik pridruži sobi.";
$string['config_recording'] = "Snimanje";
$string['config_recording_description'] = "Ove su postavke specifične za značajku";
$string['config_recording_enabled'] = "Snimanje je omogućeno prema zadanim postavkama";
$string['config_recording_enabled_description'] = "Soba se može snimati prema zadanim postavkama. Može se uređivati u postavkama aktivnosti Tuttom";
$string['config_recording_auto_start'] = "Automatski početak snimanja";
$string['config_recording_auto_start_description'] = "Ako je opcija označena, sobe će početi snimati kada moderator uđe.";
$string['tutoomname'] = "Ime";
$string['mod_form_block_room'] = "Postavke aktivnosti/sobe";
$string['mod_form_field_welcome'] = "Poruka dobrodošlice";
$string['mod_form_field_welcome_default_message'] = "Dobrodošli u razred. Slobodno postavite bilo koje pitanje.";
$string['mod_form_field_record'] = "Soba se može snimati";
$string['mod_form_field_room_type'] = "Tip sobe";
$string['mod_form_field_room_type_help'] = "Odaberite vrstu sobe za ovaj Tutoom.";
$string['room_type_room_with_recordings'] = "Soba sa snimcima";
$string['room_type_room_only'] = "Samo soba";
$string['room_type_recording_only'] = "Samo snimanje";
$string['view_conference_action_start'] = "Početna soba";
$string['view_conference_action_join'] = "Pridružite se sobi";
$string['view_conference_action_end'] = "Krajnja soba";
$string['view_message_room_not_initalized'] = "Soba nije počela.";
$string['view_message_room_ended'] = "Ova soba je završila. Ponovno učitajte stranicu za nastavak";
$string['view_message_conference_in_this_room'] = "u ovoj sobi";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Započelo u";
$string['view_message_session_has_user'] = "Postoji";
$string['view_message_session_has_users'] = "postoje";
$string['view_message_user'] = "korisnik";
$string['view_message_users'] = "korisnika";
$string['view_section_title_recordings'] = "Snimke";
$string['view_message_norecordings'] = "Nema snimaka za prikaz.";
$string['recording_title'] = "Snimke";
$string['recording_playback'] = "Reprodukcija";
$string['recording_name'] = "Ime";
$string['recording_description'] = "Opis";
$string['recording_preview'] = "Pregled";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Vrijeme";
$string['recording_duration'] = "Trajanje";
$string['recording_toolbar'] = "Alatna traka";
$string['recording_text_empty'] = "Za sada nema snimanja...";
$string['recording_loading'] = "Dohvaćanje snimaka...";
$string['message_loading'] = "Molimo pričekajte...";
$string['pagination_previous'] = "Prethodno";
$string['pagination_next'] = "Sljedeći";
$string['view_page_error_general'] = "Nema slobodnih soba. Molimo kontaktirajte svog administratora za više informacija.";
$string['view_page_error_empty_credentials'] = "Morate konfigurirati Tutoom API vjerodajnice, više informacija ovdje: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Kako biste kreirali i pridružili se Tutoom sobama, potrebno je razmijeniti korisničke podatke s poslužiteljem.";
$string['privacy:metadata:tutoom:fullname'] = "Puno ime korisnika koji pristupa Moodleu.";
$string['privacy:metadata:tutoom:coursename'] = "Naziv tečaja korisnika";
$string['privacy:metadata:tutoom:role'] = "Uloga korisnika koji pristupa Moodleu.";
