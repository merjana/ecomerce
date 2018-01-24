<?php
      
      // Routes
		$tp = 'includes/templates/'; // templates directory
		$css = 'layout/css/'; // css directoey
		$js = 'layout/js/'; // js directoy
        $img = 'layout/images/';

	// include the Important files

	include$tp.'header.php';
	
	// include Navbar on all the pages exept the one with $noNavbar variable
	if(!isset($NoNavBar)){ include$tp.'navbar.php'; }
	 

?>