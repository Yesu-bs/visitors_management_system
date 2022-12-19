<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
 $un=$_SESSION['un'];
 $id=$_REQUEST['id'];
  $qrys1="select * from  user_request where id='$id'";
		$result = $conn->query($qrys1);
 
	 
		
	 	while($row = $result->fetch_assoc())
		  {
		  $user= $row['user'];
		  $reason= $row['reason'];
		  $date= $row['date'];
		  }
?>

<p>&nbsp;</p>
<table width="354" height="128" border="1" align="center">
  <tr>
    <td width="344"><table width="312" height="221" align="center">
      <tr>
        <td colspan="3"><div align="center">
          <h1>VISITORS PASS </h1>
        </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><h4>ID</h4></td>
        <td><?php echo $id;?></td>
      </tr>
      <tr>
        <td width="55">&nbsp;</td>
        <td width="121"><h4>Date</h4></td>
        <td width="169"><?php echo $date;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><h4>Visitor  </h4></td>
        <td><?php echo $user;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><h4>Reason</h4></td>
        <td><?php echo $reason;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
 $un=$_SESSION['un'];
echo  $id=$_REQUEST['id'];
?>