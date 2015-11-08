<?php get_header();?>
   
<div id="content">
   
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
    <article class="halfcol left">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail(); ?>
        
        <p><?php the_content(); ?></p>
   </article>      
       
    
    <?php endwhile; else: ?>
        <p>Sorry no posts to display</p>
    
    <?php endif; ?>
    

</div><!-- #content -->   

<?php get_footer(); ?>