<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "hms");  
 $output = '';  
 if(isset($_POST["brand_id"]))  
 {  
      if($_POST["brand_id"] != '')  
      {  
           $sql = "SELECT * FROM timetable WHERE type = '".$_POST["brand_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM timetable";  
      }  
      $result = mysqli_query($connect, $sql);
      $result = mysqli_query($connect,$sql) or die("Error: " . mysqli_error($connect));  
      if(mysqli_num_rows($result)>0){

      while($row = mysqli_fetch_array($result))  
      {     

      
           $output .= '<tr>';
           $output .= '<td>'.$row["id"].'</td>';
           $output .= '<td>'.$row["username"].'</td>';
           $output .= '<td>'.$row["type"].'</td>';
           $output .= '<td>'.$row["day"].'</td>';
           $output .= '<td>'.$row["room"].'</td>';
           $output .= '<td>'.$row["date"].'</td>';
           $output .= '<td>'.$row["start"].'</td>';
           $output .= '<td>'.$row["end"].'</td>';
           
           $output .= '</tr>';
               
      }  
      echo $output;  
     }
 }  
 ?>  