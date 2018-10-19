<?php
/**
 * Search area for block_profile_redirect blocks
 *
 * @package block_profile_redirect
 * @copyright Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_profile_redirect\search;

use core_search\moodle_recordset;

defined('MOODLE_INTERNAL') || die();

/**
 * Search area for block_profile_redirect blocks
 *
 * @package block_profile_redirect
 * @copyright Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class content extends \core_search\base_block {

    public function get_document($record, $options = array()) {
        // Create empty document.
        $doc = \core_search\document_factory::instance($record->id,
            $this->componentname, $this->areaname);

        // Get stdclass object with data from DB.
        $data = unserialize(base64_decode($record->configdata));

        // Get content.
        $content = content_to_text($data->text['text'], $data->text['format']);
        $doc->set('content', $content);

        if (isset($data->title)) {
            // If there is a title, use it as title.
            $doc->set('title', content_to_text($data->title, false));
        } else {
            // If there is no title, use the content text again.
            $doc->set('title', shorten_text($content));
        }

        // Set standard fields.
        $doc->set('contextid', $record->contextid);
        $doc->set('type', \core_search\manager::TYPE_TEXT);
        $doc->set('courseid', $record->courseid);
        $doc->set('modified', $record->timemodified);
        $doc->set('owneruserid', \core_search\manager::NO_OWNER_ID);

        // Mark document new if appropriate.
        if (isset($options['lastindexedtime']) &&
            ($options['lastindexedtime'] < $record->timecreated)) {
            // If the document was created after the last index time, it must be new.
            $doc->set_is_new(true);
        }

        return $doc;
    }
}