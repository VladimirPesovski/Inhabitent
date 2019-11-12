<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <section class="findus">

    <h2><?php the_title(); ?><?php the_content(); ?></h2>

    

    
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<form>
  Name:<br>
  <input type="text" class="text" name="name"><br>
  Email:<br>
  <input type="email" class="email" name="email"><br>
  Subject:<br>
  <input type="text" class="text" name="subject"><br>
  Message:<br>
  <textarea name="text" class="text" cols="40" rows="10"></textarea><br>
  <input type="submit" class="submit" value="Submit">

</form>


<section class="sidebar">
<?php get_sidebar();?> 
</section> 
</section>  
<?php get_footer();?>