<?php
// functions added here will load IN ADDITION to functions from the parent theme's functions.php.


if ( function_exists ('register_sidebar')) { 
/* Register the widget columns */
  // Area 2, located in the homepage left column.
  register_sidebar( array(
      'name'          => 'Left Sidebar',
      'id'            => 'left-sidebar',
      'description'   => 'The site left bar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>'
    )
  );
 
  // Area 3, Bloco que ficar� no HEADER.
  register_sidebar( array(
      'name'          => 'Header Block',
      'id'            => 'header-block',
      'description'   => 'Bloco do topo do site.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-hb">',
      'after_title'   => '</h3>'
    )
  ); 
  
  // Area 4, Bloco left que ficar� na HOME.
  register_sidebar( array(
      'name'          => 'Home Content Left',
      'id'            => 'home-content-left',
      'description'   => 'Bloco esquerdo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-home">',
      'after_title'   => '</h3>'
    )
  );
  
  
  // Area 5, Bloco right que ficar� na HOME.
  register_sidebar( array(
      'name'          => 'Home Content Right',
      'id'            => 'home-content-right',
      'description'   => 'Bloco direito da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-home">',
      'after_title'   => '</h3>'
    )
  );
  
  // Area 6, Primeiro Bloco da HOME.
  register_sidebar( array(
      'name'          => 'Home Content Top 01',
      'id'            => 'home-content-top-01',
      'description'   => 'Primeiro bloco do topo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widgettitle-home">',
      'after_title'   => '</h4>'
    )
  );
  
  // Area 7, Segundo Bloco da HOME.
  register_sidebar( array(
      'name'          => 'Home Content Top 02',
      'id'            => 'home-content-top-02',
      'description'   => 'Segundo bloco do topo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widgettitle-home">',
      'after_title'   => '</h4>'
    )
  );
  
  // Area 8, Terceiro Bloco da HOME.
  register_sidebar( array(
      'name'          => 'Home Content Top 03',
      'id'            => 'home-content-top-03',
      'description'   => 'Terceiro bloco do topo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widgettitle-home">',
      'after_title'   => '</h4>'
    )
  );
  
  // Area 9, Quarto Bloco da HOME.
  register_sidebar( array(
      'name'          => 'Home Content Top 04',
      'id'            => 'home-content-top-04',
      'description'   => 'Quarto bloco do topo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widgettitle-home">',
      'after_title'   => '</h4>'
    )
  );
  
}

// Desativa a barra la de cima
define('BP_DISABLE_ADMIN_BAR', true);

// _------------------- SHORTCODES ------------------------ //

// [displayedUserSocialLinks]
function displayedUserSocialLinks_func( $atts = array() ) {
	/*
	extract( shortcode_atts( array(
			'foo' => 'something',
			'bar' => 'something else',
	), $atts ) );
*/
	// variables //
	$title = '<h3>Redes Sociais</h3>';
  $body_pre = '<div id="user-social-links">';
	$body = '';
	$body_pos = '</div>';
	$facebook = bp_get_profile_field_data( 'field=Facebook'); 
	$twitter = bp_get_profile_field_data( 'field=Twitter' );
	$google_plus = bp_get_profile_field_data( 'field=Google+' );

	// if a variable dont are empty add to return html ( body) ...
	if( $facebook ){
				$body .= '<span class="facebook">';
				$body .= '<a class="facebook-link" href="' .
					$facebook .'
					">' . $facebook . '</a>';
				$body .= '</span>';
	}
	
	if( $twitter ){		
				$body .= '<span class="twitter">';
				$body .= '<a class="twitter-link" href=" '. 
					$twitter . '">' .
					$twitter . '</a>';
				$body .= '</span>';
  }
	
  if( $google_plus ){
				$body .= '<span class="google-plus">';
				$body .= '<a class="google-plus-link" href="' .
					$google_plus . '">'.
					$google_plus . '</a>';
				$body .= '</span>';
	}

	// return the variable or a empty string
	if ($body)
  	return $title . $body_pre . $body . $body_pos;
  return '';
}
add_shortcode( 'displayedUserSocialLinks', 'displayedUserSocialLinks_func' );

// [displayedUserInfo]
function displayedUserInfo_func( $atts = array() ) {

	$body = '';

	$sobre = bp_get_profile_field_data( 'field=Sobre mim');
	$trabalho = bp_get_profile_field_data( 'field=Trabalho');
	// $ensino = bp_get_profile_field_data( 'field=Twitter' );
	$lugar = bp_get_profile_field_data( 'field=Estado' );

	if($sobre){
	  //$body .=  '<div class="sobre">' .	$sobre . '</div>';
	}

	if($trabalho){
		$body .= '<div class="trabalho">Trabalha na empresa: '. $trabalho .'</div>';
	}
/*
	if($ensino){
		$body .= '<div class="ensino">Estudou: '. $ensino .'</div>';
	}
*/
	if($lugar){
		$body .= '<div class="lugar">Mora em: '. $lugar . '</div>';
	}

	if ($body)
  	return $body;
  return '';
}
add_shortcode( 'displayedUserInfo', 'displayedUserInfo_func' );


/* MENU HEADER */

if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'menu_header', 'Este é o menu do Header' );
}





?>
