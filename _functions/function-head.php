<?php

function give_head() {
	$givepath = dirname(__FILE__) . '/../';
	include($givepath . '_includes/header.php');
	include($givepath . '_includes/primary-nav.html');
	include($givepath . '_includes/mobile-nav.html');
	include($givepath . '_includes/sub-nav.html'); 	
}

function nav_mobile() {
  $givepath = dirname(__FILE__) . '/../';
  include($givepath . '_includes/header.php');
}

?>