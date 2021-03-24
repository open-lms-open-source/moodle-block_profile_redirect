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

$string['pluginname'] = '資訊重新引導';
$string['blockname'] = '資訊重新引導';
$string['description'] = '描述';
$string['descriptiontxt'] = '<p>「資訊重新引導」區塊的設計是將使用者從網站首頁，或包含此區塊的「我的 Moodle」頁面，重新引導至一門新課程。重新引導使用者前往的課程，是依據資訊欄位中的值，與下方顯示網站配置的課程全名、簡稱或編號號碼的值相符情況來決定。</p>

<p>請記得，區塊設定值完成配置後，管理員需將區塊例項新增至首頁或「我的 Moodle」頁面。若要完成此動作，請完成下列步驟：
<ol>
<li>瀏覽首頁，啟用編輯，然後從「新增區塊」該區塊的下拉式清單，選取「資訊重新引導」。</li>
<li>區塊新增完成後，它將會重新引導所有使用者至他們資訊欄位所指定的課程；或者，若他們的資訊中沒有有效值，將引導使用者至預設課程。</li>
</ol>
</p>';
$string['profilefield'] = '資訊欄位';
$string['profilefielddesc'] = '這個是使用者資訊裡的欄位，「資訊重新引導」區塊將用它來跟課程欄位進行配對。';
$string['coursefield'] = '課程欄位';
$string['coursefielddesc'] = '這個是課程設定裡的欄位，「資訊重新引導」區塊將用它來跟使用者的資訊欄位進行配對，然後進行重新引導。';
$string['defaultcourse'] = '預設課程';
$string['defaultcoursedesc'] = '若使用者的身分不是管理員，且其資訊欄位中的值無效，則當檢視此區塊時，會由系統引導至此課程。依據課程欄位下拉式清單裡的值，這個欄位應該有課程簡稱、全名或編號號碼';
$string['sysadmin'] = '只有網站管理員能看見此區塊';
$string['profile_redirect:addinstance'] = '新增「資訊重新引導」區塊';
$string['profile_redirect:myaddinstance'] = '新增「資訊引導」區塊的例項至我的頁面';
$string['privacy:metadata'] = '資訊重新引導外掛程式不會儲存任何個人資料。';
