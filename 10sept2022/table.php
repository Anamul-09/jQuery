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
        $(document).ready(function () {
            $("tr:even").css("background-color","green");
            $("tr:odd").css("background-color","yellow");
        });
    </script>
    

<table border="1">
    <tr>
        <td>Company</td>
        <td>Country</td>
    </tr>
    <tr>
        <td>Anam</td>
        <td>Bangladesh</td>
    </tr>
    <tr>
        <td>Jamal</td>
        <td>Pakistan</td>
    </tr>
    <tr>
        <td>Sumon</td>
        <td>India</td>
    </tr>
    <tr>
        <td>Jabbar</td>
        <td>Uk</td>
    </tr>
    <tr>
        <td>Alex</td>
        <td>USA</td>
    </tr>
</table>
    
</body>
</html>