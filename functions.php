<?php
/**
 *	Kalium WordPress Theme
 *	
 *	Laborator.co
 *	www.laborator.co 
 */
$staging = false;

// After theme setup hooks
function kalium_child_after_setup_theme() {
	// Load translations for child theme
	load_child_theme_textdomain( 'kalium-child', get_stylesheet_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'kalium_child_after_setup_theme' );

// This will enqueue style.css of child theme
function kalium_child_wp_enqueue_scripts() {
	global $pagename;
	if($pagename=="resume" || $pagename=="cover-letter"){
		wp_deregister_style( 'kalium-bootstrap-css' );
		wp_register_style( 'kalium-bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3' );
		
		wp_enqueue_style( 'cw-material-icons', "https://fonts.googleapis.com/icon?family=Material+Icons", array(), '1.0.0' );
		
		
		
		wp_enqueue_script( "boottstrap-meter",  "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), "5.0.2", true );
		
		wp_enqueue_style( "resume",  get_stylesheet_directory_uri() . "/assets/css/resume.css", array('kalium-bootstrap-css'), "1.0.0" );
		//Show gauges
		wp_enqueue_script( "gauge-meter",  get_stylesheet_directory_uri() . "/assets/js/gauge.js", array(), "2.0.0" );
		//Accordion
		wp_enqueue_script( "cw-accordion",  get_stylesheet_directory_uri() . "/assets/js/accordion.js", array(), "1.0.0", true );
	}
	wp_enqueue_style( 'kalium-child', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'kalium_child_wp_enqueue_scripts', 1 );

//Don't scale large images down - makes quality very bad
add_filter( 'big_image_size_threshold', '__return_false' );


//Add Google Analytics using Tag Manager
function inline_scripts() {
	global $staging, $current_user;
	if ( !isset( $current_user->roles[0] ) || $current_user->roles[0] == 'customer' || $staging == true) {
	?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MSNWQT7');</script>
	<!-- End Google Tag Manager -->
	<?php
	}
	?>
	<!-- Start Local Business Info including Lat/Lng for local search results -->
	<script type='application/ld+json'>
	{
	  "@context": "http://www.schema.org",
	  "@type": "LocalBusiness",
	  "name": "Christine Wilson",
	  "url": "https://christinewilson.ca/",
	  "sameAs": [
		 "http://www.facebook.com/ChristineWilsonWebDesign",
		 "https://www.linkedin.com/in/christinejwilson"
	  ],
	  "logo": "https://christinewilson.ca/wp-content/uploads/2018/04/Christine_Wilson_black_55x55.png",
	  "image": "https://christinewilson.ca/wp-content/uploads/2022/04/profile-photo-e1650279883159-905x1024.jpg",
	  "description": "Christine Wilson is a specialist in web design, CMS, e-commerce, logo design, hosting/domain/email setup, website security, online marketing, social media, analytics and email campaigns. Serving Manchester region, as well as working remotely.",
	  "address": {
		 "@type": "PostalAddress",
		 "streetAddress": "7 Highfield Rd",
		 "addressLocality": "Hale",
		 "addressRegion": "Altrincham",
		 "postalCode": "WA15 8BX",
		 "addressCountry": "United Kingdom"
	  },
	  "geo": {
		 "@type": "GeoCoordinates",
		 "latitude": "53.3796556",
		 "longitude": "-2.32693"
	  },
	   "openingHours": "Mo 06:00-20:00 Tu 06:00-20:00 We 06:00-20:00 Th 06:00-20:00 Fr 06:00-20:00"
	   "telephone": "+44 (734) 083-1197",
       "email":"info@christinewilson.ca",
	}
	</script>
	<!-- End Local Business Info including Lat/Lng for local search results -->
	<?php
}
add_action( 'wp_head', 'inline_scripts' );

add_action('wp_body_open', 'body_scripts');
function body_scripts() {
	global $staging, $current_user;
	if ( !isset( $current_user->roles[0] ) || $current_user->roles[0] == 'customer' || $staging == true) {
    ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSNWQT7"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
	}
}

//Remove All in One SEO schema, using own above
add_filter( 'aioseo_schema_disable', 'aioseo_disable_schema' );
function aioseo_disable_schema( $disabled ) {
   return true;
}

function wikiposts_shortcode() { 
	if(is_admin()) return;
	$output = '';
	$output .= '<div class="lab-blog-posts"><div class="blog-post-entry" style="width: 100%;">';
	$output .= '<div class="blog-post-image"><img class="img-responsive  img-1 ls-is-cached lazyloaded" width="1138" height="300" alt="scott-webb-274694-unsplash" title="scott-webb-274694-unsplash" data-src="https://christinewilson.ca/wp-content/uploads/2018/03/scott-webb-274694-unsplash-e1522515996331-scaled-1138x300.jpg" src="https://christinewilson.ca/wp-content/uploads/2018/03/scott-webb-274694-unsplash-e1522515996331-scaled-1138x300.jpg" style="width: 100%;min-height:200px;"></div>';
	$response = wp_remote_get( add_query_arg( array(
		'per_page' => 5
	), 'https://wiki.christinewilson.ca/wp-json/wp/v2/posts' ) );
	$output .= '<div class="blog-post-content-container"><div class="vc_inner vc_row-fluid container-fixed">';
	if( !is_wp_error( $response ) && $response['response']['code'] == 200 ) {
		$posts = json_decode( $response['body'] ); // our posts are here
		$i = 0;
		foreach( $posts as $post ) {
			if($i!=0) $output .= '<hr style="margin-top: 41px; margin-bottom: 35px;margin-top: 18px; margin-bottom: 18px;">';
			$date =  date('F j, Y', strtotime($post->date));
			$output .= '<div class="blog-post-date">' . $date . '</div>';
			$output .= '<h3 class="blog-post-title"><a href="'. $post->link . '" target="_blank">'. $post->title->rendered . '</a></h3>';
			//$output .= $post->content->rendered;
			$i++;
			//$output .= print_r( $post );
		}
	}
	$output .= '</div></div>';
	$output .= '</div></div>';
	$output .= '<div class="more-link ">
        <div class="show-more">
            <div class="reveal-button" style="padding-top: 12px;padding-bottom: 12px;">
                <a href="https://wiki.christinewilson.ca/" target="_blank" class="btn btn-white">
					More                </a>
            </div>
        </div>
    </div>';
	return $output;
} 
add_shortcode('wikiposts', 'wikiposts_shortcode');