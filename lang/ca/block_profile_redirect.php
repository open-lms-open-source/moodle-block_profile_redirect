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
 * @copyright  Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Redirecció de perfil';
$string['blockname'] = 'Redirecció de perfil';
$string['description'] = 'Descripció';
$string['descriptiontxt'] = '<p>La funció del bloc de redirecció de perfil és redirigir l\'usuari des d\'una pàgina principal del lloc o una pàgina El meu Moodle que contingui el bloc
a un curs nou. Aquest curs nou on es redirigeix l\'usuari es basa en si un valor del camp de perfil coincideix amb un valor del nom complet, el nom curt o el número d\'ID d\'un curs, segons les configuracions del lloc que es mostren a continuació.</p>

<p>Tingueu en compte que, una vegada es configuren els paràmetres del bloc, l\'administrador ha d\'afegir una instància del bloc a la pàgina principal o a la pàgina 
El meu Moodle. Per afegir la instància de bloc, seguiu els passos següents:
<ol>
<li>Aneu a la pàgina principal, activeu l\'edició i, al bloc desplegable "Afegeix un bloc", seleccioneu Redirecció de perfil.</li>
<li>Un cop afegit, es redirigiran tots els usuaris al curs especificat al seu camp de perfil, o bé al curs predeterminat si
no hi tenen cap valor vàlid al perfil.</li>
</ol>
</p>';
$string['profilefield'] = 'Camp de perfil';
$string['profilefielddesc'] = 'Aquest és el camp al perfil de l\'usuari que el bloc de Redirecció de perfil compararà amb el 
camp del curs.';
$string['coursefield'] = 'Camp del curs';
$string['coursefielddesc'] = 'Aquest és el camp dels paràmetres del curs que el bloc de Redirecció de perfil compararà amb el 
camp de perfil de l\'usuari per establir la redirecció.';
$string['defaultcourse'] = 'Curs predeterminat';
$string['defaultcoursedesc'] = 'Si no hi ha un valor vàlid al camp de perfil, els usuaris no administradors es redirigiran a aquest curs
en visualitzar el bloc. En aquest camp, hi hauria d\'haver el nom curt, el nom complet i el número d\'ID del curs segons el valor que apareix al menú desplegable del camp del curs.';
$string['sysadmin'] = 'Només els administradors del lloc poden visualitzar aquest bloc.';
$string['profile_redirect:addinstance'] = 'Afegeix un nou bloc de redirecció de perfil';
$string['profile_redirect:myaddinstance'] = 'Afegeix una instància de bloc de redirecció de perfil a la pàgina El meu Moodle';
