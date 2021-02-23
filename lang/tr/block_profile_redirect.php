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
 * @copyright  Copyright (c) 2020 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Profil Yönlendirmesi';
$string['blockname'] = 'Profil Yönlendirmesi';
$string['description'] = 'Açıklama';
$string['descriptiontxt'] = '<p>Profil Yönlendirmesi bloku, bir kullanıcıyı sitenin ön sayfasından veya bloku içeren Moodle’ım sayfasından 
yeni bir kursa yönlendirmek için tasarlanmıştır. Kullanıcının yönlendirildiği yeni kurs, profil alanında aşağıdaki site yapılandırmalarına göre kurs tam adı, kısa adı veya kimlik numarasındaki bir değerle eşleşen bir değeri temel alır.</p>

<p>Blok ayarları yapılandırıldıktan sonra bir yöneticinin blok örneğini ön sayfaya veya 
Moodle’ım sayfasına eklemesi gerektiğini lütfen unutmayın. Bunu yapmak için, aşağıdaki adımları tamamlayın:
<ol>
<li>Ön sayfaya gidin, düzenlemeyi etkinleştirin ve "Blok Ekle" blok açılır listesinden Profil Yönlendirme’yi seçin.</li>
<li>Blok eklendikten sonra tüm kullanıcılar, profil alanlarında belirtilen kursa veya profillerinde bir değer yoksa
varsayılan kursa yönlendirilir.</li>
</ol>
</p>';
$string['profilefield'] = 'Profil Alanı';
$string['profilefielddesc'] = 'Bu, bir kullanıcının profilinde Profil Yönlendirme blokunun kurs alanıyla
eşleştirmek için kullanacağı alandır.';
$string['coursefield'] = 'Kurs Alanı';
$string['coursefielddesc'] = 'Bu, kurs ayarlarında Profil Yönlendirme blokunun yönlendirme için kullanıcının profil alanıyla
eşleştirmek için kullanacağı alandır.';
$string['defaultcourse'] = 'Varsayılan Kurs';
$string['defaultcoursedesc'] = 'Bu, yönetici olmayan kullanıcıların bloka baktıktan sonra profil alanlarında geçerli bir değer yoksa
yönlendirileceği kurstur. Bu alan, kurs alanı açılan listesindeki değere göre kursun kısa adını, tam adını veya kurs kimlik numarasını içermelidir';
$string['sysadmin'] = 'Bu bloku yalnızca Site Yöneticileri görebilir';
$string['profile_redirect:addinstance'] = 'Yeni bir Profil Yönlendirme bloku ekle';
$string['profile_redirect:myaddinstance'] = 'Profil Yönlendirme blokunun bir örneğini sayfama ekle';
$string['privacy:metadata'] = 'Profil Yönlendirmesi eklentisi, kişisel verileri depolamaz.';
