<?php
/*
 * wpcf7 setup
 */

// remove wpcf7 js and css
// apply_filters

// add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

// // Unvalid tip template

// if ( ! function_exists('b5st_wpcf7_validation_error') ) {
//     function b5st_wpcf7_validation_error( $error, $name, $that ) {
//             $error = '';

//             if ( $that->is_posted() ) {
//                 $submission = WPCF7_Submission::get_instance();

//                 if ( $invalid_field = $submission->get_invalid_field( $name ) ) {
//                     $error = trim( $invalid_field['reason'] );
//                 }
//             }

//             if ( ! $error ) {
//                 return $error;
//             }

//             $atts = array(
//                 'class' => 'invalid-feedback',
//                 'aria-hidden' => 'false',
//             );

//             $error = sprintf(
//                 '<div %1$s>%2$s</span>',
//                 wpcf7_format_atts( $atts ),
//                 esc_html( $error )
//             );
//             return $error . '<script type="text/javascript">console.log("$name",' . $name . ');</script>';
//     }
// }
// add_filter('wpcf7_validation_error', 'b5st_wpcf7_validation_error', 10, 3);

/**
 * Adjust contact form 7 radios and checkboxes to match bootstrap 4 custom radio structure.
 */
// add_filter('wpcf7_form_elements', function ($content) {
//    $content = preg_replace('/<label><input type="(checkbox|radio)" name="(.*?)" value="(.*?)" \/><span class="wpcf7-list-item-label">/i', '<label class="custom-control custom-\1"><input type="\1" name="\2" value="\3" class="custom-control-input"><span class="wpcf7-list-item-label custom-control-label">', $content);

//    return $content;
// });