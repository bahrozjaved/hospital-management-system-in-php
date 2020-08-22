<?php include('server.php') ?>

<?php
$con = mysqli_connect('localhost', 'root', '', 'hms');
$user = $_SESSION['username'];


$q= "SELECT * FROM timetable where username ='$user' And type ='doctor' ";
$querry = mysqli_query($con,$q);

if(mysqli_num_rows($querry)>0){
while($result=mysqli_fetch_array($querry)){
    ?>
<tr>
<td> <?php echo $result['id']   ?>   </td>
<td>  <?php echo $result['username']   ?>   </td>
<td>  <?php echo $result['type']   ?>   </td>
<td>  <?php echo $result['day']   ?>   </td>

<td>  <?php echo $result['room']   ?>   </td>

<td>  <?php echo $result['date']   ?>   </td>

<td>  <?php echo $result['start']   ?>   </td>

<td>  <?php echo $result['end']   ?>   </td>

</tr>

<?php
}

}










?>