
<?php
include("include\dbconnect.php"); 
extract($_POST);
 $id=$_REQUEST['id'];
 $up_fees="update user_request set status=1  where id='$id'"; 

if($conn->query($up_fees) === TRUE){
 ?>
<script language="javascript" type="text/javascript">
alert("Success");
window.location.href="admin_visitors.php";
</script>
<?php   
}
?>