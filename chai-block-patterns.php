<?php
/**
 * Plugin Name:     Chai's Block Pattterns
 * Plugin URI:      https://
 * Description:     This is a simple plugin with some common block patters I'm using.
 * Version:         1.0.0
 * Author:          Chai Saetern
 * Author URI:      https://chaisaetern.tech
 * License:         GPL-3.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.text
 */

 //  If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Current plugin version.
 */
 define( 'CHAI_BLOCK_PATTERNS_VERSION', '1.0.0' );

 require_once( 'inc/chai-block-patterns.php' );

 ?>
