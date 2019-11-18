
<section class='shop-nav'>

<?php get_header(); ?>

</section>
<hr class="solid">
<h2>Shop Stuff</h2>

<ul class="categories">


                
        <li><a href="/Inhabitent/product-type/do/">Do</a></li>
        <li><a href="/Inhabitent/product-type/eat/">Eat</a></li>
        <li><a href="/Inhabitent/product-type/sleep/">Sleep</a></li>
        <li><a href="/Inhabitent/product-type/wear/">Wear</a></li>
 </ul>


<hr class="dashed">

<section class="products">


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<div class="product">
    
    <?php the_post_thumbnail('large');?>
    <button>
    <a href="<?php echo get_permalink();?>">
    <?php the_title();?>......... 
    <?php echo " $" . get_field('price');?>
    </a>
    </button>
    
</div>
    <!-- Loop ends -->
    <?php endwhile;?>

</section>   

 
    <?php the_posts_navigation();?>
    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>




       
<?php get_footer();?>