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
 * @copyright  Copyright (c) 2020 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Omleiding profiel';
$string['blockname'] = 'Omleiding profiel';
$string['description'] = 'Beschrijving';
$string['descriptiontxt'] = '<p>Het blok Omleiding profiel is ontworpen om een gebruiker om te leiden van de startpagina van de site of Mijn Moodle-pagina die het blok naar een nieuwe cursus bevat. De nieuwe cursus waar de gebruiker naar wordt omgeleid is gebaseerd op een waarde in een profielveld die overeenkomt met een waarde in de volledige cursusnaam, korte cursusnaam of het id-nummer gebaseerd op de siteconfiguraties hieronder.</p>

<p>Zodra de blokinstellingen zijn geconfigureerd, moet een beheerder een exemplaar van het blok toevoegen aan de startpagina of Mijn Moodle-pagina. Voltooi hiervoor de volgende stappen:
<ol>
<li>Navigeer naar de startpagina, schakel bewerken in en selecteer Omleiding profiel in het vervolgkeuzemenu van het blok "Voeg een blok toe".</li>
<li>Zodra het blok is toegevoegd, worden alle gebruikers omgeleid naar de cursus die in hun profielveld is gespecificeerd of naar de standaardcursus als er geen geldige waarde in hun profiel staat.</li>
</ol>
 </p>';
$string['profilefield'] = 'Profielveld';
$string['profilefielddesc'] = 'Dit is het veld in het profiel van een gebruiker dat het blok Omleiding profiel zal gebruiken om te koppelen aan het
cursusveld.';
$string['coursefield'] = 'Cursusveld';
$string['coursefielddesc'] = 'Dit is het veld in de cursusinstellingen dat het blok Omleiding profiel zal gebruiken om te koppelen aan het
profielveld van de gebruiker voor de omleiding.';
$string['defaultcourse'] = 'Standaardcursus';
$string['defaultcoursedesc'] = 'Dit is de cursus waarnaar alle gebruikers die geen beheerder zijn worden omgeleid wanneer ze het blok bekijken als ze geen geldige waarde in hun profielveld hebben. Dit veld moet de korte naam, volledige naam of het id-nummer van de cursus bevatten gebaseerd op de waarde in het vervolgkeuzemenu van het cursusveld';
$string['sysadmin'] = 'Dit blok wordt alleen weergegeven voor sitebeheerders';
$string['profile_redirect:addinstance'] = 'Voeg een nieuw blok Omleiding profiel toe';
$string['profile_redirect:myaddinstance'] = 'Voeg een exemplaar van het blok Omleiding profiel aan mijn pagina toe';
$string['privacy:metadata'] = 'Er worden geen persoonlijke gegevens opgeslagen door de plugin Omleiding profiel.';
