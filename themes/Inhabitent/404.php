<?php get_header(); ?>
<section class="broken-page-title">
<h1>OOOPS! THAT PAGE CAN'T BE FOUND.</h1>
<p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
</section>
<section class="recent-posts">
   
<?php dynamic_sidebar('sidebar-1');?>
</section>

<section class='archives'>
<?php $archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );?>
</section>

<?php get_footer();?>

