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

$string['pluginname'] = 'Profiilin uudelleenohjaus';
$string['blockname'] = 'Profiilin uudelleenohjaus';
$string['description'] = 'Kuvaus';
$string['descriptiontxt'] = '<p>Profiilin uudelleenohjaus -lohko on suunniteltu ohjaamaan käyttäjät lohkon sisältävältä sivuston etusivulta tai Oma Moodle -sivulta
 uudelle kurssille. Uusi kurssi, jolle käyttäjä ohjataan, määräytyy profiilikentässä olevan arvon perusteella. Arvon on täsmättävä kurssin nimessä, lyhenteessä tai tunnisteessa olevaan arvoon. Arvot perustuvat sivuston määrityksiin.</p>

<p>Muista, että lohkon asetusten määrittämisen jälkeen ylläpitäjän on lisättävä lohkon ilmentymä etusivulle tai Oma
Moodle -sivulle. Ylläpitäjä voi lisätä lohkon seuraavasti:
<ol>
<li>Siirry etusivulle, ota muokkaaminen käyttöön ja valitse Profiilin uudelleenohjaus avattavasta "Lisää lohko" -valikosta.</li>
<li>Kun lohko on lisätty, kaikki käyttäjät ohjataan uudelleen profiilikenttään määritetylle kurssille tai oletuskurssille, jos
kelvollista arvoa ei löydy profiilista.</li>
</ol>
 </p>';
$string['profilefield'] = 'Profiilikenttä';
$string['profilefielddesc'] = 'Tämä on käyttäjän profiilissa oleva kenttä, jonka Profiilin uudelleenohjaus -lohko yrittää
yhdistää vastaavaan kurssikenttään.';
$string['coursefield'] = 'Kurssikenttä';
$string['coursefielddesc'] = 'Tämä on kurssin asetuksissa oleva kenttä, jonka Profiilin uudelleenohjaus -lohko yrittää
yhdistää käyttäjän profiilikenttään uudelleenohjausta varten.';
$string['defaultcourse'] = 'Oletuskurssi';
$string['defaultcoursedesc'] = 'Tämä on kurssi, jolle kaikki muut kuin ylläpitäjäkäyttäjät ohjataan lohkon tarkastelun jälkeen, jos käyttäjän
 profiilikentässä ei ole kelvollista arvoa. Tähän kenttään on määritettävä kurssin nimi, lyhenne tai tunniste kurssikentän avattavan valikon arvon perusteella.';
$string['sysadmin'] = 'Tämä lohko on näkyvissä vain sivuston ylläpitäjille';
$string['profile_redirect:addinstance'] = 'Lisää uusi Profiilin uudelleenohjaus -lohko';
$string['profile_redirect:myaddinstance'] = 'Lisää Profiilin uudelleenohjaus -lohko omalle aloitussivulle';
$string['privacy:metadata'] = 'Profiilin uudelleenohjaus -lisäosa ei tallenna mitään henkilökohtaisia tietoja.';
