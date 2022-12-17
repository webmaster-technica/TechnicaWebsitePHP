<!DOCTYPE html>
<html>
<head>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technica Antwerpen | <?php echo (isset($pageTitle)) ? $pageTitle : 'Geen titel' ?></title>  
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/images/technicaschild.png">
    <link rel="manifest" href="<?php echo base_url();?>assets/images/favicon/manifest.json">
    <link rel="mask-icon" href="<?php echo base_url();?>assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="De faculteitsvereniging in Antwerpen" />
    <meta property="og:image" content="<?php echo base_url();?>assets/images/technica_og.jpg" />
    <meta property="og:site_name" content="Technica Antwerpen" />
    <meta property="og:description" content="Als faculteitsvereniging van de professionele bachelor elektromechanica aan de AP-hogeschool, zijn we de laatste jaren weer enorm aan het groeien. Dit gebeurt door onze leden die ook graag de andere kant van het verder studeren willen ontdekken; van een feestje, brouwerijbezoek of een andere culturele activiteit zijn we niet vies. Toch draait het hier niet alleen om! De vorige generaties Technicanen hebben een mooie database opgebouwd met samenvattingen, oefeningen en proefexamens. De juiste balans vinden tussen het plezier maken en studeren, is iets waar wij je dan ook zeer graag bij willen helpen. Ik zie reeds uit naar het komende academiejaar, hopelijk jij ook!" /> 
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dcalendar.picker.js"></script>
    <link href="<?php echo base_url(); ?>assets/js/square/blue.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed:600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/hamburger/hamburger.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dcalendar.picker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stir.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.min.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/image-carousel/carousel.css" />
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/image-carousel/carousel.min.css" />-->
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
    <div class="mobile-menu">
        <ul>
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>overons">Over ons</a></li>
            <li><a href="<?php echo base_url();?>praesidium">Praesidium</a></li>
            <li><a href="<?php echo base_url();?>partners">Partners</a></li>
            <li><a href="<?php echo base_url();?>jobportaal">Job portaal</a></li>
            <li><a href="<?php echo base_url();?>lidworden">Lid worden</a></li>
        </ul>
    </div>
    <div <?php if(isset($isFrontpage) && $isFrontpage) : ?>class="top-header top-header-homepage"<?php else : ?>class="top-header"<?php endif; ?>>
        <div class="container">
            <div class="logo">
                <a href="<?php echo base_url();?>">
                    <?php if(isset($isFrontpage) && $isFrontpage) : ?>
                        <img src="<?php echo base_url();?>assets/images/technicaschild-wit.png">
                    <?php else : ?>
                        <img src="<?php echo base_url();?>assets/images/technicaschild.png">
                    <?php endif; ?>
                </a>
            </div>
            <nav>
                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                </button>
                <div class="menu">
                    <ul>
                        <div class="menu-left">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li><a href="<?php echo base_url();?>overons">Over ons</a></li>
                            <li><a href="<?php echo base_url();?>praesidium">Praesidium</a></li>
                        </div>
                        <div class="menu-right">
                            <li><a href="<?php echo base_url();?>partners">Partners</a></li>
                            <li><a href="<?php echo base_url();?>jobportaal">Job portaal</a></li>
                            <li><a href="<?php echo base_url();?>lidworden">Lid worden</a>
                        </div>
                    </ul>
                    <div class="leftline"></div>
                    <div class="rightline"></div>
                </div>
            </nav>
        </div>
        <?php if(isset($isFrontpage) && $isFrontpage) : ?>
        <div class="homepage-overlay hide-mobile">
            <div class="container">
                <div class="grid">
                    <div class="col-34">
                        <h1>TECHNICA,<br />De faculteitsvereniging in Antwerpen</h1>
                        <p>Elektromechanica, Integrale veiligheid, Energiemanagement en Elektronica-ICT</p>
                        <p>Elektromechanische systemen, HVAC-Systemen-Klimatiesatiesystemen, Werforganisatie en Internet of Things</p>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
    <?php elseif (!$picture == ""): ?>
        </div><div class="header-front-img" style="background-image: url(<?php echo base_url();?>/assets/images/<?php echo $picture; ?>);"></div>
    <?php endif; ?>
</header>
<main>
