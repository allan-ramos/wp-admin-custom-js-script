<?php

//Add javascript in admin dashboard
add_action('admin_footer', 'my_custom_js');
function my_custom_js() { ?>
  <script>
	  jQuery(document).ready(function($){
		  // Your code here
    });

  </script>
<?php
}

//Add javascript in frontend
wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/custom.js', array( 'jquery' ));

?>
