 
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
$string['modulename_help'] = "Plugin Tutoom vám umožňuje vytvářet z Moodle tabule v reálném čase pro distanční vzdělávání.";
$string['message_account_id_not_set'] = "Musíte nastavit ID účtu organizace Tutoom v sekci obecných nastavení pluginu.";
$string['missingidandcmid'] = "Tutoom ID je nesprávné. Přejděte prosím na svůj kurz a vyberte svou aktivitu, abyste správně vstoupili do Tutoomu.";
$string['index_error_noinstances'] = "Neexistují žádné instance Tutoom";
$string['tutoom:joinasmoderator'] = "Připojte se jako moderátor do místnosti Tutoom";
$string['tutoom:addinstance'] = "Přidat novou místnost/aktivitu Tutoom";
$string['config_api_secret_key'] = "Tajný klíč API Tutoom";
$string['config_api_secret_key_description'] = "Tajný klíč API vašeho účtu Tutoom";
$string['config_general'] = "Obecná konfigurace";
$string['config_general_description'] = "Tato nastavení se používají <b>vždy</b>}";
$string['config_activity_logs'] = "Pište protokoly aktivit";
$string['config_activity_logs_description'] = "Tato možnost ukládá protokoly, když je místnost vytvořena, odstraněna a uživatel se k místnosti připojí.";
$string['config_recording'] = "Záznam";
$string['config_recording_description'] = "Tato nastavení jsou specifická pro jednotlivé funkce";
$string['config_recording_enabled'] = "Ve výchozím nastavení je nahrávání povoleno";
$string['config_recording_enabled_description'] = "Ve výchozím nastavení lze nahrávat místnost. Lze upravit v nastavení aktivity Tuttom";
$string['config_recording_auto_start'] = "Automatické spuštění nahrávání";
$string['config_recording_auto_start_description'] = "Je-li tato možnost zaškrtnuta, místnosti se začnou nahrávat, jakmile vstoupí moderátor.";
$string['tutoomname'] = "Jméno";
$string['mod_form_block_room'] = "Nastavení aktivity/místnosti";
$string['mod_form_field_welcome'] = "Uvítací zpráva";
$string['mod_form_field_welcome_default_message'] = "Vítejte ve třídě. Neváhejte se zeptat na jakoukoli otázku.";
$string['mod_form_field_record'] = "Pokoj lze nahrávat";
$string['mod_form_field_room_type'] = "Typ pokoje";
$string['mod_form_field_room_type_help'] = "Vyberte typ pokoje pro tento Tutoom.";
$string['room_type_room_with_recordings'] = "Místnost s nahrávkami";
$string['room_type_room_only'] = "Pouze pokoj";
$string['room_type_recording_only'] = "Pouze nahrávání";
$string['view_conference_action_start'] = "Počáteční místnost";
$string['view_conference_action_join'] = "Připojte se k místnosti";
$string['view_conference_action_end'] = "Koncová místnost";
$string['view_message_room_not_initalized'] = "Místnost se nespustila.";
$string['view_message_room_ended'] = "Tato místnost skončila. Chcete-li pokračovat, znovu načtěte stránku";
$string['view_message_conference_in_this_room'] = "v této místnosti";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Začátek v";
$string['view_message_session_has_user'] = "Existuje";
$string['view_message_session_has_users'] = "Existují";
$string['view_message_user'] = "uživatel";
$string['view_message_users'] = "uživatelů";
$string['view_section_title_recordings'] = "Nahrávky";
$string['view_message_norecordings'] = "Nejsou k dispozici žádné záznamy k zobrazení.";
$string['recording_title'] = "Nahrávky";
$string['recording_playback'] = "Přehrávání";
$string['recording_name'] = "Jméno";
$string['recording_description'] = "Popis";
$string['recording_preview'] = "Náhled";
$string['recording_date'] = "Datum";
$string['recording_time'] = "Čas";
$string['recording_duration'] = "Trvání";
$string['recording_toolbar'] = "Panel nástrojů";
$string['recording_text_empty'] = "Zatím žádné nahrávky...";
$string['recording_loading'] = "Načítání nahrávek...";
$string['message_loading'] = "Čekejte prosím...";
$string['pagination_previous'] = "Předchozí";
$string['pagination_next'] = "Další";
$string['view_page_error_general'] = "Nejsou k dispozici žádné pokoje. Další informace vám poskytne správce.";
$string['view_page_error_empty_credentials'] = "Musíte nakonfigurovat přihlašovací údaje Tutoom API, více informací zde: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Aby bylo možné vytvořit a připojit se k místnostem Tutoom, musí být uživatelská data vyměněna se serverem.";
$string['privacy:metadata:tutoom:fullname'] = "Celé jméno uživatele přistupujícího do Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Název kurzu uživatele";
$string['privacy:metadata:tutoom:role'] = "Role uživatele přistupujícího k Moodle. ";