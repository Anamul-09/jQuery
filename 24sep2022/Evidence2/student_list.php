
  <table border="1">
  <tr>
    <td>student_id</td>
    <td>student_name</td>
    <td>st_batch_id</td>
  </tr>

<?php
$db = new mysqli("localhost","root","","wdpf51_batch_students");
  $output= $_GET['bid'];
  $sql = "SELECT * FROM students WHERE st_batch_id = '$output'";
  $result = $db->query($sql);

  while ($row = $result->fetch_assoc()) {  ?>
   <tr>
    <td> <?php echo $row['student_id']?></td>
    <td><?php echo $row['student_name']?></td>
    <td><?php echo $row['st_batch_id']?></td>
  </tr>
  
  <?php
    
  }

?>


</table>