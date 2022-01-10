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
 * @copyright  Copyright (c) 2022 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'إعادة توجيه ملف التعريف';
$string['blockname'] = 'إعادة توجيه ملف التعريف';
$string['description'] = 'الوصف';
$string['descriptiontxt'] = '<p>يتم تصميم كتلة "إعادة توجيه ملف التعريف" لإعادة توجيه المستخدم من الصفحة الأمامية للموقع أو صفحة "Moodle الخاص بي" التي تحتوي على الكتلة إلى
مقرر دراسي جديد.  يستند المقرر الدراسي الجديد الذي يتم إعادة توجيه المستخدم إليه إلى قيمة في حقل ملف التعريف تطابق القيمة الموجودة في الاسم الكامل للمقرر الدراسي أو الاسم المختصر أو رقم التعريف الذي يستند إلى تكوينات الموقع أدناه.</p>

<p>تذكر أنه بمجرد تكوين إعدادات الكتلة، يحتاج المسؤول إلى إضافة مثيل للكتلة في الصحة الأمامية أو صفحة "Moodle
الخاصة بي".  للقيام بذلك، أكمل الخطوات التالية:
<ol>
<li>قم بالانتقال إلى الصفحة الأمامية، وتمكين التحرير وتحديد "إعادة توجيه ملف التعريف" من القائمة المنسدلة للكتلة "Add a Block" (إضافة كتلة).</li>
<li>بمجرد إضافة الكتلة، سيتم إعادة توجيه جميع المستخدمين إلى المقرر الدراسي المحدد في حقل ملف التعريف الخاص بهم أو إلى المقرر الدراسي الافتراضي إذا
لم يكن هناك قيمة صالحة في ملف التعريف الخاص بهم.</li>
</ol>
</p>';
$string['profilefield'] = 'حقل ملف التعريف';
$string['profilefielddesc'] = 'يعد هذا الحقل هو الحقل الموجود في ملف تعريف المستخدم الذي ستستخدمه كتلة "إعادة توجيه ملف التعريف" في المطابقة مقابل
حقل المقرر الدراسي.';
$string['coursefield'] = 'حقل المقرر الدراسي';
$string['coursefielddesc'] = 'يعد هذا الحقل هو الحقل الموجود في إعدادات المقرر الدراسي الذي ستستخدمه كتلة "إعادة توجيه ملف التعريف" في المطابقة مع
حقل ملف تعريف المستخدم لإعادة التوجيه.';
$string['defaultcourse'] = 'المقرر الدراسي الافتراضي';
$string['defaultcoursedesc'] = 'يعد هذا هو المقرر الدراسي الذي سيتم توجيه جميع المستخدمين غير المسؤولين إليه عند عرض الكتلة إذا
لم يكن لديهم قيمة صالحة في حقل ملف التعريف الخاص بهم.  ينبغي أن يكون لهذا الحقل الاسم المختصر أو الاسم الكامل أو رقم معرف المقرر الدراسي للمقرر الدراسي وفقًا لقيمة موجودة في القائمة المنسدلة لحقل المقرر الدراسي';
$string['sysadmin'] = 'لا يتم عرض هذه الكتلة إلا "لمسؤولي الموقع"';
$string['profile_redirect:addinstance'] = 'إضافة كتلة جديدة لـ "إعادة توجيه ملف التعريف"';
$string['profile_redirect:myaddinstance'] = 'إضافة مثيل خاص بكتلة "إعادة توجيه ملف التعريف" إلى الصفحة الخاصة بي';
$string['privacy:metadata'] = 'لا يُخزن المكون الإضافي "إعادة توجيه ملف التعريف" أية بيانات شخصية.';
