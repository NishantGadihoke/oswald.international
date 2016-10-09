<?php
	if (isset($_SERVER["HTTPS"])) {
		$protocol = "https://";
	} else {
		$protocol = "http://";
	}
	$url = $protocol . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	if (strpos($url, "oswald.tech") !== false) {
		$site = "Technologies";
	} else if (strpos($url, "oswald.international") !== false) {
		$site = "International";
	} else {
		$site = "Foundation";
	}
?>

			<section class="press">
				<div class="container">
					<div class="row">
						<div class="col-md-3"><img alt="Hindustan Times" src="https://valmiki.oswald.foundation/img/ht.png"></div>
						<div class="col-md-3"><img alt="Hindustan Times" src="https://valmiki.oswald.foundation/img/sw.png"></div>
						<div class="col-md-3"><img alt="Hindustan Times" src="https://valmiki.oswald.foundation/img/hp.png"></div>
						<div class="col-md-3"><img alt="Hindustan Times" src="https://valmiki.oswald.foundation/img/tbi.png"></div>
					</div>
					<div class="row">
						<div class="col-md-3"><img alt="Hindustan Times" src="https://valmiki.oswald.foundation/img/ah.png"></div>
						<div class="col-md-3"><img alt="Hindustan Times" src="img/press/cp.png"></div>
						<div class="col-md-3"><img alt="Hindustan Times" src="img/press/ph.png"></div>
						<div class="col-md-3"><img alt="Hindustan Times" src="https://valmiki.oswald.foundation/img/hg.png"></div>
					</div>
				</div>
			</section>
			<section class="gray">
				<div class="container">
					<div class="row bottom-content">
						<a href="#" class="col-md-4">
							<h2>Valmiki</h2>
							<p>Add accessibility features to and re-design any website based on your reading preferences.</p>
							<p class="actions">Add to Chrome<i class="fa fa-angle-right"></i></p>
						</a>
						<a href="#" class="col-md-4">
							<h2>Agastya</h2>
							<p>Implement accessibility features in your website by adding just one line of JavaScript code.</p>
							<p class="actions">Sign Up Now<i class="fa fa-angle-right"></i></p>
						</a>
						<a href="#" class="col-md-4">
							<h2>Kaksha</h2>
							<p>Free and accessible high-quality study material for school students. Coming soon.</p>
							<p class="actions">Join the Beta<i class="fa fa-angle-right"></i></p>
						</a>
					</div>
				</div>
			</section>

			</main>

		<footer id="colophon">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a class="logo" href="https://oswald.foundation" title="Go to Oswald <?php echo $site; ?>'s home page">
							<img alt="Oswald icon" src="img/logo.png" draggable="false">
							<strong>Oswald</strong> <span><?php echo $site; ?></span>
						</a>
						<p class="footer-content">&copy; 2016 Oswald Technologies Pvt. Ltd.</p>
						<p>E-267, 3rd Floor, Greater Kailash II<br>New Delhi 110048, Delhi INDIA</p>
						<p><a href="mailto:hello@oswald.foundation">hello@oswald.foundation</a> &middot; <a href="tel:+911141414103">41 41 41 03</a></p>
					</div>
					<div class="col-md-2">
						<h3><a href="https://oswald.tech">Technologies</a></h3>
						<ul>
							<li><a href="?content=valmiki">Valmiki</a></li>
							<li><a href="?content=agastya">Agastya</a></li>
							<li><a href="?content=shravan">Shravan</a></li>
							<li><a href="?content=developers">Developers</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3><a href="https://oswald.foundation">Foundation</a></h3>
						<ul>
							<li><a href="?content=accessibility">Accessibility</a></li>
							<li><a href="?content=education">Education</a></li>
							<li><a href="?content=justice">Justice</a></li>
							<li><a href="?content=partnerships">Partnerships</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3><a href="https://blog.oswald.foundation/">Stay Updated</a></h3>
						<ul>
							<li><a href="https://blog.oswald.foundation/">Blog</a></li>
							<li><a href="?content=logos">Logos</a></li>
							<li><a href="https://goo.gl/forms/Wk6zxnX9utkz6Us82">Internships</a></li>
							<li><a href="?content=press">In the press</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3><a href="https://oswald.international">Company</a></h3>
						<ul>
							<li><a href="?content=about">About us</a></li>
							<li><a href="?content=contact">Contact info</a></li>
							<li><a href="https://angel.co/oswald-foundation/jobs">Join us</a></li>
							<li><a href="?content=terms">Terms of use</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<script src="js/oswald.js"></script>

	</body>

</html>