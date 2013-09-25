<?php
$capabilities = array(

    'block/profile_redirect:addinstance' => array(
        'riskbitmask'          => RISK_SPAM | RISK_XSS,

        'captype'              => 'write',
        'contextlevel'         => CONTEXT_BLOCK,
        'archetypes'           => array(
            'editingteacher' => CAP_ALLOW,
            'manager'        => CAP_ALLOW
        ),

        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),

     'block/profile_redirect:myaddinstance' => array(
         'captype' => 'write',
         'contextlevel' => CONTEXT_SYSTEM,
         'archetypes' => array(
            'user' => CAP_ALLOW
        ),

        'clonepermissionsfrom' => 'moodle/my:manageblocks'
     )
);
