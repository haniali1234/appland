<?php
/**
 * Removes all html tags
 *
 * @package AppLand
 * @subpackage Core
 * @since 1.0
 *
 * @copyright (c) 2013 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.2.2
 */

/**
 * Removes all HTML
 *
 * @package AppLand
 * @since 1.0
 **/
class OxyNo_html {
    /**
     * Validates the option data
     *
     * @return validated options array
     * @since 1.0
     **/
    function validate( $field, $options, $new_options ) {
        $options[$field['id']] = strip_tags( $new_options[$field['id']] );
        return $options;
    }
}