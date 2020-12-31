<?php

add_action('admin_footer', 'my_custom_js');

function my_custom_js() { ?>
  <script>
	  jQuery(document).ready(function($){
		  // Your code here
    });

  </script>
<?php
}

?>
