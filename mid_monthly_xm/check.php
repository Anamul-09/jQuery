
<?php 

    $db = new mysqli("localhost","root","","wdpf51");

    $email = $_GET['em'];
    $pass = $_GET['pw'];

    $sql = "SELECT * FROM user WHERE email ='$email' AND password ='$pass'";
    $result = $db->query($sql);
    if($result->num_rows==1){
        echo "successfully";
    }else{
        echo "Failed";
    }

?>

