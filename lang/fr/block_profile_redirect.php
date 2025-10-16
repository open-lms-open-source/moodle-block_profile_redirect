<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @copyright  Copyright (c) 2025 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Redirection de profil';
$string['blockname'] = 'Redirection de profil';
$string['description'] = 'Description';
$string['descriptiontxt'] = '<p>Le bloc Redirection de profil est conçu pour rediriger un utilisateur de la page d\'accueil du site ou de la page Mon Moodle contenant le bloc vers
un nouveau cours. Le nouveau cours vers lequel l\'utilisateur est redirigé est basé sur une valeur dans un champ de profil correspondant à une valeur dans le nom complet, le nom abrégé ou le numéro d\'ID du cours, selon les configurations du site ci-dessous.</p>

<p>N\'oubliez pas qu\'une fois les paramètres de bloc configurés, un administrateur doit ajouter une instance du bloc à la première page ou à la page Mon
Moodle. Pour ce faire, procédez comme suit :
<ol>
<li>Accédez à la première page, activez la modification et sélectionnez Redirection de profil dans la liste déroulante de blocs « Ajouter un bloc ».</li>
<li>Une fois le bloc ajouté, tous les utilisateurs seront redirigés vers le cours spécifié dans leur champ de profil ou vers le cours par défaut si
aucune valeur valide ne figure dans leur profil.</li>
</ol>
</p>';
$string['profilefield'] = 'Champ du profil';
$string['profilefielddesc'] = 'Il s\'agit du champ que le bloc Redirection de profil utilise dans un profil utilisateur pour déterminer le
champ du cours.';
$string['coursefield'] = 'Champ du cours';
$string['coursefielddesc'] = 'Il s\'agit du champ que le bloc Redirection de profil utilise dans les paramètres de cours et fait correspondre au champ du profil
utilisateur pour réaliser la redirection.';
$string['defaultcourse'] = 'Cours par défaut';
$string['defaultcoursedesc'] = 'Il s\'agit du cours vers lequel tous les utilisateurs non-administrateurs sont redirigés lorsqu\'ils affichent le bloc et qu\'ils n\'ont
aucune information valide dans le champ de leur profil. Ce champ doit contenir le nom complet, le nom abrégé ou le numéro d\'ID du cours, en fonction de la valeur figurant dans la liste déroulante du champ du cours.';
$string['sysadmin'] = 'Ce bloc ne s\'affiche que pour les administrateurs du site';
$string['profile_redirect:addinstance'] = 'Ajouter un nouveau bloc Redirection de profil';
$string['profile_redirect:myaddinstance'] = 'Ajouter une instance de bloc Redirection de profil à Ma page';
$string['privacy:metadata'] = 'Le plug-in Redirection de profil ne stocke aucune donnée personnelle.';
