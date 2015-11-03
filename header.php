<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>
<body>
<<<<<<< HEAD
	<hgroup>
    		<div id="donate"><a href=""><b> Donate </b> </div></a><!-- our donate button-->
            
            <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('home'); ?>/">
				<div>
					<label class="screen-reader-text" for="s"></label>
					<input type="text" value="" name="s" id="s" />
				</div>
			</form><!-- our search button-->
=======
    <hgroup>
            <div id="donate"><a href=""><b> Donate </b> </div></a><!-- our donate button-->
            <div id="search"><a href=""><small>SEARCH</small></a></div><!-- our search button-->
>>>>>>> origin/master
            
    </hgroup>
   
    <div id="mainnav">
    <?php wp_nav_menu(array("menu" => "Primary Menu")); ?>
    </div>
