<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("h2:first").hide();
    $("p:first").hide();
    $("li:first").css("background-color","red");
  });
});
</script>
</head>
<body>

<h2>This is a heading</h2>
<h2>This is a heading</h2>
<h2>This is a heading</h2>


<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<p>This is another paragraph.</p>
<ul>
    <li>Bangladesh</li>
    <li>Bangladesh</li>
    <li>Bangladesh</li>
</ul>

<button>Click me</button>

</body>
</html>
