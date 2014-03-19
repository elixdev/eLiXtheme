<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         header.inc.php
* @Package:      GetSimple
* @Action:       eLiXtheme theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
    <meta name="author" content="eLiXdev">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link href="<?php get_theme_url(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/scrollup.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="<?php get_theme_url(); ?>/js/html5shiv.js"></script>
      <script src="<?php get_theme_url(); ?>/js/respond.js"></script>
    <![endif]-->
    <?php get_header(); ?>
    <link rel="shortcut icon" href="<?php get_site_url(); ?>/favicon.png">
</head>
<body id="<?php get_page_slug(); ?>">
	<div class="navbar navbar-default navbar-fixed-top" id="NavBar">
		<div class="container">
	        <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
	        </div><!-- /navbar-header -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php eLiXtheme_getNav(return_page_slug()); ?>
				</ul>
			</div>
		</div><!-- /container -->
    </div><!-- /navbar -->
    <div class="container">
