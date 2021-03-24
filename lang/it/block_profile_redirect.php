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

$string['pluginname'] = 'Reindirizzamento profilo';
$string['blockname'] = 'Reindirizzamento profilo';
$string['description'] = 'Commento';
$string['descriptiontxt'] = '<p>Il block Reindirizzamento profilo è progettato per reindirizzare un utente dalla pagina home di un sito o dalla pagina Il mio Moodle a
un nuovo corso. Il nuovo corso al quale viene indirizzato l\'utente si basa su un valore presente in un campo profilo corrispondente a un valore nel nome completo, nome abbreviato o numero ID del corso secondo le configurazioni del sito sottostanti.</p>

<p>Ricorda che dopo aver configurato le impostazioni di block, l\'amministratore deve aggiungere un\'istanza del block nella pagina home o nella pagina Il
mio Moodle. Per fare ciò, completa i seguenti passaggi:
<ol>
<li>Vai alla pagina home, abilita le modifiche e seleziona Reindirizzamento profilo dal menu a discesa del block "Aggiungi un block".</li>
<li>Dopo aver aggiunto il block, tutti gli utenti vengono reindirizzati al corso specificato nel loro campo profilo o al corso predefinito se non sono presenti valori validi nel loro profilo.</li>
</ol>
</p>';
$string['profilefield'] = 'Campo profilo';
$string['profilefielddesc'] = 'Questo è il campo presente in un profilo utente che il block Reindirizzamento profilo utilizzerà per ottenere una corrispondenza
con il campo del corso.';
$string['coursefield'] = 'Campo corso';
$string['coursefielddesc'] = 'Questo è il campo presente nelle impostazioni del corso che il block Reindirizzamento profilo utilizzerà per ottenere una corrispondenza
con il campo profilo dell\'utente per il reindirizzamento.';
$string['defaultcourse'] = 'Corso predefinito';
$string['defaultcoursedesc'] = 'Questo è il corso al quale verranno reindirizzati tutti gli utenti non amministratori dopo la visualizzazione del block, nel caso in cui non dispongano
di un valore valido nel loro campo profilo. Questo campo deve avere un nome completo, un nome abbreviato o un numero ID del corso basato sul valore nel menu a discesa del campo del corso';
$string['sysadmin'] = 'Questo block è visibile solo per gli amministratori del sito';
$string['profile_redirect:addinstance'] = 'Aggiungi un nuovo block Reindirizzamento profilo';
$string['profile_redirect:myaddinstance'] = 'Aggiungi un\'istanza del block Reindirizzamento profilo alla mia pagina';
$string['privacy:metadata'] = 'Il plugin Reindirizzamento profilo non memorizza dati personali.';
