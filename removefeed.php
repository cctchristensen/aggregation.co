<?php

/*link into mysql server and DB on local machine*/

$link = mysqli_connect("localhost", "cole", "Cole1989", "cornfedcms");

 

//confirm connection

if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}



$remove_feed = mysqli_real_escape_string($link, $_REQUEST['remove_feed']);




$sql = "DELETE FROM feeds WHERE link = '$remove_feed' ";

//mysql_select_db('cornfedcms');
if(mysqli_query($link, $sql)){
	echo "Feed removed or did not exist! Use back button or wait 5 seconds...";
}else{
	"ERROR: COULD NOT MODIFY DB! Use back button or wait 5 seconds...";
}


// close connection

mysqli_close($link);

header( "refresh:5;url=newfeature.php" );

?>
