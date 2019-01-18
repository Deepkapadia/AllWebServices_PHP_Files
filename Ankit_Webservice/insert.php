<?php

    $con=new MySQLi("localhost","root","","Student_DB");
    
    //$sid = $_REQUEST["sid"];
    $fname = $_REQUEST["fname"];
    $age = $_REQUEST["age"];

    
    echo $qu="insert into student (f_name,age) values ('$fname','$age')";

    $con->query($qu);
    
    echo "success";
    
?>

