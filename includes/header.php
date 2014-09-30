<?

$main_email = 'danielklingjr@gmail.com';

$self = $_SERVER['PHP_SELF'];

$company ="Main Street Fencing";
$byline ="Fencing";

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Main Street Fence</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<? if ($page_id != 'home') { echo '../'; } ?>css/normalize.min.css">
        <link rel="stylesheet" href="<? if ($page_id != 'home') { echo '../'; } ?>css/flexslider.css">
        <link rel="stylesheet" href="<? if ($page_id != 'home') { echo '../'; } ?>css/main.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrap">
            <header role="banner">
                <div class="branding">
                    <img src="<? if ($page_id != 'home') { echo '../'; } ?>img/logo.png" alt="Main Street Fence">
                </div>
                <div class="nav__small">
                    <span>215-643-7490</span>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                    <a href="" class="button">Request a Quote</a>
                </div>
                <nav role="navigation" class="nav__main">
                    <a href=""><b>Wood</b><i>Fencing</i></a>
                    <a href=""><b>Chain Link</b><i>Fencing</i></a>
                    <a href=""><b>Vinyl</b><i>Fencing</i></a>
                    <a href=""><b>Garden</b><i>Structures</i></a>
                    <a href=""><b>Aluminum</b><i>Fencing</i></a>
                    <a href=""><b>Deer/Farm</b><i>Fencing</i></a>
                    <a href=""><b>Railings</b></a>
                </nav>
            </header>