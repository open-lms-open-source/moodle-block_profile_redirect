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
 * Profile Redirect block class definition.
 *
 * @package    block_profile_redirect
 * @author     Jason Hardin, Chris Stones, and others.
 * @copyright  Copyright (c) 2013 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_profile_redirect extends block_base {
    
    function init() {
        $this->title = get_string('blockname', 'block_profile_redirect');
    }

    function applicable_formats() {
        return array('all' => false, 'site' => true, 'my' => true);
    }

    function get_content() {
        global $CFG, $USER, $DB;
        if ($this->content !== NULL) {
            return $this->content;
        }

        $context = context_system::instance();
        
        if (has_capability('moodle/site:config', $context)) { // 'moodle/site:doanything' no longer exists.
            $content = get_string('sysadmin','block_profile_redirect');
        } else {
            $config = get_config('blocks/profile_redirect');
            if (isset($config->profilefield)) {
                $coursefieldvalue = $config->defaultcourse;

                // Only Check these conditions if $USER global is fully set up.
                if ($USER->id == 0 ) {
                    $this->content = NULL;
                    return $this->content;
                }

                if (isset($USER->{$config->profilefield})) {
                    if (!empty($USER->{$config->profilefield})) {
                        $coursefieldvalue = $USER->{$config->profilefield};
                    }
                } else {
                    require_once($CFG->dirroot.'/user/profile/lib.php');
                    $proffields = profile_user_record($USER->id); // Return the custom profile fields.
                    if (!empty($proffields->{$config->profilefield})) {
                        $coursefieldvalue = $proffields->{$config->profilefield};
                    }
                }
                // $courefieldvalue must not be empty (if it's empty it redirects infinitly).
                // It also MUST return 1 record.
                $course = $DB->get_record('course',array($config->coursefield => $coursefieldvalue));

                if (!empty($coursefieldvalue) and !empty($course)) {
                    // Since M2 doesn't output any code we can redirect cleanly.
                    redirect($CFG->wwwroot.'/course/view.php?id='.$course->id,'',0);
                    $content = ''; // Moodle complains if this isn't set.
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
