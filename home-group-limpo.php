<?php

/*
Template Name: Home do Grupo de Eventos
*/

?>

<?php get_header( 'limpo' ); ?>

<?php //locate_template( array( 'sidebar-left.php' ), true ) ?>

  <?php if ( bp_has_groups() ) : while ( bp_groups() ) : bp_the_group(); ?>
  <?php  $group_is_visible = bp_group_is_visible(); ?>
  		
    <?php if ( is_active_sidebar('group') && bp_group_is_visible() && bp_is_group_home() ) : ?>
    	<div id="content" class="three_column">
	<?php  else: ?>
		<div id="content" class="two_column_left">
	<?php endif; ?>

	<div class="padder">

	  <div id="destacado">
  
      <?php do_action( 'bp_before_group_home_content' ) ?>

      <div id="item-header">
        <?php //locate_template( array( 'groups/single/group-header.php' ), true ) ?>
      </div><!-- #item-header -->
		
      <!-- Hide group navigation from forums -->
      <?php if ( bp_is_group_forum() && bp_group_is_visible() ) : ?>
      <?php else : ?>	
	
      <div id="item-nav">                 
        <div class="item-list-tabs no-ajax" id="object-nav">
          <ul>
            <?php bp_get_options_nav() ?>
            
            <?php if ( has_nav_menu( 'group-menu' ) ) : ?>
                <?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'group-menu', 'items_wrap' => '%3$s' ) ); ?>
            <?php endif; ?>

            <?php do_action( 'bp_group_options_nav' ) ?>
          </ul>
        </div>
      </div><!-- #item-nav -->
      
      <?php endif; ?>   	  
  </div>
			
			
				<div id="item-body">

					<?php do_action( 'bp_before_group_body' );

					if ( bp_is_group_admin_page() && bp_group_is_visible() ) :
						locate_template( array( 'groups/single/admin.php' ), true );

					elseif ( bp_is_group_members() && bp_group_is_visible() ) :
						locate_template( array( 'groups/single/members.php' ), true );

					elseif ( bp_is_group_invites() && bp_group_is_visible() ) :
						locate_template( array( 'groups/single/send-invites.php' ), true );

						elseif ( bp_is_group_forum() && bp_group_is_visible() && bp_is_active( 'forums' ) && bp_forums_is_installed_correctly() ) : 
							locate_template( array( 'groups/single/forum.php' ), true );

					elseif ( bp_is_group_membership_request() ) :
						locate_template( array( 'groups/single/request-membership.php' ), true );

					elseif ( bp_group_is_visible() && bp_is_active( 'activity' ) ) :

						locate_template( array( 'groups/single/activity.php' ), true );

					elseif ( bp_group_is_visible() ) :
						locate_template( array( 'groups/single/members.php' ), true );

					elseif ( !bp_group_is_visible() ) :
						// The group is not visible, show the status message

						do_action( 'bp_before_group_status_message' ); ?>

						<div id="message" class="info">
							<p><?php bp_group_status_message(); ?></p>
						</div>

						<?php do_action( 'bp_after_group_status_message' );

					else :
						// If nothing sticks, just load a group front template if one exists.
						locate_template( array( 'groups/single/front.php' ), true );

					endif;

					do_action( 'bp_after_group_body' ); ?>
	 
				</div><!-- #item-body -->

				<?php do_action( 'bp_after_group_home_content' ) ?>

				<?php endwhile; endif; ?>
				
				
			</div><!-- .padder -->
		</div><!-- #content -->

	<?php if ( is_active_sidebar('group') && $group_is_visible && bp_is_group_home() ) : ?>
		<?php locate_template( array( 'sidebar-group.php' ), true ) ?>
	<?php endif; ?>

	<?php get_footer() ?>