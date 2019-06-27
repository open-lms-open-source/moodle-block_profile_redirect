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
 * @copyright  Copyright (c) 2019 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'プロファイルリダイレクト';
$string['blockname'] = 'プロファイルリダイレクト';
$string['description'] = '説明';
$string['descriptiontxt'] = '<p>プロファイルリダイレクトブロックは、ブロックを含むサイトフロントページやマイMoodleページから新しいコースにユーザをリダイレクトするように設計されています。
 ユーザがリダイレクトされる新しいコースは、コースのフルネーム、省略名、または以下のサイト設定に基づくIDナンバーと一致するプロファイルフィールドの値が基準になります</p>

<p>ブロック設定が設定された後に、管理者はブロックのインスタンスをフロントページまたはマイMoodleページに追加する必要があります。
追加するには、以下のステップを実行します。
<ol>
<li>フロントページに移動し、編集を有効にしてから、[ブロックを追加する]ブロックのドロップダウンで[プロファイルリダイレクト]を選択します。</li>
<li>ブロックを追加すると、すべてのユーザが、プロファイル定義で指定されたコースにリダイレクトされます。有効な値がプロファイルにない場合は、
デフォルトのコースにリダイレクトされます。</li>
</ol>
 </p>';
$string['profilefield'] = 'プロファイルフィールド';
$string['profilefielddesc'] = 'これは、コースフィールドを照合するために、プロファイルリダイレクトブロックで使用されるユーザプロファイルの
フィールドです。';
$string['coursefield'] = 'コースフィールド';
$string['coursefielddesc'] = 'これは、リダイレクトでユーザのプロファイルフィールドを照合するために、プロファイルリダイレクトブロックで使用される
コース設定のフィールドです。';
$string['defaultcourse'] = 'デフォルトのコース';
$string['defaultcoursedesc'] = 'これは、管理者以外のすべてのユーザのプロファイルフィールドで有効な値がない場合に、ブロックを表示するために
ユーザがリダイレクトされるコースです。このフィールドには、コースフィールドドロップダウンの値に基づくコースの省略名、フルネーム、IDナンバーが必要になります';
$string['sysadmin'] = 'このブロックはサイト管理者に対してのみ表示されます';
$string['profile_redirect:addinstance'] = '新しいプロファイルリダイレクトブロックを追加する';
$string['profile_redirect:myaddinstance'] = 'プロファイルリダイレクトブロックのインスタンスをマイページに追加する';
$string['privacy:metadata'] = 'プロファイルリダイレクトプラグインでは個人情報を保存しません。';
