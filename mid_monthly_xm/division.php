<?php $db = new mysqli("localhost", "root", "", "wdpf51") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#div").change(function() {
                var id = $(this).val();
                alert(id);

                $.get('district.php',{mydiv:id},function(data){
                $("#show").html(data);
                });

            })
            
        })
    </script>
    <title>Division</title>
</head>

<body>
    <h1>Division List</h1>
    <form action="">
        <select name="" id="div">
            <option value="" selected disabled>Select one</option>

            <?php

            $sql = "SELECT * FROM division";
            $result = $db->query($sql);
            while ($data = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $data['divid'] ?>"><?php echo $data['divname'] ?></option>
            <?php
            }
            ?>
        </select>
        <div id="show"></div>
        
    </form>



    

</body>

</html>