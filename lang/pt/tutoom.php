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
$string['modulename_help'] = "O plugin Tutoom permite que você crie salas de quadro branco em tempo real do Moodle para educação à distância.";
$string['message_account_id_not_set'] = "Você precisa definir o ID da conta Tutoom da sua organização na seção de configurações gerais do plugin.";
$string['missingidandcmid'] = "O ID Tutoom está incorreto. Por favor, vá para o seu curso e selecione sua atividade para entrar corretamente no Tutoom.";
$string['index_error_noinstances'] = "Não há instâncias do Tutoom";
$string['tutoom:joinasmoderator'] = "Entre como moderador em uma sala Tutoom";
$string['tutoom:addinstance'] = "Adicione uma nova sala/atividade Tutoom";
$string['config_api_secret_key'] = "Chave secreta da API Tutoom";
$string['config_api_secret_key_description'] = "A chave secreta da API da sua conta Tutoom";
$string['config_general'] = "Configuração geral";
$string['config_general_description'] = "Estas configurações são <b>sempre</b> usadas";
$string['config_activity_logs'] = "Gravar registros de atividade";
$string['config_activity_logs_description'] = "Esta opção salva registros quando uma sala é criada, excluída e o usuário entra na sala.";
$string['config_recording'] = "Gravação";
$string['config_recording_description'] = "Estas configurações são específicas do recurso";
$string['config_recording_enabled'] = "Gravação habilitada por padrão";
$string['config_recording_enabled_description'] = "A sala pode ser gravada por padrão. Pode ser editável nas configurações de atividade do Tuttom";
$string['config_recording_auto_start'] = "Início automático da gravação";
$string['config_recording_auto_start_description'] = "Se a opção estiver marcada, as salas começarão a gravar quando o moderador entrar.";
$string['tutoomname'] = "Nome";
$string['mod_form_block_room'] = "Configurações de atividade/sala";
$string['mod_form_field_welcome'] = "Mensagem de boas-vindas";
$string['mod_form_field_welcome_default_message'] = "Bem-vindo à aula. Sinta-se à vontade para fazer qualquer pergunta.";
$string['mod_form_field_record'] = "A sala pode ser gravada";
$string['mod_form_field_room_type'] = "Tipo de sala";
$string['mod_form_field_room_type_help'] = "Selecione o tipo de sala para este Tutoom.";
$string['room_type_room_with_recordings'] = "Sala com gravações";
$string['room_type_room_only'] = "Somente sala";
$string['room_type_recording_only'] = "Somente gravação";
$string['view_conference_action_start'] = "Iniciar sala";
$string['view_conference_action_join'] = "Entrar na sala";
$string['view_conference_action_end'] = "Finalizar sala";
$string['view_message_room_not_initalized'] = "A sala não começou.";
$string['view_message_room_ended'] = "Esta sala terminou. Recarregue a página para continuar";
$string['view_message_conference_in_this_room'] = "nesta sala";
$string['view_message_session_status_on'] = "ONLINE";
$string['view_message_session_status_off'] = "OFFLINE";
$string['view_message_session_started_at'] = "Começou em";
$string['view_message_session_has_user'] = "Há";
$string['view_message_session_has_users'] = "Há";
$string['view_message_user'] = "usuário";
$string['view_message_users'] = "usuários";
$string['view_section_title_recordings'] = "Gravações";
$string['view_message_norecordings'] = "Não há gravações para mostrar.";
$string['recording_title'] = "Gravações";
$string['recording_playback'] = "Reprodução";
$string['recording_name'] = "Nome";
$string['recording_description'] = "Descrição";
$string['recording_preview'] = "Visualizar";
$string['recording_date'] = "Data";
$string['recording_time'] = "Hora";
$string['recording_duration'] = "Duração";
$string['recording_toolbar'] = "Barra de ferramentas";
$string['recording_text_empty'] = "Nenhuma gravação até agora...";
$string['recording_loading'] = "Obtendo gravações...";
$string['message_loading'] = "Aguarde...";
$string['pagination_previous'] = "Anterior";
$string['pagination_next'] = "Próximo";
$string['view_page_error_general'] = "Não há salas disponíveis. Entre em contato com seu administrador para obter mais informações.";
$string['view_page_error_empty_credentials'] = "Você precisa configurar as credenciais da API do Tutoom, mais informações aqui: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Para criar e ingressar em salas do Tutoom, os dados do usuário precisam ser trocados com o servidor.";
$string['privacy:metadata:tutoom:fullname'] = "O nome completo do usuário que acessa o Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "O nome do curso do usuário";
$string['privacy:metadata:tutoom:role'] = "A função do usuário que acessa o Moodle.";
