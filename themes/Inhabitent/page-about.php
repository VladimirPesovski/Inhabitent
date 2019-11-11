<?php get_header(); ?>

<section class="about">

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <div class="image">
    <?php the_post_thumbnail('medium');?>
    </div>
    
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