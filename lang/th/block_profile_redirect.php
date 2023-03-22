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
 * @copyright  Copyright (c) 2023 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'การเปลี่ยนเส้นทางประวัติส่วนตัว';
$string['blockname'] = 'การเปลี่ยนเส้นทางประวัติส่วนตัว';
$string['description'] = 'คำอธิบาย';
$string['descriptiontxt'] = '<p>บล็อกการเปลี่ยนเส้นทางโปรไฟล์ออกแบบมาเพื่อเปลี่ยนเส้นทางผู้ใช้งานจากหน้าแรกของไซต์หรือหน้า My Moodle ที่มีบล็อก
ไปยังรายวิชาใหม่ รายวิชาใหม่ที่ผู้ใช้งานถูกเปลี่ยนเส้นทางไปถึงจะยึดตามค่าในฟิลด์โปรไฟล์ที่ตรงกับค่าในชื่อเต็ม ชื่อย่อ หรือหมายเลข ID ของรายวิชา ขึ้นอยู่กับการกำหนดค่าไซต์ที่ด้านล่าง</p>

<p>โปรดจำไว้ว่าเมื่อกำหนดค่าการตั้งค่าบล็อกแล้ว ผู้ดูแลระบบจำเป็นต้องเพิ่มอินสแตนซ์ของบล็อกลงในหน้าแรกหรือหน้า My
Moodle เพื่อทำเช่นนี้ ให้ดำเนินการตามขั้นตอนเหล่านี้:
<ol>
<li>นาวิเกตไปยังหน้าแรก เปิดใช้งานการแก้ไข และเลือก การเปลี่ยนเส้นทางโปรไฟล์ จากดร็อปดาวน์ของบล็อก "เพิ่มบล็อก"</li>
<li>เมื่อเพิ่มบล็อกแล้ว ผู้ใช้งานทั้งหมดจะถูกเปลี่ยนเส้นทางไปยังรายวิชาที่ระบุไว้ในฟิลด์โปรไฟล์ของพวกเขา หรือไปยังรายวิชาตามค่าเริ่มต้นหาก
ไม่มีค่าที่ถูกต้องอยู่ในโปรไฟล์ของพวกเขา</li>
</ol>
</p>';
$string['profilefield'] = 'ฟิลด์โปรไฟล์';
$string['profilefielddesc'] = 'นี่คือฟิลด์ในโปรไฟล์ของผู้ใช้งานที่บล็อกการเปลี่ยนเส้นทางโปรไฟล์จะใช้เพื่อจับคู่กับ
ฟิลด์รายวิชา';
$string['coursefield'] = 'ฟิลด์รายวิชา';
$string['coursefielddesc'] = 'นี่คือฟิลด์ในการตั้งค่ารายวิชาที่บล็อกการเปลี่ยนเส้นทางโปรไฟล์จะใช้เพื่อจับคู่กับ
ฟิลด์โปรไฟล์ของผู้ใช้งานสำหรับการเปลี่ยนเส้นทาง';
$string['defaultcourse'] = 'รายวิชาเริ่มต้น';
$string['defaultcoursedesc'] = 'นี่คือรายวิชาที่ผู้ใช้งานทั้งหมดที่ไม่ใช่ผู้ดูแลระบบจะถูกนำทางมาถึงเมื่อดูบล็อกในกรณีที่พวกเขา
ไม่มีค่าที่ถูกต้องในฟิลด์โปรไฟล์ ฟิลด์นี้ควรมีชื่อย่อ ชื่อเต็ม หรือหมายเลข ID ของรายวิชาตามค่าในดร็อปดาวน์ฟิลด์รายวิชา';
$string['sysadmin'] = 'บล็อกนี้จะแสดงขึ้นสำหรับผู้ดูแลเว็บไซต์เท่านั้น';
$string['profile_redirect:addinstance'] = 'เพิ่มบล็อกการเปลี่ยนเส้นทางประวัติส่วนตัวใหม่';
$string['profile_redirect:myaddinstance'] = 'เพิ่มกรณีตัวอย่างของการเปลี่ยนเส้นทางประวัติส่วนตัวไปยังหน้าของฉัน';
$string['privacy:metadata'] = 'ปลั๊กอินการเปลี่ยนเส้นทางประวัติส่วนตัวจะไม่เก็บข้อมูลส่วนบุคคลใดๆ';
