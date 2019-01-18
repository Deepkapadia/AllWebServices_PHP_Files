<?php
    $con=new mysqli("localhost","root","","MyTest");

    define('UPLOAD_DIR', 'images/');
    
    //$itemname=$_POST['itemname'];
   // $price=$_POST['emp_name'];
   // $sp=$_POST['emp_add'];
    $img = $_POST['image'];
    
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = UPLOAD_DIR . uniqid() . '.png';
        $success = file_put_contents($file, $data);
        print $success ? $file : 'Unable to save the file.';
    
    
    $query="insert into EMP (image) values('$file')";
    $con->query($query);
    
    echo"done";
   
    ?>
