<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "hms");  
 $output = '';  
 if(isset($_POST["brand_id"]))  
 {  
      if($_POST["brand_id"] != '')  
      {  
           $sql = "SELECT * FROM medicine WHERE username = '".$_POST["brand_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM medicine";  
      }  
      $result = mysqli_query($connect, $sql);
      $result = mysqli_query($connect,$sql) or die("Error: " . mysqli_error($connect));  
      if(mysqli_num_rows($result)>0){

      while($row = mysqli_fetch_array($result))  
      {     

      
           $output .= '<tr>';
           $output .= '<td>'.$row["id"].'</td>';
           $output .= '<td>'.$row["username"].'</td>';
           $output .= '<td>'.$row["date"].'</td>';
           $output .= '<td>'.$row["contact"].'</td>';
           $output .= '<td>'.$row["age"].'</td>';
           $output .= '<td>'.$row["gender"].'</td>';
           $output .= '<td>'.$row["medicine"].'</td>';
         
           
           $output .= '</tr>';
               
      }  
      echo $output;  
     }
 }  
 ?>  