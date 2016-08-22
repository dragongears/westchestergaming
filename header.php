<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<title>
			<?php if (is_page('home')) { bloginfo('name');
			} elseif (is_404()) {
				echo '404 Not Found - ';
				bloginfo('name');
			} elseif (is_category()) {
				echo 'Category:'; wp_title('');
			} elseif (is_search()) {
				echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
				echo 'Archives:'; wp_title('');
			} else {
				echo wp_title('') . " - ";
				bloginfo('name');
			}
			?>
		</title>

	  <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/css/ie.css" media="screen" />
<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/css/style.css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>

	</head>

	<body>
<!--	<div class="container showgrid">-->
	<div class="container">
    <div id="head" class="span-24 last">
			<div id="banner" class="span-20">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
<!--			<div id="search" class="span-6 last">-->
<!--				--><?php //include (TEMPLATEPATH . '/searchform.php'); ?>
<!--			</div>-->
			<div id="social" class="span-4 last">
				<a href="http://www.meetup.com/westchester-gaming-group/" class="button white"><img src="<?php bloginfo('template_url'); ?>/style/img/icons/meetup_24.png" alt="" />Meetup</a>
                <a href="http://www.facebook.com/westchestergaming" class="button white"><img src="<?php bloginfo('template_url'); ?>/style/img/icons/facebook_24.png" alt="" />Facebook</a>
			</div>
		</div>
    <div id="breadcrumbs" class="span-24 last">
			<?php shailan_dropdown_menu(); ?>
		</div>
    <div id="content" class="span-24 last">
	
