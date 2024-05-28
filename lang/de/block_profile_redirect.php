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
 * @copyright  Copyright (c) 2024 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Profilweiterleitung';
$string['blockname'] = 'Profilweiterleitung';
$string['description'] = 'Beschreibung';
$string['descriptiontxt'] = '<p>Der Block "Profilweiterleitung" dient dazu, eine/n Nutzer/in von der Startseite der Website oder der Seite "Mein Moodle", die den Block enthält, zu einem neuen Kurs weiterzuleiten. Der neue Kurs, zu dem Nutzer/innen umgeleitet werden, basiert auf einem Wert in einem Profilfeld, der mit einem Wert im Kurs-Vollnamen, mit dem Kurznamen oder der ID-Nummer übereinstimmt, basierend auf den unten aufgeführten Websitekonfigurationen.</p>

<p>Denken Sie daran, dass Administrator/innen nach der Konfiguration der Blockeinstellungen eine Instanz des Blocks zur Startseite oder zu "Mein Moodle" hinzufügen müssen. Gehen Sie hierzu wie folgt vor:<ol>
<li>Navigieren Sie zur Startseite, aktivieren Sie die Bearbeitung, und wählen Sie Profilweiterleitung aus der Block-Dropdown-Liste "Block hinzufügen" aus.</li>
<li>Sobald der Block hinzugefügt wurde, werden alle Nutzer/innen zu dem Kurs umgeleitet, der in ihrem Profilfeld angegeben ist, oder zum Standardkurs, falls kein gültiger Wert in ihrem Profil vorhanden ist.</li>
</ol>
</p>';
$string['profilefield'] = 'Profilfeld';
$string['profilefielddesc'] = 'Dies ist das Feld im Profil der Nutzer/innen, das vom Block "Profilweiterleitung" zur Abstimmung mit dem Kursfeld verwendet wird.';
$string['coursefield'] = 'Kursfeld';
$string['coursefielddesc'] = 'Dies ist das Feld in den Kurseinstellungen, das vom Block "Profilweiterleitung" zur Abstimmung mit dem Profilfeld der Nutzer/innen für die Weiterleitung verwendet wird.';
$string['defaultcourse'] = 'Standardkurs';
$string['defaultcoursedesc'] = 'Hierbei handelt es sich um den Kurs, an den alle Nutzer/innen, die keine Administratoren/innen sind, bei der Anzeige des Blocks weitergeleitet werden, sofern kein gültiger Wert in ihrem Profilfeld eingetragen ist. Dieses Feld muss den Kurznamen, den vollständigen Namen oder die Kurs-ID-Nummer des Kurses auf Basis des Werts in der Dropdown-Liste für das Kursfeld enthalten.';
$string['sysadmin'] = 'Dieser Block wird nur Administratoren angezeigt';
$string['profile_redirect:addinstance'] = 'Neuen Block „Profilweiterleitung“ hinzufügen';
$string['profile_redirect:myaddinstance'] = 'Der Seite "Mein Moodle" eine Instanz des Blocks "Profilweiterleitung" hinzufügen';
$string['privacy:metadata'] = 'Das Plugin "Profilweiterleitung" speichert keine personenbezogenen Daten.';
