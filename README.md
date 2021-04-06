# Profile Redirect Block
The Profile Redirect block allows your institution to automatically redirect a user from
the front page of the site or the My Moodle page (depending on the location of the 
Redirect block) to a different course. The course that the user is redirected to is based
on a value in a mapped profile field that matches the value in a specified field within
the course settings. This block provides clients with flexibility in their user’s
landing page beyond the front page and My Moodle page.

This plugin was contributed by the Open LMS Product Development team. Open LMS is an education technology company
dedicated to bringing excellent online teaching to institutions across the globe.  We serve colleges and universities,
schools and organizations by supporting the software that educators use to manage and deliver instructional content to
learners in virtual classrooms.

## Installation
Extract the contents of the plugin into _/wwwroot/blocks_ then visit `admin/upgrade.php` or use the CLI script to upgrade your site.

### Usage
The block can be added to the front page or to a specific course.

#### Front page
To use the plugin please go to *Administration > Turn editing on > Add a block > Profile Redirect*

When you add and configure the Profile Redirect block on the front page, once the user logs into the site, the front page is redirected to the specific profile setting.

1. From Administration select Turn editing on.
2. From the Add a block area, select Profile Redirect.
   The Profile Redirect block is added to the front page.
   
   ![block_profile_redirect](https://help.openlms.net/wp-content/uploads/2020/05/profile-redirect-block-1.jpg)
   
   The block is not marked and is only available when the Turn editing on is enabled.

For more information about the configuration on the redirect and usage, please see https://help.openlms.net/en/administrator/manage-a-site/redirect-users-to-different-landing-pages-2/

## License
Copyright (c) 2021 Open LMS (https://www.openlms.net)

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <http://www.gnu.org/licenses/>.
