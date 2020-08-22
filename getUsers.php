<?php
include "server.php";

$departid = $_POST['depart'];   // department id

$sql = "SELECT id,username FROM registration WHERE department=".$departid;

$result = mysqli_query($db,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $userid = $row['id'];
    $name = $row['username'];

    $users_arr[] = array("id" => $userid, "username" => $name);
}

// encoding array to json format
echo json_encode($users_arr);

?>

