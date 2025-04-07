<!DOCTYPE html>
<html lang="cs">
<head>
	<title>{%TITLE%}</title>
	<base href="http://{%SERVER%}/" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css?d2" />
	<!--<link rel="stylesheet" media="print" href="./css/print.css" />-->
	<script type="text/javascript" src="js/js.js?a"></script>
</head>
<body>
	<header>
		<div>
			<div class="logo"><img src="./img/logo.png" alt="LOGO" title="LOGO" /></div>
			<nav>
				<div>
					<div class="logo"><img src="./img/logo.png" alt="LOGO" title="LOGO" /></div>
					<button type="button" id="close_menu_btn"></button>
				</div>
				<ul>
					<li><a href="./domu">Domů</a></li>
					<li class="menu_dropdown">
						<a href="./prijem">Příjem</a>
						<i class="menu_dd_down">  </i>
						<ul class="sub_menu">
							<li class="menu_dropdown">
								<a href="./prijem/porizeni"><span>Pořízení</span></a>
								<i class="menu_dd_down"></i>
								<ul class="sub_menu">
									<li><a href="./prijem/porizeni/prijem_na_sklad"><span>Příjem na sklad</span></a></li>
									<li><a href="./prijem/porizeni/prevody"><span>Převody</span></a></li>
								</ul>
							</li>
							<li><a href="./prijem/tisk_dokladu"><span>Tisk dokladů</span></a></li>
						</ul>
					</li>
					<li class="menu_dropdown">
						<a href="./vydej">Výdej</a>
						<i class="menu_dd_down"></i>
					</li>
					<li><a href="./nastaveni">Nastavení</a></li>
				</ul>
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
		{%CONTENT%}
		</section>
		</form>
	</main>
	<footer><span>&copy;2024 Sklad</span></footer>
</body>
</html>