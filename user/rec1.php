<?php include('server.php') ?>

<?php

$con = mysqli_connect('localhost', 'root', '', 'hms');

$user = $_SESSION['username'];

$q= "SELECT * FROM medicine where username ='$user'";
$querry = mysqli_query($con,$q);

if(mysqli_num_rows($querry)>0){
while($result=mysqli_fetch_array($querry)){
    ?>
<tr>
<td> <?php echo $result['id']   ?>   </td>
<td>  <?php echo $result['username']   ?>   </td>
<td>  <?php echo $result['date']   ?>   </td>
<td>  <?php echo $result['contact']   ?>   </td>
<td>  <?php echo $result['age']   ?>   </td>
<td>  <?php echo $result['gender']   ?>   </td>
<td>  <?php echo $result['medicine']   ?>   </td>
</tr>

<?php
}

}










?>