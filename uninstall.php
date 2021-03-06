<?php
/**
 * Uninstall plugin function
 */

if(!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$option_name = 'infthimageslider';

// for site option in Multisite
delete_site_option($option_name);

// drop a custom database table
global $wpdb;
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}infthimageslider"); // insert table name in the place of mytable

