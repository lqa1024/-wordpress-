<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" media="screen" /><!--主CSS样式-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sidebar.css" type="text/css" media="screen" /><!--侧边栏CSS样式-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/single.css" type="text/css" media="screen" /><!--文章内容页样式-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><!--引用Font Awesome-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script><!--首页轮播图效果-->
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
	</head>
	<body>
		<!--头部开始-->
		<div id="header">
			<div id="head-top">
				<h1><a name="toc-3"></a><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1><!--网站标题-->
				<p id="description"><?php bloginfo('description'); ?></p><!--网站描述-->
				<!--导航链接-->

<?php 
    // 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
    wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 2) );
?>
	


			</div>

		</div>
		<!--头部结束-->
		<div id="wrapper">
		