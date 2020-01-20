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

$string['pluginname'] = 'Omdiriger profil';
$string['blockname'] = 'Omdiriger profil';
$string['description'] = 'Beskrivelse';
$string['descriptiontxt'] = '<p>Blokken Omdiriger profil er beregnet til at omdirigere en bruger fra webstedets forside eller siden My Moodle, der indeholder blokken, til
et nyt kursus.  Det nye kursus, som brugeren omdirigeres til, er baseret på en værdi i et profilfelt, der stemmer overens med en værdi i kursets fulde navn, korte navn eller id-nummer baseret på webstedskonfigurationerne herunder.</p>

<p>Vær opmærksom på, at når blokindstillingerne først er konfigureret, skal en administrator føje en forekomst af blokken til forsiden eller siden My
Moodle.  Det gøres ved at udføre følgende trin:
<ol>
<li>Naviger til forsiden, aktivér redigering, og vælg Omdiriger profil i rullemenuen "Tilføj en blok".</li>
<li>Når blokken er tilføjet, omdirigeres alle brugere til det kursus, der er angivet i deres profilfelt eller til standardkurset, hvis
der ikke er nogen gyldig værdi i deres profil.</li>
</ol>
</p>';
$string['profilefield'] = 'Profilfelt';
$string['profilefielddesc'] = 'Dette er feltet i en brugers profil, som blokken Omdiriger profil bruger til at matche i forhold til
kursusfeltet.';
$string['coursefield'] = 'Kursusfelt';
$string['coursefielddesc'] = 'Dette er feltet i kursusindstillingerne, som blokken Omdiriger profil bruger til at matche i forhold til
brugerens profilfelt til omdirigering.';
$string['defaultcourse'] = 'Standardkursus';
$string['defaultcoursedesc'] = 'Dette er kurset, som alle brugere, der ikke er administratorbrugere, dirigeres til ved visning af blokken, hvis de
ikke har en gyldig værdi i deres profilfelt.  Dette felt skal have kursets korte navn, fulde navn eller kursus-id baseret på værdien i kursusfeltets rullemenu';
$string['sysadmin'] = 'Denne blok vises kun for webstedsadministratorer';
$string['profile_redirect:addinstance'] = 'Tilføj en ny blok til Omdiriger profil';
$string['profile_redirect:myaddinstance'] = 'Føj en forekomst af blokken Omdiriger profil til siden My Moodle';
$string['privacy:metadata'] = 'Plugin\'et til profilomdirigering gemmer ingen personlige data.';
