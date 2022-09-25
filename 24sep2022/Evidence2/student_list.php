
  <!-- <table border="1">
  <tr>
    <td>student_id</td>
    <td>student_name</td>
    <td>st_batch_id</td>
  </tr> -->
  <select name="" id="">
  <option value=""disabled selected>Select one</option>
<?php
$db = new mysqli("localhost","root","","wdpf51_batch_students");
  $output= $_GET['bid'];
  $sql = "SELECT * FROM students WHERE st_batch_id = '$output'";
  $result = $db->query($sql);

  while ($row = $result->fetch_assoc()) {  ?>


    <script>
      $(document).rady(function(){
        $("#sid").change(function(){
           var id = $(this).val();

          
        })
      })
    </script>

    
    <option id="sid" value="<?php echo $row['student_id']?>"><?php echo $row['student_name']?></option>
  
   <!-- <tr>
    <td> <?php echo $row['student_id']?></td>
    <td><?php echo $row['student_name']?></td>
    <td><?php echo $row['st_batch_id']?></td>
  </tr> -->
  
  <?php
    
  }

?>
</select>

<!-- </table> -->