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
$string['modulename_help'] = "Wtyczka Tutoom umożliwia tworzenie w Moodle sal z tablicami w czasie rzeczywistym do nauki na odległość.";
$string['message_account_id_not_set'] = "Musisz ustawić identyfikator konta Tutoom swojej organizacji w sekcji ogólnych ustawień wtyczki.";
$string['missingidandcmid'] = "Identyfikator Tutoom jest nieprawidłowy. Przejdź do swojego kursu i wybierz aktywność, aby poprawnie wprowadzić Tutoom.";
$string['index_error_noinstances'] = "Brak wystąpień Tutoom";
$string['tutoom:joinasmoderator'] = "Dołącz jako moderator do sali Tutoom";
$string['tutoom:addinstance'] = "Dodaj nową salę/aktywność Tutoom";
$string['config_api_secret_key'] = "Klucz tajny API Tutoom";
$string['config_api_secret_key_description'] = "Klucz tajny API Twojego konta Tutoom";
$string['config_general'] = "Konfiguracja ogólna";
$string['config_general_description'] = "Te ustawienia są <b>zawsze</b> używane";
$string['config_activity_logs'] = "Zapisz dzienniki aktywności";
$string['config_activity_logs_description'] = "Ta opcja zapisuje dzienniki, gdy pokój jest tworzony, usuwany i użytkownik dołącza do pokoju.";
$string['config_recording'] = "Nagrywanie";
$string['config_recording_description'] = "Te ustawienia są specyficzne dla funkcji";
$string['config_recording_enabled'] = "Nagrywanie jest domyślnie włączone";
$string['config_recording_enabled_description'] = "Pokój może być nagrywany domyślnie. Można go edytować w ustawieniach aktywności Tuttom";
$string['config_recording_auto_start'] = "Automatyczne rozpoczęcie nagrywania";
$string['config_recording_auto_start_description'] = "Jeśli opcja jest zaznaczona, pokoje rozpoczną nagrywanie, gdy moderator wejdzie.";
$string['tutoomname'] = "Nazwa";
$string['mod_form_block_room'] = "Ustawienia aktywności/pokoju";
$string['mod_form_field_welcome'] = "Wiadomość powitalna";
$string['mod_form_field_welcome_default_message'] = "Witamy na zajęciach. Możesz zadać dowolne pytanie.";
$string['mod_form_field_record'] = "Pokój można nagrywać";
$string['mod_form_field_room_type'] = "Typ pokoju";
$string['mod_form_field_room_type_help'] = "Wybierz typ pokoju dla tego Tutoom.";
$string['room_type_room_with_recordings'] = "Pokój z nagraniami";
$string['room_type_room_only'] = "Tylko pokój";
$string['room_type_recording_only'] = "Tylko nagrywanie";
$string['view_conference_action_start'] = "Rozpocznij pokój";
$string['view_conference_action_join'] = "Dołącz do pokoju";
$string['view_conference_action_end'] = "Zakończ pokój";
$string['view_message_room_not_initalized'] = "Pokój nie został rozpoczęty.";
$string['view_message_room_ended'] = "Ten pokój został zakończony. Aby kontynuować, odśwież stronę";
$string['view_message_conference_in_this_room'] = "w tym pokoju";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Rozpoczęto o";
$string['view_message_session_has_user'] = "Jest";
$string['view_message_session_has_users'] = "Jest";
$string['view_message_user'] = "użytkownik";
$string['view_message_users'] = "użytkownicy";
$string['view_section_title_recordings'] = "Nagrania";
$string['view_message_norecordings'] = "Brak nagrań do wyświetlenia.";
$string['recording_title'] = "Nagrania";
$string['recording_playback'] = "Odtwarzanie";
$string['recording_name'] = "Nazwa";
$string['recording_description'] = "Opis";
$string['recording_preview'] = "Podgląd";
$string['recording_date'] = "Data";
$string['recording_time'] = "Godzina";
$string['recording_duration'] = "Czas trwania";
$string['recording_toolbar'] = "Pasek narzędzi";
$string['recording_text_empty'] = "Brak nagrań do tej pory...";
$string['recording_loading'] = "Pobieranie nagrań...";
$string['message_loading'] = "Proszę czekać...";
$string['pagination_previous'] = "Poprzedni";
$string['pagination_next'] = "Następny";
$string['view_page_error_general'] = "Brak dostępnych pokoi. Aby uzyskać więcej informacji, skontaktuj się z administratorem.";
$string['view_page_error_empty_credentials'] = "Musisz skonfigurować dane uwierzytelniające interfejsu API Tutoom, więcej informacji znajdziesz tutaj: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Aby tworzyć i dołączać do pokoi Tutoom, dane użytkownika muszą zostać wymienione z serwerem.";
$string['privacy:metadata:tutoom:fullname'] = "Pełna nazwa użytkownika uzyskującego dostęp do Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Nazwa kursu użytkownika";
$string['privacy:metadata:tutoom:role'] = "Rola użytkownika uzyskującego dostęp do Moodle.";
