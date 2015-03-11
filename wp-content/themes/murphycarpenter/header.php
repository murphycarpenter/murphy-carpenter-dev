<?php
/**
 * Default Page Header
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">
    <?php wp_head(); ?>
    
    <script src="//use.typekit.net/tkm1kts.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
    
</head>

<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
    <nav class="navbar navbar-top">
        <div class="container">
	        
	        <div class="navbar-header">
            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
	        </div>
	        
                <?php wp_nav_menu(
                        array(
                            'menu' => 'main-menu',
                            'container_class' => 'navbar-collapse collapse',
                            'container_id'    => 'navbar',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => '',
                            'walker' => new Bootstrapwp_Walker_Nav_Menu(),
                            'link_after'      => '<span>/</span>'
                        )
                    ); ?>
                    
                <div class="row"> 
		            <div class="col-md-12 brand">
			             <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
		                    <h1>Murphy/Carpenter</h1>
		                </a>
		                <h2>
			                Full-service marketing, advertising and public relations.<br>
							Defining your voice. Achieving your goals. Making a difference.
						</h2>
		            </div>
                </div>
                    
            </div>
        </div>
    </nav>
    <!-- End Header. Begin Template Content -->