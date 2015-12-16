<?php
/**
 * Icon Option
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
 * Creates a selection of icons
 */
class OxyIcons extends OxyOption {

    /**
     * Creates option
     *
     * @return void
     * @since 1.0
     **/
    function __construct( $field, $value, $attr ) {
        parent::__construct( $field, $value, $attr );
        $this->set_attr( 'type', 'hidden' );
    }

    /**
     * Overrides super class render function
     *
     * @return string HTML for option
     * @since 1.0
     **/
    public function render($echo=true) {
        $icons = include OPTIONS_DIR . 'icons/fontawesome.php';
        ?>
        <div class="icon-container">
            <ul>
            <?php foreach( $icons as $icon ) : ?>
                <li><i class="<?php echo $icon; ?>"></i></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <input <?php echo $this->create_attributes(); ?> />
    <?php
    }

    public function enqueue() {
        parent::enqueue();
        // load styles
        //wp_enqueue_style( 'jquery-ui-theme' );
        wp_enqueue_style( 'font-awesome-all', CSS_URI . 'font-awesome-all.css', array(), false, 'all' );
        wp_enqueue_style( 'font-icon', ADMIN_OPTIONS_URI . 'fields/icons/icons.css', array( 'font-awesome-all' ), false, 'all' );
        // load scripts
        wp_enqueue_script( 'font-icon', ADMIN_OPTIONS_URI . 'fields/icons/icons.js' );
    }
}