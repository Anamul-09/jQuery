<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
    <script>
        $(document).ready(function () {
            $("p:last-child").css("background-color","green");
            $("li:last-child").css("background-color","yellow");
        });
    </script>
</head>
<body>
    
    <p>first pragraph1</p>
   

    <div>
        <p>first pragraph1</p>
        <p>second pragraph2</p>
    </div>

    <div>
        <p>first pragraph1</p>
        <p>second pragraph2</p>
    </div>

    

    <ul>
        <li>Bangladesh1</li>
        <li>Bangladesh2</li>
    </ul>
    <ul>
        <li>Bangladesh1</li>
        <li>Bangladesh2</li>
    </ul>
    <ul>
        <li>Bangladesh1</li>
        <li>Bangladesh2</li>
    </ul>
    <p>Last pragraph2</p>

</body>
</html>