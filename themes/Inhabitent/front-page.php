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
    
        <img class="background" src="wp-content/uploads/2019/11/home-hero.jpg" width="100%">
        <img class="main-logo" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-full.svg" >

    </section>

    <h1>Shop stuff</h1>
        <div class="shop">
        <section class="dostuff">
        <img class="doicon" src="<?php echo get_stylesheet_directory_uri();?>\images\product-type-icons\do.svg" width="25%" >
        <br>
        <button class="do">DO STUFF</button>
        </section>

        <section class="eatstuff">
        <img class="eaticon" src="<?php echo get_stylesheet_directory_uri();?>\images\product-type-icons\eat.svg" width="25%">
        <br>
        <button class="eat">EAT STUFF</button>
        </section>

        <section class="sleepstuff">
        <img class="sleepicon" src="<?php echo get_stylesheet_directory_uri();?>\images\product-type-icons\sleep.svg" width="25%">
        <br>
        <button class="sleep">SLEEP STUFF</button>
        </section>

        <section class="wearstuff">
        <img class="wearicon" src="<?php echo get_stylesheet_directory_uri();?>\images\product-type-icons\wear.svg"width="25%" >
        <br>
        <button class="wear">WEAR STUFF</button>
        </section>
        </div>

    <!-- <div class="shop-stuff">
        <!-- <?php $terms = get_terms( array(
            'taxonomy' => 'product-type',
            'hide_empty' => false,
        ));?> -->
    </div> 

    

    <h2>Inhabitent Journal</h2>

    <section class="journal">

        <div class="j-one">
        </div>

        <div class="j-two">   
        </div>
        
        <div class="j-three">
        </div>
    </section>

    <h2>Latest Adventures</h2>

    <section class="adventures">
        
        <div class="a-one">
            <img src="//localhost:8888/Inhabitent/wp-content/uploads/2019/11/canoe-girl.jpg" style="width:100%";/>
            <button>READ MORE</button>
        </div>

        <div class="a-two">
            <img src="http://localhost:8888/Inhabitent/wp-content/uploads/2019/11/beach-bonfire-1.jpg" style="width:100%";/>
            <button>READ MORE</button>
        </div>

        <div class="a-three">
            <img src="http://localhost:8888/Inhabitent/wp-content/uploads/2019/11/mountain-hikers-1.jpg" style="width: 100%"; />
            <button>READ MORE</button>
        </div>

        <div class="a-four"> 
            <img src="//localhost:8888/Inhabitent/wp-content/uploads/2019/11/night-sky.jpg" style="width: 100%";/>
            <button>READ MORE</button>
        </div>

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