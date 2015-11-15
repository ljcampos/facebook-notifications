<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/messagespopup.css">
		<link rel="stylesheet" type="text/css" href="css/solicitudes.css">
	<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src='js/notification.js'></script>
	<!--<script type="text/javascript" src='js/message.js'></script>-->
</head>
<body>
	<!-- <nav> -->
		<ul id='nav'>
			<li><a href="#">Perfil</a></li>
			<li><a href="#">Inicio</a></li>
			<li id="solicitud_li">
				<!-- <a href="#" id="notificationLink">Notifications</a> -->
				<?php // Notification Popup Code...?>
				<span id="solicitud_count">3</span>
				<a href="#" id="solicitudLink">Amigos</a>

				<div id="solicitudContainer">
				<div id="solicitudTitle">Solicitudes de amistad</div>
				<div id="solicitudBody">
					<ul>
						<li class='solicitudes'>
							<div class="solicitud-main">
								<a href="#">
									<img src="image/person1.png">
								</a>
								<div class="solicitud-info">
									<a href="#"><strong>Irving campos</strong></a>
								</div>
								<div class="solicitud-buttons">
									<input type="button" value="aceptar" />
									<input type="button" value="rechazar" />
								</div>
							</div>							
						</li>
						<li class='solicitudes'>
							<div class="solicitud-main">
								<a href="#">
									<img src="image/person1.png">
								</a>
								<div class="solicitud-info">
									<a href="#"><strong>Irving campos</strong></a>
								</div>
								<div class="solicitud-buttons">
									<input type="button" value="aceptar" />
									<input type="button" value="rechazar" />
								</div>
							</div>							
						</li>
						<li class='solicitudes'>
							<div class="solicitud-main">
								<a href="#">
									<img src="image/person1.png">
								</a>
								<div class="solicitud-info">
									<a href="#"><strong>Irving campos</strong></a>
								</div>
								<div class="solicitud-buttons">
									<input type="button" value="aceptar" />
									<input type="button" value="rechazar" />
								</div>
							</div>							
						</li>
						<li class='solicitudes'>
							<div class="solicitud-main">
								<a href="#">
									<img src="image/person1.png">
								</a>
								<div class="solicitud-info">
									<a href="#"><strong>Irving campos</strong></a>
								</div>
								<div class="solicitud-buttons">
									<input type="button" value="aceptar" />
									<input type="button" value="rechazar" />
								</div>
							</div>							
						</li>
						<li class='solicitudes'>
							<div class="solicitud-main">
								<a href="#">
									<img src="image/person1.png">
								</a>
								<div class="solicitud-info">
									<a href="#"><strong>Irving campos</strong></a>
								</div>
								<div class="solicitud-buttons">
									<input type="button" value="aceptar" />
									<input type="button" value="rechazar" />
								</div>
							</div>							
						</li>
						<li class='solicitudes'>
							<div class="solicitud-main">
								<a href="#">
									<img src="image/person1.png">
								</a>
								<div class="solicitud-info">
									<a href="#"><strong>Irving campos</strong></a>
								</div>
								<div class="solicitud-buttons">
									<input type="button" value="aceptar" />
									<input type="button" value="rechazar" />
								</div>
							</div>							
						</li>						
					</ul>
				</div>
				<div id="solicitudFooter"><a href="#"><strong>Ver Todos</strong></a></div>
				</div>
			</li>
			<li id="mesages_li">
				<?php // Notification Popup Code...?>
				<span id="message_count">5</span>
				<a href="#" id="messageLink">Mensajes</a>

				<div id="mesagesContainer">
				<div id="mesagesTitle">Mensajes</div>
				<div id="mesagesBody" class="notifications">
					<ul>
						<li class="messages">
							<a href="#" class="wide">
								<div class='message-main'>
									<div class='user-picture'>
										<img src="image/person1.png">
									</div>
									<div class='user-info'>
										<span class='user'>
											<strong>Irving Campos (2)</strong>
										</span>
										<br>
										<span class='user-message'>mensaje...</span>
										<br>
										<span class='user-time'>16:36</span>
									</div>
								</div>
							</a>							
						</li>
						<li class="messages">
							<a href="#" class="wide">
								<div class='message-main'>
									<div class='user-picture'>
										<img src="image/person2.png">
									</div>
									<div class='user-info'>
										<span class='user'>
											<strong>Irving Campos (2)</strong>
										</span>
										<br>
										<span class='user-message'>mensaje...</span>
										<br>
										<span class='user-time'>16:36</span>
									</div>
								</div>
							</a>							
						</li>
						<li class="messages">
							<a href="#" class="wide">
								<div class='message-main'>
									<div class='user-picture'>
										<img src="image/person3.png">
									</div>
									<div class='user-info'>
										<span class='user'>
											<strong>Irving Campos (2)</strong>
										</span>
										<br>
										<span class='user-message'>mensaje...</span>
										<br>
										<span class='user-time'>16:36</span>
									</div>
								</div>
							</a>							
						</li>
						<li class="messages">
							<a href="#" class="wide">
								<div class='message-main'>
									<div class='user-picture'>
										<img src="image/person4.png">
									</div>
									<div class='user-info'>
										<span class='user'>
											<strong>Irving Campos (2)</strong>
										</span>
										<br>
										<span class='user-message'>mensaje...</span>
										<br>
										<span class='user-time'>16:36</span>
									</div>
								</div>
							</a>							
						</li>
						<li class="messages">
							<a href="#" class="wide">
								<div class='message-main'>
									<div class='user-picture'>
										<img src="image/person5.png">
									</div>
									<div class='user-info'>
										<span class='user'>
											<strong>Irving Campos (2)</strong>
										</span>
										<br>
										<span class='user-message'>mensaje...</span>
										<br>
										<span class='user-time'>16:36</span>
									</div>
								</div>
							</a>							
						</li>
						<li class="messages">
							<a href="#" class="wide">
								<div class='message-main'>
									<div class='user-picture'>
										<img src="image/person6.png">
									</div>
									<div class='user-info'>
										<span class='user'>
											<strong>Irving Campos (2)</strong>
										</span>
										<br>
										<span class='user-message'>mensaje...</span>
										<br>
										<span class='user-time'>16:36</span>
									</div>
								</div>
							</a>							
						</li>
					</ul>
				</div>
				<div id="mesagesFooter"><a href="#"><strong>Ver Todos</strong></a></div>
				</div>
			</li>
			<li id="notification_li">
				<!-- <a href="#" id="notificationLink">Notifications</a> -->
				<?php // Notification Popup Code...?>
				<span id="notification_count">3</span>
				<a href="#" id="notificationLink">Notifications</a>

				<div id="notificationContainer">
				<div id="notificationTitle">Notifications</div>
				<div id="notificationsBody" class="notifications">
				</div>
				<div id="notificationFooter"><a href="#"><strong>Ver Todos</strong></a></div>
				</div>
			</li>
			<li><a href="#">Configuracion</a></li>
		</ul>
	<!-- </nav> -->
</body>
</html>