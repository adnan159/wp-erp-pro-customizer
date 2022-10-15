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
        $this -> add_candidate_age_field();
    }

    /**
     * Define essential constants
     * 
     * @return void 
     */
    public function define_constants() {
        define( 'ERP_RECUIRTMENT_CUSTOMIZER', self::version );
    }

    /**
     * add candidate age field
     * 
     * @return array 
     */
    public function add_candidate_age_field() {
        function candidate_fileds() {
            return $personal_fields = array(
                'upload_photo'      => array(
                    'label'       => __( 'Upload Photo', 'erp-pro' ),
                    'name'        => 'upload_photo',
                    'type'        => 'file',
                    'placeholder' => '',
                    'required'    => false,
                    'help'        => __( 'only jpg, jpeg, png image formate allowed and image size will be less than 2MB')
                ),
                'cover_letter'    => array(
                    'label'       => __( 'Cover Letter', 'erp-pro' ),
                    'name'        => 'cover_letter',
                    'type'        => 'textarea',
                    'placeholder' => '',
                    'required'    => false,
                    'help'        => __( 'Why do you think you are a good fit for this job?')
                ),
                'mobile'          => array(
                    'label'       => __( 'Mobile', 'erp-pro' ),
                    'name'        => 'mobile',
                    'type'        => 'text',
                    'placeholder' => '',
                    'required'    => false
                ),
                'other_email'     => array(
                    'label'       => __( 'Other Email', 'erp-pro' ),
                    'name'        => 'other_email',
                    'type'        => 'email',
                    'placeholder' => '',
                    'required'    => false
                ),
                'nationality'     => array(
                    'label'    => __( 'Nationality', 'erp-pro' ),
                    'name'     => 'nationality',
                    'type'     => 'select',
                    'options'  => $country->countries,
                    'required' => false
                ),
                'marital_status'  => array(
                    'label'    => __( 'Marital Status', 'erp-pro' ),
                    'name'     => 'marital_status',
                    'type'     => 'select',
                    'options'  => array(
                        'single'  => __( 'Single', 'erp-pro' ),
                        'married' => __( 'Married', 'erp-pro' ),
                        'widowed' => __( 'Widowed', 'erp-pro' )
                    ),
                    'required' => false
                ),
                'hobbies'         => array(
                    'label'       => __( 'Hobbies', 'erp-pro' ),
                    'name'        => 'hobbies',
                    'type'        => 'textarea',
                    'placeholder' => '',
                    'required'    => false
                ),
                'address'         => array(
                    'label'       => __( 'Address', 'erp-pro' ),
                    'name'        => 'address',
                    'type'        => 'textarea',
                    'placeholder' => '',
                    'required'    => false
                ),
                'phone'           => array(
                    'label'       => __( 'Phone', 'erp-pro' ),
                    'name'        => 'phone',
                    'type'        => 'text',
                    'placeholder' => '',
                    'required'    => false
                ),
                'date_of_birth'   => array(
                    'label'       => __( 'Date of Birth', 'erp-pro' ),
                    'name'        => 'date_of_birth',
                    'type'        => 'date',
                    'placeholder' => '',
                    'required'    => false
                ),
                'gender'          => array(
                    'label'    => __( 'Gender', 'erp-pro' ),
                    'name'     => 'gender',
                    'type'     => 'select',
                    'options'  => array(
                        'male'   => __( 'Male', 'erp-pro' ),
                        'female' => __( 'Female', 'erp-pro' )
                    ),
                    'required' => false
                ),
                'driving_license' => array(
                    'label'       => __( 'Driving License', 'erp-pro' ),
                    'name'        => 'driving_license',
                    'type'        => 'text',
                    'placeholder' => __( 'enter driving license', 'erp-pro' ),
                    'required'    => false
                ),
                'website'         => array(
                    'label'       => __( 'Website', 'erp-pro' ),
                    'name'        => 'website',
                    'type'        => 'text',
                    'placeholder' => '',
                    'required'    => false
                ),
                'biography'       => array(
                    'label'       => __( 'Biography', 'erp-pro' ),
                    'name'        => 'biography',
                    'type'        => 'textarea',
                    'placeholder' => '',
                    'required'    => false,
                    'help'        => __( 'Let us know a little bit about yourself', 'erp-pro' )
                ),
                'age'             => array(
                    'label'       => __( 'Age', 'erp-pro' ),
                    'name'        => 'age',
                    'type'        => 'text',
                    'placeholder' => '',
                    'required'    => false,
                    'help'        => __( 'Enter your age', 'erp-pro' )
                ),
            );
        }

        add_filter( 'erp_personal_fields', 'candidate_fileds' );

    }

    /**
     * Define singleton instance
     * 
     * @return instance 
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
