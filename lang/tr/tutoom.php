 
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
$string['modulename_help'] = "Tutoom eklentisi, uzaktan eğitim için Moodle gerçek zamanlı beyaz tahta odaları oluşturmanıza olanak tanır.";
$string['message_account_id_not_set'] = "Genel eklenti ayarları bölümünde kuruluşunuzun Tutoom hesap kimliğini ayarlamanız gerekir.";
$string['missingidandcmid'] = "Tutoom kimliği yanlış. Lütfen kursunuza gidin ve Tutoom'u doğru şekilde girmek için etkinliğinizi seçin.";
$string['index_error_noinstances'] = "Tutoom örneği yok";
$string['tutoom:joinasmoderator'] = "Bir Tutoom odasına moderatör olarak katılın";
$string['tutoom:addinstance'] = "Yeni bir Tutoom odası/etkinliği ekleyin";
$string['config_api_secret_key'] = "Tutoom API gizli anahtarı";
$string['config_api_secret_key_description'] = "Tutoom hesabınızın API gizli anahtarı";
$string['config_general'] = "Genel yapılandırma";
$string['config_general_description'] = "Bu ayarlar <b>her zaman</b> kullanılır";
$string['config_activity_logs'] = "Etkinlik günlüklerini yaz";
$string['config_activity_logs_description'] = "Bu seçenek, bir oda oluşturulduğunda, silindiğinde ve kullanıcı odaya katıldığında günlükleri kaydeder.";
$string['config_recording'] = "Kayıt";
$string['config_recording_description'] = "Bu ayarlar özellik özelindedir";
$string['config_recording_enabled'] = "Kayıt varsayılan olarak etkindir";
$string['config_recording_enabled_description'] = "Oda varsayılan olarak kaydedilebilir. Tuttom etkinlik ayarlarında düzenlenebilir";
$string['config_recording_auto_start'] = "Kayıt otomatik başlatma";
$string['config_recording_auto_start_description'] = "Seçenek işaretliyse, moderatör girdiğinde odalar kayda başlayacaktır.";
$string['tutoomname'] = "Ad";
$string['mod_form_block_room'] = "Etkinlik/Oda ayarları";
$string['mod_form_field_welcome'] = "Hoş geldiniz mesajı";
$string['mod_form_field_welcome_default_message'] = "Sınıfa hoş geldiniz. Herhangi bir soru sormaktan çekinmeyin.";
$string['mod_form_field_record'] = "Oda kaydedilebilir";
$string['mod_form_field_room_type'] = "Oda türü";
$string['mod_form_field_room_type_help'] = "Bu Tutoom için oda türünü seçin.";
$string['room_type_room_with_recordings'] = "Kayıtlı oda";
$string['room_type_room_only'] = "Sadece oda";
$string['room_type_recording_only'] = "Yalnızca kayıt";
$string['view_conference_action_start'] = "Odayı başlat";
$string['view_conference_action_join'] = "Odaya katıl";
$string['view_conference_action_end'] = "Odayı sonlandır";
$string['view_message_room_not_initalized'] = "Oda başlamadı.";
$string['view_message_room_ended'] = "Bu oda sona erdi. Devam etmek için lütfen sayfayı yeniden yükleyin";
$string['view_message_conference_in_this_room'] = "bu odada";
$string['view_message_session_status_on'] = "ÇEVRİMİÇİ";
$string['view_message_session_status_off'] = "ÇEVRİMDIŞI";
$string['view_message_session_started_at'] = "Başlangıç tarihi";
$string['view_message_session_has_user'] = "Var";
$string['view_message_session_has_users'] = "Var";
$string['view_message_user'] = "Kullanıcı";
$string['view_message_users'] = "Kullanıcılar";
$string['view_section_title_recordings'] = "Kayıtlar";
$string['view_message_norecordings'] = "Gösterilecek kayıt yok.";
$string['recording_title'] = "Kayıtlar";
$string['recording_playback'] = "Oynatma";
$string['recording_name'] = "Ad";
$string['recording_description'] = "Açıklama";
$string['recording_preview'] = "Önizleme";
$string['recording_date'] = "Tarih";
$string['recording_time'] = "Saat";
$string['recording_duration'] = "Süre";
$string['recording_toolbar'] = "Araç Çubuğu";
$string['recording_text_empty'] = "Şimdiye kadar kayıt yok...";
$string['recording_loading'] = "Kayıtlar alınıyor...";
$string['message_loading'] = "Lütfen bekleyin...";
$string['pagination_previous'] = "Önceki";
$string['pagination_next'] = "Sonraki";
$string['view_page_error_general'] = "Kullanılabilir oda yok. Daha fazla bilgi için lütfen yöneticinizle iletişime geçin.";
$string['view_page_error_empty_credentials'] = "Tutoom API kimlik bilgilerini yapılandırmanız gerekir, daha fazla bilgi için buraya bakın: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Tutoom odaları oluşturmak ve katılmak için, kullanıcı verilerinin sunucuyla paylaşılması gerekir.";
$string['privacy:metadata:tutoom:fullname'] = "Moodle'a erişen kullanıcının tam adı.";
$string['privacy:metadata:tutoom:coursename'] = "Kullanıcının ders adı";
$string['privacy:metadata:tutoom:role'] = "Moodle'a erişen kullanıcının rolü. ";