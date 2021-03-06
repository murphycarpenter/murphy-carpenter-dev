<?php
/**
 * Template Name: Page - Service
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
                } ?>
            </div><!--/.col-md-12 -->
        </div><!--/.row -->

        <header class="page-title">
            <h1><?php the_title();?></h1>
        </header>

        <div class="row content">
            <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>

        </div><!-- .row content -->
    </div><!--/.container -->

<?php get_footer(); ?>