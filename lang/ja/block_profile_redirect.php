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

$string['pluginname'] = 'プロファイルリダイレクト';
$string['blockname'] = 'プロファイルリダイレクト';
$string['description'] = '記述内容';
$string['descriptiontxt'] = '<p>プロファイルリダイレクトブロックは、ブロックを含むサイトのフロントページまたはマイMoodleページから新しいコースにユーザをリダイレクトするように設計されています。ユーザがリダイレクトされる新しいコースは、以下のサイト構成に基づくコースのフルネーム、省略名、またはID番号の値と一致するプロファイルフィールドの値に基づいています。</p>

<p>ブロック設定が完了したら、管理者はブロックのインスタンスをフロントページまたはマイMoodleページに追加する必要があることに注意してください。これを行うには、次の手順を実行します。<ol>
<li>フロントページに移動して、編集を有効にし、[ブロックを追加（Add a Block）]ブロックドロップダウンから[プロファイルリダイレクト]を選択します。</li>
<li>ブロックが追加されると、すべてのユーザはプロファイルフィールドで指定されたコースにリダイレクトされます。プロファイルに有効な値がない場合はデフォルトのコースにリダイレクトされます。</li>
</ol>
</p>';
$string['profilefield'] = 'プロファイルフィールド';
$string['profilefielddesc'] = 'これは、コースフィールドを照合するために、プロファイルリダイレクトブロックで使用されるユーザプロファイルのフィールドです。';
$string['coursefield'] = 'コースフィールド';
$string['coursefielddesc'] = 'これは、リダイレクトでユーザのプロファイルフィールドを照合するために、プロファイルリダイレクトブロックで使用されるコース設定のフィールドです。';
$string['defaultcourse'] = 'デフォルトのコース';
$string['defaultcoursedesc'] = 'これは、管理者以外のすべてのユーザのプロファイルフィールドで有効な値がない場合に、ブロックを表示するためにユーザがリダイレクトされるコースです。このフィールドには、コースフィールドドロップダウンの値に基づくコースの省略名、フルネーム、IDナンバーが必要になります';
$string['sysadmin'] = 'このブロックはサイト管理者に対してのみ表示されます';
$string['profile_redirect:addinstance'] = '新しいプロファイルリダイレクトブロックを追加する';
$string['profile_redirect:myaddinstance'] = 'プロファイルリダイレクトブロックのインスタンスをマイページに追加する';
$string['privacy:metadata'] = 'プロファイルリダイレクトプラグインでは個人情報を保存しません。';
