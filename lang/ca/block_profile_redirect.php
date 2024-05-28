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

$string['pluginname'] = 'Redirecció de perfil';
$string['blockname'] = 'Redirecció de perfil';
$string['description'] = 'Descripció';
$string['descriptiontxt'] = '<p>El bloc de redirecció del perfil s\'ha dissenyat per redirigir un usuari des de la pàgina principal del lloc o la pàgina "El meu Moodle" que conté el bloc a un curs nou. El curs nou a què es redirigeix l\'usuari es basa en un valor en un camp de perfil que coincideixi amb un valor en el nom complet del curs, nom curt o número d\'identificació basat en les configuracions del lloc a continuació.</p>

<p>Tingueu en compte que, una vegada es configuren els paràmetres del bloc, l\'administrador ha d\'afegir una instància del bloc a la pàgina principal o a la pàgina "El meu Moodle". Per fer això, seguiu aquests passos:<ol>
<li>Aneu a la pàgina principal, activeu l\'edició i, al bloc desplegable "Afegeix un bloc", seleccioneu Redirecció de perfil.</li>
<li>Un cop afegit el bloc, es redirigiran tots els usuaris al curs especificat al seu camp de perfil, o bé al curs predeterminat si no hi ha cap valor vàlid al seu perfil.</li>
</ol>
</p>';
$string['profilefield'] = 'Camp de perfil';
$string['profilefielddesc'] = 'Aquest és el camp del perfil de l\'usuari que el bloc de Redirecció de perfil compararà amb el camp del curs.';
$string['coursefield'] = 'Camp del curs';
$string['coursefielddesc'] = 'Aquest és el camp dels paràmetres del curs que el bloc de Redirecció de perfil compararà amb el camp del perfil de l\'usuari per establir la redirecció.';
$string['defaultcourse'] = 'Curs predeterminat';
$string['defaultcoursedesc'] = 'Si no hi ha un valor vàlid al camp de perfil, els usuaris no administradors es redirigiran a aquest curs en visualitzar el bloc. En aquest camp, hi hauria d\'haver el nom curt, el nom complet i el número d\'identificació del curs segons el valor que apareix al menú desplegable del camp del curs.';
$string['sysadmin'] = 'Només els administradors del lloc poden visualitzar aquest bloc.';
$string['profile_redirect:addinstance'] = 'Afegeix un nou bloc de redirecció de perfil';
$string['profile_redirect:myaddinstance'] = 'Afegeix una instància de bloc de redirecció de perfil a la pàgina El meu Moodle';
$string['privacy:metadata'] = 'El connector Redireccionament de perfil no emmagatzema dades personals.';
