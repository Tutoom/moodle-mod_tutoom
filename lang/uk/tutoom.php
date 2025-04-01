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
$string['modulename_help'] = "Плагін Tutoom дозволяє створювати в Moodle кімнати для дошок у реальному часі для дистанційної освіти.";
$string['message_account_id_not_set'] = "Вам потрібно встановити ідентифікатор облікового запису вашої організації Tutoom у розділі загальних налаштувань плагіна.";
$string['missingidandcmid'] = "Ідентифікатор Tutoom неправильний. Будь ласка, перейдіть до свого курсу та виберіть свою діяльність, щоб правильно увійти в Tutoom.";
$string['index_error_noinstances'] = "Немає екземплярів Tutoom";
$string['tutoom:joinasmoderator'] = "Приєднуйтесь як модератор кімнати Tutoom";
$string['tutoom:addinstance'] = "Додайте нову кімнату/діяльність Tutoom";
$string['config_api_secret_key'] = "Секретний ключ API Tutoom";
$string['config_api_secret_key_description'] = "Секретний ключ API вашого облікового запису Tutoom";
$string['config_general'] = "Загальна конфігурація";
$string['config_general_description'] = "Ці налаштування <b>завжди</b> використовуються";
$string['config_activity_logs'] = "Пишіть журнали активності";
$string['config_activity_logs_description'] = "Ця опція зберігає журнали, коли кімната створюється, видаляється та користувач приєднується до кімнати.";
$string['config_recording'] = "Запис";
$string['config_recording_description'] = "Ці налаштування залежать від окремих функцій";
$string['config_recording_enabled'] = "Запис увімкнено за замовчуванням";
$string['config_recording_enabled_description'] = "Кімнату можна записати за замовчуванням. Можна редагувати в налаштуваннях активності Tuttom";
$string['config_recording_auto_start'] = "Автозапуск запису";
$string['config_recording_auto_start_description'] = "Якщо опцію позначено, кімнати почнуть записувати, коли увійде модератор.";
$string['tutoomname'] = "Ім'я";
$string['mod_form_block_room'] = "Налаштування діяльності/кімнати";
$string['mod_form_field_welcome'] = "Вітальне повідомлення";
$string['mod_form_field_welcome_default_message'] = "Ласкаво просимо до класу. Не соромтеся задати будь-яке запитання.";
$string['mod_form_field_record'] = "Номер можна записувати";
$string['mod_form_field_room_type'] = "Тип кімнати";
$string['mod_form_field_room_type_help'] = "Виберіть тип приміщення для цього Tutoom.";
$string['room_type_room_with_recordings'] = "Кімната із записами";
$string['room_type_room_only'] = "Тільки кімната";
$string['room_type_recording_only'] = "Тільки запис";
$string['view_conference_action_start'] = "Початкова кімната";
$string['view_conference_action_join'] = "Приєднатися до кімнати";
$string['view_conference_action_end'] = "Кінцева кімната";
$string['view_message_room_not_initalized'] = "Кімната не розпочата.";
$string['view_message_room_ended'] = "Ця кімната закінчилася. Перезавантажте сторінку, щоб продовжити";
$string['view_message_conference_in_this_room'] = "в цій кімнаті";
$string['view_message_session_status_on'] = "ОНЛАЙН";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Розпочато о";
$string['view_message_session_has_user'] = "Є";
$string['view_message_session_has_users'] = "Є";
$string['view_message_user'] = "користувача";
$string['view_message_users'] = "користувачів";
$string['view_section_title_recordings'] = "Записи";
$string['view_message_norecordings'] = "Немає записів для показу.";
$string['recording_title'] = "Записи";
$string['recording_playback'] = "Відтворення";
$string['recording_name'] = "Ім'я";
$string['recording_description'] = "опис";
$string['recording_preview'] = "Попередній перегляд";
$string['recording_date'] = "Дата";
$string['recording_time'] = "час";
$string['recording_duration'] = "Тривалість";
$string['recording_toolbar'] = "Панель інструментів";
$string['recording_text_empty'] = "Поки немає записів...";
$string['recording_loading'] = "Отримання записів...";
$string['message_loading'] = "Будь ласка, зачекайте...";
$string['pagination_previous'] = "Попередній";
$string['pagination_next'] = "Далі";
$string['view_page_error_general'] = "Немає вільних номерів. Для отримання додаткової інформації зверніться до свого адміністратора.";
$string['view_page_error_empty_credentials'] = "Вам потрібно налаштувати облікові дані Tutoom API, більше інформації тут: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Щоб створити кімнати Tutoom і приєднатися до них, потрібно обмінятися даними користувача з сервером.";
$string['privacy:metadata:tutoom:fullname'] = "Повне ім'я користувача, який отримує доступ до Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Ім'я курсу користувача";
$string['privacy:metadata:tutoom:role'] = "Роль користувача, який отримує доступ до Moodle. ";