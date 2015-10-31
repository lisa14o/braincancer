<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="shortcut icon" href= "" type="image/png">

    <!--[if lt IE 9]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>
<body>
	<hgroup>
    		<div id="donate"> Donate </div> <!-- This will be our donate button crafted by CSS (currently residing in hgroup) -->
    </hgroup>
   
    <div id="mainnav">
	<?php wp_nav_menu(array("menu" => "Primary Menu")); ?>
	</div>