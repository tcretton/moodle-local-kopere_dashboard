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
 * @package    local_kopere_dashboard
 * @copyright  2017 Eduardo Kraus {@link http://eduardokraus.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['modulename'] = 'Kopere Dashboard';
$string['pluginname'] = 'Kopere Dashboard';
$string['kopere_dashboard:view'] = 'View Kopere Dashboard';
$string['kopere_dashboard:manage'] = 'anager Kopere Dashboard';
$string['settings'] = 'Settings';

$string['messageprovider:kopere_dashboard_messages'] = 'Send Notifications';
$string['kopere_dashboard:emailconfirmsubmission'] = 'Send Notifications';

$string['open_dashboard'] = 'Open Dashboard';

$string['dateformat'] = '%d %B %Y, %I:%M %p';
$string['datetime'] = '%d/%m/%y, %H:%M';
$string['php_datetime'] = 'm/d/Y H:i';

$string['help_title'] = 'Help with this page';

// html/TinyMce
$string['blocks'] = 'Blocks';
$string['blocks_paragraph'] = 'Paragraph';

$string['image_alignment'] = 'Image alignment';
$string['image_alignment_left'] = 'Left alignment';
$string['image_alignment_right'] = 'Right Alignment';

$string['colors'] = 'Colors';
$string['background'] = 'Backround';
$string['color_red'] = 'Red';
$string['color_blue'] = 'Blue';
$string['color_green'] = 'Green';
$string['color_yellow'] = 'Yellow';
$string['color_orange'] = 'Orange';
$string['color_grey'] = 'Grey';
$string['color_purple'] = 'Purple';
$string['color_brown'] = 'Brown';
$string['filemanager_title'] = 'File Manager';

// dataTables
$string['datatables_sEmptyTable'] = 'No records found';
$string['datatables_sInfo'] = 'Displaying _START_ to _END_ of _TOTAL_ records';
$string['datatables_sInfoEmpty'] = 'Displaying 0 to 0 of 0 records';
$string['datatables_sInfoFiltered'] = '(Filtered from _MAX_ records)';
$string['datatables_sInfoPostFix'] = '';
$string['datatables_sInfoThousands'] = '.';
$string['datatables_sLengthMenu'] = '_MENU_ results per page';
$string['datatables_sLoadingRecords'] = 'Loading ...';
$string['datatables_sProcessing'] = 'Processing ...';
$string['datatables_sZeroRecords'] = 'No records found';
$string['datatables_sSearch'] = 'Search:';
$string['datatables_oPaginate_sNext'] = 'Next';
$string['datatables_oPaginate_sPrevious'] = 'Previous';
$string['datatables_oPaginate_sFirst'] = 'First';
$string['datatables_oPaginate_sLast'] = 'Last';
$string['datatables_oAria_sSortAscending'] = ': Sort Columns Ascending';
$string['datatables_oAria_sSortDescending'] = ': Sorting columns in descending order';

// util/Navigation
$string['navigation_page'] = 'Page {$a->atualPage} of {$a->countPages}';

// About
$string['about_title'] = 'About';
$string['about_project'] = 'Open source project developed and maintained by';
$string['about_code'] = 'Code available in';
$string['about_help'] = 'Help is on';
$string['about_bug'] = 'Found some BUG or would like to suggest improvements open one';

// Backup
$string['backup_windows'] = 'Not available on Windows Server!';
$string['backup_hours'] = 'Do not run backup at peak times!';
$string['backup_sleep'] = 'Backup may take several minutes to execute.';
$string['backup_newnow'] = 'Create new Backup now';
$string['backup_noshell'] = 'shell_exec function is disabled!';
$string['backup_list'] = 'List of backups';
$string['backup_list_file'] = 'File';
$string['backup_list_created'] = 'Created in';
$string['backup_list_size'] = 'Size';
$string['backup_list_action'] = 'Action';
$string['backup_none'] = 'No backups found!';
$string['backup_execute_success'] = 'Backup created successfully!';
$string['backup_execute_exec'] = 'Execution of Backup';
$string['backup_execute_date'] = 'Generation date:';
$string['backup_execute_database'] = 'Database:';
$string['backup_execute_table'] = 'Running Table Backup';
$string['backup_execute_structure'] = 'Structure for table';
$string['backup_execute_dump'] = 'Dump table data';
$string['backup_execute_dump_error'] = 'Error catching table';
$string['backup_execute_complete'] = 'Backup completed!';
$string['backup_returnlist'] = 'Back to the Backups list';
$string['backup_deletesucessfull'] = 'Backup deleted successfully!';
$string['backup_deleting'] = 'Excluding Backup';
$string['backup_delete_confirm'] = 'Backup Deletion';
$string['backup_delete_title'] = 'Do you really want to delete the <strong>{$a->file}</strong> backup created in <strong>{$a->date}</strong>';
$string['backup_notound'] = 'File not found!';

// ReportBenchmark
$string['benchmark_title'] = 'Performance test';
$string['benchmark_based'] = 'Plug-in based';
$string['benchmark_info'] = '<p> This test can take up to 1 minute to execute.</p><p>Try to do more than one test for an average.</p><p>And, do not run in peak times.</p>';
$string['benchmark_execute'] = 'Run the test';
$string['benchmark_executing'] = 'Running the test';
$string['benchmark_title2'] = 'Hosting performance test';
$string['benchmark_timetotal'] = 'Total time:';
$string['benchmark_decription'] = 'Description';
$string['benchmark_timesec'] = 'Time, in seconds';
$string['benchmark_seconds'] = 'seconds';
$string['benchmark_max'] = 'Maximum acceptable value';
$string['benchmark_critical'] = 'Critical limit';
$string['benchmark_testconf'] = 'Test Moodle Settings';
$string['benchmark_testconf_problem'] = 'Problem';
$string['benchmark_testconf_status'] = 'Status';
$string['benchmark_testconf_description'] = 'Description';
$string['benchmark_testconf_action'] = 'Action';

$string['cloadname']            = 'Moodle loading time';
$string['cloadmoreinfo']        = 'Run the configuration file &laquo;config.php&raquo;';
$string['processorname']        = 'Function called many times';
$string['processormoreinfo']    = 'A function is called in a loop to test processor speed';
$string['filereadname']         = 'Reading files';
$string['filereadmoreinfo']     = 'Test the read speed in Moodle\'s temporary folder';
$string['filewritename']        = 'Creating files';
$string['filewritemoreinfo']    = 'Test the write speed in Moodle\'s temporary folder';
$string['coursereadname']       = 'Reading course';
$string['coursereadmoreinfo']   = 'Test the read speed to read a course';
$string['coursewritename']      = 'Writing course';
$string['coursewritemoreinfo']  = 'Test the database speed to write a course';
$string['querytype1name']       = 'Complex request (n°1)';
$string['querytype1moreinfo']   = 'Test the database speed to execute a complex request';
$string['querytype2name']       = 'Complex request (n°2)';
$string['querytype2moreinfo']   = 'Test the database speed to execute a complex request';
$string['loginguestname']       = 'Time to connect with the guest account';
$string['loginguestmoreinfo']   = 'Measuring the time to load the login page with the guest account';
$string['loginusername']        = 'Time to connect with a fake user account';
$string['loginusermoreinfo']    = 'Measuring the time to load the login page with a fake user account';

//Courses
$string['courses_title'] = 'Courses';
$string['courses_title1'] = 'Course List';
$string['courses_name'] = 'Course Name';
$string['courses_shortname'] = 'Short Name';
$string['courses_visible'] = 'Visible';
$string['courses_enrol'] = 'Nº of enrolled students';
$string['courses_invalid'] = 'Invalid CourseID!';
$string['courses_notound'] = 'Course not found!';
$string['courses_sumary'] = 'Summary';
$string['courses_edit'] = 'Edit';
$string['courses_acess'] = 'Access';
$string['courses_titleenrol'] = 'Students enrolled';
$string['courses_student_name'] = 'Name';
$string['courses_student_email'] = 'E-mail';
$string['courses_student_status'] = 'Registration Status';
$string['courses_page_title'] = 'Pages already created';
$string['courses_page_create'] = 'Create page based on this summary';

//  Reports
$string['reports_title'] = 'Reports';

// Dashboard
$string['dashboard_title_user'] = 'Users / Assets';
$string['dashboard_title_online'] = 'Online / Last hour';
$string['dashboard_title_course'] = 'Courses / Visible';
$string['dashboard_title_disk'] = 'Disk Usage';
$string['dashboard_grade_title'] = 'Latest notes';
$string['dashboard_grade_inmod'] = 'in module <strong>{$a->itemname}</strong> in course <a href="?Courses::details&courseid={$a->courseid}">{$a->coursename}</a>';
$string['dashboard_grade_incourse'] = 'in course <a href="?Courses::details&courseid={$a->courseid}">{$a->coursename}</a>';
$string['dashboard_grade_of'] = 'of';
$string['dashboard_grade_text'] = 'Received note {$a->grade} in {$a->evaluation}';
$string['dashboard_grade_in'] = 'In';
$string['dashboard_enrol_title'] = 'Last Enrollment';
$string['dashboard_enrol_inactive'] = 'the registration is inactive';
$string['dashboard_enrol_active'] = 'the registration is active';
$string['dashboard_enrol_text'] = 'You have enrolled in the course <a href="?Courses::details&courseid={$a->courseid}">{$a->fullname}</a> and';
$string['dashboard_enrol_lastmodifield'] = 'Last change in';

// Notifications
$string['notification_title'] = 'Notifications';
$string['notification_subtitle'] = '<p>Receive notifications whenever an action occurs in Moodle.</p>';
$string['notification_new'] = 'New notification';
$string['notification_table_module'] = 'Module';
$string['notification_table_action'] = 'Action';
$string['notification_table_subject'] = 'Subject';
$string['notification_table_active'] = 'Active';
$string['notification_table_empty'] = 'No notification!';
$string['notification_add_module'] = 'Which module do you want to receive notification of?';
$string['notification_add_moduledesc'] = 'Modules / Unused Activities do not appear!';
$string['notification_add_selectmodule'] = 'Select Module!';
$string['notification_add_action'] = 'Which action do you want to receive notifications?';
$string['notification_add_create'] = 'Create notification';
$string['notification_notound'] = 'Notification not found!';
$string['notification_editing'] = 'Editing Notification';
$string['notification_from'] = 'From';
$string['notification_fromdesc'] = 'Who will be the sender of the message?';
$string['notification_from_admin'] = 'Site Administrator';
$string['notification_to'] = 'To';
$string['notification_todesc'] = 'Who will receive these messages?';
$string['notification_todesc_admin'] = 'Site Administrator (Primary only)';
$string['notification_todesc_admins'] = 'Site Administrators (All Administrators)';
$string['notification_todesc_teachers'] = 'Course teachers (Only if it is within a course)';
$string['notification_todesc_student'] = 'The Student (Send to the student who did the action)';
$string['notification_status'] = 'Status';
$string['notification_statusdesc'] = 'If you want to stop notifications, mark it as "Idle" and save!';
$string['notification_status_active'] = 'Active';
$string['notification_status_inactive'] = 'Inactive';
$string['notification_subject'] = 'Subject';
$string['notification_subjectdesc'] = 'Message subject';
$string['notification_message_html'] = '<p>Hi {[to.fullname]},</p><p>&nbsp;</p><p>Att,<br>{[from.fullname]}.</p>';;
$string['notification_message'] = 'Message';
$string['notification_update'] = 'Update alert';
$string['notification_create'] = 'Create alert';
$string['notification_created'] = 'Notification created!';
$string['notification_notfound'] = 'Notification not found!';
$string['notification_delete_success'] = 'Notification deleted successfully!';
$string['notification_delete_yes'] = 'Do you really want to delete this Notification?';
$string['notification_setting_config'] = 'E-mail Settings';
$string['notification_setting_template'] = 'Template';
$string['notification_setting_templatelocation'] = 'Templates are in the folder';
$string['notification_setting_preview'] = 'Preview';
$string['notification_manager'] = 'Manage Messages';
$string['notification_core_course_category'] = 'Course Category';
$string['notification_core_course'] = 'Courses';
$string['notification_core_user'] = 'Users';
$string['notification_core_user_enrolment'] = 'User Registration';
$string['notification_local_kopere_dashboard_hotmoodle'] = 'Kopere HotMoodle';
$string['notification_local_kopere_dashboard_moocommerce'] = 'Kopere MooCommerce';
$string['notification_local_kopere_dashboard_payment'] = 'Kopere Payment';
$string['notification_error_smtp'] = '<p>In order for students to receive the messages, SMTP must be configured.</p>
                    <p><a href="https://moodle.eduardokraus.com/configurar-o-smtp-no-moodle"
                          target="_blank">Read here how to configure SMTP</a></p>
                    <p><a href="$CFG->wwwroot/admin/settings.php?section=$a"
                          target="_blank">Click here to configure email output</a></p>';

// Profile
$string['profile_invalid'] = 'Invalid UserId!';
$string['profile_notfound'] = 'User not found!';
$string['profile_title'] = 'Users';
$string['profile_notenrol'] = 'User has no registration!';
$string['profile_edit'] = 'Edit';
$string['profile_enrol_inactive'] = 'Registration is inactive';
$string['profile_enrol_active'] = 'Registration is active';
$string['profile_enrol_expires'] = 'Expires on';
$string['profile_enrol_notexpires'] = 'and never expires';
$string['profile_enrol_start'] = 'Start at';
$string['profile_enrol_profile'] = 'Profiles';
$string['profile_access_title'] = 'Access';
$string['profile_access_first'] = 'First access in:';
$string['profile_access_last'] = 'Last access on:';
$string['profile_access_lastlogin'] = 'Last login on:';
$string['profile_userdate_title'] = 'Data';
$string['profile_link_title'] = 'Useful Links';
$string['profile_link_profile'] = 'View profile';
$string['profile_link_edit'] = 'Edit Profile';
$string['profile_access'] = 'Access as';
$string['profile_courses_title'] = 'Registered Courses';

// Settings
$string['setting_saved'] = 'Settings saved!';

// UserEnrolment
$string['userenrolment_notfound'] = 'User Enrolment not found!';
$string['userenrolment_edit'] = 'Edit registration date';
$string['userenrolment_status'] = 'Registration is';
$string['userenrolment_status_active'] = 'Active';
$string['userenrolment_status_inactive'] = 'Inactive';
$string['userenrolment_timestart'] = 'The subscription starts at';
$string['userenrolment_timeendstatus'] = 'Enable subscription term';
$string['userenrolment_timeend'] = 'The subscription ends in';
$string['userenrolment_created'] = 'Enrollment created in';
$string['userenrolment_updated'] = 'Enrollment last modified in';
$string['userenrolment_updatesuccess'] = 'Enrollment changed successfully!';

// User
$string['user_title'] = 'Users';
$string['user_table_fullname'] = 'Name';
$string['user_table_username'] = 'Username';
$string['user_table_email'] = 'E-mail';
$string['user_table_phone'] = 'Fixed Phone';
$string['user_table_celphone'] = 'Mobile';
$string['user_table_city'] = 'City';

// UsersOnline
$string['useronline_title'] = 'Online Users';
$string['useronline_subtitle'] = 'Open tabs with Moodle';
$string['useronline_table_fullname'] = 'Name';
$string['useronline_table_date'] = 'Data';
$string['useronline_table_page'] = 'Page';
$string['useronline_table_focus'] = 'Focus';
$string['useronline_table_screen'] = 'Monitor';
$string['useronline_table_navigator'] = 'Browser';
$string['useronline_table_os'] = 'Operating System';
$string['useronline_table_device'] = 'Device';
$string['useronline_settings_title'] = 'Server Settings Online User Synchronization';
$string['useronline_settings_status'] = 'Enable Online Users Synchronization Server';
$string['useronline_settings_ssl'] = 'Enable SSL?';
$string['useronline_settings_url'] = 'Server URL';
$string['useronline_settings_port'] = 'Server port';

// WebPages
$string['webpages_title'] = 'Static Pages';
$string['webpages_subtitle'] = 'Navigation Menus';
$string['webpages_table_link'] = 'Link';
$string['webpages_table_title'] = 'Title';
$string['webpages_table_visible'] = 'Visible';
$string['webpages_table_order'] = 'Order';
$string['webpages_table_theme'] = 'Layout';
$string['webpages_table_text'] = 'Text';
$string['webpages_page_title'] = 'Title';
$string['webpages_page_menu'] = 'Menu';
$string['webpages_page_create'] = 'Create new page';
$string['webpages_page_crash'] = 'If you change the Moodle URL and the images give CRASH, click here';
$string['webpages_page_notfound'] = 'Page not found!';
$string['webpages_page_view'] = 'View page';
$string['webpages_page_edit'] = 'Edit page';
$string['webpages_page_delete'] = 'Delete page';
$string['webpages_page_course'] = 'Linked Course';
$string['webpages_page_new'] = 'New page';
$string['webpages_page_edit'] = 'Editing page';
$string['webpages_page_save'] = 'Save page';
$string['webpages_page_error'] = 'All data must be filled in!';
$string['webpages_page_created'] = 'Created page!';
$string['webpages_page_updated'] = 'Updated page!';
$string['webpages_page_deleted'] = 'Page successfully deleted!';
$string['webpages_page_delete'] = 'Excluding Page';
$string['webpages_page_delete_confirm'] = 'Do you really want to delete the page <strong>{$a->title}</strong>?';
$string['webpages_menu_create'] = 'Create new Menu';
$string['webpages_menu_help'] = 'Help with Menus';
$string['webpages_menu_new'] = 'New Menu';
$string['webpages_menu_edit'] = 'Editing Menu';
$string['webpages_menu_title'] = 'Menu Title';
$string['webpages_menu_link'] = 'Menu Link';
$string['webpages_menu_save'] = 'Save';
$string['webpages_menu_error'] = 'All data must be filled in!';
$string['webpages_menu_updated'] = 'Menu updated!';
$string['webpages_menu_created'] = 'Menu created!';
$string['webpages_menu_deleted'] = 'Menu deleted successfully!';
$string['webpages_menu_subtitle'] = 'Static Menu';
$string['webpages_menu_delete'] = 'Excluding Menu';
$string['webpages_page_settigs'] = 'Static Pages Settings';
$string['webpages_page_theme'] = 'Page Layout "All Pages"';
$string['webpages_page_analytics'] = 'Google Analytics Tracking ID';
$string['webpages_page_analyticsdesc'] = 'Sequence of 13 characters, starting in UA';
$string['webpages_theme_base'] = 'The layout without the blocks';
$string['webpages_theme_standard'] = 'Default layout with blocks';
$string['webpages_theme_frontpage'] = 'Layout of the site\'s home page.';
$string['webpages_theme_popup'] = 'No navigation, no blocks, no header';
$string['webpages_theme_frametop'] = 'No blocks and minimum footer';
$string['webpages_theme_print'] = 'Must only display content and basic headers';
$string['webpages_theme_report'] = 'The page layout used for reporting';
$string['webpages_allpages'] = 'All pages';

