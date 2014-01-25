<!-- HEADER.PHP -->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="">
<link href="<?php echo get_stylesheet_directory_uri() ?>/css/typo.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<?php if (is_singular()){
	echo "<link href='";
	echo get_stylesheet_directory_uri();
	echo "/css/singular.css' rel='stylesheet'>";
} ?>
<link href="<?php echo get_stylesheet_directory_uri() ?>/css/date-style.css" rel="stylesheet">
<?php if(is_singular()) wp_enqueue_script('comment-reply'); ?>
<!-- WP自动生成的东西 开始 -->
<?php wp_head(); ?>
<!-- WP自动生成的东西 结束 -->
<script type="text/javascript" src="//cdn.auzeonfung.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//cdn.auzeonfung.com/jquery.nicescroll.js"></script>
<script type="text/javascript" src="//cdn.auzeonfung.com/jquery.lettering.ox.js"></script>
<!-- <script type="text/javascript" src="//cdn.auzeonfung.com/blur.min.js"></script> -->

<!-- 快捷鍵換頁JS -->
<script type="text/javascript">
	document.onkeydown = chang_page;
	function chang_page(e) {
	    var e = e || event,
	    keycode = e.which || e.keyCode;

	    if (keycode == 39)
	        location = "<?php echo get_previous_posts_page_link(); ?>";
	    if (keycode == 37)
	        location = "<?php echo get_next_posts_page_link(); ?>";
}
$(document).ready(function() { $("html").niceScroll();});
$(document).ready(function() { $(".post-time").lettering();})
</script>
</head>
<body>
	<header>
		<div id="header-title">
			<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>
		<nav id="header-nav">
			<ul class="header-ul">
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</nav>
	</header>
	<section id="search-box">
		<?php include(TEMPLATEPATH . '/searchform.php'); ?>
	</section>
<!-- END OF THE HEADER.PHP -->
<?php
/**
 * 
 * @authors OX(AuZeonfung,EoZenfung,Oujunfeng,OuTakashiMine) (OX@OOXX.dk)
 * @date    2014-01-21 11:46:33
 * @version $Id$
 */
?>