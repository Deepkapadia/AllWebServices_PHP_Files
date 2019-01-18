<?php

    $con=new MySQLi("localhost","root","","Student_DB");
    
    //$sid = $_POST["sid"];
    $fname = $_POST["fname"];
    $age = $_POST["age"];

    
    $qu="insert into student (f_name,age) values ('$fname','$age')";

    $con->query($qu);
    
    echo "success";
    
?>

