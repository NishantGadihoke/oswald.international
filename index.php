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
	if (isset($_GET["content"])) {
		if ($_GET["content"] == "updates") {
			header("Location: https://oswald.foundation/press");
		}
	}
?>
<!doctype html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if (isset($_GET["content"])) { ?>
		<title><?php echo ucfirst($_GET["content"]); ?> &middot; Oswald <?php echo $site; ?></title>
		<meta name="twitter:title" content="<?php echo ucfirst($_GET["content"]); ?> &middot; Oswald <?php echo $site; ?>">
		<meta property="og:title" content="<?php echo ucfirst($_GET["content"]); ?> &middot; Oswald <?php echo $site; ?>">
		<meta property="og:site_name" content="Oswald <?php echo $site; ?>">
<?php } else { ?>
<title>Oswald <?php echo $site; ?></title>
		<meta name="twitter:title" content="Oswald <?php echo $site; ?>">
		<meta property="og:title" content="Oswald <?php echo $site; ?>">
		<meta property="og:site_name" content="Oswald <?php echo $site; ?>">
		<?php } ?>

		<?php if (isset($_GET["content"]) && file_exists("text/" . $_GET["content"] . ".html")) { ?>
<?php
			$small = substr(strip_tags(file_get_contents("text/" . $_GET["content"] . ".html")), 0, 300);
			$small = preg_replace("/\r|\n/", "", $small);
			$small = trim(preg_replace('/\t+/', ' - ', $small));
			$small = str_replace('"', '', $small);
			$small .= "...";
			if ($small[0] == "-") {
				$small = substr($small, 2);
			}
		?>
<meta name="twitter:description" content="<?php echo $small; ?>">
		<meta name="description" content="<?php echo $small; ?>">
		<meta property="og:description" content="<?php echo $small; ?>">
<?php } else { ?>
<meta name="twitter:description" content="Oswald <?php echo $site; ?> is an accessibility technology company based in New Delhi, India that build products for individuals suffering from disabilities.">
		<meta name="description" content="Oswald <?php echo $site; ?> is an accessibility technology company based in New Delhi, India that build products for individuals suffering from disabilities.">
		<meta property="og:description" content="Oswald <?php echo $site; ?> is an accessibility technology company based in New Delhi, India that build products for individuals suffering from disabilities.">
		<?php } ?>

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@OswaldFdn">
		<link rel="publisher" href="https://plus.google.com/+OswaldFoundation">

		<meta name="twitter:image" content="https://cdn.oswald.foundation/142df-cover.png">
		<meta property="og:image" content="https://cdn.oswald.foundation/142df-cover.png">

		<link rel="apple-touch-icon" sizes="180x180" href="https://cdn.oswald.foundation/09194-apple-touch-icon.png">
		<link rel="icon" type="image/png" href="https://cdn.oswald.foundation/3366d-favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="https://cdn.oswald.foundation/dcf9c-favicon-16x16.png" sizes="16x16">
		<meta name="theme-color" content="#ffffff">

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://cdn.oswald.foundation/34c62-bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<script type="application/javascript">
			//var urls = ["oswald.foundation", "oswald.tech", "oswald.host", "oswald.international", "osw.li"];
			//urls.forEach(function(url) {
			//	if (window.location.host == url || window.location.host == "www." + url) {
			//		if (window.location.protocol != "https") {
			//			window.location.protocol = "http";
			//		}
			//	}
			//});
		</script>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<header id="masthead">
			<div class="container">
				<div class="row">
					<div class="col-md-4 logo-nav">
						<a class="logo" href="/" title="Go to Oswald <?php echo $site; ?>' home page">
							<img alt="Oswald icon" src="https://cdn.oswald.foundation/1fef2-logo.png" draggable="false">
							<strong>Oswald</strong> <span><?php echo $site; ?></span>
						</a>
					</div>
					<nav class="col-md-8 nav">
						<ul><?php $class = ' class="active"'; if (isset($_GET["content"])) { $page_link = $_GET["content"]; } else { $page_link = ""; } ?>
							<li<?php echo $page_link == '' ? $class : ''; ?>><a href="/">Technologies</a></li>
							<li<?php echo $page_link == 'partners' ? $class : ''; ?>><a href="/partners">Partnerships</a></li>
							<li<?php echo $page_link == 'about' ? $class : ''; ?>><a href="/about">Company</a></li>
							<li><a href="https://oswald.tech">Developers</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<main id="content">


<?php
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

<?php } ?>

			<section class="press">
				<div class="container">
					<div class="row">
						<div class="col-md-3"><a href="https://osw.li/0HEoe"><img alt="Hindustan Times" src="https://cdn.oswald.foundation/5fcc4-ht.png"></a></div>
						<div class="col-md-3"><a href="https://osw.li/rLeE_"><img alt="ScoopWhoop" src="https://cdn.oswald.foundation/36568-sw.png"></a></div>
						<div class="col-md-3"><a href="https://osw.li/FAdig"><img alt="The Huffington Post" src="https://cdn.oswald.foundation/9ae3a-hp.png"></a></div>
						<div class="col-md-3"><a href="https://osw.li/h7rGE"><img alt="The Better India" src="https://cdn.oswald.foundation/d007e-tbi.png"></a></div>
					</div>
					<div class="row">
						<div class="col-md-3"><a href="https://osw.li/BovM2"><img alt="AngelHack" src="https://cdn.oswald.foundation/248cf-ah.png"></a></div>
						<div class="col-md-3"><a href="http://chaaipani.com"><img alt="Chaaipani" src="https://cdn.oswald.foundation/7062c-cp.png"></a></div>
						<div class="col-md-3"><a href="https://osw.li/tZTm8"><img alt="Parent Herald" src="https://cdn.oswald.foundation/22787-ph.png"></a></div>
						<div class="col-md-3"><a href="https://osw.li/DxQiT"><img alt="HomeGrown" src="https://cdn.oswald.foundation/76adc-hg.png"></a></div>
					</div>
				</div>
			</section>
			<section class="gray">
				<div class="container">
					<div class="row bottom-content">
						<a href="/valmiki" class="col-md-4">
							<h2>Valmiki</h2>
							<p>Add accessibility features to and re-design any website based on your reading preferences.</p>
							<p class="actions">Add to Chrome<i class="fa fa-angle-right"></i></p>
						</a>
						<a href="/agastya" class="col-md-4">
							<h2>Agastya</h2>
							<p>Implement accessibility features in your website by adding just one line of JavaScript code.</p>
							<p class="actions">Sign Up Now<i class="fa fa-angle-right"></i></p>
						</a>
						<a href="/kaksha" class="col-md-4">
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
							<img alt="Oswald icon" src="https://cdn.oswald.foundation/1fef2-logo.png" draggable="false">
							<strong>Oswald</strong> <span><?php echo $site; ?></span>
						</a>
						<p class="footer-content">&copy; 2016 Oswald Technologies Pvt. Ltd.</p>
						<p>E-267, 3rd Floor, Greater Kailash II<br>New Delhi 110048, Delhi INDIA</p>
						<p><a href="mailto:hello@oswald.foundation">hello@oswald.foundation</a> &middot; <a href="tel:+911141414103">41 41 41 03</a></p>
					</div>
					<div class="col-md-2">
						<h3><a href="/">Technologies</a></h3>
						<ul>
							<li><a href="/valmiki">Valmiki</a></li>
							<li><a href="/agastya">Agastya</a></li>
							<li><a href="/">Shravan</a></li>
							<li><a href="https://oswald.tech">Developers</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3><a href="https://oswald.foundation">Foundation</a></h3>
						<ul>
							<li><a href="/accessibility">Accessibility</a></li>
							<li><a href="/education">Education</a></li>
							<li><a href="/justice">Justice</a></li>
							<li><a href="/partners">Partnerships</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3><a href="https://blog.oswald.foundation/">Stay Updated</a></h3>
						<ul>
							<li><a href="https://blog.oswald.foundation/">Blog</a></li>
							<li><a href="sitemap.php">Sitemap</a></li>
							<li><a href="https://osw.li/deirE">Internships</a></li>
							<li><a href="/press">In the press</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3><a href="https://oswald.international">Company</a></h3>
						<ul>
							<li><a href="/about">About us</a></li>
							<li><a href="/contact">Contact info</a></li>
							<li><a href="https://osw.li/kilPH">Join us</a></li>
							<li><a href="/terms">Terms of use</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<img style="cursor: pointer; position: fixed; bottom: 20px; right: 20px; width: 35px; opacity: .3" data-oswald alt="Accessibility Settings" title="Accessibility Settings" src="https://cdn.oswald.foundation/42579-accessibility-icon.png">

		<script src="js/oswald.js"></script>
		<script src="https://oswald.tech/widget?key=ba50d11609e929f3898bf6cfb3d17b6b"></script>

	</body>

</html>