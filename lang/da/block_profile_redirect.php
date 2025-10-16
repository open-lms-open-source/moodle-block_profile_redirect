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

$string['pluginname'] = 'Omdiriger profil';
$string['blockname'] = 'Omdiriger profil';
$string['description'] = 'Beskrivelse';
$string['descriptiontxt'] = '<p>Blokken Omdirigér profil er beregnet til at omdirigere en bruger fra webstedets forside eller den Min Moodle-side, der indeholder blokken til
et nyt kursus. Det nye kursus, som brugeren omdirigeres til, er baseret på en værdi i et profilfelt, der matcher en værdi inden for kursets fulde navn, korte navn eller id-nummer afhængigt af de nedenstående webstedskonfigurationer.</p>

<p>Husk, at når blokindstillingerne er konfigureret, skal en administrator tilføje en forekomst af blokken på forsiden eller Min
Moodle-siden. For at gøre dette skal du udføre følgende trin:
<ol>
<li>Navigér til forsiden, aktivér redigering, og vælg Omdirigér profil fra rullemenuen "Tilføj en blok".</li>
<li>Når blokken er tilføjet, omdirigeres alle brugere til det kursus, der er angivet i deres profilfelt eller til standardkurset, hvis
deres profil ikke indeholder en gyldig værdi.</li>
</ol>
</p>';
$string['profilefield'] = 'Profilfelt';
$string['profilefielddesc'] = 'Profilfeltet er det felt i en brugers profil, som blokken Omdirigér profil bruger til at matche i forhold til
kursusfeltet.';
$string['coursefield'] = 'Kursusfelt';
$string['coursefielddesc'] = 'Kursusfelt er det felt under kursusindstillingerne, som blokken Omdirigér profil bruger til at matche i forhold til
brugerens profilfelt til omdirigering.';
$string['defaultcourse'] = 'Standardkursus';
$string['defaultcoursedesc'] = 'Dette er kurset, som alle brugere, der ikke er administratorer, vil blive sendt videre til, hvis
deres profilfelt ikke indeholder en gyldig værdi. Dette felt skal indeholde kursets korte navn, fulde navn eller kursus-id afhængigt af værdien i kursusfeltets rullemenu';
$string['sysadmin'] = 'Denne blok vises kun for webstedsadministratorer';
$string['profile_redirect:addinstance'] = 'Tilføj en ny blok til Omdiriger profil';
$string['profile_redirect:myaddinstance'] = 'Føj en forekomst af blokken Omdiriger profil til siden My Moodle';
$string['privacy:metadata'] = 'Plugin\'et til profilomdirigering gemmer ingen personlige data.';
