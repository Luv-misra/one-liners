<?php
	$quote = $_POST['quote'];
	$given_by = $_POST['given_by'];
	$link = mysqli_connect('localhost','id349183_luvmisra','bobo26091','id349183_motivational');
	if(!$link){
		die('could not connect'.mysqli_error());
	}
	$query = "INSERT INTO mycollected ( quote,given ) VALUE ( '$quote','$given_by' )";
	if($result=mysqli_query($link,$query)){
		echo ' all good ';
	}
	else {
		echo ' not good ';
	}
	mysqli_close( $link );
?>