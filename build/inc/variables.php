<?php

//Nav Variables
$page = explode('/', $_SERVER['PHP_SELF']);
$page = end($page);

//Account / domain variables
$user  = 'batoutofhellmusi';
$domain  = 'batoutofhellmusical.com';
$localfolder = 'Bat-out-of-Hell-2019';

// This need to change ONLY if site is not hosted with DEWYNTERS
$website_root_path = realpath(__DIR__ . '/..') . '/';
$docroot = $website_root_path;
if (strpos($_SERVER['SERVER_NAME'], 'dev.') !== FALSE) {
	// DEV SITE
	$root 		= '//dev.' . $domain . '/website/';
} elseif (strpos($_SERVER['SERVER_NAME'], 'localhost') !== FALSE) {
	// LOCAL SITE	
	$root 		= '//localhost:8888/MAMP-Sites/' . $localfolder . '/build/';
} elseif (strpos($_SERVER['SERVER_NAME'], 'dev2.') !== FALSE) {
    // Dave
    $root 		= 'http://dev2.batoutofhellmusical.com/';
} else {
	// LIVE SITE	
	$root 		= '/new-york/';
}

// Booking Links
$booking_link = "https://www.nycitycenter.org/bat-out-of-hell";
$booking_link_london_google = "https://www.nederlander.co.uk/whats-on/bat-out-of-hell/dates?utm_source=google&utm_campaign=BOOH&utm_medium=cpc";
$booking_link_london_value = 1;

$booking_link_manchester = "http://www.atgtickets.com/shows/bat-out-of-hell/opera-house-manchester/";
$booking_link_manchester_google = "https://secure.atgtickets.com/Online/default.asp?doWork::WScontent::loadArticle=Load&BOparam::WScontent::loadArticle::article_id=A90F60C3-3EA1-4EFE-83D1-31D403DEF84B&doWork::WScontent::search=1&SessionSecurity::referrer=PPC";

$booking_link_toronto = "https://www.mirvish.com/shows/bat-out-of-hell";
$booking_link_toronto_value = 2;

// Active Link
if (isset($_COOKIE[$user . 'PS'] )){
	//$bkgLink	= ${ "bkg" . $_COOKIE[$user . 'PS'] };
	$booking_link_london 	= $booking_link_london_google;
	$booking_link_manchester = $booking_link_manchester_google;
}


//Head variables
$title = "Bat Out of Hell | Home - Welcome";
$description = "Official Site for Jim Steinman’s Bat Out of Hell The Musical – Tickets now on sale for New York City Center";
$keywords = "Jim Steinman, Bat out of Hell Bat out of Hell the Musical, ";


//Custom variables
$body_class = "";
$body_id = "";

//Social
$facebook_link = "https://www.facebook.com/BATtheMusicalNY/?modal=admin_todo_tour";
$twitter_link = "https://twitter.com/BATtheMusicalNY";
$youtube_link = "https://www.youtube.com/channel/UCEfX1cHgaYB0ajpPTf8hYwQ/featured";
$instagram_link = "https://www.instagram.com/batthemusicalny/";
