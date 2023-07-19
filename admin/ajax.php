<?php include '../action/check-login.php';
include '../action/config.php';
// error_reporting(0);



if(!empty($_POST["category_id"])){ 
    $query = "SELECT * FROM subcategory WHERE cat_id = ".$_POST['category_id']." AND status = 1 ORDER BY subcategory ASC"; 
    $result = mysqli_query($con,$query) ;
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">--Select Subcategory--</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id'].'">'.$row['subcategory'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Subcategory not available</option>'; 
    } 
}
