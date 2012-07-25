<?php get_header() ?>						
		<!-- When homepage is using blog posts -->
		<?php if ( is_home() ) : ?>		
				
				<?php do_action( 'bp_before_blog_page' ) ?>	
				
				<div id="content" <?php if ( is_active_sidebar('home-right') ) : ?>class="three_column"<?php else : ?> class="two_column_left"<?php endif; ?>>
				<div class="padder">
					<div class="page" id="home-page">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
						<div class="post" id="post-<?php the_ID(); ?>">
						
									<h1 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				
									<p class="date"><?php the_date('M j, Y') ?> at <?php the_time() ?> <?php _e( 'in', 'buddypress' ) ?> <?php the_category(', ') ?> <?php printf( __( 'by %s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?> <?php if ('open' == $post->comment_status): ?><span class="comments">&middot; <?php comments_popup_link( __( 'Leave a Comment &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></span><?php else : ?>&middot; <?php _e('Comments are closed.', 'buddypress'); ?><?php endif; ?></p>
			
									<div class="entry">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a>
								
										<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
			
										<?php wp_link_pages(array('before' => __( '<p><strong>Pages:</strong> ', 'buddypress' ), 'after' => '</p>', 'next_or_number' => 'number')); ?>
									</div>
										
							</div>
							
						<?php endwhile; ?>

							<div class="navigation">
			
								<div class="alignleft"><?php next_posts_link( __( '&larr; Previous Entries', 'buddypress' ) ) ?></div>
								<div class="alignright"><?php previous_posts_link( __( 'Next Entries &rarr;', 'buddypress' ) ) ?></div>
			
							</div>
			
						<?php else : ?>
			
							<h2 class="center"><?php _e( 'Not Found', 'buddypress' ) ?></h2>
							<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'buddypress' ) ?></p>
			
							<?php locate_template( array( 'searchform.php' ), true ) ?>
			
						<?php endif; ?>

						
						</div><!-- .page -->
					</div><!-- .padder -->
					</div><!-- #content -->
					
				<?php do_action( 'bp_after_blog_page' ) ?>
				<?php locate_template( array( 'sidebar-home-right.php' ), true ) ?>							
		
		<!-- When homepage is using a regular Page -->	
		<?php else : ?>

			<div id="content" class="full-width">
			<div class="padder">
				<div class="page">
					<div id="espaco-01">
						<div class="box-facebook">
							<h2>facebook</h2>
							<ul>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
							</ul>
						</div>
						
						<div class="box-youtube">
							<h2>youtube</h2>
							<ul>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
							</ul>
						</div>
						
						<div class="box-twitter">
							<h2>twitter</h2>
							<ul>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
								<li><a href="#">teste teste teste teste</a></li>
							</ul>
						</div>
						
						<div class="box-login">
							<h2>Login</h2>
							<fieldset>
								<label for="user_login">Usu&aacute;rio: </label>
								<input type="text" name="log" value="" size="20" id="user_login" tabindex="101" class="login"><br/>
								<label for="user_pass">Senha: </label>
								<input type="password" name="pwd" value="" size="20" id="home-login-password" tabindex="102" class="login">
								<button type="submit" name="user-submit" id="user-submit" tabindex="104" class="button submit user-submit">Entrar</button>
								<input type="hidden" name="user-cookie" value="1">
							</fieldset>
							<div class="menu-login">
								<a href="#">Cadastrar</a> | <a href="#">Esqueci minha senha</a>
							</div>
						</div>
					</div>
					<!-- BLOCO DE NOT�CIAS -->
					<?php locate_template( array( 'home-content-left.php' ), true ) ?>
					
					<!-- BLOCO DE ATIVIDADES -->
					<?php locate_template( array( 'home-content-right.php' ), true ) ?>
					
				
					<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>				
						<?php //<h1 class="pagetitle"><?php the_title(); </h1>?>	
						<!--<div class="post" id="post-<?php the_ID(); ?>">	
							<div class="entry">	
								<?php //the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) ); ?>	
								<?php //wp_link_pages( array( 'before' => __( '<p><strong>Pages:</strong> ', 'buddypress' ), 'after' => '</p>', 'next_or_number' => 'number')); ?>	
							</div>	
						</div>	-->
					<?php //endwhile; endif; ?>	
					
				</div><!-- .page -->	
			</div><!-- .padder -->
			</div><!-- #content -->
			
										
			
	<?php endif; ?>

<?php get_footer(); ?>
