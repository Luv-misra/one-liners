<html>
	<head>
		<link rel="stylesheet" href="index.css">
		<style>
			#next{
				margin-top:15px;
				margin-left:670px;
			}
			#previous{
				margin-top:-50px;
				margin-left:60px;
			}
			.displaydata{
				margin-left:25px;
				height:200;
				width:750;
				font-size:25px;
				color:white;
				font-family:cursive;
			}
		</style>
	</head>
<?php
		
	if(ISSET($_POST['myvalue'])){
		
		$link = mysqli_connect('localhost','id349183_luvmisra','bobo26091','id349183_motivational');
		if( !$link ){
			die('could not connect'.mysqli_error());
		}
		
		//get total data id
		$query = 'SELECT COUNT(*) FROM mycollected';
		$result = mysqli_query( $link,$query );
		$last = mysqli_fetch_assoc( $result )['COUNT(*)'];
		$random = mt_rand( 1,$last );
		
		$query = 'SELECT * FROM mycollected WHERE myid = '.$random ;
		$result = mysqli_query( $link,$query );
		$data = mysqli_fetch_row( $result );
		echo '<p class="displaydata" >'.$data['1'].'</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.':-&nbsp'.$data['2'].'</p>';
	}
	else{
		echo '<p class="displaydata">'.'your message will  be displayed here'.'</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.':-&nbspname'.'</p>'; 
	}
	
	echo '
		  <form action="message.php" method="POST">
		    <input type="hidden" value="1" name="myvalue"/>
			<button id="next" type="submit" class="w3-btn w3-hover-light-grey">Next</button>
	      </form>
		  <form>
		     <button id="previous" onClick="history.go(-1);return true;" class="w3-btn w3-hover-light-grey">Previous</button>
	      </form>'
		  
?>
</html>