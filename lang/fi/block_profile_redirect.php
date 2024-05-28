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

$string['pluginname'] = 'Profiilin uudelleenohjaus';
$string['blockname'] = 'Profiilin uudelleenohjaus';
$string['description'] = 'Keskustelualueen kuvaus';
$string['descriptiontxt'] = '<p>Profiilin uudelleenohjaus -lohkon avulla käyttäjän voi ohjata sivuston etusivulta tai lohkon sisältävältä Oma Moodle -sivulta uudelle kurssille. Kurssi, jolle käyttäjä ohjataan uudelleen, perustuu profiilikentän arvoon, joka täsmää alla olevissa sivuston määrityksissä annetun kurssin koko nimen, lyhenteen tai tunnisteen arvon kanssa.</p>

<p>Muista, että kun lohkon asetukset on määritetty, ylläpitäjän on lisättävä lohkon ilmentymä etusivulle tai Oma Moodle -sivulle. Tee se seuraavasti:<ol>
<li>Siirry etusivulle, ota muokkaus käyttöön ja valitse lohkon avattavasta Lisää lohko -valikosta Profiilin uudelleenohjaus.</li>
<li>Kun lohko on lisätty, kaikki käyttäjät ohjataan uudelleen kurssille, joka on määritetty heidän profiilikentässään, tai oletuskurssille, jos heidän profiilissaan ei ole kelvollista arvoa.</li>
</ol>
</p>';
$string['profilefield'] = 'Profiilikenttä';
$string['profilefielddesc'] = 'Tämä on käyttäjän profiilissa oleva kenttä, jonka Profiilin uudelleenohjaus -lohko yrittää yhdistää vastaavaan kurssikenttään.';
$string['coursefield'] = 'Kurssikenttä';
$string['coursefielddesc'] = 'Tämä on kurssin asetuksissa oleva kenttä, jonka Profiilin uudelleenohjaus -lohko yrittää yhdistää käyttäjän profiilikenttään uudelleenohjausta varten.';
$string['defaultcourse'] = 'Oletuskurssi';
$string['defaultcoursedesc'] = 'Tämä on kurssi, jolle kaikki muut kuin ylläpitäjäkäyttäjät ohjataan lohkon tarkastelun jälkeen, jos käyttäjän profiilikentässä ei ole kelvollista arvoa. Tähän kenttään on määritettävä lyhenne, koko nimi tai tunniste kurssikentän pudotusvalikon arvon perusteella.';
$string['sysadmin'] = 'Tämä lohko on näkyvissä vain sivuston ylläpitäjille';
$string['profile_redirect:addinstance'] = 'Lisää uusi Profiilin uudelleenohjaus -lohko';
$string['profile_redirect:myaddinstance'] = 'Lisää Profiilin uudelleenohjaus -lohko omalle aloitussivulle';
$string['privacy:metadata'] = 'Profiilin uudelleenohjaus -lisäosa ei tallenna mitään henkilökohtaisia tietoja.';
