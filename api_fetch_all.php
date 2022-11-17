<?php

header('content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("SQL Query unsuccessfull.");

//To check single row is there or not in the table
if(mysqli_num_rows($result) > 0 ) {

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);

}else{
    //If there is no record
    echo json_encode(array('message' => 'No record found', 'status' => false));
}


?>