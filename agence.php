<!doctype html>
<html >
<head>
      <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="title" content="Gharad Immobilier">
	    <meta name="description" content="Gharad Immobilier est une agence spécialisée dans la vente et location des biens de tous genres, Appartements, Maisons, Villa allant même jusqu'à proposer des projets d'investissement.">
	    <meta name="keywords" content="gharad,Immobilier marrakech,appat,vendre">
	    <meta name="robots" content="index, follow">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <meta name="language" content="French">
	    <meta name="revisit-after" content="2 days">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link rel="icon" type="png" href="assets/img/icone.png">
	   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/media-queries.css">
     <link rel="stylesheet" type="text/css" href="dist/styles.css">
     <link rel="stylesheet" type="text/css" href="dist/aos.css">
		 <link rel="stylesheet" type="text/css" href="stylepage2.css">
     <link rel="stylesheet" type="text/css" href="header.css">
<title>Maison à louer</title>

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
<script href="dist/aos.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

			<a href="agence.php"><li id="selected" align="center"><center>Agence</center></li></a>
			<li align="center"><center>Immobilier&nbsp;&nbsp;<img alt=">>" src="assets/img/down-chevron.png" width="10px"></center>
				<ul>
					<a href="maison.php"><li><center>Maison</center></li></a>
					<a href="villa.php"><li><center>Villa</center></li></a>
					<a href="appart.php"><li><center>Appartement</center></li></a>
				</ul>
			</li>
			<a href="terrain_vent.php"><li align="center"><center>Terrain</center></li>
			<a href="car_vent.php"><li align="center"><center>Véhicules</center></li>
			<a href="contact.php">
				<li align="center"><center>contact&nbsp;&nbsp;<img alt=">" src="assets/img/down-chevron.png" width="10px"></center></a>
					<div class="inside">
						<div class="about">
					<div class="apropos">
						<h2>A propos de nous <img alt=">" src="vdrop-down-arrow.png" width="10px"></h2>
						<p>Nous somme une agence dirigée par Mr.Lahsen Gharad, spécialisée dans la location,la venteet l'achat d'immobilier,et aussi la vente des véhicules.</p>
						<br>
						<p>l'agence nommée "Gharad Immobilier", s'inspire des multiples sites officiels de vente de materiels sportif. Notre société travail sous un ordre légale, en aucun cas nous enfreignons les conditions/lois des marques présentées.</p>
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


	<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="642" id="gmap_canvas"
		 src="https://maps.google.com/maps?q=cafe%20derby%20Classico&t=&z=19&ie=UTF8&iwloc=&output=embed"
		 frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		 <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
	 </div>
	 <style>
	 .mapouter{
		 margin-top: 45px;
		 position:relative;
		 text-align:right;
		 height:642px;
		 width:100%;
		 opacity: 0.7;
	 }
	 .gmap_canvas {
		 overflow:hidden;
		 height:642px;
		 width:100%;
	 }

  </style>
</div>
<center><h2 style="
	border-bottom: 0.5px solid black;
	color: black;
	font-family: sourcesanspro-bold;
	padding: 10px;
	font-size: medium;
	width: 250px;
	cursor:default;
	margin: 5% 0%;" align="center">Équipe Gharad Immobilier</h2></center>
<div class="card-group">
  <div class="card">
    <img src="assets/img/Gharad.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mr. GHARAD Lahcen</h5>
      <p class="card-text">Créateur et propriétaire de GHARAD IMMOBILIER.</p>
	  <p>0667949855</p>
</div>
    <div class="card-footer">
      <small class="text-muted">Directeur</small>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/Naoufal.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">ALAA Naoufal</h5>
	  <p class="card-text">Étudiant en 2ème année à l'école Normale Supérieur Filière DUT génie Informatique.</p>
	  <p>0622975254</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Developpeur & Designer</small>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/Hatim.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">OUAHBI Hatim</h5>
      <p class="card-text">Étudiant en 2ème année à l'école Normale Supérieur Filière DUT génie Informatique.</p>
	  <p>0682818003</p>
</div>
    <div class="card-footer">
      <small class="text-muted">Developpeur</small>
    </div>
  </div>
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
	                    			<p><a href="agence.php">Agence</a></p>
	                    			<p><a href="#immobilier">Immobilier</a></p>
	                    			<p><a href="car_vent.php">Véhicule</a></p>
	                    		</div>
	                    		<div class="col-md-6">
	                    			<p><a href="terrain_vent.php">Terrain</a></p>
	                    			<p><a href="contact.php">Contactez-nous</a></p>
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
