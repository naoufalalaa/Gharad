<?php
	$server_name="localhost";
	$user_name="root";
	$password="";
	$data="gharad_immobilier";

	$conn=mysqli_connect($server_name,$user_name,$password,$data);
	$sql="SELECT * FROM message";
	$result=mysqli_query($conn,$sql);



 ?>

 <!doctype html>
 <html>
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
 		 <link rel="stylesheet" type="text/css" href="stylepage1.css">
      <link rel="stylesheet" type="text/css" href="header.css">
			<link rel="stylesheet" type="text/css" href="contact.css">
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

 			<a href="agence.php"><li align="center"><center>Agence</center></li></a>
			 <li align="center"><center>Immobilier&nbsp;&nbsp;<img alt=">>" src="assets/img/down-chevron.png" width="10px"></center>
				<ul>
					<a href="maison.php"><li><center>Maison</center></li></a>
					<a href="villa.php"><li><center>Villa</center></li></a>
					<a href="appart.php"><li><center>Appartement</center></li></a>
				</ul>
			</li>
			<a href="terrain_vent.php"><li align="center"><center>Terrain</center></li>
 			<a href="car_vent.php"><li align="center"><center>Véhicules</center></li>
 			<a href="contact.php"><li align="center" id="selected"><center>contact&nbsp;&nbsp;<img alt=">" src="assets/img/down-chevron.png" width="10px"></center>
 				<div class="inside">
 					<div class="about">
 				<div class="apropos">
 					<h2>A propos de nous <img alt=">" src="assets/img/drop-down-arrow.png" width="10px"></h2>
 					<p>Nous somme une agence dirigée par Mr.Lahsen Gharad, spécialisée dans la location,la venteet l'achat d'immobilier,et aussi la vente des véhicules.</p>
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
<?php


					if(isset($_POST['GO'])){
						$name=$_POST['name'];
						$email=$_POST['email'];
						$phone=$_POST['phone'];
						$subject=$_POST['subject'];
						$message=$_POST['message'];

						$query="INSERT INTO message (name,email,phone,subject,message)
										VALUES ('$name','$email','$phone','$subject','$message')";
										echo "<p align='center' style='background-color: rgba(0,0,0,0.5);    color: white;   width:300px;   border-radius:3px;   '>Message de $name envoyé avec success!!</p>";

										mysqli_query($conn,$query);
					}
		 ?>
 	  <form  method="post" id="contact_form">
 	    <div class="name">
 	      <label for="name"></label>
 	      <input type="text" placeholder="Mon Nom" name="name" id="name_input" required>
 	    </div>
 	    <div class="email">
 	      <label for="email"></label>
 	      <input type="email" placeholder="Mon e-mail" name="email" id="email_input" required>
 	    </div>
 	    <div class="telephone">
 	      <label for="phone"></label>
 	      <input type="text" placeholder="Mon numéro" name="phone" id="telephone_input" required>
 	    </div>
 	    <div class="subject">
 	      <label for="subject"></label>
 	      <select placeholder="À propos de" name="subject" placeholder="Au sujet de..." id="subject_input" required>
 	        <option value="voiture">Achat/Vente voiture</option>
 	        <option value="terrain">Achat/Vente Terrain</option>
 	        <option value="appartement">Vente/Location Appartement</option>
 	        <option value="maison">Vente/Location Maison</option>
 					<option value="villa">Vente/Location Villa</option>
 	      </select>
 	    </div>
 	    <div class="message">
 	      <label for="message"></label>
 	      <input name="message" type="text" placeholder="Exprimez-vous.." id="message_input" cols="30" rows="5" required>
 	    </div>
 	    <div class="submit">
 	      <input type="submit" value="Send Message" name="GO" id="form_button" />
 	    </div>
 	  </form><!-- // End form -->
 	</div>



	<!-- // End #container -->

 	<!-- Footer -->
         <footer>
         	<div class="footer-top">
 		        <div class="container">
 		        	<div class="row">
 		        		<div class="col-md-3 footer-about wow fadeInUp">
 		        			<h3>About us</h3>
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
 	                    			<p><a href="#immobilier">Immobilier</a></p>
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
