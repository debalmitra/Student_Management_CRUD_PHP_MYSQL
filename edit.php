<?php
include 'header.php';
$getid=base64_decode($_GET['token']);
$sq=mysqli_query($link, "select * from student where id='".$getid."'");
$sr=mysqli_fetch_array($sq);
?>
<body>
<div class="container">
<center>
<h4><?php echo $master_details['project_name'] ?></h4>
<small><?=$master_details['project_desc']?></small>
</center>
<form action="UpdateAction.php" method="POST" id="edit_form">
<input type="hidden" name="getid" value="<?=$getid?>">
<center><h4>Edit Student</h4></center>
<table class="table table-bordered">
<tr>
<td>Name: <input type="text" value="<?=$sr['name']?>" name="nm" required="" class="form-control"> </td>
<td>Date of Birth: <input type="date" value="<?=$sr['dob']?>" name="dob" required="" class="form-control"> </td>
</tr>
<tr>
<td>Address: <input type="text" value="<?=$sr['address']?>" name="addrs" required="" class="form-control"> </td>
<td>Mobile No (Parent): <input type="text" value="<?=$sr['p_mob']?>" name="mob" required="" class="form-control"> </td>
</tr>
</table>
<center>
<input type="submit" name="student_submit" value="Update" class="btn btn-primary">
&nbsp;
<a href="index.php" class="btn btn-danger">Back</a>
</center>
</form>
</div>
<?php
include 'footer.php';
?>
