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
 * Profile Redirect settings.
 *
 * @package    block_profile_redirect
 * @author     Jason Hardin, Chris Stones, and others.
 * @copyright  Copyright (c) 2013 Moodlerooms, Inc. (www.moodlerooms.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if ($ADMIN->fulltree) {
    require_once($CFG->dirroot.'/blocks/profile_redirect/lib.php');
    $configs = array();

    $configs[] = new admin_setting_heading('profiledesc', get_string('description', 'block_profile_redirect'),
            get_string('descriptiontxt', 'block_profile_redirect'));

    $configs[] = new admin_setting_configselect('profilefield', get_string('profilefield', 'block_profile_redirect'),
            get_string('profilefielddesc', 'block_profile_redirect'), 'institution', block_profile_redirect_profile_fields());

    $options = array('shortname' => get_string('shortname'),
                     'fullname'  => get_string('fullname'),
                     'idnumber'  => get_string('idnumber'));

    $configs[] = new admin_setting_configselect('coursefield', get_string('coursefield', 'block_profile_redirect'),
            get_string('coursefielddesc', 'block_profile_redirect'), 'shortname', $options);

    $configs[] = new admin_setting_configtext('defaultcourse', get_string('defaultcourse', 'block_profile_redirect'),
            get_string('defaultcoursedesc', 'block_profile_redirect'),'', PARAM_TEXT);

    foreach ($configs as $config) {
        $config->plugin = 'blocks/profile_redirect';
        $settings->add($config);
    }
}