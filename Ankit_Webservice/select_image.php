<?php
    $con=new mysqli("localhost","root","","MyTest");
    
    
        
    //$email=$_POST['stud_enrollno'];
		
        
    $query = "SELECT * from EMP";
    
        $rows= $con-> query($query);
        
            while($row = $rows -> fetch_assoc())
            {
                $pp[]=$row;
            }
            echo json_encode($pp);
    
?>
