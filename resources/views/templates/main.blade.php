<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	<meta name="description" content="{{ $description }}" >
		
		
		
		<link rel="icon" type="path-to/favicon.ico" href="{{ url('public/img/favicon.ico') }}">
		
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
		
		
		
		
		
		
		<!-- НОВОЕ ПОДКЛЮЧЕНИЕ -->
		
		
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css/reset.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css/styles.css') }}" />
		
		
		<!--<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/styles.less') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/assets/js/less.js') }}" />-->
		
		
		
		
		
		
	</head>
	<body class="row">
	
	<div id="preloader"><p>ЗАГРУЗКА</p></div>



@section('header')
<header id="header" class="col-lg-12">
	<div class="wrap_block col-lg-offset-2 col-lg-8">
		<div class="logoAndContacts">
			<div class="flex-elem"><img src="img/logo.jpg" /></div>
			<div class="flex-elem">Tel.: +7 987 654 32 10 | E-mail: mymail@mail.ru</div>
		</div>
		<div class="headerTitle">
			<span>Промышленные полимерные полы и покрытия</span>
		</div>
		<div class="headerDesc">
			<span>Практичное решение для дома и бизнеса</span>
		</div>
		<div id="btn0" class="btn0">Работы</div>
		<div id="btn1" class="btn1">Оставить заявку</div>
		<div id="btn0" class="btn0">Статьи</div>
		
	</div>
</header>
@show















@yield('content')










@section('footer')
<footer id="block_5" class="col-lg-12">
	<div class="wrap_block col-lg-offset-2 col-lg-8 col-md-12">
		<div class="title">
			<span>Наши контакты</span>
		</div>
		<div class="desc">
			<p>Вы всегда можете связаться с нами</p>
		</div>
		
		<div class="contactBlock col-lg-offset-8 col-md-offset-8 col-lg-4 col-md-4">
			<p>
				Адрес: г. Москва, ул. Центральная 1, офис 100<br/>
				Телефон: +7(800)333-22-33<br/>
				Электронный адрес: info@tobiz.net<br/>
				График работы: с 08:00 до 20:00 (пон-пят), с 09:00 до 14:00 (суб)
			</p>
		</div>
		
		<div style="clear: both;"></div>
		
		<div class="bottomBlock">
			<div class="flex-elem-1">
				<img src="img/logo.jpg" />
			</div>
			<div class="flex-elem-2">
				<p>ООО «СтройТрейд», 123456, г.Москва, ул. Центральная 1, офис 100 <br/>
				ИНН 1234567890 ОГРН 123456789012</p>
				<div id="policy">Политика конфиденциальности</div>
			</div>
			<div class="flex-elem-3">
				<p>050 246 56 85</p>
			</div>
			
		</div>
		
		<div class="policyText">
			<p>Данный сайт уважает Ваше право и соблюдает конфиденциальность при заполнении, передаче и хранении Ваших конфиденциальных сведений.</p>
			
			<p>Размещение заявки на данном сайте означает Ваше согласие на обработку данных и дальнейшей передачи ваших контактных данных нашей компании.</p>
			
			<p>Под персональными данными подразумевается информация, относящаяся к субъекту персональных данных, в частности имя, контактные реквизиты (адрес электронной почты) и иные данные, относимые Федеральным законом от 27 июля 2006 года № 152-ФЗ «О персональных данных» к категории персональных данных.</p>
			
			<p>Целью обработки персональных данных является информирование об оказываемых услугах нашей компании.</p>
		</div>
		
	</div>
</footer>
@show


	<div id="popup">
		<div id="qwert">
			
		</div>
		<div id="windowPopup">
			<div class="popup_form_close" id="closeX">X</div>
			<h3>Оставить заявку</h3>
			<form action="" method="post">
				<p>Введите имя:</p>
				<input type="text" name="name" placeholder="Введите имя" />
				<p>Введите E-mail:</p>
				<input type="text" name="mail" placeholder="Введите E-mail" />
				<p>Введите номер телефона:</p>
				<input type="text" name="numberPhone" placeholder="Введите номер телефона" />
				
				<input id="btnPopup" type="submit" name="btnPopup" value="Заказать" />
				
			</form>
			
			<div class="popup_form_text">Нажимая на кнопку, Вы принимаете <a target="_blank" href="/?personal_data=1">Положение</a> и <a target="_blank" href="/?personal_data=2">Согласие</a> на обработку персональных данных.</div>
			
		</div>
	</div>

	</body>
	</html>








	



	<script>
		
		
		
		document.getElementById('btn1').onclick = function() {
			document.getElementById('popup').style.display = 'block';
		}
		document.getElementById('btn2').onclick = function() {
			document.getElementById('popup').style.display = 'block';
		}
		
		document.onclick = function(event) {
			var elemId = event.target.id;
			
			if((elemId == 'qwert') || (elemId == 'closeX')){
				document.getElementById('popup').style.display = 'none';
			}
			
		}
	</script>
	
	
	
	
	
	<script>
		
		var statusBlock = 'close';
		
		document.getElementById('policy').onclick = function() {
			
			if(statusBlock == 'close'){
				document.getElementsByClassName('policyText')[0].style.display = 'block';
				statusBlock = 'open';
			}else{
				document.getElementsByClassName('policyText')[0].style.display = 'none';
				statusBlock = 'close';
			}
			
			
		}
		
	</script>
	
	
	<script type="text/javascript">
	
	window.onload = function () {
		
		document.getElementById('preloader').style.display = 'none';
		
	}
	
	</script>



