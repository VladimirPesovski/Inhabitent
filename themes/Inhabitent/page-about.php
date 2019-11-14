<?php get_header(); ?>

<section class="about">


<!-- <img class="woods" src="<?php echo get_stylesheet_directory_uri();?>\images\about-hero.jpg" width="100%"> -->
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <div class="image">
    <h2><?php the_title(); ?></h2>
    
    <?php the_post_thumbnail('medium');?>

    
    
    <div class="text-content">
        
    <?php the_content(); ?>
  
    
    <!-- Loop ends -->
    <?php endwhile;?>
       
    <?php the_posts_navigation();?>
   

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</div>

</section>
    
<?php get_footer();?>