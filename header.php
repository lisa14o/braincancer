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

	<hgroup>
            
            <ul class="socialitems">
            	<li id="twitter"><a href="https://twitter.com/nobraincancer">T</a></li>
				<li id="facebook"><a href="https://www.facebook.com/braincancer.org">F</a></li>
				<li id="pintrest"><a href="http://www.pinterest.com/braincancerorg/">P</a></li>
			</ul>	
            
            
            
            <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('home'); ?>/"><!-- our search button-->
				<div>
					<label class="screen-reader-text" for="s"></label>
					<input type="text" value="" name="s" id="s" />
				</div>
			</form>

            <div id="donate"><a href=""><b> Donate </b> </div></a><!-- our donate button-->
            
            <div id="menu-social" class="menu-social">
    
    </hgroup>
   
    <div id="mainnav">
    <?php wp_nav_menu(array("menu" => "Main")); ?>
    </div>
