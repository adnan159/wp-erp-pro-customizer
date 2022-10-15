<?php

/**
 * Plugin Name:       Erp Recuirtment Customizer
 * Description:       This plugin remove and add some field in HR Recuirtment Section.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Adnan
 * Author URI:        https://facebook.com/osmanhaider.adnan
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       erp-pro-customizer
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    die;
}

final class Erp_Recuirtment_Customizer {

    const version = '1.0.0';

    private function __construct() {
        $this -> define_constants();
    }

    /**
     * Define essential constants 
     */
    public function define_constants() {
        define( 'ERP_RECUIRTMENT_CUSTOMIZER', self::version );
    }


    /**
     * define singleton instance 
     */
    public static function init() {
        static $instance = false;
        if( ! $instance ){
            $instance = new self();
        }
        return $instance;
    }

}

function erp_customizer() {
   return Erp_Recuirtment_Customizer:: init();
}

//start from here
erp_customizer();
