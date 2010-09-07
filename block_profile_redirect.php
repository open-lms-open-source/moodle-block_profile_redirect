<?php
class block_profile_redirect extends block_base {
    
    function init() {
        global $CFG;
        
        $this->title = get_string('blockname', 'block_profile_redirect');
        $this->version = 2009041700;
    }

    function applicable_formats() {
        return array('all' => false, 'site' => true, 'my' => true);
    }

    function get_content() {
        global $CFG, $USER;
        if ($this->content !== NULL) {
            return $this->content;
        }
        
        $context = get_context_instance(CONTEXT_SYSTEM);
        
        if (has_capability('moodle/site:doanything', $context)) {
            $content = get_string('sysadmin','block_profile_redirect');
        } else {
             $config = get_config('blocks/profile_redirect');
             if(isset($config->profilefield)){
                 $coursefieldvalue = $config->defaultcourse;

                 if(isset($USER->{$config->profilefield})){
                     if(!empty($USER->{$config->profilefield})){
                        $coursefieldvalue = $USER->{$config->profilefield};
                     }
                 } else {
                     require_once($CFG->dirroot.'/user/profile/lib.php');
                     $proffields = profile_user_record($USER->id); // return the custom profile fields
                     if(!empty($proffields->{$config->profilefield})){
                        $shortname = $proffields->{$config->profilefield};
                     }
                 }
                 // $courefieldvalue must not be empty (if it's empty it redirects infinitly)
                 // It also MUST return 1 record.
                 $course = get_record('course',$config->coursefield,$coursefieldvalue);

                 if (!empty($coursefieldvalue) and !empty($course) ) {
					//Switched out Core's redirect because it prints a continue button and profile redirect needs to be as clean as possible.
                     echo '<script type="text/javascript">
					//<![CDATA[

					  function redirect() {
					      document.location.replace(\''. addslashes_js($CFG->wwwroot.'/course/view.php?id='.$course->id) .'\');
					  }
					  setTimeout("redirect()", 0);
					//]]>
					</script>';
                 } else {
                     $content = '';
                 }
             } else {
                 $content = '';
             }
        }
        $this->content = new stdClass;
        $this->content->text = $content;
        $this->content->footer = '';

        return $this->content;
    }
    
    function hide_header() {
        return true;
    }
    
    function has_config() {
        return true;
    }
    
        
}
?>