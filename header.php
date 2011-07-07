<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<title><?php bloginfo('name');?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<meta name="viewport" content="width=device-width,user-scalable=no" />
		<script type="text/javascript">
			function resize(multiplier) 
			{ 
				if (document.body.style.fontSize == "") 
					document.body.style.fontSize = "1.0em"; 
	
				document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em"; 
			}
		</script>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="main">
			<div id="header">
				<div id="logo">
					<span id="title"><?php bloginfo('name'); ?></span>
					<span id="subtitle"><?php echo get_bloginfo ( 'description' );?></span>
				</div>
				<ul id="menu">
					<?php wp_page_menu(array('show_home' => true)); ?>
				</ul>
			</div>
			<div id="sidebar">
				<ul>
					<?php wp_list_bookmarks(array('title_before' => '<b>', 'title_after' => '</b>')); ?>
				</ul>
			</div>
