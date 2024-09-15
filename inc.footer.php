<?php
echo '
	<div class="mainfooter">
		<footer class="footertag">
			<div class="socialdiv">
				<a href="https://www.azadi-berlin.de/">
					<img class="footerlogo" alt="Logo Azadi Berlin" title="zur Startseite" src="images/logo_footer.svg" />
				</a>
				<div class="socialfooter">
					<div class="socialicons">
						<a href="https://www.instagram.com/azadiberlin/" title="finde uns auf Instagram" target="_blank">
							<img class="instagram" loading="lazy" alt="Instagram" src="images/footer_instagram.svg" />
						</a>
						<a href="https://x.com/azadiberlin" title="finde uns auf Twitter/X" target="_blank">
							<img class="twitterx" alt="twitter/x" src="images/footer_twitterx.svg" />
						</a>
					</div>
				</div>
			</div>
			<div class="linie"></div>
			<div class="drunter">
				<div class="creativecommons">
					<p xmlns:cc="http://creativecommons.org/ns#" >Azadi Berlin <a href="https://creativecommons.org/licenses/by/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" class="footerlink" style="margin-left:6px;">CC BY 4.0<img style="height:22px!important;margin-left:5px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt=""></a></p> 
				</div>
				<div class="linkkiste">
					<div class="footerlinkbox">
						<a href="impressum.php" title="Impressum" class="footerlink">Impressum</a>
					</div>
					<div class="footerlinkbox">
						<a href="datenschutz.php" title="Datenschutzerklärung" class="footerlink">Datenschutz</a>
					</div>
					<div class="footerlinkbox">
						<a href="kontakt.php" title="Kontakt" class="footerlink">Kontakt</a>
					</div>
					<div class="footerlinkbox">
						<a href="#" title="zurück nach oben" class="footerlink">Zum Seitenanfang</a>
					</div>
				</div>
			</div>
		</footer>
	</div>';
echo "
	<script>
		// Funktion, um den Bildwechsel bei Mouseover zu steuern
		document.querySelectorAll('.navicon').forEach(function(image) {
			// Ursprüngliches Bild speichern
			var originalSrc = image.src;
			
			// EventListener für Mouseover
			image.addEventListener('mouseover', function() {
				// Bild durch das Bild aus dem data-hover-Attribut ersetzen
				image.src = image.getAttribute('data-hover');
			});
		
			// EventListener für Mouseout
			image.addEventListener('mouseout', function() {
				// Bild wieder auf das Original zurücksetzen
				image.src = originalSrc;
			});
		});
	</script>";
echo '
</body>
</html>';
