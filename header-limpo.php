<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<?php do_action( 'bp_head' ) ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />		
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/next-favicon.ico" type="image/x-icon">
		
		<?php
			if ( is_singular() && bp_is_blog_page() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			
			wp_head(); 
		?>


    <?php if (get_option("buddy_boss_custom_logo", FALSE)!= FALSE) {
      $logo = get_option("buddy_boss_custom_logo");
      
      } else {
            $logo = get_bloginfo("template_directory")."/_inc/images/logo.jpg";
      } ?>

		<!-- Facebook OpenGraph Tags -->
		<meta property="og:image" content="<?php echo $logo ?>" />
		<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<!-- Facebook OpenGraph Tags -->
	</head>
	
	

	<body <?php body_class() ?> id="bp-default">
	
		<?php do_action( 'bp_before_header' ) ?>
		
		
						<ul class="sf-menu">
							<?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
								<?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'primary-menu', 'items_wrap' => '%3$s' ) ); ?>
							<?php } else { ?>
								<?php wp_list_pages( 'title_li=&depth=3' . bp_dtheme_page_on_front() ); ?>
							<?php	} ?>
						</ul>
																
				</div><!-- .padder -->
					
				<?php do_action( 'bp_header' ) ?>
	
			</div><!-- #header -->

			<?php do_action( 'bp_after_header' ) ?>
			<?php do_action( 'bp_before_container' ) ?>
		
		<?php if (function_exists('breadcrumbs_everywhere') && !is_front_page()) {
      ?> <div id="breadcrumb"><?php
        breadcrumbs_everywhere();
      ?></div><?php
    }
    ?>
				  
			<div id="container" style="background: none">

			
