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
 * Profile Redirect block lang file.
 *
 * @package    block_profile_redirect
 * @author     Jason Hardin, Chris Stones, and others.
 * @copyright  Copyright (c) 2013 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Profile Redirect';
$string['blockname'] = 'Profile Redirect';
$string['description'] = 'Description';
$string['descriptiontxt'] = '<p>The Profile Redirect block is designed to redirect a user from the site front page or My Moodle page containing the block to
 a new course.  The new course the user is redirected to is based on a value in a profile field matching a value in the course fullname, shortname, or id number based on the site configurations below.</p>

<p>Remember that once the block settings are configured, an admin needs to add an instance of the block to the front page or My
Moodle page.  To do this, complete the following steps:
<ol>
<li>Navigate to the front page, enable editing, and select Profile Redirect from the "Add a Block" block drop-down.</li>
<li>Once the block is added, all users will be redirected to the course specified in their profile field or to the default course if
no valid value is in their profile.</li>
</ol>
 </p>';
$string['profilefield'] = 'Profile Field';
$string['profilefielddesc'] = 'This is the field in a user\'s profile the Profile Redirect block will use to match against the
course field.';
$string['coursefield'] = 'Course Field';
$string['coursefielddesc'] = 'This is the field in the course settings that the Profile Redirect block will use to match to the
user\'s profile field for redirecting.';
$string['defaultcourse'] = 'Default Course';
$string['defaultcoursedesc'] = 'This is the course that all non-admin users will be directed to upon viewing the block if they do
 not have a valid value in their profile field.  This field should have the shortname, fullname, or course id number of the course based on value in the course field drop-down';
$string['sysadmin'] = 'This block only displays for Site Administrators';
$string['profile_redirect:addinstance'] = 'Add a new Profile Redirect block';
$string['profile_redirect:myaddinstance'] = 'Add an instance of Profile Redirect block to the my page';
$string['privacy:metadata'] = 'The Profile Redirect plugin does not store any personal data.';
