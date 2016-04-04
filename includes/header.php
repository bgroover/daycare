<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URI; ?>css/desktopStyle.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URI; ?>css/strudel.css" />
	</head>
</html>
<body>
	<header>
		<h2><?php echo $this->pageName; ?></h2>
	</header>
	<nav>
		<ul>
			<a href='<?php echo BASE_URI; ?>controllers'>
				<li>Controller</li>
			</a>
			<a href='<?php echo BASE_URI; ?>models'>
				<li>Model</li>
			</a>
			<a href='<?php echo BASE_URI; ?>views'>
				<li>View</li>
			</a>
			<a href='<?php echo BASE_URI; ?>others'>
				<li>Other</li>
			</a>
			<a href='<?php echo BASE_URI; ?>'>
				<li>Home</li>
			</a>
		</ul>
	</nav>
