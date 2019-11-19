<?php get_header(); ?>
<div class="broken-page">

<section class="broken-page-title">
<h1>OOOPS! THAT PAGE CAN'T BE FOUND.</h1>
<p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
</section>

<section class="recent-posts">

   
<?php dynamic_sidebar('sidebar-1');?>
<section class='archives404'>
<?php $archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );?>
</section>
</section>


<section class="sidebar">
<?php dynamic_sidebar('sidebar-1');?>
</section>

</div>

<?php get_footer();?>

