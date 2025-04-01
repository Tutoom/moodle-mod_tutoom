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
$string['modulename_help'] = "A Tutoom beépülő modul segítségével a Moodle valós idejű táblatermeiből hozhat létre távoktatási célokat.";
$string['message_account_id_not_set'] = "Be kell állítania szervezete Tutoom-fiókjának azonosítóját az általános bővítménybeállítások részben.";
$string['missingidandcmid'] = "A Tutoom azonosító hibás. Kérjük, lépjen a kurzusára, és válassza ki a tevékenységét, hogy helyesen lépjen be a Tutoomba.";
$string['index_error_noinstances'] = "Tutoomra nincs példa";
$string['tutoom:joinasmoderator'] = "Csatlakozz moderátorként egy Tutoom szobához";
$string['tutoom:addinstance'] = "Új Tutoom szoba/tevékenység hozzáadása";
$string['config_api_secret_key'] = "Tutoom API titkos kulcs";
$string['config_api_secret_key_description'] = "A Tutoom-fiókod API titkos kulcsa";
$string['config_general'] = "Általános konfiguráció";
$string['config_general_description'] = "Ezeket a beállításokat a rendszer <b>mindig</b> használja";
$string['config_activity_logs'] = "Tevékenységi naplók írása";
$string['config_activity_logs_description'] = "Ez az opció naplókat ment el egy szoba létrehozásakor, törlésekor és a felhasználó csatlakozásakor.";
$string['config_recording'] = "Felvétel";
$string['config_recording_description'] = "Ezek a beállítások szolgáltatásspecifikusak";
$string['config_recording_enabled'] = "A rögzítés alapértelmezés szerint engedélyezve van";
$string['config_recording_enabled_description'] = "A szoba alapértelmezés szerint rögzíthető. A Tuttom tevékenység beállításaiban szerkeszthető";
$string['config_recording_auto_start'] = "Felvétel automatikus indítása";
$string['config_recording_auto_start_description'] = "Ha ez az opció be van jelölve, a szobák a moderátor belépésekor megkezdik a rögzítést.";
$string['tutoomname'] = "Név";
$string['mod_form_block_room'] = "Tevékenység/Szobabeállítások";
$string['mod_form_field_welcome'] = "Üdvözlő üzenet";
$string['mod_form_field_welcome_default_message'] = "Üdvözöljük az osztályban. Nyugodtan kérdezzen.";
$string['mod_form_field_record'] = "A szoba rögzíthető";
$string['mod_form_field_room_type'] = "Szoba típusa";
$string['mod_form_field_room_type_help'] = "Válassza ki a szobatípust ehhez a Tutoomhoz.";
$string['room_type_room_with_recordings'] = "Szoba felvételekkel";
$string['room_type_room_only'] = "Csak szoba";
$string['room_type_recording_only'] = "Csak felvétel";
$string['view_conference_action_start'] = "Kezdő szoba";
$string['view_conference_action_join'] = "Csatlakozz a szobához";
$string['view_conference_action_end'] = "Végszoba";
$string['view_message_room_not_initalized'] = "A szoba nem indult el.";
$string['view_message_room_ended'] = "Ez a szoba véget ért. A folytatáshoz töltse be újra az oldalt";
$string['view_message_conference_in_this_room'] = "ebben a szobában";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "-kor kezdődött";
$string['view_message_session_has_user'] = "Van";
$string['view_message_session_has_users'] = "Vannak";
$string['view_message_user'] = "felhasználó";
$string['view_message_users'] = "felhasználókat";
$string['view_section_title_recordings'] = "Felvételek";
$string['view_message_norecordings'] = "Nincs megjeleníthető felvétel.";
$string['recording_title'] = "Felvételek";
$string['recording_playback'] = "Lejátszás";
$string['recording_name'] = "Név";
$string['recording_description'] = "Leírás";
$string['recording_preview'] = "Előnézet";
$string['recording_date'] = "Dátum";
$string['recording_time'] = "Idő";
$string['recording_duration'] = "Időtartam";
$string['recording_toolbar'] = "Eszköztár";
$string['recording_text_empty'] = "Egyelőre nincs felvétel...";
$string['recording_loading'] = "Felvételek lekérése...";
$string['message_loading'] = "Kérem, várjon...";
$string['pagination_previous'] = "Előző";
$string['pagination_next'] = "Következő";
$string['view_page_error_general'] = "Nincsenek szabad szobák. További információért forduljon rendszergazdájához.";
$string['view_page_error_empty_credentials'] = "Be kell állítania a Tutoom API hitelesítő adatait, további információ itt: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "A Tutoom szobák létrehozásához és azokhoz való csatlakozáshoz felhasználói adatokat kell kicserélni a szerverrel.";
$string['privacy:metadata:tutoom:fullname'] = "A Moodle-t elérő felhasználó teljes neve.";
$string['privacy:metadata:tutoom:coursename'] = "A felhasználó tanfolyam neve";
$string['privacy:metadata:tutoom:role'] = "A Moodle-t elérő felhasználó szerepe.";
