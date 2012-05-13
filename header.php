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
	</head>

	<body <?php body_class() ?> id="bp-default">

  <!-- barra do governo -->
  <div id="barra-brasil">
      <div class="barra">
          <ul>
              <li><a href="http://www.brasil.gov.br" class="brasilgov" title="Portal de Estado do Brasil">www.brasil.gov.br</a></li>
          </ul>
      </div>
  </div>
  
  <div id="fiocruz">
          <a class="logo" href="http://www.fiocruz.br"><img src="http://www.fiocruz.br/icict/templates/htm/fiocruz_cict_novo/img/logo.jpg"></a>
          <img src="http://www.fiocruz.br/icict/templates/htm/fiocruz_cict_novo/img/titulo_fiocruz.jpg">
  </div>
  
  	
	
	<!--[if lte IE 6]><script src="<?php bloginfo('template_directory'); ?>/_inc/js/ie6/warning.js"></script><script>window.onload=function(){e("<?php bloginfo('stylesheet_directory'); ?>/_inc/js/ie6/")}</script><![endif]-->

<?php // CODIGO PARA EXIBIR O LINK PARA REPORTAR ERROS ?>
<?php /* comentando o script que junta o plugin bug-report com o link de reportar bug porque isso precisa de mais trabaho
<script text="javascript">
jQuery(document).ready(function() { 
	jQuery('.reportar-bug').colorbox({href:'http://www.next.icict.fiocruz.br/redesocial/wp-content/plugins/bug-library/submitnewissue.php', opacity: 0.3, iframe:true, width:'600px', height:'700px'});
	jQuery('.reportar-bug a').attr('href', 'javascript:void(0);');
});
</script>
*/ ?>
<?php if ( is_user_logged_in() ) : ?>
<div class="reportar-bug">
  <a href="http://www.next.icict.fiocruz.br/ris/groups/problemas-e-erros-nos-sistemas-do-next-1723188386/forum/" target="_blank" ><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/tools-report-bug.png" align="left" /> Clique aqui para reportar um Erro </a>
</div>
<?php endif; ?>

		<?php do_action( 'bp_before_header' ) ?>
		
		<div id="wrapper">

			<div id="header">
			
				<div class="padder">
	
						<?php if (get_option("buddy_boss_custom_logo", FALSE)!= FALSE) {
							$logo = get_option("buddy_boss_custom_logo");
							
							} else {
										$logo = get_bloginfo("template_directory")."/_inc/images/logo.jpg";
							} ?>

						<?php $logo = '' ; // remove o logo da página ?>
						<?php if($logo): ?>
						<div id="logo">
								<a href="<?php echo site_url() ?>" title="<?php _e( 'Home', 'buddypress' )
					
						 ?>"><img src="<?php echo $logo ?>"/></a>
						</div>
						<?php endif; ?>
	<h1 class="title"> <a href="<?php echo site_url() ?>" title="<?php _e( 'Home', 'buddypress' )					
						 ?>"><?php bloginfo( 'name' ); ?></a></H3>
							
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

			<div id="container">

			