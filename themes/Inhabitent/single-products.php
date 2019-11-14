<?php get_header(); ?>
<?php the_posts_navigation();?>



<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <section class="single-product">

    
    <div class="single-image">
    <?php the_post_thumbnail('medium') ;?>
    </div>

    <section class="single-text">

    <div class="single-title">
    <h2><?php the_title(); ?></h2>
    </div>

    <div class="single-price">
    <?php echo "$ " . get_field('price');?>
    </div>

    <div class="single-content">
    <?php the_content(); ?>
    </div>

    </section>
   
    
    <!-- Loop ends -->
    <?php endwhile;?>
    </section>

   

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>