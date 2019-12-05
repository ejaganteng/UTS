<?php
$connection = mysqli_connect ("localhost","root","","db_cuti");

///check connection
if ($connection){
	echo "Connection Success";
}else{
	echo "Connection Failed!" . mysqli_connect_error();
	die;
}

?>
