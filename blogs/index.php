<?php

/**
 * BuddyPress - Blogs Directory
 *
 * @package BuddyPress
 * @subpackage BuddyBoss
 */

?>

<?php get_header( 'buddypress' ); ?>

  <?php locate_template( array( 'sidebar-left.php' ), true ) ?>


	<?php do_action( 'bp_before_directory_blogs_content' ); ?>

  <?php if ( is_active_sidebar('blogs') ) : ?>
    <div id="content" class="three_column" >
  <?php else: ?>
    <div id="content" class="two_column_left" >
  <?php endif; ?>
		<div class="padder">
			<div id="destacado">
		<form action="" method="post" id="blogs-directory-form" class="dir-form">
			
			<h1><?php the_title(); ?></h1><?php if ( is_user_logged_in() && bp_blog_signup_enabled() ) : ?>
			<a class="button-2" href="<?php echo bp_get_root_domain() . '/' . bp_get_blogs_root_slug() . '/create/' ?>"><?php _e( 'Create a Site', 'buddypress' ); ?></a><?php endif; ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="entry-directory">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>

			<div class="item-list-tabs" role="navigation">
				<ul>
					<li class="selected" id="blogs-all"><a href="<?php bp_root_domain(); ?>"><?php printf( __( 'All Sites <span>%s</span>', 'buddypress' ), bp_get_total_blog_count() ); ?></a></li>

					<?php if ( is_user_logged_in() && bp_get_total_blog_count_for_user( bp_loggedin_user_id() ) ) : ?>

						<li id="blogs-personal"><a href="<?php echo bp_loggedin_user_domain() . bp_get_blogs_slug() . '/my-blogs/' ?>"><?php printf( __( 'My Sites <span>%s</span>', 'buddypress' ), bp_get_total_blog_count_for_user( bp_loggedin_user_id() ) ); ?></a></li>

					<?php endif; ?>

					<?php do_action( 'bp_blogs_directory_blog_types' ); ?>
					
					<?php do_action( 'bp_blogs_directory_blog_sub_types' ); ?>

					<li id="blogs-order-select" class="last filter">

						<label for="blogs-order-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>
						<select id="blogs-order-by">
							<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
							<option value="newest"><?php _e( 'Newest', 'buddypress' ); ?></option>
							<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ); ?></option>

							<?php do_action( 'bp_blogs_directory_order_options' ); ?>

						</select>
					</li>

				</ul>
			</div><!-- .item-list-tabs -->

			<div id="blogs-dir-list" class="blogs dir-list">

				<?php locate_template( array( 'blogs/blogs-loop.php' ), true ); ?>

			</div><!-- #blogs-dir-list -->

			<?php do_action( 'bp_directory_blogs_content' ); ?>

			<?php wp_nonce_field( 'directory_blogs', '_wpnonce-blogs-filter' ); ?>

		</form><!-- #blogs-directory-form -->
			</div>
		</div><!-- .padder -->
	</div><!-- #content -->
	
	<div id="blog-dir-search" class="dir-search">
		<?php bp_directory_blogs_search_form() ?>
	</div><!-- #blog-dir-search -->
	
	<?php do_action( 'bp_after_directory_blogs_content' ); ?>
	
	<?php locate_template( array( 'sidebar-directory.php' ), true ) ?>

<?php get_footer() ?>