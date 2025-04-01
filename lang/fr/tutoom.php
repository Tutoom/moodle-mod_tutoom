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
$string['modulename_help'] = "Le plugin Tutoom vous permet de créer des salles de tableau blanc en temps réel pour l'enseignement à distance depuis Moodle.";
$string['message_account_id_not_set'] = "Vous devez définir l'identifiant de votre compte Tutoom dans les paramètres généraux du plugin.";
$string['missingidandcmid'] = "L'identifiant Tutoom est incorrect. Veuillez accéder à votre cours et sélectionner votre activité pour accéder correctement à Tutoom.";
$string['index_error_noinstances'] = "Il n'y a aucune instance de Tutoom.";
$string['tutoom:joinasmoderator'] = "Rejoindre une salle Tutoom en tant que modérateur.";
$string['tutoom:addinstance'] = "Ajouter une nouvelle salle/activité Tutoom.";
$string['config_api_secret_key'] = "Clé secrète de l'API Tutoom.";
$string['config_api_secret_key_description'] = "La clé secrète API de votre compte Tutoom";
$string['config_general'] = "Configuration générale";
$string['config_general_description'] = "Ces paramètres sont <b>toujours</b> utilisés";
$string['config_activity_logs'] = "Écrire les journaux d'activité";
$string['config_activity_logs_description'] = "Cette option enregistre les journaux de création, de suppression et de connexion d'un salon.";
$string['config_recording'] = "Enregistrement";
$string['config_recording_description'] = "Ces paramètres sont spécifiques à chaque fonctionnalité.";
$string['config_recording_enabled'] = "Enregistrement activé par défaut";
$string['config_recording_enabled_description'] = "Le salon peut être enregistré par défaut. Modifiable dans les paramètres d'activité Tutoom.";
$string['config_recording_auto_start'] = "Démarrage automatique de l'enregistrement";
$string['config_recording_auto_start_description'] = "Si l'option est cochée, l'enregistrement des salles commencera dès l'arrivée du modérateur.";
$string['tutoomname'] = "Nom";
$string['mod_form_block_room'] = "Paramètres de l'activité/de la salle";
$string['mod_form_field_welcome'] = "Message de bienvenue";
$string['mod_form_field_welcome_default_message'] = "Bienvenue dans le cours. N'hésitez pas à poser vos questions.";
$string['mod_form_field_record'] = "La salle peut être enregistrée.";
$string['mod_form_field_room_type'] = "Type de salle";
$string['mod_form_field_room_type_help'] = "Sélectionnez le type de salle pour ce tutoriel.";
$string['room_type_room_with_recordings'] = "Salle avec enregistrements";
$string['room_type_room_only'] = "Salle uniquement";
$string['room_type_recording_only'] = "Enregistrement uniquement";
$string['view_conference_action_start'] = "Démarrer la salle";
$string['view_conference_action_join'] = "Rejoindre la salle";
$string['view_conference_action_end'] = "Fin de la salle";
$string['view_message_room_not_initalized'] = "La salle n'a pas commencé.";
$string['view_message_room_ended'] = "Cette salle est terminée. Veuillez actualiser la page pour continuer.";
$string['view_message_conference_in_this_room'] = "Dans cette salle";
$string['view_message_session_status_on'] = "EN LIGNE";
$string['view_message_session_status_off'] = "HORS LIGNE";
$string['view_message_session_started_at'] = "Débuté à";
$string['view_message_session_has_user'] = "Il y a";
$string['view_message_session_has_users'] = "Il y a";
$string['view_message_user'] = "utilisateur";
$string['view_message_users'] = "utilisateurs";
$string['view_section_title_recordings'] = "Enregistrements";
$string['view_message_norecordings'] = "Il n'y a aucun enregistrement à afficher.";
$string['recording_title'] = "Enregistrements";
$string['recording_playback'] = "Lecture";
$string['recording_name'] = "Nom";
$string['recording_description'] = "Description";
$string['recording_preview'] = "Aperçu";
$string['recording_date'] = "Date";
$string['recording_time'] = "Heure";
$string['recording_duration'] = "Durée";
$string['recording_toolbar'] = "Barre d'outils";
$string['recording_text_empty'] = "Aucun enregistrement pour le moment...";
$string['recording_loading'] = "Enregistrements en cours...";
$string['message_loading'] = "Veuillez patienter...";
$string['pagination_previous'] = "Précédent";
$string['pagination_next'] = "Suivant";
$string['view_page_error_general'] = "Aucune salle n'est disponible. Veuillez contacter votre administrateur pour plus d'informations.";
$string['view_page_error_empty_credentials'] = "Vous devez configurer les identifiants de l'API Tutoom. Plus d'informations ici : https://tutoom.com/help/articles/native-moodle-plugin";
$string['privacy:metadata:tutoom'] = "Pour créer et rejoindre des salles Tutoom, des données utilisateur doivent être échangées avec le serveur.";
$string['privacy:metadata:tutoom:fullname'] = "Le nom complet de l'utilisateur accédant à Moodle.";
$string['privacy:metadata:tutoom:coursename'] = "Le nom du cours de l'utilisateur.";
$string['privacy:metadata:tutoom:role'] = "Le rôle de l'utilisateur accédant à Moodle.";
