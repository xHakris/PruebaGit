<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Zapatos-Shop
    </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
</head>
<body>
    <header >
    <!--<img src="images/portada.JPG" width="100%" height= "500">-->
    <div class="overlay">
    <h1>Zapatos - SHOP</h1>
    <h3>La mejor tienda de zapatos</h3>
	<br>
		</div>
    </header>

<nav>
    <ul>
    <li>
    <a href= "index.php?action=inicio">Inicio</a>
    </li>
    <li>
    <a href= "index.php?action=comprar">Comprar</a>
    </li>
    <li>
    <a href= "index.php?action=catalogo">Catalogo</a>
    </li>
    <li>
    <a href= "index.php?action=ingreso">Ingresar</a>
    </li>
    <li>
    <a href= "index.php?action=contactos">Contactos</a>
    </li>
  </ul>

    
</nav>

<section>
    <?php
        $cnav = new ControlNavegacion();
        $cnav -> controladorEnlacesPaginas();
    ?>
</section>

<hr>

<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
				<a class="link-1" href="#">Inicio</a>

					<a href="#">Blog</a>

					<a href="#">Pricing</a>

					<a href="#">About</a>

					<a href="#">Faq</a>

					<a href="#">Contact</a>
				</p>

				<p>Company Name &copy; 2015</p>
			</div>

		</footer>

</body>
</html>