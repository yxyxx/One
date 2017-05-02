<?php
$a=$_POST["place"];
header("Content-type: text/json; charset=utf-8");    
$arr =array('dataType'=>1);
echo json_encode($arr);


?>