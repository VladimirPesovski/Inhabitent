<?php get_header(); ?>

<section class="body">


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <?php the_title();
    the_content();?>

    <?php endwhile;?>

    

    <section class="front">
        <img class="background" src="http://localhost:8888/Inhabitent/wp-content/uploads/2019/11/home-hero.jpg" width="100%" height="100%">
        <img class="logo" src="//images/logos/inhabitent-logo-full.svg" width="100%" height="100%">
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

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    </section> 
<?php get_footer();?>