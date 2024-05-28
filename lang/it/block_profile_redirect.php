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

$string['pluginname'] = 'Reindirizzamento profilo';
$string['blockname'] = 'Reindirizzamento profilo';
$string['description'] = 'Commento';
$string['descriptiontxt'] = '<p>Il block Reindirizzamento profilo serve a reindirizzare un utente dalla pagina home del sito o dalla pagina My Moodle contenente il block a un nuovo corso. Il nuovo corso al quale viene indirizzato l\'utente si basa su un valore presente in un campo profilo corrispondente a un valore nel nome completo, nome abbreviato o numero ID del corso secondo le configurazioni del sito sottostanti.</p>

<p>Remember that once the block settings are configured, an admin needs to add an instance of the block to the front page or My
Moodle page.  To do this, complete the following steps:
<ol>
<li>Navigate to the front page, enable editing, and select Profile Redirect from the "Add a Block" block drop-down.</li>
<li>Once the block is added, all users will be redirected to the course specified in their profile field or to the default course if
no valid value is in their profile.</li>
</ol>
</p>';
$string['profilefield'] = 'Campo profilo';
$string['profilefielddesc'] = 'Questo è il campo presente in un profilo utente che il block Reindirizzamento profilo utilizzerà per ottenere una corrispondenza con il campo del corso.';
$string['coursefield'] = 'Campo corso';
$string['coursefielddesc'] = 'Questo è il campo presente nelle impostazioni del corso che il block Reindirizzamento profilo utilizzerà per ottenere una corrispondenza con il campo profilo dell\'utente per il reindirizzamento.';
$string['defaultcourse'] = 'Corso predefinito';
$string['defaultcoursedesc'] = 'Questo è il corso al quale verranno reindirizzati tutti gli utenti non amministratori dopo la visualizzazione del block, nel caso in cui non dispongano di un valore valido nel loro campo profilo. Questo campo deve avere un nome completo, un nome abbreviato o un numero ID del corso basato sul valore nel menu a discesa del campo del corso';
$string['sysadmin'] = 'Questo block è visibile solo per gli amministratori del sito';
$string['profile_redirect:addinstance'] = 'Aggiungi un nuovo block Reindirizzamento profilo';
$string['profile_redirect:myaddinstance'] = 'Aggiungi un\'istanza del block Reindirizzamento profilo alla mia pagina';
$string['privacy:metadata'] = 'Il plugin Reindirizzamento profilo non memorizza dati personali.';
