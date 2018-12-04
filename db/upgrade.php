<?php
/**
 * @author Dan Abel <dan@webmarmalade.co.uk>
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package moodle / wordpress single sign on (wp2moodle)
 *
 * source https://github.com/frumbert/wp2moodle-moodle
 * Authentication Plugin: Wordpress 2 Moodle Single Sign On
 *
 * 2018-12-04  File created.
 */
defined('MOODLE_INTERNAL') || die();

function xmldb_auth_wp2moodle_upgrade($oldversion) {
    global $CFG;

    // Automatically generated Moodle v3.2.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.3.0 release upgrade line.
    // Put any upgrade step following this.
    $upgradeversion = 2017081401; // Used last known version + 1
    if ($oldversion < $upgradeversion) {
        // Convert info in config plugins from auth/wp2moodle to auth_wp2moodle.
        upgrade_fix_config_auth_plugin_names('wp2moodle');
        upgrade_fix_config_auth_plugin_defaults('wp2moodle');
        upgrade_plugin_savepoint(true, $upgradeversion, 'auth', 'wp2moodle');
    }

    // Automatically generated Moodle v3.4.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.5.0 release upgrade line.
    // Put any upgrade step following this.

    return true;
}
