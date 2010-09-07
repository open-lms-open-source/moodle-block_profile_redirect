<?php

require_once('lib.php');
$configs = array();

$configs[] = new admin_setting_heading('profiledesc', get_string('description', 'block_profile_redirect'), get_string('descriptiontxt', 'block_profile_redirect'));

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

?>