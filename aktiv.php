<?php
$titel = 'Azadi Berlin - join the revolution';
$description = 'Azadi Berlin ist eine Gruppe von Personen unterschiedlicher Herkunft und Orientierung, die Unterstützung für die feministische Revolution im Iran organisiert';
$keywords = 'Azadi, Berlin, iran, revolution, feminismus';
$menue = 'aktiv';
$css = 'aktiv';

include 'inc.header.php';
?>

<!-- Inhalt //-->
	<div class="container">
		
		<p><br /></p>
		<!-- Button mit Link -->
		<span style="margin-left: 350px;"> </span><a href="https://example.com" class="custom-button">Linkbutton so lang wie der Text</a>
	
	
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
	
	
		<!-- Text links, Bild rechts -->
		<div class="text-left-image-right">
			<div class="text">
				<h2>Mittlere Überschrift 1</h2>
				<p style="font-family:ArchivoBlack; font-size: 32px;">Mittlere Überschrift 1b</p>
				<p>Dies ist ein Text, der links ausgerichtet ist und weitere Informationen enthält. Er besteht aus mehreren Sätzen und einem Absatz. Alles in Allem sehr informativ!</p>
				<a href="https://example.com" class="custom-button">Linkbutton so lang wie der Text</a>
			</div>
			<div class="image">
				<img src="images/vorlage_image480x360.png" alt="Beispielbild">
			</div>
		</div>
	
	
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
	
		
		<!-- Bild links, Text rechts -->
		<div class="image-left-text-right">
			<div class="image">
				<img src="images/vorlage_image480x360.png" alt="Beispielbild">
			</div>
			<div class="text">
				<h2>Mittlere Überschrift 2</h2>
				<p>Dies ist ein Text, der links ausgerichtet ist und weitere Informationen enthält. Er besteht aus mehreren Sätzen und einem Absatz. Alles in Allem sehr informativ!</p>
				<a href="https://example.com" class="custom-button">Linkbutton so lang wie der Text</a>
			</div>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Zentriertes Bild -->
		<div class="centered-image">
			<img src="images/vorlage_image440x100.png" alt="Zentriertes Bild">
		</div>
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		<!-- Zentrierte Überschrift und Text -->
		<div class="centered-heading-text">
			<h2>Zentrierte Überschrift</h2>
			<p>Dies ist ein zentrierter Text unter der Überschrift.</p>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- FAQs mit Toggle -->
		<div class="faq">
			<button class="faq-question" onclick="toggleAnswer('answer1', this)">
				<span class="faq-text">Frage 1</span><span class="toggle-symbol">+</span>
			</button>
			<div id="answer1" class="faq-answer">Dies ist die Antwort auf Frage 1.</div>
	
			<button class="faq-question" onclick="toggleAnswer('answer2', this)">
				<span class="faq-text">Frage 2</span><span class="toggle-symbol">+</span>
			</button>
			<div id="answer2" class="faq-answer">Dies ist die Antwort auf Frage 2.</div>
			
			<button class="faq-question" onclick="toggleAnswer('answer3', this)">
				<span class="faq-text">Frage 3</span><span class="toggle-symbol">+</span>
			</button>
			<div id="answer3" class="faq-answer">Dies ist die Antwort auf Frage 3.</div>
			
			<button class="faq-question" onclick="toggleAnswer('answer4', this)">
				<span class="faq-text">Frage 4</span><span class="toggle-symbol">+</span>
			</button>
			<div id="answer4" class="faq-answer">Dies ist die Antwort auf Frage 4.</div>
			
			<button class="faq-question" onclick="toggleAnswer('answer5', this)">
				<span class="faq-text">Frage 5</span><span class="toggle-symbol">+</span>
			</button>
			<div id="answer5" class="faq-answer">Dies ist die Antwort auf Frage 5.</div>
			
			<button class="faq-question" onclick="toggleAnswer('answer6', this)">
				<span class="faq-text">Frage 6</span><span class="toggle-symbol">+</span>
			</button>
			<div id="answer6" class="faq-answer">Dies ist die Antwort auf Frage 6.</div>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Zweispaltiger Block -->
		<div class="two-column-block">
			<div class="column2">
				<img src="images/vorlage_image96x96.png" alt="Icon 1">
				<p>Das ist der Text für die erste Spalte. Eine Beschreibung oder weitere Informationen.</p>
				<a href="https://example.com" class="custom-button">Linkbutton so lang wie der Text</a>
			</div>
			<div class="column2">
				<img src="images/vorlage_image96x96.png" alt="Icon 2">
				<p>Das ist der Text für die zweite Spalte. Eine Beschreibung oder weitere Informationen.</p>
				<a href="https://example.com" class="custom-button">Linkbutton so lang wie der Text</a>
			</div>
		</div>
		
		<!-- Zweispaltiger Block -->
		<div class="two-column-block">
			<div class="column3">
				<img src="images/vorlage_image96x96.png" alt="Icon 3">
				<p>Das ist der Text für nur eine Spalte.<br />Eine Beschreibung oder weitere Informationen.</p>
				<a href="https://example.com" class="custom-button">Linkbutton so lang wie der Text</a>
			</div>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Fünf zentrierte Buttons -->
		<div class="centered-buttons">
			<a href="https://example.com" class="custom-button">Button 1</a>
			<a href="https://example.com" class="custom-button">Button 2</a>
			<a href="https://example.com" class="custom-button">Button 3</a>
			<a href="https://example.com" class="custom-button">Button 4</a>
			<a href="https://example.com" class="custom-button">Button 5</a>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Mini Bild links, Textblock rechts mit Link und kurzem Text -->
		<div class="link-block">
			<div class="linkbox">
				<div class="mini-image">
					<img src="images/vorlage_image50x50.png" alt="Kleines Bild">
				</div>
				<div class="text-block-links">
					<a href="https://example.com" class="linkaway">Linktitle 1</a>
					<p>Dies ist ein Textblock mit Informationen über das Thema</p>
				</div>
			</div>
			<div class="linkbox">
				<div class="mini-image">
					<img src="images/vorlage_image50x50.png" alt="Kleines Bild">
				</div>
				<div class="text-block-links">
					<a href="https://example.com" class="linkaway">Linktitle 2</a>
					<p>Dies ist ein Textblock mit Informationen über das Thema</p>
				</div>
			</div>
			<div class="linkbox">
				<div class="mini-image">
					<img src="images/vorlage_image50x50.png" alt="Kleines Bild">
				</div>
				<div class="text-block-links">
					<a href="https://example.com" class="linkaway">Linktitle 3</a>
					<p>Dies ist ein Textblock mit Informationen über das Thema</p>
				</div>
			</div>
			<div class="linkbox">
				<div class="mini-image">
					<img src="images/vorlage_image50x50.png" alt="Kleines Bild">
				</div>
				<div class="text-block-links">
					<a href="https://example.com" class="linkaway">Linktitle 4</a>
					<p>Dies ist ein Textblock mit Informationen über das Thema</p>
				</div>
			</div>
			<div class="linkbox">
				<div class="mini-image">
					<img src="images/vorlage_image50x50.png" alt="Kleines Bild">
				</div>
				<div class="text-block-links">
					<a href="https://example.com" class="linkaway">Linktitle 5</a>
					<p>Dies ist ein Textblock mit Informationen über das Thema</p>
				</div>
			</div>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Kleines Bild links, Textblock rechts mit Unterüberschrift und Hauptüberschrift -->
		<div class="image-left-text-right-complex">
			<div class="small-image">
				<img src="images/vorlage_image120x120.png" alt="Kleines Bild">
			</div>
			<div class="text-block">
				<h3>Quelle</h3>
				<h2>Newstitle</h2>
				<p>Dies ist ein Textblock mit Informationen über das Thema. Der Text kann mehrere Zeilen umfassen.</p>
			</div>
		</div>
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		<!-- Kleines Bild links, Textblock rechts mit Unterüberschrift und Hauptüberschrift -->
		<div class="image-left-text-right-complex">
			<div class="medium-image">
				<img src="images/vorlage_image200x200.png" alt="Kleines Bild">
			</div>
			<div class="text-block">
				<h3>Art</h3>
				<h2>Titel des Mediums</h2>
				<p>Dies ist ein Textblock mit Informationen über das Thema. Der Text kann mehrere Zeilen umfassen.</p>
			</div>
		</div>
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		<!-- Vier Spalten mit Bild, kleiner Überschrift, Hauptüberschrift, Text und Button -->
		<div class="four-columns">
			<div class="column justifier">
				<img src="images/vorlage_image200x140.png" alt="Beispielbild">
				<h3>Kleine Überschrift</h3>
				<h2>Hauptüberschrift</h2>
				<p>Dies ist ein kurzer Text zu diesem Thema.</p>
				<a href="https://example.com" class="custom-button">Mehr erfahren</a>
			</div>
			<div class="column justifier">
				<img src="images/vorlage_image200x140.png" alt="Beispielbild">
				<h3>Kleine Überschrift</h3>
				<h2>Hauptüberschrift</h2>
				<p>Dies ist ein kurzer Text zu diesem Thema.</p>
				<a href="https://example.com" class="custom-button">Mehr erfahren</a>
			</div>
			<div class="column justifier">
				<img src="images/vorlage_image200x140.png" alt="Beispielbild">
				<h3>Kleine Überschrift</h3>
				<h2>Hauptüberschrift</h2>
				<p>Dies ist ein kurzer Text zu diesem Thema.</p>
				<a href="https://example.com" class="custom-button">Mehr erfahren</a>
			</div>
			<div class="column justifier">
				<img src="images/vorlage_image200x140.png" alt="Beispielbild">
				<h3>Kleine Überschrift</h3>
				<h2>Hauptüberschrift</h2>
				<p>Dies ist ein kurzer Text zu diesem Thema.</p>
				<a href="https://example.com" class="custom-button">Mehr erfahren</a>
			</div>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Carousel Block -->
		<div class="carousel-container-u">
			<div class="carousel-u" id="carousel-u">
				<div class="carousel-item-u">
					<a href="https://example.com/link2">
						<img src="images/vorlage_image220x220.png" alt="Bild 1">
					</a>
				</div>
				<div class="carousel-item-u" id="bildContainer">
					<img src="images/vorlage_image220x220.png" alt="Bild 2" id="bild" onmouseover="changeImage(true)" onmouseout="changeImage(false)">
					<div class="buttonContainer" id="buttonContainer" onmouseover="changeImage(true)" onmouseout="changeImage(false)">
						<img src="images/download_bild.png" alt="Bild herunterladen" style="height:40px; margin-left:12px;" onclick="downloadImage()">
						<img src="images/download_datei.png" alt="Zip-Datei herunterladen" style="height:40px; margin-top:12px;" onclick="downloadZip()">
					</div>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link3">
						<img src="images/vorlage_image220x220.png" alt="Bild 3">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link4">
						<img src="images/vorlage_image220x220.png" alt="Bild 4">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link5">
						<img src="images/vorlage_image220x220.png" alt="Bild 5">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link6">
						<img src="images/vorlage_image220x220.png" alt="Bild 6">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link7">
						<img src="images/vorlage_image220x220.png" alt="Bild 7">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link8">
						<img src="images/vorlage_image220x220.png" alt="Bild 8">
					</a>
				</div>
			</div><br />
			<div class="carousel-buttons-u" >
				<button class="carousel-btn-u prev-u" onclick="scrollCarouselu(-1)">❮</button>
				<button class="carousel-btn-u next-u" onclick="scrollCarouselu(1)">❯</button>
			</div>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Carousel Block 
		<div class="carousel-container-u">
			<div class="carousel-u" id="carousel-u">
				<div class="carousel-item-u">
					<a href="https://example.com/link1">
						<img src="images/vorlage_image220x220.png" alt="Bild 1">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link2">
						<img src="images/vorlage_image220x220.png" alt="Bild 2">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link3">
						<img src="images/vorlage_image220x220.png" alt="Bild 3">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link4">
						<img src="images/vorlage_image220x220.png" alt="Bild 4">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link5">
						<img src="images/vorlage_image220x220.png" alt="Bild 5">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link6">
						<img src="images/vorlage_image220x220.png" alt="Bild 6">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link7">
						<img src="images/vorlage_image220x220.png" alt="Bild 7">
					</a>
				</div>
				<div class="carousel-item-u">
					<a href="https://example.com/link8">
						<img src="images/vorlage_image220x220.png" alt="Bild 8">
					</a>
				</div>
			</div><br />
			<div class="carousel-buttons-u" >
				<button class="carousel-btn-u prev-u" onclick="scrollCarouselu(-1)">❮</button>
				<button class="carousel-btn-u next-u" onclick="scrollCarouselu(1)">❯</button>
			</div>
		</div>//-->
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Neues Carousel mit Spalten -->
		<div class="carousel-columns-container">
			<button class="carousel-btn prev" onclick="scrollColumnCarousel(-1)">❮</button>
			<div class="carousel-columns" id="carousel-columns">
				<div class="carousel-column-item">
					<img src="images/vorlage_image160x160.png" alt="Rundes Bild 1">
					<h3>Person 1</h3>
					<p>Kurzbeschreibung für die erste Person.</p>
				</div>
				<div class="carousel-column-item">
					<img src="images/vorlage_image160x160.png" alt="Rundes Bild 2">
					<h3>Person 2</h3>
					<p>Kurzbeschreibung für die zweite Person.</p>
				</div>
				<div class="carousel-column-item">
					<img src="images/vorlage_image160x160.png" alt="Rundes Bild 3">
					<h3>Person 3</h3>
					<p>Kurzbeschreibung für die dritte Person.</p>
				</div>
				<div class="carousel-column-item">
					<img src="images/vorlage_image160x160.png" alt="Rundes Bild 4">
					<h3>Person 4</h3>
					<p>Kurzbeschreibung für die vierte Person.</p>
				</div>
				<div class="carousel-column-item">
					<img src="images/vorlage_image160x160.png" alt="Rundes Bild 5">
					<h3>Person 5</h3>
					<p>Kurzbeschreibung für die fünfte Person.</p>
				</div>
				<div class="carousel-column-item">
					<img src="images/vorlage_image160x160.png" alt="Rundes Bild 6">
					<h3>Person 6</h3>
					<p>Kurzbeschreibung für die sechste Person.</p>
				</div>
				<div class="carousel-column-item">
					<img src="images/vorlage_image160x160.png" alt="Rundes Bild 7">
					<h3>Person 7</h3>
					<p>Kurzbeschreibung für die siebte Person.</p>
				</div>
				<div class="carousel-column-item">
					<img src="images/vorlage_image160x160.png" alt="Rundes Bild 8">
					<h3>Person 8</h3>
					<p>Kurzbeschreibung für die achte Person.</p>
				</div>
			</div>
			<button class="carousel-btn next" onclick="scrollColumnCarousel(1)">❯</button>
		</div>
	
	
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
		
		
		<!-- Zentriertes div mit zwei Spalten -->
		<div class="centered-block">
			<div class="columnspam">
				<img src="images/vorlage_image280x280.png" alt="Bild 1">
				<h3>Überschrift 1</h3>
				<p>Kurzbeschreibung für das 1. Bild</p>
			</div>
			<div class="columnspam">
				<img src="images/vorlage_image280x280.png" alt="Bild 2">
				<h3>Überschrift 2</h3>
				<p>Kurzbeschreibung für das 2. Bild</p>
			</div>
		</div>
		
		
		<!-- Block mit 50px Abstand -->
		<div class="spacer"><hr /></div>
	
	
		<!-- Carousel-Script Material //-->
		<script>
			let scrollPositionu = 0;
		
			function scrollCarouselu(directionu) {
				const carouselu = document.getElementById('carousel-u');
				const itemWidthu = carouselu.querySelector('.carousel-item-u').offsetWidth;
				const maxScrollu = (carouselu.children.length - 4) * itemWidthu; // 4 visible items
		
				scrollPositionu += directionu * itemWidthu * 4;
		
				if (scrollPositionu < 0) {
					scrollPositionu = 0;
				} else if (scrollPositionu > maxScrollu) {
					scrollPositionu = maxScrollu;
				}
		
				carouselu.style.transform = `translateX(-${scrollPositionu}px)`;
			}
		</script>
		
		
		<!-- Carousel-Script Personen //-->
		<script>
			let columnScrollPosition = 0;
		
			function scrollColumnCarousel(direction) {
				const carouselColumns = document.getElementById('carousel-columns');
				const itemWidth = carouselColumns.querySelector('.carousel-column-item').offsetWidth;
				const maxScroll = (carouselColumns.children.length - 4) * itemWidth; // 4 visible columns
		
				columnScrollPosition += direction * itemWidth;
		
				if (columnScrollPosition < 0) {
					columnScrollPosition = 0;
				} else if (columnScrollPosition > maxScroll) {
					columnScrollPosition = maxScroll;
				}
		
				carouselColumns.style.transform = `translateX(-${columnScrollPosition}px)`;
			}
		</script>
	
	
		<!-- Toggle-Script //-->
		<script>
			function toggleAnswer(id, element) {
				var answer = document.getElementById(id);
				var symbol = element.querySelector('.toggle-symbol');
		
				if (answer.style.display === "none" || answer.style.display === "") {
					answer.style.display = "block";
					symbol.textContent = "-";  // Zeige Minuszeichen bei geöffnetem Zustand
				} else {
					answer.style.display = "none";
					symbol.textContent = "+";  // Zeige Pluszeichen bei geschlossenem Zustand
				}
			}
		</script>
		
		
		<script>
			// Funktion, um das Bild herunterzuladen
			function downloadImage() {
				var link = document.createElement('a');
				link.href = 'images/Aufkleber.png'; // Dateiname des Bildes
				link.download = 'Aufkleber.png'; // Dateiname, den der Benutzer erhält
				document.body.appendChild(link);
				link.click();
				document.body.removeChild(link);
			}
		
			// Funktion, um die Zip-Datei herunterzuladen
			function downloadZip() {
				var link = document.createElement('a');
				link.href = 'images/Aufkleber.zip'; // Dateiname der Zip-Datei
				link.download = 'Aufkleber.zip'; // Dateiname, den der Benutzer erhält
				document.body.appendChild(link);
				link.click();
				document.body.removeChild(link);
			}
		
			// Funktion, um das Bild temporär auszutauschen
			function changeImage(hover) {
				var bild = document.getElementById('bild');
				if (hover) {
					bild.src = 'images/vorlage_image220x220_dunkel.png'; // Pfad zum dunklen Bild
				} else {
					bild.src = 'images/vorlage_image220x220.png'; // Pfad zum normalen Bild
				}
			}
		
			// Eventlistener, um die Buttons anzuzeigen, wenn die Maus über dem Bild ist
			document.getElementById('bildContainer').addEventListener('mouseover', function() {
				document.getElementById('buttonContainer').style.display = 'block';
			});
		
			// Eventlistener, um die Buttons auszublenden, wenn die Maus das Bild verlässt
			document.getElementById('bildContainer').addEventListener('mouseout', function() {
				document.getElementById('buttonContainer').style.display = 'none';
			});
		</script>
		
	</div>

<?php 
include('inc.footer.php');
?>
