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

$string['pluginname'] = 'Přesměrování profilu';
$string['blockname'] = 'Přesměrování profilu';
$string['description'] = 'Další podrobnosti o uživateli';
$string['descriptiontxt'] = '<p>Blok Přesměrování profilu je určen k přesměrování uživatele z úvodní stránky webu nebo stránky Můj Moodle, která obsahuje tento blok, do nového kurzu. Nový kurz, na který je uživatel přesměrován, je založen na hodnotě v poli profilu, která odpovídá hodnotě v úplném názvu, krátkém názvu nebo identifikačním čísle kurzu na základě níže uvedených konfigurací webu.</p>

<p>Jakmile je nastavení bloku nakonfigurováno, musí správce přidat instanci bloku na úvodní stránku nebo na stránku Můj Moodle. To provedete následujícím způsobem:<ol>
<li>Přejděte na titulní stránku, povolte úpravy a v rozevírací nabídce „Přidat blok“ vyberte možnost Přesměrování profilu.</li>
<li>Po přidání bloku budou všichni uživatelé přesměrováni na kurz uvedený v poli jejich profilu nebo na výchozí kurz, pokud v jejich profilu není uvedena žádná platná hodnota.</li>
</ol>
</p>';
$string['profilefield'] = 'Pole profilů';
$string['profilefielddesc'] = 'Toto je pole v profilu uživatele, které blok Přesměrování profilu použije k porovnání s polem kurzu.';
$string['coursefield'] = 'Pole kurzu';
$string['coursefielddesc'] = 'Toto je pole v nastavení kurzu, které blok Přesměrování profilu použije k porovnání s polem v profilu uživatele pro přesměrování.';
$string['defaultcourse'] = 'Výchozí kurz';
$string['defaultcoursedesc'] = 'Toto je kurz, na který budou po zobrazení bloku přesměrováni všichni uživatelé bez práv administrátora, jestliže nemají v poli svého profilu platnou hodnotu. Toto pole by mělo obsahovat krátký název, úplný název nebo ID kurzu na základě hodnoty v rozevírací nabídce pole kurzu.';
$string['sysadmin'] = 'Tento blok se zobrazuje pouze administrátorům webu.';
$string['profile_redirect:addinstance'] = 'Přidat nový blok Přesměrování profilu';
$string['profile_redirect:myaddinstance'] = 'Přidat na mou stránku instanci bloku Přesměrování profilu';
$string['privacy:metadata'] = 'Plugin Přesměrování profilu neukládá žádné osobní údaje.';
