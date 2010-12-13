#!/usr/bin/php
<?php
	
	// include our class
	include("./CdnImages.php");

	// load config
	$config = json_decode(file_get_contents("../config.json"), true);

	// set some vars
	CdnImages::setup(array(
		"domain"	=> $config['domain'],
		"key"		=> $config['key'],
		"secret"	=> $config['secret'],
		"cname"		=> $config['cname'],
		"api"		=> $config['api'],
		"cmds"		=> $config['cmds']
	));

	echo "\nStarting Test...\n\n";

	// upload
	echo " Upload an image:\n ";	
	
	// test image
	$test = "/test/".uniqid("test-photo-").".jpg";

	// try to post
	try {
		echo CdnImages::post("../images/test.jpg", $test );		
	}
	catch (Exception $e) {  echo "ERROR!! ".$e->getMessage(); }
	
	echo "\n\n";

	echo " Signed Url:\n ";

	// return
	echo CdnImages::sign($test,array('size'=>"100x100"));
	
	echo "\n\n";
	
	// string
	echo " Sign String:\n ";
	
	$str = " <img src='{$test}' width='200' height='200' />\n  <img src='{$test}' class='cdn-ignore'>\n  <img style='background-image: url({$test});'>\n  <img style='background: url({$test}) no-repeat; width:250px; height: 250px'>";
	
	echo CdnImages::signString($str);

	echo "\n\nDone!\n";

?>