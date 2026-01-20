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
 * @copyright  Copyright (c) 2025 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Przekierowanie profilu';
$string['blockname'] = 'Przekierowanie profilu';
$string['description'] = 'Opis';
$string['descriptiontxt'] = '<p>Blok Przekierowanie profilu przeznaczony jest to przekierowywania użytkownika ze strony głównej witryny lub Mojej strony Moodle, zawierającej blok
do nowego kursu. Nowy kurs, na który użytkownik zostaje przekierowany, wybierany jest na podstawie wartości w polu profilu, która odpowiada wartości pełnej nazwy, krótkiej nazwy lub identyfikatora kursu w zależności od poniższych konfiguracji.</p>

<p>Należy pamiętać, że po skonfigurowaniu ustawień bloku administrator musi dodać instancje bloku do strony głównej lub Mojej strony
Moodle. W tym celu należy wykonać następujące kroki:
<ol>
<li>Przejdź do strony głównej, włącz edytowanie i wybierz Przekierowanie profilu z rozwijanego menu „Dodaj blok”.</li>
<li>Po dodaniu bloku wszyscy użytkownicy będą przekierowywani do kursu określonego w polu profilu lub do domyślnego kursu, jeśli
ich profil nie zawiera poprawnej wartości.</li>
</ol>
</p>';
$string['profilefield'] = 'Pole profilu';
$string['profilefielddesc'] = 'Pole w profilu użytkownika, z którego skorzysta blok Przekierowanie profilu, aby dopasować jego wartość do wartości
pola kursu.';
$string['coursefield'] = 'Pole kursu';
$string['coursefielddesc'] = 'Pole w ustawieniach kursu, z którego skorzysta blok Przekierowanie profilu, aby dopasować jego wartość do
wartości pola profilu użytkownika w celu przekierowania.';
$string['defaultcourse'] = 'Domyślny kurs';
$string['defaultcoursedesc'] = 'Kurs, do którego zostaną przekierowani wszyscy użytkownicy niebędący administratorami po wyświetleniu bloku, w przypadku gdy
ich pole profilu nie zawiera poprawnej wartości. To pole powinno zawierać pełną nazwę, skróconą nazwę lub identyfikator kursu w zależności od wartości określonej w menu rozwijanym pola kursu.';
$string['sysadmin'] = 'Ten blok mogą wyświetlić wyłącznie administratorzy witryny';
$string['profile_redirect:addinstance'] = 'Dodaj nowy blok Przekierowanie profilu';
$string['profile_redirect:myaddinstance'] = 'Dodaj instancję bloku Przekierowanie profilu do mojej strony';
$string['privacy:metadata'] = 'Wtyczka Przekierowanie profilu nie przechowuje żadnych danych osobowych.';
