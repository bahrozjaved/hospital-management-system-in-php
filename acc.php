<?php
$con = mysqli_connect('localhost', 'root', '', 'hms');


$q= "SELECT * FROM registration where type='account'";
$querry = mysqli_query($con,$q);

if(mysqli_num_rows($querry)>0){
while($result=mysqli_fetch_array($querry)){
    ?>
<tr>
<td> <?php echo $result['id']   ?>   </td>
<td>  <?php echo $result['username']   ?>   </td>
<td>  <?php echo $result['email']   ?>   </td>
<td>  <?php echo $result['mobile']   ?>   </td>

<td>  <?php echo $result['type']   ?>   </td>

</tr>

<?php
}

}










?>