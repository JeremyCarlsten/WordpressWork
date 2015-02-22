<?php
// Add Your Menu Locations
function register_my_menus() {
  register_nav_menus(
    array(  
    	'sidebar_navigation' => __( 'Sidebar Navigation' )
    )
  );
} 

// function default_header_nav() { // HTML markup for a default message in menu location
// 	echo "<ul class='nav'>					
// 		<li>Create the Header Navigation</li>
// 	</ul>"
// }

// function default_expanded_footer() { 
// 	echo "<ul class='nav'>					
// 		<li>Create the Expanded Footer</li>
// 	</ul>"
// }

add_action( 'init', 'register_my_menus' );



?>