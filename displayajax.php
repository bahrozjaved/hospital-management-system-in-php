<?php
$con = mysqli_connect('localhost', 'root', '', 'hms');


$q= "Select * from admin";
$querry = mysqli_query($con,$q);

if(mysqli_num_rows($querry)>0){
while($result=mysqli_fetch_array($querry)){
    ?>
<tr>
<td> <?php echo $result['id']   ?>   </td>
<td>  <?php echo $result['username']   ?>   </td>
</tr>

<?php
}

}










?>