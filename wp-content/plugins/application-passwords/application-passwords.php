<?php
/**
 * Plugin Name: Application Passwords
 * Plugin URI: https://github.com/georgestephanis/application-passwords
 * Description: Creates unique passwords for applications to authenticate users without revealing their main passwords.
 * Author: George Stephanis
 * Version: 0.1.0
 * Author URI: https://stephanis.info
 */

define( 'APPLICATION_PASSWORDS_VERSION', '0.1.0' );

/**
 * Include the application passwords system.
 */
require_once( dirname( __FILE__ ) . '/class.application-passwords.php' );
Application_Passwords::add_hooks();
