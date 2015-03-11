<?php
/**
 * Template Name: Page - Home
 */
get_header(); ?>

<div class="container">
	
	<?php 
		if ( function_exists( 'soliloquy' ) ) { soliloquy( '293' ); } 
		if ( function_exists( 'soliloquy' ) ) { soliloquy( 'home-slider', 'slug' ); }	
	?>
	

    <div class="row">
	    
	    <div class="col-md-9">
		    <div class="row homepage-row">
			    
			    <div class="col-md-4">
				    <div class="view view-eighth" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2014/original/exygen_branding.jpg');">
						<h2><a href="branding/" class="animation_link">Branding</a></h2>
						<div class="mask">
							<p> </p><br>
							<a href="branding/" class="info">Read More</a>
						</div>
					</div>
			    </div>
			    
			    <div class="col-md-4">
				    <div class="view view-eighth" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2014/original/teledyne_marketing.jpg');">
						<h2><a href="marketing/" class="animation_link">Marketing</a></h2>
						<div class="mask">
							<p> </p><br>
							<a href="marketing/" class="info">Read More</a>
						</div>
					</div>
			    </div>
			    
			    <div class="col-md-4">
				    <div class="view view-eighth" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2014/original/cpt_dsn.jpg');">
						<h2><a href="design/" class="animation_link">Design</a></h2>
						<div class="mask">
							<p> </p><br>
							<a href="design/" class="info">Read More</a>
						</div>
					</div>
			    </div>
		    </div>
		    
		    <div class="row homepage-row">
			    <div class="col-md-4">
				    <div class="view view-eighth" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2014/original/sand_pr.jpg');">
						<h2><a href="public-relations/" class="animation_link">Public Relations</a></h2>
						<div class="mask">
							<p> </p><br>
							<a href="public-relations/" class="info">Read More</a>
						</div>
					</div>
			    </div>
			    
			    <div class="col-md-4">
				    <div class="view view-eighth" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2014/original/pub.jpg');">
						<h2><a href="publishing/" class="animation_link">Publishing</a></h2>
						<div class="mask">
							<p> </p><br>
							<a href="publishing/" class="info">Read More</a>
						</div>
					</div>
			    </div>
			    
			    <div class="col-md-4">
				    <div class="view view-eighth" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2014/original/cr_coffee.jpg');">
						<h2><a href="http://www.photos.murphycarpenter.com/" class="animation_link">Photography</a></h2>
						<div class="mask">
							<p> </p><br>
							<a href="http://www.photos.murphycarpenter.com/" class="info">Read More</a>
						</div>
					</div>
			    </div>
			    
		    </div>
	    </div>
	    	    
	    <div class="col-md-3 homepage-row">
		    <?php echo do_shortcode('[testimonials_cycle transition="fadeIn" timer="5000"]'); ?>
	    </div>
	    
    </div>
</div><!--/.container -->

<?php get_footer(); ?>