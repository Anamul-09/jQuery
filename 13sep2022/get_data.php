<?php
 $id = $_GET['id'];
$db = new mysqli("localhost","root","","anamul");
$sql = "SELECT * FROM students1 WHERE student_batch = $id";
$result = $db->query($sql);
if($result->num_rows>0){


?>
<table border="1">
    <tr>
        <th>Student id</th>
        <th>Student Name</th>
        <th>student email</th>
        <th>student contact</th>
        <th>student_batch</th>
    </tr>

    <?php
while($data =$result->fetch_assoc()){ ?>

    <tr>
        <td><?php echo $data['studentid']?></td>
        <td><?php echo $data['studentname']?></td>
        <td><?php echo $data['studentemail']?></td>
        <td><?php echo $data['studentphone']?></td>
        <td><?php echo $data['student_batch']?></td>
    </tr>
    
<?php
}
?>

<?php 

//  if(empty($sql)){
//     echo "Empty data";
//  }

?>


</table>
<?php 
}else{
    echo "<h1>No data found</h1>";
}
?>