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
 * @copyright  Copyright (c) 2021 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Redireccionar perfil';
$string['blockname'] = 'Redireccionar perfil';
$string['description'] = 'Descripción';
$string['descriptiontxt'] = '<p>El bloque de redireccionamiento del perfil está diseñado para redirigir al usuario desde la página principal del sitio o la página Mi Moodle en la que se cargó el bloque hasta un curso nuevo. El curso nuevo al que se redirecciona al usuario está basado en un valor del campo del perfil que coincide con el valor del nombre completo del curso, el nombre corto o el número de id con base en las configuraciones del sitio que se indican a continuación.</p>

<p>Recuerde que, una vez que se configuran los ajustes del bloque, un administrador debe agregar una instancia del bloque a la página principal o la página Mi Moodle. Para hacerlo, siga estos pasos:
<ol>
<li>Navegue hasta la página principal, habilite la opción Editar, seleccione Redireccionar perfil en el menú desplegable del bloque \\"Blocks\\".</li>
<li>Una vez que se haya agregado el bloque, todos los usuarios serán redirigidos al curso especificado en el campo de su perfil o al curso por defecto si no hay un valor válido en su perfil.</li>
</ol>
</p>';
$string['profilefield'] = 'Campo de perfil';
$string['profilefielddesc'] = 'El bloque Redireccionar perfil usará este campo en el perfil de un usuario para hacerlo coincidir con el campo del curso.';
$string['coursefield'] = 'Campo del curso';
$string['coursefielddesc'] = 'El bloque Redireccionar perfil usará este campo en los ajustes del curso para hacerlo coincidir con el campo de perfil del usuario para la redirección.';
$string['defaultcourse'] = 'Curso por defecto';
$string['defaultcoursedesc'] = 'Este es el curso al que se dirigirán todos los usuarios que no sean administradores cuando vean el block, en el caso de que no hayan introducido un valor válido en el campo de su perfil. En este campo se debe introducir el nombre corto, el nombre completo o el número de ID del curso según el valor del campo desplegable del curso.';
$string['sysadmin'] = 'Este bloque solo está visible para los administradores del sitio';
$string['profile_redirect:addinstance'] = 'Agregar un bloque nuevo de Redireccionar perfil';
$string['profile_redirect:myaddinstance'] = 'Agregar una instancia del bloque Redireccionamiento de perfil a mi página';
$string['privacy:metadata'] = 'El complemento de Redireccionar perfil no almacena datos personales.';
