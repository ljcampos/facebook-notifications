<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src='js/notification.js'></script>
	<!--<script type="text/javascript" src='js/message.js'></script>-->
</head>
<body>
	<!-- <nav> -->
		<ul id='nav'>
			<li><a href="#">Perfil</a></li>
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Amigos</a></li>
			<li id="mesages_li">
				<?php // Notification Popup Code...?>
				<span id="message_count">5</span>
				<a href="#" id="messageLink">Mensajes</a>

				<div id="mesagesContainer">
				<div id="mesagesTitle">Mensajes</div>
				<div id="mesagesBody" class="notifications"></div>
				<div id="mesagesFooter"><a href="#">See All</a></div>
				</div>
			</li>
			<li id="notification_li">
				<!-- <a href="#" id="notificationLink">Notifications</a> -->
				<?php // Notification Popup Code...?>
				<span id="notification_count">3</span>
				<a href="#" id="notificationLink">Notifications</a>

				<div id="notificationContainer">
				<div id="notificationTitle">Notifications</div>
				<div id="notificationsBody" class="notifications"></div>
				<div id="notificationFooter"><a href="#">See All</a></div>
				</div>
			</li>
			<li><a href="#">Configuracion</a></li>
		</ul>
	<!-- </nav> -->
</body>
</html>