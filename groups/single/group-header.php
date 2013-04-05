<div id="item-header">
<?php do_action( 'bp_before_group_header' ) ?>

<?php if ( bp_is_group_forum() && bp_group_is_visible() ) : ?>
  
  <?php locate_template( array( 'groups/single/forum/forum-header.php' ), true ) ?>

<?php else : ?>

	<?php if ( !bp_is_group_home() ): ?>
		<div id="group-imagem-pequena">
       		<?php bp_group_avatar( 'type=thumb&width=50&height=50' ); ?>
       	</div>
	<?php endif; ?>

	<div id="item-header-content">
    <div id="group-name">
      <h2><?php bp_group_name() ?></h2>
	  <span class="group-type"><b><?php bp_group_type() ?></b> - <?php printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?></span><span class="activity"></span>
	  <?php do_action( 'bp_group_header_actions' ); ?>
      <div class="entry-directory">
        <?php if ( bp_is_group_home() ): ?> 
         	<?php bp_group_description(); ?>
         <?php endif; ?>
      </div>
    </div>
	</div><!-- #item-header-content -->

<?php endif; ?>

<?php do_action( 'bp_after_group_header' ) ?>

<?php do_action( 'template_notices' ) ?>
</div><!-- #item-header -->

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
