<?php get_header(); ?>
<?php the_posts_navigation();?>



<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    
    <!-- Loop ends -->
    <?php endwhile;?>
    </section>

   

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>