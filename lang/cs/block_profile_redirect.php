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

$string['pluginname'] = 'Přesměrování profilu';
$string['blockname'] = 'Přesměrování profilu';
$string['description'] = 'Popis';
$string['descriptiontxt'] = '<p>Blok Přesměrování profilu slouží k přesměrování uživatele z úvodní stránky webu nebo ze stránky Můj Moodle, na které je blok umístěn, na nový kurz. Nový kurz, na který je uživatel přesměrován, je založený na hodnotě v poli profilu, odpovídající hodnotě v úplném názvu kurzu, krátkém názvu nebo čísle ID. Záleží na nastavení webu níže.</p>

<p>Upozornění: Jakmile jsou nastavení bloku nakonfigurována, musí administrátor přidat instanci bloku na úvodní stránku nebo na stránku Můj Moodle. Je třeba postupovat podle následujících kroků:
<ol>
<li>Přejděte na úvodní stránku, povolte úpravy a z rozevíracího seznamu bloku Přidat blok vyberte Přesměrování profilu.</li>
<li>Jakmile je blok přidán, budou všichni uživatelé přesměrováni na kurz určený v poli jejich profilu. V případě, že v jejich profilu není žádná platná hodnota, budou přesměrováni do výchozího kurzu.</li>
</ol>
 </p>';
$string['profilefield'] = 'Pole profilů';
$string['profilefielddesc'] = 'Toto je pole v profilu uživatele, které blok Přesměrování profilu použije k porovnání s polem kurzu.';
$string['coursefield'] = 'Pole kurzu';
$string['coursefielddesc'] = 'Toto je pole v nastavení kurzu, které blok Přesměrování profilu použije k porovnání s polem v profilu uživatele pro přesměrování.';
$string['defaultcourse'] = 'Výchozí kurz';
$string['defaultcoursedesc'] = 'Toto je kurz, na který budou po zobrazení bloku přesměrováni všichni uživatelé bez práv administrátora, 
jestliže nemají v poli svého profilu platnou hodnotu. Toto pole by mělo obsahovat krátký název, úplný název nebo ID kurzu na základě hodnoty v rozevírací nabídce pole kurzu.';
$string['sysadmin'] = 'Tento blok se zobrazuje pouze administrátorům webu.';
$string['profile_redirect:addinstance'] = 'Přidat nový blok Přesměrování profilu';
$string['profile_redirect:myaddinstance'] = 'Přidat na mou stránku instanci bloku Přesměrování profilu';
$string['privacy:metadata'] = 'Plugin Přesměrování profilu neukládá žádné osobní údaje.';
