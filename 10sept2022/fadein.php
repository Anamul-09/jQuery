<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
    <script>
        // $(document).ready(function () {
        //     $(".box1").fadeIn(1000);
        //     // $(".btn1").click(function(){
        //     //     $(".box1").fadeOut(2000);
        //     // })
        //     $(".box2").fadeIn(2000);
        //     $(".box3").fadeIn(3000);
            
           
        // });

        $(document).ready(function(){
  $(".btn1").click(function(){
    $(".box1").fadeIn();
    $(".box2").fadeIn("slow");
    $(".box3").fadeIn(3000);
  });
  
});
    </script>
    <style>
        .box1{
            width: 150px;
            height: 200px;
            background-color: #fb5200;
            margin-bottom: 10px;
            display: none;
        }
        .box2{
            width: 150px;
            height: 200px;
            background-color: green;
            margin-bottom: 10px;
            display: none;
        }
        .box3{
            width: 150px;
            height: 200px;
            background-color: blueviolet;
            margin-bottom: 10px;
            display: none;
        }
    </style>
</head>
<body>
<button class="btn1">click here</button>
<div class="box1"></div>

<div class="box2"></div>
<div class="box3"></div>

</body>
</html>