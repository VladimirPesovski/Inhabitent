<?php get_header(); ?>

<section class="body">



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


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


    
    <?php the_title();
    the_content();?>

    <?php endwhile;?>

    

    <section class="front">
        <img class="background" src="http://localhost:8888/Inhabitent/wp-content/uploads/2019/11/home-hero.jpg" width="100%" height="100%">
        <img class="main-logo" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-full.svg" >

    </section>

    <h2>Shop stuff</h2>

    <section class="shop">

        <div class="s-one">
        </div>

        <div class="s-two">
        </div>

        <div class="s-three">
        </div>

        <div class="s-four">
        </div>

    </section>

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
        </div>

        <div class="a-two">
        </div>

        <div class="a-three">
        </div>

        <div class="a-four">   
        </div>

    </section>
    

    

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