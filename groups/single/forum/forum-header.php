<?php do_action( 'bp_before_group_header' ) ?>

  <div id="group-imagem-pequena">
    <?php bp_group_avatar( 'type=thumb&width=50&height=50' ); ?>
  </div>

  <div id="item-header-content">

    <div id="group-name">
	<?php if ( bp_is_group_forum_topic() ) : ?>
	
		<h2>
		  <a href="<?php bp_group_permalink() ?>" 
		    title="<?php bp_group_name() ?>"><?php bp_group_name() ?>
		  </a> &rarr; 
		  <a href="<?php bp_group_permalink() ?>forum">Forum</a> 
		  &rarr; <?php bp_the_topic_title() ?>
		</h2>
		<span class="group-type"><?php bp_group_type() ?></span>	
		
		<div id="topic-meta">
			<div class="admin-links">
				<?php if ( bp_group_is_admin() || bp_group_is_mod() || bp_get_the_topic_is_mine() ) : ?>
					<?php bp_the_topic_admin_links() ?>
				<?php endif; ?>

				<?php do_action( 'bp_group_forum_topic_meta' ); ?>
			</div>
		</div>
	
	<?php else : ?>
		
		<h2><?php bp_group_name() ?></h2>
		
	<?php endif; ?>
    <span class="group-type"><b><?php bp_group_type() ?></b> - <?php printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?></span><span class="activity"></span>
    <?php do_action( 'bp_group_header_actions' ); ?>
      <div class="entry-directory">
        <?php if ( bp_is_group_home() ): ?> 
          <?php bp_group_description(); ?>
         <?php endif; ?>
      </div>
    </div>

  </div><!-- #item-header-content -->
