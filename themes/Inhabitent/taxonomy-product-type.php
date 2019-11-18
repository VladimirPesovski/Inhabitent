<section class="product-types-nav">
<?php get_header(); ?>
</section>

<?php
					 
					the_archive_description('<div class="product-type-description">', '</div>');
				?>
<hr class="dashed">
<section class="product-types">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
  
    
    <div class="product-type-section">

    
   
    
    <?php the_post_thumbnail('medium');?>
    <button>
    <a href="<?php echo get_permalink();?>">
    <?php the_title();?>.............. 
    <?php echo " $" . get_field('price');?>
    </a>
    </button>
    
</div>


   
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

    
<?php get_footer();?>