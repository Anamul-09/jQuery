<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<script>


 $(document).ready(function(){
    $(".btn1").click(function(){
        $("#para1").hide();
    });
    $(".btn2").click(function(){
        $("#para1").show();
    });
    $(".btn3").click(function(){
        $("#para2").toggle();
    })
   
 });
</script>
<button class="btn1">Hide pragraph </button>
<button class="btn2">Show paragraph </button>
<button class="btn3">Hide and show pragraph</button>

<p id="para1">Pragraph 1Lorem ipsum dolor sit amet consectetur adipisicing elit. A eos laudantium sunt amet vero aut provident, quae aliquam, odit explicabo vel tempore neque. Autem dolor ducimus laboriosam facere similique earum quas temporibus? Modi, error quaerat fuga id sed impedit iure aut enim delectus quas veritatis sint commodi recusandae eveniet. Architecto.</p>

<p id="para2">Pragraph 2Lorem ipsum dolor sit amet consectetur adipisicing elit. A eos laudantium sunt amet vero aut provident, quae aliquam, odit explicabo vel tempore neque. Autem dolor ducimus laboriosam facere similique earum quas temporibus? Modi, error quaerat fuga id sed impedit iure aut enim delectus quas veritatis sint commodi recusandae eveniet. Architecto.</p>


    
</body>
</html>