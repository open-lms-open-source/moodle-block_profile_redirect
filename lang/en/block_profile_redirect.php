<?php
$string['pluginname'] =  'Profile Redirect';
$string['blockname'] = 'Profile Redirect';
$string['description'] ='Description';
$string['descriptiontxt'] = '<p>The profile redirect block is designed to redirect a user from the site front page or my moodle page the block is loaded on to a new course.  The new course the user is redirected to is based on a value in a profile field matching a value in the course fullname, shortname, or id number based on the site configurations below.</p>

<p>Remember that once the block settings are configured, an admin has to add an instance of the block to the the front page or my moodle page.  To do this follow the following steps:
<ol>
<li>Navigate to the front page, enable editing, select Profile Redirect fr Fom the \"Blocks\" block drop down.</li>
<li>Once the block is added all users will be directed to the course specified in their profile field or to the default course if no valid value is in their profile.</li>
</ol>
 </p>';
$string['profilefield'] = 'Profile Field';
$string['profilefielddesc'] = 'This is the field in a user\'s profile the profile redirect block will use to match against the course field.';
$string['coursefield'] = 'Course Field';
$string['coursefielddesc'] = 'This is the field in the course settings that the profile redirect block will use to match to the user\'s profile field for redirecting.';
$string['defaultcourse'] = 'Default Course';
$string['defaultcoursedesc'] = 'This is the course that all non-admin users will be directed to upon viewing the block if they do not have a valid value in their profile field.  This field should have the shortname, fullname, or course id number of the course based on value in the course field drop-down';
$string['sysadmin'] = 'This block only displays for Site Administrators';
$string['profile_redirect:addinstance'] = 'Add a new Profile Redirect block';
$string['profile_redirect:myaddinstance'] = 'Add an instance of Profile Redirect block to the my page';
