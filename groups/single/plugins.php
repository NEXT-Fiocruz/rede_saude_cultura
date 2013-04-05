<?php get_header() ?>

  <?php locate_template( array( 'sidebar-left.php' ), true ) ?>

  <div id="content" class="two_column_left" >

<div class="padder">
  <div id="destacado">
  <?php if ( bp_has_groups() ) : while ( bp_groups() ) : bp_the_group(); ?>
    <?php do_action( 'bp_before_group_plugin_template' ) ?>
    
    <?php locate_template( array( 'groups/single/group-header.php' ), true ) ?>
 
  </div>
			<div id="item-body">

				<?php do_action( 'bp_before_group_body' ) ?>

				<?php do_action( 'bp_template_content' ) ?>

				<?php do_action( 'bp_after_group_body' ) ?>
			</div><!-- #item-body -->

			<?php endwhile; endif; ?>

			<?php do_action( 'bp_after_group_plugin_template' ) ?>

		</div><!-- .padder -->
	</div><!-- #content -->

<?php get_footer() ?>