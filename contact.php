<?php
session_start(); // Это должно быть в начале файла.
// Включаем отображение всех ошибок и предупреждений
error_reporting(E_ALL);
ini_set('display_errors', 1);


?>

<!DOCTYPE html>

<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Template</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/lightbox.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media.css">
</head>
<body class="no-index">
	<header>
			<div class="container">
				<a class="navbar-brand" href="#">LOGO</a>
				<button class="open_msg" data-toggle="modal" data-target="#myModal">Тескари алока</button>
				<div class="info"><i class="fa fa-phone"></i>
					+ 99871 123 45 67 <br>
					+ 99871 123 45 67
				</div>
				<div class="info"><i class="fa fa-map-marker"></i>Тошкент ш. Амир Темур кучаси 
					110 уй	</div>
			</div>
	</header>

	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Уюшма хакида</a></li>
					<li><a href="#">Янгиликлар</a></li>
					<li><a href="#">Вокеалар</a></li>
					<li><a href="#">Маколалар</a></li>
					<li><a href="#">Конунчилик</a></li>
					<li><a href="#">Наслчилик</a></li>
					<li><a href="#">Ветеринария</a></li>
					<li><a href="#">Махсулотлар</a></li>
					<li><a href="#">Озукалар</a></li>

				</ul>
				<button class="open_search"><i class="fa fa-search"></i></button>
				
			</div>
		</div>
	</nav>	
	<div class="search_box">
		<div class="container">
			<form action="">
					<div class="input">
						<input type="text" placeholder="Қидирув">
						<input type="submit" value="Излаш">
					</div>
			</form>
		</div>
	</div>
	<div class="wrapper">
		<div class="container">
			<h2 class="title">Алока</h2>
			<div class="contact">
				<div class="row">
					<div class="col-md-4">
						<i class="fa fa-phone"></i>
						 +998 71 238 64 15 <br>
 						 +998 71 238 14 55
					</div>
					<div class="col-md-4">
						<i class="fa fa-map-marker"></i>
						Toshkent 100200,
					Amir Temur shox ko'chasi 108 uy
					</div>
					<div class="col-md-4">
						<i class="fa fa-envelope"></i>
						info@uzparranda.uz
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<div class="links">
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		<div class="item">
			<a href="#">press-service.uz</a>
		</div>
		
	</div>
	<div class="map">
		
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h1>LOGO</h1>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.

				</div>
				<div class="col-md-6">
					<div class="askme">
					   <form action="/send_message.php" method="POST" > 
                            <div class="title">Сўров жўнатиш</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="fullname" placeholder="Исм-шарифингиз" required>
                                    <input type="email" name="email" placeholder="Электрон почта" required>
                                    <input type="text" name="phone" placeholder="Телефон номер">
                                    <input type="text" name="company" placeholder="Корхона номи">
                                </div>
                                <div class="col-md-6">
                                    <textarea name="message" placeholder="Хабар матни" required></textarea>
                                    <input type="submit" value="Жўнатиш">
                                </div>
                            </div>
                        </form>
					</div>8
				</div>
				<div class="col-md-3">
					<div class="info">
						<i class="fa fa-map-marker"></i>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
					</div>
					<div class="info">
						<i class="fa fa-phone"></i>
						+ 998 71 123 45 67
					</div>
					<div class="info">
						<i class="fa fa-envelope"></i>
						info@uzparranda.uz
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="row">
					<div class="col-md-3 text-left">
						© 2017 Uzparranda.uz.
					</div>
					<div class="col-md-6">
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
					</div>
					<div class="col-md-3 text-right">
						<a href="#">Сайт яратилди MD.uz</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/lightbox.js"></script>
	<script src="assets/js/main.js"></script>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      


    </div>
  </div>
</div>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		var messageText = "<?=$_SESSION['status'] ?? ''; ?>";
		if(messageText != ''){

		
				Swal.fire({
				title: "Thank you",
				text: messageText,
				icon: "success"
				});
				<?php unset($_SESSION['status']) ?>;	
		}		

	</script>
</body>
</html>