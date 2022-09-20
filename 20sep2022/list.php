<?php

if($_GET['mydata']=='good'){
    $good = array("Rahim","karim","jamal");
    echo getNames($good);
}else if($_GET['mydata']=='bad'){
    $bad = array("jamal","kamal","jashim");
    echo getNames($bad);
}

function getNames($item){
    $output = "<ul>";
    for($i=0 ; $i<count($item);$i++){
        $output.="<li>".$item[$i]."</li>";
    }

    $output .= "</ul>";
    return $output;
}







?>