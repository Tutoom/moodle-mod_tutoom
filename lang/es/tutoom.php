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
$string['modulename_help'] = "El plugin Tutoom te permite crear salas de pizarra en tiempo real desde Moodle para educación a distancia.";
$string['message_account_id_not_set'] = "Debes configurar el ID de tu cuenta de Tutoom en la sección de configuración general del plugin.";
$string['missingidandcmid'] = "El ID de Tutoom es incorrecto. Ve a tu curso y selecciona tu actividad para acceder correctamente a Tutoom.";
$string['index_error_noinstances'] = "No hay instancias de Tutoom.";
$string['tutoom:joinasmoderator'] = "Únete como moderador a una sala de Tutoom.";
$string['tutoom:addinstance'] = "Añadir una nueva sala/actividad de Tutoom.";
$string['config_api_secret_key'] = "Clave secreta de la API de Tutoom.";
$string['config_api_secret_key_description'] = "La clave secreta de la API de tu cuenta de Tutoom";
$string['config_general'] = "Configuración general";
$string['config_general_description'] = "Estas configuraciones se usan <b>siempre</b>";
$string['config_activity_logs'] = "Escribir registros de actividad";
$string['config_activity_logs_description'] = "Esta opción guarda registros cuando se crea o elimina una sala, y cuando un usuario se une a ella.";
$string['config_recording'] = "Grabación";
$string['config_recording_description'] = "Estas configuraciones son específicas de cada función.";
$string['config_recording_enabled'] = "Grabación habilitada por defecto.";
$string['config_recording_enabled_description'] = "La sala se puede grabar por defecto. Se puede editar en la configuración de actividad de Tutoom.";
$string['config_recording_auto_start'] = "Inicio automático de grabación";
$string['config_recording_auto_start_description'] = "Si la opción está marcada, las salas comenzarán a grabar cuando el moderador entre.";
$string['tutoomname'] = "Nombre";
$string['mod_form_block_room'] = "Configuración de la actividad/sala";
$string['mod_form_field_welcome'] = "Mensaje de bienvenida";
$string['mod_form_field_welcome_default_message'] = "Bienvenido a la clase. No dudes en hacer cualquier pregunta.";
$string['mod_form_field_record'] = "La sala se puede grabar.";
$string['mod_form_field_room_type'] = "Tipo de sala";
$string['mod_form_field_room_type_help'] = "Selecciona el tipo de sala para este Tutoom.";
$string['room_type_room_with_recordings'] = "Sala con grabaciones";
$string['room_type_room_only'] = "Solo sala";
$string['room_type_recording_only'] = "Solo grabación";
$string['view_conference_action_start'] = "Iniciar sala";
$string['view_conference_action_join'] = "Unirse a la sala";
$string['view_conference_action_end'] = "Finalizar sala";
$string['view_message_room_not_initalized'] = "La sala no ha comenzado.";
$string['view_message_room_ended'] = "Esta sala ha finalizado. Por favor, recarga la página para continuar.";
$string['view_message_conference_in_this_room'] = "en esta sala";
$string['view_message_session_status_on'] = "EN LÍNEA";
$string['view_message_session_status_off'] = "DESCONECTADO";
$string['view_message_session_started_at'] = "Comenzó a las";
$string['view_message_session_has_user'] = "Hay";
$string['view_message_session_has_users'] = "Hay";
$string['view_message_user'] = "usuario";
$string['view_message_users'] = "usuarios";
$string['view_section_title_recordings'] = "Grabaciones";
$string['view_message_norecordings'] = "No hay grabaciones para mostrar.";
$string['recording_title'] = "Grabaciones";
$string['recording_playback'] = "Reproducción";
$string['recording_name'] = "Nombre";
$string['recording_description'] = "Descripción";
$string['recording_preview'] = "Vista previa";
$string['recording_date'] = "Fecha";
$string['recording_time'] = "Hora";
$string['recording_duration'] = "Duración";
$string['recording_toolbar'] = "Barra de herramientas";
$string['recording_text_empty'] = "No hay grabaciones hasta ahora...";
$string['recording_loading'] = "Obteniendo grabaciones...";
$string['message_loading'] = "Espere...";
$string['pagination_previous'] = "Anterior";
$string['pagination_next'] = "Siguiente";
$string['view_page_error_general'] = "No hay salas disponibles. Para más información, contacta con tu administrador.";
$string['view_page_error_empty_credentials'] = "Debes configurar las credenciales de la API de Tutoom. Más información aquí: https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Para crear y unirse a salas de Tutoom, es necesario intercambiar datos de usuario con el servidor.";
$string['privacy:metadata:tutoom:fullname'] = "El nombre completo del usuario que accede a Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "El nombre del curso del usuario.";
$string['privacy:metadata:tutoom:role'] = "El rol del usuario que accede a Moodle.";
