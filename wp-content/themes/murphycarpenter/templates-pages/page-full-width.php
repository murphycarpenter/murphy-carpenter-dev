<?php
/**
 * Template Name: Page - Full-width
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <header class="page-title">
            <h1><?php the_title();?></h1>
        </header>

        <div class="row content">
            <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>

        </div><!-- .row content -->
    </div><!--/.container -->

<?php get_footer(); ?>