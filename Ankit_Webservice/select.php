<?php
    
    $con=new mysqli("localhost","root","","Student_DB");
    
    //$emp_id = $_POST['emp_id'];
    
    $qu="SELECT * FROM student";
    
    $pp=$con->query($qu);
    
    while($ff=$pp->fetch_object())
    {
        $qq[]=$ff;
    }
    echo json_encode($qq);
    
?>
