<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <section class="findus">
    
    <h3><br><?php the_title(); ?> <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683120375559!2d-123.14035688441733!3d49.26345178005413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490%20W%20Broadway%2C%20Vancouver%2C%20BC%20V6H%204E8!5e0!3m2!1sen!2sca!4v1573581532833!5m2!1sen!2sca" width="700" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe></h3>
    <h4><?php the_content(); ?></h4>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<form>
  Name <span>*</span><br>
  <input type="text" class="text" name="name" required><br><br>

  Email <span>*</span><br>
  <input type="email" class="email" name="email" required><br><br>

  Subject <span>*</span><br>
  <input type="text" class="text" name="subject" required><br><br>
  
  Message <span>*</span><br>
  <textarea name="text" class="message" cols="115" rows="20" required></textarea><br>
  
  <input type="submit" class="submit" value="Submit">

</form>


<section class="sidebar">
<?php get_sidebar();?> 
</section> 
</section>  
<?php get_footer();?>