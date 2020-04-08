<!doctype html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="icon" type="png" href="assets/img/icone.png">
	   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
<link rel="stylesheet" type="text/css" href="dist/styles.css">
<link rel="stylesheet" type="text/css" href="dist/aos.css">
	<script href="dist/aos.js"></script>

<link rel="stylesheet" type="text/css" href="stylepage1.css">
<link rel="stylesheet" type="text/css" href="header.css">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Villa à louer</title>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {
	scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
		document.getElementById("head").style.display = "none";
    document.getElementById("navbar").style.top = "0px";
		document.getElementById("navbar").style.height = "73px";
		document.getElementById("logo").style.display = "block";
		document.getElementById("navbar").style.background = "rgba(255,255,255,0.9)";
		document.getElementById("list").style.marginTop = "32px";
  } else {
    document.getElementById("navbar").style.top = "150px";
		document.getElementById("logo").style.display = "none";
	  document.getElementById("navbar").style.height = "45px";
		document.getElementById("navbar").style.background = "#F5F5F5";
		document.getElementById("head").style.display = "block";
		document.getElementById("list").style.marginTop = "0px";
  }
}
</script>
<script type="text/javascript">
$('.carousel').carousel({
interval: 2000
})
</script>
</head>
<body>
	<div class="baniere" id="head">
		<a href="index.php"><img src="assets/img/logo.png" height="100px"></a>



	</div>
	<nav id="navbar">
		<ul id="list">
			<a href="index.php"><img src="assets/img/logoblack.png" height="55px" id="logo"></a>
			<a href="index.php"><li align="center"><center>Acceuil</center></li></a>

			<a href="agence.php"><li align="center"><center>Agence</center></li></a>
			<li align="center" id="selected"><center>Immobilier&nbsp;&nbsp;<img alt=">>" src="assets/img/down-chevron.png" width="10px"></center>
				<ul>
					<a href="maison.php"><li><center>Maison</center></li></a>
					<a href="villa.php"><li><center>Villa</center></li></a>
					<a href="appart.php"><li><center>Appartement</center></li></a>
				</ul>
			</li>
			<a href="terrain_vent.php"><li align="center"><center>Terrain</center></li>
			<a href="car_vent.php"><li align="center"><center>Véhicules</center></li>
			<a href="contact.php"><li align="center"><center>contact&nbsp;&nbsp;<img alt=">" src="assets/img/down-chevron.png" width="10px"></center></a>
				<div class="inside">
					<div class="about">
				<div class="apropos">
					<h2>A propos de nous <img alt=">" src="assets/img/drop-down-arrow.png" width="10px"></h2>
					<p>Nous somme une gaence dirigée par Mr.Lahsen Gharad, spécialisée dans la location,la venteet l'achat d'immobilier,et aussi la vente des véhicules.</p>
					<br>
					<p>Notre société travail sous un ordre légale, en aucun cas nous enfreignons les conditions/lois des marques présentées.</p>
				</div>
				<div class="other1">
				<h2>contactez-nous</h2>
					<a href="https://www.facebook.com/messages/t/naoufala2" class="fa fa-facebook"></a>
					<a href="https://twitter.com/NaoufalAlaa1" class="fa fa-twitter"></a>
					<a href="mailto: alaanaoufal2000@gmail.com" class="fa fa-google"></a>
					<a href="https://www.instagram.com/naoufal_alaa/" class="fa fa-instagram"></a>
					<a class="fa fa-snapchat-ghost" ></a>
				</div>
				</div>
				</div>
								</li>
		</ul>
	</nav>


	<!--Mobile navigation bar-->
	<div class="dropdown">
  <button id="myBtn" class="dropbtn">Gharad Immobilier<br>Allez à</button>
  <div id="myDropdown" class="dropdown-content">
		<a href="index.php"><center>Acceuil</center></a>
		<a href="agence.php"><center>Agence</center></a>
		<a href="maison.php"><center>Maison</center></a>
		<a href="villa.php"><center>Villa</center></a>
		<a href="appart.php"><center>Appartement</center></a>
		<a href="terrain_vent.php"><center>Terrain</center></a>
		<a href="car_vent.php"><center>Véhicules</center></a>
		<a href="contact.php"><center>contact</center></a>
  </div>
</div>



	<div class="couverture_vi">
				<h1 align="center">Villa à louer</h1>
	</div>
 <br>
 <center><h2 style="
	border-bottom: 0.5px solid black;
	color: black;
	font-family: sourcesanspro-bold;
	padding: 10px;
	margin-bottom: 15px;
	font-size: medium;
	width: 250px;
	cursor:default;" align="center">Villa à Louer</h2></center>
 <div style="overflow-x:auto">
 <table class="table">

<tr>
	<td align="center">
<div class="slidee">
  <div id="carousel-1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
	<div class="carousel-item active">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="First slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Second slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Third slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Third slide">
	</div>
  </div>
  <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
  </a>
</div>


</div>
<div class="documentation"><h3>Coming Soon</h3>
<p></p><br>
<p class="last"><b>xxxxx DHS</B></p><br>
<p>Contact: 0667949855</p>

<a id="plus" style="background-color: rgba(40,167, 69, 0.8); color: white; padding:5px" href="#">voir plus</a>

</div>
	</td>
	<td align="center">
<div class="slidee">
  <div id="carousel-2" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
	<div class="carousel-item active">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="First slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Second slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Third slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Third slide">
	</div>
  </div>
  <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
  </a>
</div>


</div>
<div class="documentation"><h3>Coming Soon</h3>
<p></p><br>
<p class="last"><b>xxxxx DHS</B></p><br>
<p>Contact: 0667949855</p>

<a id="plus" style="background-color: rgba(40,167, 69, 0.8); color: white; padding:5px" href="#">voir plus</a>

</div>
	</td>
</tr>
<tr>
<td align="center">
<div class="slidee">
  <div id="carousel-3" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
	<li data-target="#carouselExampleIndicators" data-slide-to="4" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
	<div class="carousel-item active">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="First slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Second slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Third slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Third slide">
	</div>
  </div>
  <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
  </a>
</div>


</div>
<div class="documentation"><h3>Coming Soon</h3>
<p></p><br>
<p class="last"><b>xxxxx DHS</B></p><br>
<p>Contact: 0667949855</p>



		</div>
</td>
<td align="center">
<div class="slidee">
  <div id="carousel-4" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
	<li data-target="#carouselExampleIndicators" data-slide-to="4" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
	<div class="carousel-item active">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="First slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Second slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Third slide">
	</div>
	<div class="carousel-item">
	  <img class="d-block w-100" src="assets/img/comingsoon.jpg" alt="Third slide">
	</div>
  </div>
  <a class="carousel-control-prev" href="#carousel-4" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-4" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
  </a>
</div>


</div>
<div class="documentation"><h3>Coming Soon</h3>
<p></p><br>
<p class="last"><b>xxxxx DHS</B></p><br>
<p>Contact: 0667949855</p>



		</div>
</td>

</tr>

</table>
</div>
		<!-- Footer -->
					<footer>
						<div class="footer-top">
							<div class="container">
								<div class="row">
									<div class="col-md-3 footer-about wow fadeInUp">
										<h3>À propos</h3>
										<p>
											Nous sommes une agence de vente et localtion des biens, que ce soit Véhicules ou d'immobiliers et terrains. Nous vous fournisseront un service professionnel et très experimenté
										</p>
										<p>&copy; Gharad Immobilier</p>
												</div>
									<div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
										<h3>Contact</h3>
												<p><i class="fas fa-map-marker-alt"></i> 81 Massira 1A, Marrakech</p>
												<p><i class="fas fa-phone"></i> Téléphone: +212 6 67 94 98 55</p>
												<p><i class="fas fa-envelope"></i> Email: <a href="mailto:gharad.lahsen@gmail.com">gharad.lahsen@gmail.com</a></p>
												</div>
												<div class="col-md-4 footer-links wow fadeInUp">
													<div class="row">
														<div class="col">
															<h3>Liens</h3>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<p><a class="scroll-link" href="#top-content">Acceuil</a></p>
															<p><a href="#">Agence</a></p>
															<p><a href="#">Immobilier</a></p>
															<p><a href="#">Véhicule</a></p>
														</div>
														<div class="col-md-6">
															<p><a href="#">Terrain</a></p>
															<p><a href="#">Contactez-nous</a></p>
														</div>
													</div>
												</div>
									</div>
							</div>
						</div>
						<div class="footer-bottom">
							<div class="container">
								<div class="row">
										<div class="col footer-social" align="center">
													<a href="https://www.facebook.com/gharadimmobilier/"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-google-plus-g"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-pinterest"></i></a>
												</div>
									</div>
							</div>
						</div>
					</footer>
		<script src="assets/js/jquery-3.2.1.min.js"></script>
					<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
					<script src="assets/js/jquery.backstretch.min.js"></script>
					<script src="assets/js/wow.min.js"></script>
					<script src="assets/js/retina-1.1.0.min.js"></script>
					<script src="assets/js/scripts.js"></script>


		<script>
		function openForm() {
		document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		document.getElementById("myForm").style.display = "none";
		}
		</script>


		<!--Mobile navigation bar show-->
		<script>
		// Get the button, and when the user clicks on it, execute myFunction
		document.getElementById("myBtn").onclick = function() {myFunction()};

		/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
		function myFunction() {
		  document.getElementById("myDropdown").classList.toggle("show");
		}
		</script>


		</body>
		</html>
