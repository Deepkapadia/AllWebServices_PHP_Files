<?php

    $con=new MySQLi("localhost","root","","Student_DB");
    
    $sid = $_REQUEST["sid"];
    $fname = $_REQUEST["fname"];
    $age = $_REQUEST["age"];

    
    $qu="update student set f_name='$fname', age='$age' where student_id='$sid'";

    $con->query($qu);
    
    echo "success";
    
?>

