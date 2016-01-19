<!DOCTYPE html>
<html lang="en">
<!--[if IE 7]><html lang="en" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="en"><![endif]-->
<!--[if !IE]><html lang="en"><![endif]-->
<head>

	<!-- ==============================================
		Title and basic Meta Tags
	=============================================== -->
	<meta charset="UTF-8">
	<title>Accueil</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:title" content=""/>

    <!-- ==============================================
		Mobile Metas
	=============================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- ==============================================
		Google Fonts
	=============================================== -->
	<!-- Lato -->
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<!-- Open Sans Font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<!-- Audiowide Font (For Logo) -->
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<!-- ==============================================
		Css
	=============================================== -->
	<!-- Essential Stylesheet -->
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.css" rel="stylesheet" />
    <link type="text/css" href="css/flexslider.css" rel="stylesheet" />
    <link type="text/css" href="css/jquery.fs.tipper.css" rel="stylesheet" />
    <link type="text/css" href="css/animate.css" rel="stylesheet" />
    <link type="text/css" href="css/magnific-popup.css" rel="stylesheet" />
    <link type="text/css" href="css/owl.carousel.css" rel="stylesheet" />
    <link type="text/css" href="css/owl.theme.css" rel="stylesheet" />
    <link type="text/css" href="css/simpletextrotator.css" rel="stylesheet" />
    <!-- Main Stylesheet -->
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <!--[if IE 7]>
		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
	<![endif]-->

</head>
<body>
<!-- ==============================================
		music
	=============================================== -->
	<audio autoplay loop>
      <source src="RideOfTheValkyries.mp3">
</audio>
	<!-- ==============================================
		Preloader
	=============================================== -->
	<div class="spinner">
		<div class="cube"></div>
	</div>

	<!-- ==============================================
		Header
	=============================================== -->
	<header id="main-header" class="parallax">

		<?php include ('header.php') ?>
		<?php include ('subheader.php') ?>

		<div id="more-features" class="dark-background">
			<div class="padding">
				<a class="btn-standart wow bounceIn" href="features.php">plus d'informations</a>
			</div>
		</div>
	</header>

	<!-- ==============================================
	Details
	=============================================== -->
	<section >
		<div class="padding">
			<div class="container">
				
				<!-- Section Title -->
				<div class="section-title">
				</div>
				<img class="img-circle img-responsive center" src="img/roi.png" alt="" style="border:10px" />
				<div class="discours">« Chères sportives, chers sportifs,
						La pratique sportive devient, de nos jours, un des droits
						fondamentaux de l’Homme.
						Il est donc nécessaire d’en élargir l’accès aux hommes et aux
						femmes de toutes les franges de la société - sans distinction
						aucune -, aux régions et zones défavorisées et aux personnes
						à besoins spécifiques. Le sport est, à ce titre, un levier fort de
						développement humain, d’inclusion, de cohésion sociale et de
						lutte contre la misère, l’exclusion et la marginalisation. »</div>
						<span></span>
						<span class="auteur">Extrait du message de sa Majesté le Roi Mohamed VI aux participants
						aux assises nationales du sport tenues à Skhirat, le 24 octobre 2008</span>
	
		<!-- More Features -->
		<!-- <div id="more-features" class="dark-background">
			<div class="padding">
				<a class="btn-standart wow bounceIn" href="features.html">plus d'informations</a>
			</div>
		</div> -->

	</section>

	<!-- ==============================================
		Pricing
	=============================================== -->
	<section>
		
	</section>

	<!-- ==============================================
		Guests
	=============================================== -->
	<?php include ('guests.php') ?>
	<!-- ==============================================
		Partenaires et sponsors
	=============================================== -->
	<section><div class="sponsors">
	        <h2 style="background-color:#333;">Partenaires</h2>
	        <?php include ('partenaires.php') ?>
	        </div></section>
	<section>
		
		<!-- Punch Text -->
		<div id="punch-text" class="dark-background">
			<div class="padding">
				3 Avril 2016 Départ à 9H<br/>
				<img src="img/icons/depart.png">

	
				<div id="compte_a_rebours"><noscript>Fin de l'évènement le 3 avril 2016.</noscript></div>
<script type="text/javascript">
function compte_a_rebours()
{
	var compte_a_rebours = document.getElementById("compte_a_rebours");

	var date_actuelle = new Date();
	var date_evenement = new Date("Apr 3 09:00:00 2016");
	var total_secondes = (date_evenement - date_actuelle) / 1000;

	var prefixe = "Il reste exactement: ";
	if (total_secondes < 0)
	{
		prefixe = "l'évènement a commencé il y'a exactement: "; // On modifie le préfixe si la différence est négatif

		total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue

	}

	if (total_secondes > 0)
	{
		var jours = Math.floor(total_secondes / (60 * 60 * 24));
		var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
		minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
		secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

		var et = "et";
		var mot_jour = "jours,";
		var mot_heure = "heures,";
		var mot_minute = "minutes,";
		var mot_seconde = "secondes";

		if (jours == 0)
		{
			jours = '';
			mot_jour = '';
		}
		else if (jours == 1)
		{
			mot_jour = "jour,";
		}

		if (heures == 0)
		{
			heures = '';
			mot_heure = '';
		}
		else if (heures == 1)
		{
			mot_heure = "heure,";
		}

		if (minutes == 0)
		{
			minutes = '';
			mot_minute = '';
		}
		else if (minutes == 1)
		{
			mot_minute = "minute,";
		}

		if (secondes == 0)
		{
			secondes = '';
			mot_seconde = '';
			et = '';
		}
		else if (secondes == 1)
		{
			mot_seconde = "seconde";
		}

		if (minutes == 0 && heures == 0 && jours == 0)
		{
			et = "";
		}

		compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure + ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
	}
	else
	{
		compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
	}

	var actualisation = setTimeout("compte_a_rebours();", 1000);
}
compte_a_rebours();
</script>
			</div>
		</div>

		
		

	</section>
	
		
       
     

	<!-- ==============================================
		Footer
	=============================================== -->
	
	<?php include ('footer.php') ?>

	<!-- ==============================================
		Javascript
	=============================================== -->
	<!-- Javascript Plugins -->
	<script src="js/lib/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.parallax.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/placeholdem.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/jquery.simple-text-rotator.js"></script>
	<script src="js/jquery.fs.tipper.js"></script>
	<!-- Main Javascript -->
	<script src="js/hosty.js"></script>
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Change UA-XXXXX-X to be your site's ID -->
    <!--<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>-->
    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	  chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<!-- Google Analitycs code -->
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-19814081-6', 'creative-ispiration.com');
			ga('send', 'pageview');
		</script>
	<!-- Google Analitycs code -->
	
</body>
</html>