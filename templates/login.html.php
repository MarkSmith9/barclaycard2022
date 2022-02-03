<!DOCTYPE html>
<html lang="en-gb">
	<head>
		<meta charset="utf-8" />
		<!-- sets character encoding as required by w3c -->
		<title><?=$title; ?></title>
		<!--inserts the  title from the source file-->
		<link rel="icon" href="image/favicon.svg" />
		<!--links the favicon-->
		<link rel="stylesheet" href="style.css" />
		<!--links the style sheet-->
	</head>

	<body>
		<header>
		</header>
		<div class="main">
			<div class="content-box">
				<?=$content?>
				<!--inserts the content from the PHP file in the main website-->
			</div>
		</div>
		<script src="js/scripts.js"></script>
		<!--runs the JavaScript at the bottom as JavaScript runs last, remove this if no javascript is ran-->
	</body>
</html>
