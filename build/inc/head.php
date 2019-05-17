<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>
    <?php // Canonical 
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        // Add trailing forward slash 
        if (substr($url, -1) !== '/') $url = $url . '/';
    ?>
    <link rel="canonical" href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$url"; ?>" />
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="Bat Out of Hell | www.batoutofhellmusical.com">
    <base href="/" />
    <!-- Bootstrap -->
    <link href="<?php echo $root ;?>assets/css/main.min.css?v=1.2" rel="stylesheet">

    <!-- FACEBOOK Open Graph Tags -->
    <meta property="og:title" content="Bat Out of Hell">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://batoutofhellmusical.com">
    <meta property="og:description" content="Official Site for Jim Steinman's Bat Out Of Hell The Musical - Now Playing at the Dominion Theatre, London">
    <meta property="og:site_name" content="Bat Out of Hell">
    <meta property="og:language" content="en-GB">
    <meta property="og:image" content="https://batoutofhellmusical.com/tile-wide.jpg">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo $root;?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo $root;?>/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo $root;?>manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Google Analytics -->
   
    <!-- Global site tag (gtag.js) - Google AdWords: 825736899 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-825736899"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'AW-825736899');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZB8L79');</script>
    <!-- End Google Tag Manager -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      
    <![endif]-->
  
    </head>
<body id="<?php echo $body_id; ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZB8L79" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php //echo $conversion; ?>

<?php require_once('inc/navigation.php'); ?>

	
    <div class="container-fluid cookies">
        <p class="container-max">This website uses cookies to ensure you get the best experience. <br class="visible-sm visible-xs"/> <a href="<?php echo $root; ?>cookies-policy" class="btn btn-transparent">Find out more</a> <a class="btn accept-cookies">Accept Cookies</a>
        </p>
    </div>
    <div class="site-wrap">
        <div class="site-wrap__container">
			