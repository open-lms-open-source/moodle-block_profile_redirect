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
 * @copyright  Copyright (c) 2023 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Profilweiterleitung';
$string['blockname'] = 'Profilweiterleitung';
$string['description'] = 'Beschreibung';
$string['descriptiontxt'] = '<p>Der Block &quot;Profilweiterleitung&quot; dient dazu, Nutzer/innen von der Startseite der Website oder von der Seite &quot;Mein Moodle&quot;, die den Block enthält, zu
einem neuen Kurs weiterzuleiten. Der neue Kurs, zu dem Nutzer/innen umgeleitet werden, basiert auf einem Wert in einem Profilfeld, der mit einem Wert im Kurs-Vollnamen, mit dem Kurznamen oder der ID-Nummer übereinstimmt, basierend auf den unten aufgeführten Websitekonfigurationen.</p>

<p>Denken Sie daran, dass Administrator/innen nach der Konfiguration der Blockeinstellungen eine Instanz des Blocks zur Startseite oder zu &quot;Mein
Moodle&quot; hinzufügen müssen. Führen Sie dazu die folgenden Schritte aus:
<ol>
<li>Navigieren Sie zur Startseite, aktivieren Sie die Bearbeitung, und wählen Sie Profilweiterleitung aus der Block-Dropdown-Liste &quot;Block hinzufügen&quot; aus.</li>
<li>Sobald der Block hinzugefügt wurde, werden alle Nutzer/innen zu dem Kurs umgeleitet, der in ihrem Profilfeld angegeben ist, oder zum Standardkurs, falls
das Profil keinen gültigen Wert enthält.</li>
</ol>
</p>';
$string['profilefield'] = 'Profilfeld';
$string['profilefielddesc'] = 'Dies ist das Feld im Profil von Nutzer/innen, das vom Profilweiterleitungsblock zur Abstimmung mit dem
Kursfeld verwendet wird.';
$string['coursefield'] = 'Kursfeld';
$string['coursefielddesc'] = 'Dies ist das Feld in den Kurseinstellungen, das vom Profilweiterleitungsblock zur Abstimmung mit dem
Profilfeld des/der Nutzers/in für die Weiterleitung verwendet wird.';
$string['defaultcourse'] = 'Standardkurs';
$string['defaultcoursedesc'] = 'Dies ist der Kurs, an den alle Nutzer/innen ohne Administrator/innen-Berechtigungen beim Anzeigen des Blocks weitergeleitet werden, wenn sie
keinen gültigen Wert im Profilfeld haben. Dieses Feld sollte den Kurznamen, den vollständigen Namen oder die Kurs-ID des Kurses enthalten, basierend auf dem Wert im Kurs-Dropdownfeld.';
$string['sysadmin'] = 'Dieser Block wird nur Administratoren angezeigt';
$string['profile_redirect:addinstance'] = 'Neuen Block „Profilweiterleitung“ hinzufügen';
$string['profile_redirect:myaddinstance'] = 'Der Seite &quot;Mein Moodle&quot; eine Instanz des Blocks &quot;Profilweiterleitung&quot; hinzufügen';
$string['privacy:metadata'] = 'Das Plugin &quot;Profilweiterleitung&quot; speichert keine personenbezogenen Daten.';
