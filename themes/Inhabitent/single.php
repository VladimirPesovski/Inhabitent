<?php get_header(); ?>

<section class="single-post-page">

<div class="singlepost">


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


    
    <h2><?php the_title(); ?></h2>
    <div class="wrap" >
    <?php the_post_thumbnail('large');?>
    <p class="date">
      <?php the_date(); ?></p>
    </div>

    <?php the_content(); ?>
</div>
    <!-- Loop ends -->
    <?php endwhile;?>
    

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<div class="side">
<?php get_sidebar();?> 
</div> 


</section>

<?php get_footer();?>