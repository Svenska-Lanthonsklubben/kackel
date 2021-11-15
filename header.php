<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <?php wp_head(); ?>



    <META NAME="Description" CONTENT="Verkar för en fri och naturlig fjäderfäskötsel och bevarar våra svenska lantraser av höns, ankor och gäss.">
    <META HTTP-EQUIV="imagetoolbar" CONTENT="no">
    <META HTTP-EQUIV="imagetoolbar" CONTENT="no">
 
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
        <header class="main-head">
            <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/svenska_lanthonsklubben_topp.jpg" border="0">
            </a>
        </header>
        <nav class="main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'sidebar') ); ?>
        </nav>
        <!-- sido-innehåll -->
        <div class="main-content">