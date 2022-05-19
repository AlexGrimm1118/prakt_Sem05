<!doctype html> 
<html lang="ru">
	<head> 
		<meta charset="UTF-8">
		<title>Музеи мира</title> 
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"><!--подключаем файл стилей-->
	</head>
	
	<body>
		<header><!--шапка сайта-->
			<!-- <div>
				<h1>ПАРЛАМЕНТСКИЕ ПАРТИИ</h1>
				<h2>РОССИЙСКОЙ ФЕДЕРАЦИИ</h2>
			<div> -->
		</header>

			 <!--блок навигации, одинаковый для все страниц сайта-->
			<nav>
				<ul class="menu">
					<li><a href="/">ГЛАВНАЯ</a></li>
					<li><a href="/historic">ИСТОРИЯ</a>
						
					<li><a href="/pol_part">ТОП-4 ПАРТИИ РФ</a>
						<ul class="submenu">
							<li><a href="/pol_part/LDPR">ЛДПР</a></li>
							<li><a href="/pol_part/EDROS">ЕДИНАЯ РОССИЯ</a></li>
							<li><a href="/pol_part/KPRF">КПРФ</a></li>
							<li><a href="/pol_part/SPRrus">СПРАВЕДЛИВАЯ РОССИЯ</a></li>
						</ul>
					</li>  
					<li><a href="/novosti">НОВОСТИ</a>
					<!-- <li><a href="/goroda">СТУДЕНТАМ</a>
						<ul class="submenu">
							<li><a href="/goroda/barselona">РАСПИСАНИЕ</a></li>
							<li><a href="/goroda/london">ИЗМЕНЕНИЯ В РАСПИСАНИИ</a></li>
							<li><a href="/goroda/moskva">РАСПИСАНИЕ ЗВОНКОВ</a></li>
							<li><a href="/goroda/parizh">РАСПИСАНИЕ ЭКЗАМЕНОВ</a></li>
						</ul>
					</li> -->
					<li><a href="/skulptura">МЕДИА</a></li>
					<!-- <li><a href="/neobychnye-muzei-mira">О НАС</a></li> -->
					<li><a href="/console">КОНСОЛЬ</a></li>
				</ul>
			</nav>						
			<!--блок содержит раздел навигации и контент страницы-->		
			<div class="wrapper">			
			<div class="content"> 
				<div class="row">

					@yield('content')

				</div>
			</div>			
		</div>
		
		<footer><!--подвал сайта-->
		<div>
			<p><i>Екатеренбургский колледж транспортного строительства.<br/>
			Заметили ошибку на странице?<br/>
			Выделите её мышкой и нажмите Ctrl+Enter	</i></p>
		</div>
		</footer>
	</body>
</html>