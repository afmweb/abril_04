<?php get_header(); ?>

<div class="container">
    <?php
    // Start the Loop.
    while (have_posts()) : the_post();
?>
        <h1><?php the_title(); ?></h1>
       
<?php
 the_content();
    endwhile;
    ?>
</div><!-- #primary -->

<?php
get_footer();
