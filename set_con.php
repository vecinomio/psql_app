<?php	
	$con = pg_connect("host=172.16.0.1 port=5432 dbname=sisdb user=root password=12345");
	    if($con){
		echo 'It Works!!!';
	    } else {
		$error = error_get_last();
		    echo "Connaction failed. Error was: ". $error['message']."\n";
	    }
?>
