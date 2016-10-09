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
<!doctype html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Oswald <?php echo $site; ?></title>
		<meta name="twitter:title" content="Oswald <?php echo $site; ?>">
		<meta property="og:title" content="Oswald <?php echo $site; ?>">
		<meta property="og:site_name" content="Oswald <?php echo $site; ?>">

		<meta name="twitter:description" content="Oswald <?php echo $site; ?>">
		<meta name="description" content="Oswald <?php echo $site; ?>">
		<meta property="og:description" content="Oswald <?php echo $site; ?>">

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@OswaldFdn">
		<link rel="publisher" href="https://plus.google.com/+OswaldFoundation">

		<meta name="twitter:image" content="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg">
		<meta property="og:image" content="https://davidwalsh.name/wp-content/themes/klass/img/facebooklogo.png">

		<link rel="apple-touch-icon" sizes="180x180" href="https://cdn.oswald.foundation/09194-apple-touch-icon.png">
		<link rel="icon" type="image/png" href="https://cdn.oswald.foundation/3366d-favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="https://cdn.oswald.foundation/dcf9c-favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="manifest.json">
		<link rel="mask-icon" href="safari-pinned-tab.svg" color="#2790f3">
		<meta name="theme-color" content="#ffffff">

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://cdn.oswald.foundation/34c62-bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<script type="application/javascript">
			var urls = ["oswald.foundation", "oswald.tech", "oswald.host", "oswald.international", "osw.li"];
			urls.forEach(function(url) {
				if (window.location.host == url || window.location.host == "www." + url) {
					if (window.location.protocol != "https") {
						window.location.protocol = "http";
					}
				}
			});
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
					<div class="col-md-4">
						<a class="logo" href="https://oswald.foundation" title="Go to Oswald <?php echo $site; ?>' home page">
							<img alt="Oswald icon" src="https://cdn.oswald.foundation/1fef2-logo.png" draggable="false">
							<strong>Oswald</strong> <span><?php echo $site; ?></span>
						</a>
					</div>
					<nav class="col-md-8 nav">
						<ul>
							<li class="active"><a href="https://oswald.tech">Technologies</a></li>
							<li><a href="https://oswald.foundation/partners">Partnerships</a></li>
							<li><a href="https://oswald.international/about">Company</a></li>
							<li><a href="https://oswald.tech/login">Developers</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<main id="content">

		