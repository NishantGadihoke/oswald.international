<?php
	function getFooter() {
		include "php/footer.php";
	}
	function getHeader($page) {
		include "php/header.php";
	}
	getHeader("home");
	if (isset($_GET["content"])) {
		echo '	<div class="container">
				<div class="content-container">
							';
		if (file_exists("text/" . $_GET["content"] . ".html")) {
			include "text/" . $_GET["content"] . ".html";
		} else {
			include "text/404.html";
		}
		echo '
				</div>
			</div>';
	} else {
?>
	<section class="hero">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="hero-text">
								<h1>The smartphone for the rest of us.</h1>
								<p>Introducing Shravan, the world's first end-to-end accessible smartphone. With our patent-pending speech and vibration technology, Shravan can be easily used by the visually impaired, the unlettered, senior citizens, and everyone in between.</p>
								<div class="row hero-features">
									<i title="Universal Access" class="fa fa-universal-access"></i>
									<i title="Low Vision" class="fa fa-low-vision"></i>
									<i title="Audio Description" class="fa fa-audio-description"></i>
									<i title="Live Subtitles" class="fa fa-assistive-listening-systems"></i>
								</div>
								<p class="actions"><a href="https://oswaldfoundation.typeform.com/to/IeqRAz" class="button button-primary">Register Now<i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="shravan-hero">
								<img alt="Shravan device" src="https://cdn.oswald.foundation/28a41-shravan-1.png">
							</div>
						</div>
					</div>
				</div>
			</section>
<?php } getFooter(); ?>