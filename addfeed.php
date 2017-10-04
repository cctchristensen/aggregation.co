<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "cole", "Cole1989", "cornfedcms");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Escape user inputs for security

$add_new_feed = mysqli_real_escape_string($link, $_REQUEST['add_new_feed']);


 

// attempt insert query execution

$sql = "INSERT INTO feeds VALUES ('1', '1', '$add_new_feed')";

if(mysqli_query($link, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>
