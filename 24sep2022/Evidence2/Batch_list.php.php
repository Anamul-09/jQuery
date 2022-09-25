<?php  $db = new mysqli("localhost","root","","wdpf51_batch_students") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <title>Document</title>

    <script>

      $(document).ready(function(){
        $("#batchid").change(function(){
           var id = $(this).val();

           $.get('student_list.php',{bid:id},function(data){
            $("#options").html(data)
           })
        })
      })

    </script>

</head>
<body>
    <h1>Batchwise Student List</h1>
      <form action="">
        <select name="" id="batchid">
            <option value="" selected disabled> Selected</option>

            <?php
            
                $sql = "SELECT * FROM batches";
                $result = $db->query($sql);

                while($row = $result->fetch_assoc()){  ?>
                    <option value="<?php  echo $row['batch_id']?>"  > <?php  echo $row['batch_name']?></option>

                    <?php
                }

                
            
            ?>

            
        </select>

        <select name="" id="options">
          <option value="" disabled selected> Select one</option>
        </select>
      </form>

      <div id="show"></div>

</body>
</html>