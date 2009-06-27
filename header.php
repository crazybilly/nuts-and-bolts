<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" >

	<title><? bloginfo('name'); ?> <? wp_title(); ?></title>
	<link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">

	<link rel="icon" type="image/ico" href="<?php bloginfo('url')?>/favicon.ico" >
	<link rel="alternate" type="application/rss+xml" title="<? bloginfo('name'); ?> RSS Feed" href="<? bloginfo('rss2_url'); ?>" >
	<link rel="pingback" href="<? bloginfo('pingback_url') ?>" >

<? wp_head(); ?>

</head>

<body>
	<div class="container">
	
	<div class="header">
	
		<!--top navigation -->
		<div class="nav">
			<ul>
				<li id="<? if (is_front_page()) {echo "current"; } ?>"><a href="<? bloginfo('siteurl'); ?>">Home</a></li>
				<? wp_list_pages('title_li=none'); ?>
			</ul>
		</div><!--nav-->

		<!--blog title and home link -->
		<h1><a href="<? bloginfo('siteurl'); ?>"><? bloginfo('name'); ?></a></h1>

		<!--subtitle-->
		<h2><? bloginfo('description'); ?></h2>

	</div><!--header-->

	<div class="content"><!--closed in footer.php-->

