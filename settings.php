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
defined('MOODLE_INTERNAL') || die;
if ($ADMIN->fulltree) {
    /**
     * @see lib/moodle.lib.php for PARA_XXX definitions
     */

    // $name, $visiblename, $description, $defaultsetting, $paramtype=PARAM_RAW,  $size=null
    $settings->add(new admin_setting_configtext(
        'auth_wp2moodle/sharedsecret', 
        get_string('auth_wp2moodle_secretkey', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_secretkey_desc', 'auth_wp2moodle'), 
        'this is not a secure key, change it'
    ));

    // $name, $visiblename, $description, $defaultsetting, $paramtype=PARAM_RAW,  $size=null, $maxlength = 0
    $settings->add(new admin_setting_configtext_with_maxlength(
        'auth_wp2moodle/timeout', 
        get_string('auth_wp2moodle_timeout', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_timeout_desc', 'auth_wp2moodle'), 
        '5',
        PARAM_INT,
        3,
        3
    ));

    // $name, $visiblename, $description, $defaultsetting$, paramtype=PARAM_RAW,  $size=null
    $settings->add(new admin_setting_configtext(
        'auth_wp2moodle/logoffurl', 
        get_string('auth_wp2moodle_logoffurl', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_logoffurl_desc', 'auth_wp2moodle'), 
        '',
        PARAM_URL
    ));

    // $name, $visiblename, $description, $defaultsetting, $choices
    $settings->add(new admin_setting_configselect(
        'auth_wp2moodle/autoopen', 
        get_string('auth_wp2moodle_autoopen', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_autoopen_desc', 'auth_wp2moodle'), 
        'yes',
        array(
            'yes'=> 'Yes',
            'no'=> 'No'
        )
    ));

    // $name, $visiblename, $description, $defaultsetting, $choices
    $settings->add(new admin_setting_configselect(
        'auth_wp2moodle/updateuser', 
        get_string('auth_wp2moodle_updateuser', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_updateuser_desc', 'auth_wp2moodle'), 
        'yes',
        array(
            'yes'=> 'Yes',
            'no'=> 'No'
        )
    ));

    // $name, $visiblename, $description, $defaultsetting, $choices
    $settings->add(new admin_setting_configselect(
        'auth_wp2moodle/redirectnoenrol', 
        get_string('auth_wp2moodle_redirectnoenrol', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_redirectnoenrol_desc', 'auth_wp2moodle'), 
        'no',
        array(
            'yes'=> 'Yes',
            'no'=> 'No'
        )
    ));


    // $name, $visiblename, $description, $defaultsetting, $paramtype=PARAM_RAW,  $size=null
    $settings->add(new admin_setting_configtext(
        'auth_wp2moodle/firstname', 
        get_string('auth_wp2moodle_firstname', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_firstname_desc', 'auth_wp2moodle'), 
        'no-first-name',
        PARAM_ALPHAEXT
    ));

    // $name, $visiblename, $description, $defaultsetting, $paramtype=PARAM_RAW,  $size=null
    $settings->add(new admin_setting_configtext(
        'auth_wp2moodle/lastname', 
        get_string('auth_wp2moodle_lastname', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_lastname_desc', 'auth_wp2moodle'), 
        'no-last-name',
        PARAM_ALPHAEXT
    ));

    // $name, $visiblename, $description, $defaultsetting, $paramtype=PARAM_RAW,  $size=null
    $settings->add(new admin_setting_configtext(
        'auth_wp2moodle/idprefix', 
        get_string('auth_wp2moodle_idprefix', 'auth_wp2moodle'), 
        get_string('auth_wp2moodle_idprefix_desc', 'auth_wp2moodle'), 
        '',
        PARAM_ALPHANUMEXT,
        10
    ));
}