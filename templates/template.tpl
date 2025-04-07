<!DOCTYPE html>
<html lang="cs">
<head>
	<title>{%TITLE%}</title>
	<base href="http://{%SERVER%}/" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css?2024-06-03" />
	<!--<link rel="stylesheet" media="print" href="./css/print.css" />-->
	<script type="text/javascript" src="js/js.js?2024-06-03"></script>
</head>
<body>
	<header>
		<div>
			<div class="logo"><a href="./"><img src="./img/logo.png" alt="LOGO" title="LOGO" /></a></div>
			<nav>
				<div>
					<div class="logo"><img src="./img/logo.png" alt="LOGO" title="LOGO" /></div>
					<button type="button" id="close_menu_btn"></button>
				</div>
				{%MENU%}
			</nav>
			<div class="header_right">
				<!--<button type="button" class="search_btn"></button>-->
				<button type="button" id="open_menu_btn">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</div>
	</header>
	<main>
		<form method="post" autocomplete="off">
		<section>
		<div class="breadcrumb_navigation"><a href="./">SKLAD</a>{%NAVIGATION%}</div>
		{%CONTENT%}
		</section>
		</form>
	</main>
	<footer><span>&copy;2024 Sklad</span></footer>
</body>
</html>