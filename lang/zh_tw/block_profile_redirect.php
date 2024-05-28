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

$string['pluginname'] = '資訊重新引導';
$string['blockname'] = '資訊重新引導';
$string['description'] = '描述';
$string['descriptiontxt'] = '<p>「資訊重新引導」區塊用於將使用者從包含該區塊的網站首頁或「我的 Moodle」頁面重新引導至新課程。使用者被重新引導到的新課程是根據資訊欄位中的值與依據下方網站配置之課程全名、簡稱或編號值相符。</p>

<p>請記住，區塊設定配置完成後，管理員需要將區塊的例項新增至首頁或「我的 Moodle」頁面。要做到這點，請完成下列步驟：<ol>
<li>瀏覽至首頁，啟用編輯，並從「新增區塊」區塊下拉式清單中選取「資訊重新引導」。</li>
<li>新增區塊後，所有使用者都將被重新引導至其資訊欄位中指定的課程，或如果其資訊中沒有有效的值，則將重新引導至預設課程。</li>
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
