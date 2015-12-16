<?php
/**
 * Displays the head section of the theme
 *
 * @package AppLand
 * @subpackage Frontend
 * @since 1.0
 *
 * @copyright (c) 2013 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.2.2
 */
?><!DOCTYPE html>
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html <?php language_attributes(); ?>> <![endif]-->
<!--[if !IE]> <!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
        <title><?php wp_title( '|', true, 'right' );  bloginfo('name'); ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href="<?php echo oxy_get_option( 'favicon' ); ?>" rel="shortcut icon" />
        <meta name="google-site-verification" content="<?php echo oxy_get_option('google_webmaster'); ?>" />

        <?php oxy_add_apple_icons( 'iphone_icon' ); ?>
        <?php oxy_add_apple_icons( 'iphone_retina_icon', 'sizes="114x114"' ); ?>
        <?php oxy_add_apple_icons( 'ipad_icon', 'sizes="72x72"' ); ?>
        <?php oxy_add_apple_icons( 'ipad_retina_icon', 'sizes="144x144"' ); ?>

        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> data-spy="scroll" data-target=".navbar">
        <!-- Page Header -->
        <header class="pull-center" id="masthead">
            <nav class="navbar navbar-fixed-top">
                <div class="navbar-inner" style="text-align:<?php echo oxy_get_option('menu_align'); ?>">
                    <div class="container">
                        <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <?php oxy_create_mobile_logo(); ?>
                        <div class="nav-collapse">
                            <?php
                            if( has_nav_menu( 'primary' ) ) {
                                wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'depth' => 2, 'walker' => new OxyNavWalker() ) );
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>



        









