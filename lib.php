<?php
/**
 * Return user fields and custom fields
 * 
 * @return array of userfields without the id fields 
 */
 function block_profile_redirect_profile_fields() {
     global $CFG, $USER, $DB;
     
     $userfields = array();
     
/// Load library to get all custom profile fields and values
    require_once($CFG->dirroot.'/user/profile/lib.php');

/// Only grab the custom profile fields that can contain a course's full name
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
     
/// Add the Rest of the userfields
     $corefields = array('idnumber', 'institution', 'country', 'city', 'language', 'department');
     
     foreach($corefields as $dontcare=> $fieldname) {          
        $userfields[$fieldname] = get_string($fieldname);
     }
     return $userfields;
 }
?>