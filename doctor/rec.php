
<?php

$con = mysqli_connect('localhost', 'root', '', 'hms');


$q= "SELECT * FROM appointment ";
$querry = mysqli_query($con,$q);

if(mysqli_num_rows($querry)>0){
while($result=mysqli_fetch_array($querry)){
    ?>
<tr>
<td> <?php echo $result['id']   ?>   </td>
<td>  <?php echo $result['username']   ?>   </td>
<td>  <?php echo $result['email']   ?>   </td>
<td>  <?php echo $result['doctor']   ?>   </td>
<td>  <?php echo $result['date']   ?>   </td>
<td>  <?php echo $result['time']   ?>   </td>
<td>  <?php echo $result['reason']   ?>   </td>
<td>  <?php echo $result['contact']   ?>   </td>

<td>  <?php echo $result['day']   ?>   </td>
</tr>

<?php
}

}










?>