<?php
include_once("db-connection.php");

$email = $_REQUEST['email'];
$psssword = $_REQUEST['pass'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$psssword'";
$result = $db->query($sql);
if($result->num_rows == 1){
    echo "<h1> valid user</h1>";
}else{
    echo "<h1> Invalid user</h1>";
}

?>