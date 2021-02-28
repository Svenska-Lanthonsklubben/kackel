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

    <table width="780" border="0" cellspacing="0" cellpadding="2" align="center" bgcolor="#ffffff">
	<tr>
		<td class="noprint" colspan="2"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/svenska_lanthonsklubben_topp.jpg" width="780" height="199" alt="" border="0"></a></td>
	</tr>
	<tr>
		<td class="menyrad" align="right" colspan="2">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="2" valign="top">
			<table width="780">
				<tr>

					<td width="160" valign="top" class="noprint">

						<div id="linkList">

							<div id="forening">
								<h3>Föreningen</h3>
                                <?php wp_nav_menu( array( 'theme_location' => 'foreningen' ) ); ?>
							</div>

							<div id="forening">
								<h3>Praktiska råd</h3>
                                <?php wp_nav_menu( array( 'theme_location' => 'praktiska-rad' ) ); ?>
							</div>

							<div id="forening">
								<h3>Lantraser</h3>
								<ul>
									<li><a href="lantras_hons.html" title="Lantraser höns">Höns</A></li>
									<li><a href="lantras_ankor.html" title="Lantraser ankor">Ankor</a></li>
									<li><a href="lantras_gass.html" title="Lantraser gäss">Gäss</a></li>
									<li><a href="lantras_rodlista.html" title="Rödlista höns ankor gäss">Rödlista</a></li>
									<li><a href="lantrasforeningar.html" title="Systerföreningar">Systerföreningar</a></li>
								</ul>
							</div>

							<div id="forening">
								<h3>Genbanken</h3>
								<ul>
									<li><a href="genbank.html" title="Genbanksidén">Genbanksidén</a></li>
									<li><a href="genbank_levande.html" title="Den levande genbanken">Den levande genbanken</a></li>
									<li><a href="genbank_kontrakt.html" title="När är jag med i genbanken?">När är jag med?</a></li>
									<li><a href="genbank_avelsplan.html" title="När är jag med i genbanken?">Avelsplan</a></li>
									<li><a href="genbanksansvariga.html" title="Kontakta genbanksansvariga">Genbanksansvariga</a></li>
									<li><a href="genbanker_rasramar.html" title="Boken Genbanker och rasramar">Bok: Genbanker & rasramar</a></li>
								</ul>
							</div>

							<div id="forening">
								<h3>Annonser</h3>
								<ul>
									<li><a href="annonser/" title="Annonser - höns ankor gäss">Annonssida</a></li>
								</ul>
							</div>

							<div align="center" id="hem">
								<a href="english.html"><img src="eng.gif" width="16" height="16" alt="In English" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.html"><img src="home.gif" width="16" height="16" alt="Till startsidan" border="0"></a>
							</div>

						</div>
					</td>
					<td class="text" width="620" valign="top">
