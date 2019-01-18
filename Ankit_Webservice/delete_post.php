<?php

    $con=new MySQLi("localhost","root","","Student_DB");
    
    $sid = $_POST["sid"];
    //$fname = $_REQUEST["fname"];
    //$age = $_REQUEST["age"];

    
    $qu="delete from student where student_id='$sid'";

    $con->query($qu);
    
    echo "success";
    
?>

