<?php

/*link into mysql server and DB on local machine*/

$link = mysqli_connect("localhost", "cole", "Cole1989", "cornfedcms");

 

//confirm connection

if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}



$add_new_feed = mysqli_real_escape_string($link, $_REQUEST['add_new_feed']);


// attempt insert query execution




$sql = "INSERT IGNORE INTO feeds VALUES ('1', '1', '$add_new_feed')";

if(mysqli_query($link, $sql)){

	echo "Records added successfully or was already in database. Use back button or wait 5 seconds...";

} 
else{

	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


}

// close connection

mysqli_close($link);

header( "refresh:5;url=newfeature.php" );

?>
