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
<<<<<<< Updated upstream
			<form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('home'); ?>/"><!-- our search button-->
=======
    		        
            <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('home'); ?>/"><!-- our search button-->
>>>>>>> Stashed changes
				<div>
					<label class="screen-reader-text" for="s"></label>
					<input type="text" value="" name="s" id="s" />
				</div>
			</form>
<<<<<<< Updated upstream
    		<div id="donate"><a href=""><b> Donate </b> </div></a><!-- our donate button-->
=======
            <div id="donate"><a href=""><b> Donate </b> </div></a><!-- our donate button-->

            
>>>>>>> Stashed changes
    </hgroup>
   
    <div id="mainnav">
    <?php wp_nav_menu(array("menu" => "Primary Menu")); ?>
    </div>
