<?php
include("base.php");

if(!$_SESSION['username']) {
	header("Location: index.php");
	exit();
}

include("header.php") ; 

?>
	<div class="wrapper">
		<h1>New Notebook Post</h1>
	</div>
