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
 * Profile Redirect block library functions.
 *
 * @package    block_profile_redirect
 * @author     Jason Hardin, Chris Stones, and others.
 * @copyright  Copyright (c) 2013 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Return user fields and custom fields
 * 
 * @return array of userfields without the id fields 
 */
function block_profile_redirect_profile_fields() {
    global $CFG, $DB;

    $userfields = array();

    // Load library to get all custom profile fields and values.
    require_once($CFG->dirroot.'/user/profile/lib.php');

    // Only grab the custom profile fields that can contain a course's full name.
    if ($fields = $DB->get_records_select('user_info_field','')) {
        foreach ($fields as $field) {
            require_once($CFG->dirroot.'/user/profile/field/'.$field->datatype.'/field.class.php');
            $newfield = 'profile_field_'.$field->datatype;
            $formfield = new $newfield($field->id);
            if ($formfield->is_user_object_data()){
                $userfields[$field->shortname] = format_string($field->name);
            }
        }
    }

    // Add the Rest of the userfields.
    $corefields = array('idnumber', 'institution', 'country', 'city', 'language', 'department');

    foreach($corefields as $fieldname) {
        $userfields[$fieldname] = get_string($fieldname);
    }
    return $userfields;
}
