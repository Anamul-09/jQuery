<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Document</title>
  <script>
        
    $(document).ready(function(){
      $("#btn1").click(function(){
      var x = $("h1").text();
      $("h2").text("content from h1:" + x);
    });

    $("#btn2").click(function(){
      var x = $("#para1").html();
      $("#content1").html("content from h1:" + x);
    });
  });
</script>
</head>
<body>



<button id="btn1">do it </button>
<h1>My Heading</h1>
<h2></h2>
<button id="btn2">Copy and paste</button>
<p id="para1">Lorem ipsum dolor, <b> sit amet consectetur adipisicing elit.</b> Sint et asperiores inventore officiis ea mollitia, impedit similique fugiat beatae numquam perferendis aliquam sit doloribus eveniet ipsa, hic quis fugit minima!</p>

<div id="content1" style="background-color: aqua"></div>

</body>
</html>