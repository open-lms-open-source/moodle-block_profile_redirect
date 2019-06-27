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
 * @copyright  Copyright (c) 2019 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Profilweiterleitung';
$string['blockname'] = 'Profilweiterleitung';
$string['description'] = 'Beschreibung';
$string['descriptiontxt'] = '<p>Der Profilweiterleitungsblock dient zur Weiterleitung eines Nutzers von der Startseite der Website oder der Seite „Mein Moodle“, auf der der Block geladen ist, an einen neuen Kurs.  Der neue Kurs, an den der Nutzer weitergeleitet wird, basiert auf einem Wert in einem Profilfeld mit einem passenden Wert im vollständigen Kursnamen, Kurznamen oder der ID-Nummer des Kurses auf der Grundlage der nachstehenden Website-Konfiguration.</p>

<p>Beachten Sie: Nachdem die Blockeinstellungen konfiguriert sind, muss ein Administrator eine Instanz des Blocks auf zur Startseite oder zur Seite „Mein Moodle“ hinzufügen.  Dazu sind die folgenden Schritte auszuführen:
<ol>
<li>Navigieren Sie zur Startseite, aktivieren Sie die Bearbeitung und wählen Sie Profilweiterleitung aus der \\"Blocks\\" Dropdown-Liste.</li>
<li>Sobald der Block hinzugefügt wurde, werden alle Nutzer zu dem in ihrem Profilfeld angegebenen Kurs oder, wenn kein gültiger Wert in ihrem Profil eingetragen ist, an den Standardkurs weitergeleitet.</li>
</ol>
</p>';
$string['profilefield'] = 'Profilfeld';
$string['profilefielddesc'] = 'Dies ist das Feld im Profil des Nutzers, das vom Profilweiterleitungsblock zur Abstimmung mit dem Kursfeld für die Weiterleitung verwendet wird.';
$string['coursefield'] = 'Kursfeld';
$string['coursefielddesc'] = 'Dies ist das Feld in den Kurseinstellungen, das vom Profilweiterleitungsblock zur Abstimmung mit dem Profilfeld des Nutzers für die Weiterleitung verwendet wird.';
$string['defaultcourse'] = 'Standardkurs';
$string['defaultcoursedesc'] = 'Hierbei handelt es sich um den Kurs, an den alle Nutzer, die keine Administratoren sind, bei der
 Anzeige des Blocks weitergeleitet werden, sofern kein gültiger Wert in ihrem Profilfeld eingetragen ist.  Dieses Feld muss den Kurznamen, den vollständigen Namen oder die Kurs-ID-Nummer des Kurses auf der Basis der Dropdown-Liste für das Kursfeld enthalten.';
$string['sysadmin'] = 'Dieser Block wird nur Administratoren angezeigt';
$string['profile_redirect:addinstance'] = 'Neuen Block „Profilweiterleitung“ hinzufügen';
$string['profile_redirect:myaddinstance'] = 'Der Seite "Mein Moodle" eine Instanz des Blocks "Profilweiterleitung" hinzufügen';
$string['privacy:metadata'] = 'Das Plugin "Profilweiterleitung" speichert keine personenbezogenen Daten.';
