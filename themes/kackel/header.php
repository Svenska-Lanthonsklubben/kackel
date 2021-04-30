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


    <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
        <!-- Hide from old browsers
        var imagenumber = 35;
        var randomnumber = Math.random();
        var rand1 = Math.round((imagenumber - 1) * randomnumber) + 1;
        images = new Array

        images[1] = "1bild/1svart_c.jpg"
        images[2] = "1bild/1svart_b.jpg"
        images[3] = "1bild/1skanegas_a.jpg"
        images[4] = "1bild/1skanegas_c.jpg"
        images[5] = "1bild/1orust_b.jpg"
        images[6] = "1bild/1orust_c.jpg"
        images[7] = "1bild/1olandsgas_e.jpg"
        images[8] = "1bild/1olandsgas_f.jpg"
        images[9] = "1bild/1olandsdvarg_b.jpg"
        images[10] = "1bild/1olandsdvarg_a.jpg"
        images[11] = "1bild/1olands_b.jpg"
        images[12] = "1bild/1olands_a.jpg"
        images[13] = "1bild/1kinda_b.jpg"
        images[14] = "1bild/1kinda_a.jpg"
        images[17] = "1bild/1hedemora_j.jpg"
        images[18] = "1bild/1hedemora_i.jpg"
        images[19] = "1bild/1hedemora_a.jpg"
        images[20] = "1bild/1gulanka_a.jpg"
        images[21] = "1bild/1gulanka_b.jpg"
        images[22] = "1bild/1gotland_c.jpg"
        images[23] = "1bild/1gotland_a.jpg"
        images[24] = "1bild/1gammalsvensk_a.jpg"
        images[25] = "1bild/1gammalsvensk_b.jpg"
        images[26] = "1bild/1blomme_b.jpg"
        images[27] = "1bild/1blomme_c.jpg"
        images[28] = "1bild/1blekinge_c.jpg"
        images[29] = "1bild/1blekinge_d.jpg"
        images[30] = "1bild/1blaanka_b.jpg"
        images[31] = "1bild/1blaanka_c.jpg"
        images[32] = "1bild/1asbo_e.jpg"
        images[33] = "1bild/1asbo_f.jpg"
        images[34] = "1bild/1bjurholm_a.jpg"
        images[35] = "1bild/1bjurholm_b.jpg"

        var image = images[rand1]
        // -- End Hiding Here 
        -->
    </SCRIPT>

</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
        <header class="main-head">
            <a href="index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/images/svenska_lanthonsklubben_topp.jpg" border="0">
            </a>
        </header>
        <nav class="main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'sidebar') ); ?>
        </nav>
        <!-- sido-innehåll -->
        <div class="main-content">