<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *  
 **/

get_header();

?>
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
								<ul>
									<li><a href="medlem.html" title="Bli medlem">Bli medlem</A></li>
									<li><a href="kontakt.html" title="Kontakt">Kontakt</a></li>
									<li><a href="styrelse.html" title="Kontakta styrelsen">Styrelse</a></li>
									<li><a href="traffar.html" title="Klubbträffar och aktiviteter">Klubbträffar</a></li>
									<li><a href="media.html" title="Media">Media</a></li>
								</ul>
							</div>

							<div id="forening">
								<h3>Praktiska råd</h3>
								<ul>
									<li><a href="skotsel_hons.html" title="Hönsskötsel">Hönsskötsel</A></li>
									<li><a href="skotsel_ankor.html" title="Ankskötsel">Ankskötsel</A></li>
									<li><a href="skotsel_gass.html" title="Gåsskötsel">Gåsskötsel</A></li>
									<li><a href="hanegallet.html" title="Artiklar ur medlemstidningen Hanegället">Artiklar ur Hanegället</A></li>
									<li><a href="skotselhandbok.html" title="Handbok för nykläckta lantrasägare">Bok: Höns, ankor och gäss</A></li>
									<li><a href="/abc" title="Kackel-ABC">ABC</A></li>
									<li><a href="/fragor_svar" title="Frågor och svar om fjäderfä och skötsel">Hönspanelen</A></li>
									<li><a href="smittskydd_sjukdomar.html" title="Smittskydd och sjukdomar">Smittskydd & sjukdomar</A></li>
									<li><a href="download.html" title="Filer att hämta">Att hämta</A></li>
								</ul>
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
						<table border="0" width="570">
							<tr>
								<td colspan="2">
									<h1>Svenska Lanthönsklubben</h1>
									<h2>Vi värnar om små hushållsflockar som hålls så fritt och naturligt som möjligt</h2>
								</td>
							</tr>
							<tr>
								<td style="padding-right:10px;">
									Du kan göra en stor insats genom att hålla någon av våra lantraser av höns, ankor och gäss! Det behöver inte vara många djur och du behöver inte veta och kunna allt. Vi hjälper dig!
									<ul>
										<li style="margin-bottom:5px;">Lantraser är anpassade till det självhushållande bondesamhällets miljö och krav.
										<li style="margin-bottom:5px;">Lantrashöns försåg oss med ägg och kött i 2000 år, men konkurrerades ut av specialiserade raser för ca 100&nbsp;år sedan.
										<li style="margin-bottom:5px;">Många lokala lantraspopulationer är utrotade - andra har räddats i sista stund.
										<li style="margin-bottom:5px;">Vi måste hjälpas åt att bevara dem till kommande generationer.
									</ul>
								</td>
								<td class="aktuellt" align="left" valign="top" width="200">
									<h4>Höjd risk för fågelinfluensa, Sverige höjer skyddsnivån</h4> Aktuell information på <a href="https://djur.jordbruksverket.se/amnesomraden/djur/sjukdomarochsmittskydd/smittsammadjursjukdomar/fagelinfluensa.4.4eea2b6311f3b931ba4800054.html">Jordbruksverkets hemsida.</a>
									<h4>Ny upplaga av boken Höns, ankor och gäss</h4> <a href="skotselhandbok.html">Läs mer här.</a>
									<h4>Tekniska problem med annonssidan</h4> Annonserna finns att läsa längst ner på sidan. Scrolla neråt.
									<!--	<h4>För frågor om höns, ankor och gäss</h4>Besök <a class="aa" href="/fragor_svar" title="Frågor och svar om fjäderfä och skötsel">Hönspanelen</a>. -->
								</td>
							</tr>
						</table>
						<br>
						<div align="center">
							<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
								<!-- Hide this script from old browsers --
								document.write('<IMG SRC="' + image + '" alt="Bilder på skånska blommehöns, åsbohöns, ölandshöns, gotlandshöns, kindahöns, hedemorahöns, orusthöns, bohuslän-dals svarthöns, bjurholmshöna, gammalsvenska dvärghöns, öländska dvärghöns, skånegås, ölandsgås, svensk gul anka, svensk blå anka, blekingeanka och svensk myskanka" class="border" width="500">')
								// -- End Hiding Here 
								-->
							</SCRIPT>
						</div>

						<br>
						<h2>SLK bevarar följande lantraser inom levande genbanker</h2>
						<b>Höns:</b> skånsk blommehöna, åsbohöna, ölandshöna, gotlandshöna, kindahöna, hedemorahöna, orusthöna, bohuslän-dals svarthöna, bjurholmshöna samt gammalsvensk dvärghöna och öländsk dvärghöna.
						<br>
						<b>Ankor</b>: svensk gul anka, svensk blå anka, blekingeanka och svensk myskanka
						<br>
						<b>Gäss</b>: skånegås och ölandsgås.
						<br>&nbsp;<br>
						<hr>
						<img align="right" src="EU.png">
						<h2>Information om projekt för utbetalning av genbanksstöd</h2>
						Svenska Lanthönsklubben har under 2019 och 2020 utgivit tidningen Hanegället med 4 nr per år, detta har gjorts med delfinansiering från Jordbruksverket som en del av Landsbygdsprogrammet 2013-2020.
						<!--Svenska Lanthönsklubben har under tiden 4:e december 2017 till den 16:e december 2019 bedrivit projekt med hjälp av medel beviljade av Jordbruksverket (journalnummer 2017-5165). Projektet har omfattat utgivning av tidningen Hanegället och är en del av Landsbygdsprogrammet. 
		<br>&nbsp;<br>
		Syftet med projektet har varit att sprida kunskap och information om fjäderfä av svensk lantras; höns, ankor och gäss. Den ansökta summan uppgick till 170 500 kr, vilket var i nivå med föregående år. På grund av reducerade medel till förfogande inom Landsbygdsprogrammet beviljades ansökan med 100 000 kr. 39,5&nbsp;% av medlen kommer från EU.		
		<br>&nbsp;<br>
		Projektet har följt de villkor och riktlinjer som beskrivits i beslut daterat den 10 augusti 2018. -->
					</td>
				</tr>
			</table>

		</td>
	</tr>
	<tr>
		<td colspan="2" align="right" valign="bottom">

			<table width="100%" cellpadding="2" class="botten">
				<tr>
					<td valign="bottom">&nbsp;</td>

					<td valign="bottom" align="right">
						<div class="datum">
							© Svenska Lanthönsklubben, om ej annat anges.<br>
							<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
								<!--
								// last modified script by Bernhard Friedrich; should work in all browsers
								var a;
								a = new Date(document.lastModified);
								lm_year = a.getYear();
								lm_year = ((lm_year < 1000) ? ((lm_year < 70) ? 2000 : 1900) : 0) + lm_year;
								lm_month = a.getMonth() + 1;
								lm_month = ((lm_month < 10) ? '0' : '') + lm_month;
								lm_day = a.getDate();
								lm_day = ((lm_day < 10) ? '0' : '') + lm_day;
								document.write("Senast uppdaterad " + lm_year + '-' + lm_month + '-' + lm_day);
								// 
								-->
							</SCRIPT>
						</div>
					</td>
				</tr>
			</table>

		</td>
	</tr>
</table>


</BODY>

</HTML>