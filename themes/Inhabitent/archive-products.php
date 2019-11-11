<?php get_header(); ?>

<h2>Shop Stuff</h2>
<ul class="categories">
        <li>Do</li>
        <li>Eat</li>
        <li>Sleep</li>
        <li>Wear</li>
    </ul>

<section class="products">


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<div class="product">
    
    <?php the_post_thumbnail('medium');?>
    <h2><?php the_title(); ?><?php echo "$ " . get_field('price');?></h2>
    
</div>
    <!-- Loop ends -->
    <?php endwhile;?>

</section>   

 
    <?php the_posts_navigation();?>
    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>




       
<?php get_footer();?>