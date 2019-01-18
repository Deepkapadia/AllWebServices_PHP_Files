<?php

    $con=new MySQLi("localhost","root","","Student_DB");
    
    $sid = $_POST["sid"];
    $fname = $_POST["fname"];
    $age = $_POST["age"];

    
    $qu="update student set f_name='$fname', age='$age' where student_id='$sid'";

    $con->query($qu);
    
    echo "success";
    
?>

