<?php get_header(); ?>

<section class="body">


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


    
    <!-- <?php the_title();
    the_content();?> -->

    <?php endwhile;?>

    

    <section class="front">
        <img class="background" src="<?php echo get_stylesheet_directory_uri();?>\images\home-hero.jpg" width="100%">
        <img class="main-logo" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-full.svg" >

    </section>

    <h1>Shop stuff</h1>

    <div class= "shop">
<?php $terms = get_terms( array(
   'taxonomy' => 'product-type',
   'hide-empty' => false,
));?>

<?php

foreach($terms as $term):?>

<div>
<img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/<?php echo $term->slug;?>.svg">
<?php echo category_description($term->term_id);?>
<button>
<a href="<?php echo get_home_url() . "/product-type/" . $term->slug;?>">

    <?php echo $term->name ;?>
    </button>
</a>
</div>
<?php endforeach; ?>
</div>
   
    




    

    <h2>Inhabitent Journal</h2>

    <section class="journal">

    <?php
   $args = array('numberposts' => 3, 'order'=> 'ASC', 'orderby' =>'date');
   $postslist = get_posts($args);
   // print_r($postslist);
   foreach ($postslist as $post) : setup_postdata($post); ?>
    <div>
   <?php the_post_thumbnail('medium');?>
        <section class="journal-front">
        <div class="journal-date">
       <?php the_date(); ?>
        </div>
       <br />
       <?php the_title(); ?>
       <?php echo wp_trim_words(get_the_excerpt(), 10, "..."); ?>
</section>
   </div>
   <?php endforeach; ?>

    <div class="j-one">
        </div>

        <div class="j-two">   
        </div>
        
        <div class="j-three">
    </div>
    </section>

    <br>
    <div class="adventures-heading">
    <h2>Latest Adventures</h2>
    </div>

    <section class="adventures">

            <img class="canoe" src="<?php echo get_stylesheet_directory_uri();?>\images\adventure-photos\canoe-girl.jpg" style="width: 100%" >

            <img class="bonfire" src="<?php echo get_stylesheet_directory_uri();?>\images\adventure-photos\beach-bonfire.jpg" style="width: 100%">

            <img class="hikers" src="<?php echo get_stylesheet_directory_uri();?>\images\adventure-photos\mountain-hikers.jpg" style="width: 100%" >

            <img class="sky" src="<?php echo get_stylesheet_directory_uri();?>\images\adventure-photos\night-sky.jpg" style="width: 100%" >

    </section>

    <?php $terms = get_terms( array (
    'taxonomy' => 'product-type',
    'hide_empty' => false,
) );

foreach($terms as $term):
 echo $term->name;
 echo '</br>';
 echo $term->slug;
 echo '</br>';
endforeach;

?>

    <?php the_posts_navigation();?>
    <?php

$args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?>
   <div>
       <?php the_date(); ?>
       <br />
       <?php the_title(); ?>
       <?php echo wp_trim_words(get_the_excerpt(), 10, "..."); ?>
   </div>
<?php endforeach; ?>

    <!-- END OF BLOG POSTS -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    </section> 
<?php get_footer();?>