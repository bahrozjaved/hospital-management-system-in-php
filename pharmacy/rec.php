<?php
$con = mysqli_connect('localhost', 'root', '', 'hms');


$q= "SELECT * FROM bill ";
$querry = mysqli_query($con,$q);

if(mysqli_num_rows($querry)>0){
while($result=mysqli_fetch_array($querry)){
    ?>
<tr>
<td> <?php echo $result['id']   ?>   </td>
<td>  <?php echo $result['username']   ?>   </td>
<td>  <?php echo $result['inv-no']   ?>   </td>
<td>  <?php echo $result['date']   ?>   </td>

<td>  <?php echo $result['paydue']   ?>   </td>

<td>  <?php echo $result['total']   ?>   </td>

<td>  <?php echo $result['paid']   ?>   </td>

<td>  <?php echo $result['status']   ?>   </td>

</tr>

<?php
}

}










?>