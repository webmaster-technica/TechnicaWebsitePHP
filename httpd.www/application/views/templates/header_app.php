<!DOCTYPE html>
<html>
<head>  
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <title>Technica App</title>  
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/images/app/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/images/app/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/app/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>assets/images/app/favicon/manifest.json">
    <link rel="mask-icon" href="<?php echo base_url();?>assets/images/app/favicon/safari-pinned-tab.svg" color="#2e51a3">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="De dijkel app van Technica" />
    <meta property="og:image" content="<?php echo base_url();?>assets/images/app/app_og.jpg" />
    <meta property="og:site_name" content="Technica App" />
    <meta property="og:description" content="Technica's dijkel app! hier worden alle dijkels van onze schachten netjes bijgehouden" /> 
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vue.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Quicksand" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/app/simplegrid.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/app/style.css" />
</head>
<body>
<div class="phonewrap">
<header>
    <?php if (!$isLogin) { ?>
    <div class="nav-top">
        <div class="user-logged-in">
            <?php $arr = explode(' ',trim($_SESSION['user'][1])); echo $arr[0]; ?>
        </div>
        <div class="logo">
            <a href="<?php echo base_url();?>app"><img src="<?php echo base_url(); ?>assets/images/app/app_logo.png" /></a>
        </div>
        <div class="logout">
            <?php if(!empty($_SESSION)) { ?><a href="<?php echo base_url();?>app/logout">Logout</a><?php } ?>
        </div>
    </div>
    <?php } ?>
</header>
<main>
