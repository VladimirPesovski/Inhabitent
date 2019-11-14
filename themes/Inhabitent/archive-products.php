<?php get_header(); ?>
<hr class="solid">
<h2>Shop Stuff</h2>

<ul class="categories">
        <li>Do</li>
        <li>Eat</li>
        <li>Sleep</li>
        <li>Wear</li>
    </ul>
<hr class="dashed">

<section class="products">


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<div class="product">
    
    <?php the_post_thumbnail('large');?>
    <a href="<?php echo get_permalink();?>">
       <p class="title"><?php the_title();?>
       <?php echo " $" . get_field('price');?></p>
   </a>
    
</div>
    <!-- Loop ends -->
    <?php endwhile;?>

</section>   

 
    <?php the_posts_navigation();?>
    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>




       
<?php get_footer();?>