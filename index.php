<?php
	require ('home_function.php');
	
	get_header();
	get_navbar();
	get_slides();

	if(isset($_GET["req"]) AND !empty($_GET["req"])) { //if the req is assigned in the URL
		
		$request = filter_input(INPUT_GET,'req',FILTER_SANITIZE_STRING); // $_GET["req"]; //get the URL request

		if($request == "home") { //if the URL the request is home.
			require 'home.php';
		}
		else if($request == "about")
		{
			require 'about.php';
		}
		else if($request == "service")
		{
			require 'service.php';
		}
		else if($request == "gallery")
		{
			require 'gallery.php';
		}
		else if($request == "contact")
		{
			require 'contact.php';
		}
	} 
	else 
	{		
		require 'home.php';
	}

	get_footer();

?>