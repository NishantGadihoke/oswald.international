<body style="margin: 0; font-size: 120%; line-height: 2; font-family: sans-serif;">
	<div style="background: whitesmoke; padding: 10vh 10vw;">
		<h1 style="font-size: 150%">Site map</h1>
		<ul>
			<li><?php $company = "International"; ?>
				<strong><?php echo "Oswald $company"; ?></strong>
				<ul>
					<li><a href="https://oswald.international">Home page</a></li>
					<?php
						$dir = "text/";
						if (is_dir($dir)) {
							if ($dh = opendir($dir)) {
								while (($file = readdir($dh)) !== false) {
									if ($file != "." && $file != "..") {
										$file_ext = str_replace(".html", "", $file);
										echo "<li><a href='https://oswald.international/$file_ext'>" . ucfirst($file_ext) . "</a></li>";
									}
								}
								closedir($dh);
							}
						}
					?>
				</ul>
			</li>
			<li><?php $company = "International"; ?>
				<strong><?php echo "Oswald $company"; ?></strong>
				<ul>
					<li><a href="https://oswald.international">Home page</a></li>
					<?php
						$dir = "text/";
						if (is_dir($dir)) {
							if ($dh = opendir($dir)) {
								while (($file = readdir($dh)) !== false) {
									if ($file != "." && $file != "..") {
										$file_ext = str_replace(".html", "", $file);
										echo "<li><a href='https://oswald.international/$file_ext'>" . ucfirst($file_ext) . "</a></li>";
									}
								}
								closedir($dh);
							}
						}
					?>
				</ul>
			</li>
		</ul>
	</div>
</body>