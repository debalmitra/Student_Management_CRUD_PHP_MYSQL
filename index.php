<?php
include 'header.php';
?>
<body>
<div class="container">
<center>
<h4><?php echo $master_details['project_name'] ?></h4>
<small><?=$master_details['project_desc']?></small>
</center>
<form action="SaveAction.php" method="POST" id="add_form">
<center><h4>Add Student</h4></center>
<table class="table table-bordered">
<tr>
<td>Name: <input type="text" name="nm" required="" class="form-control"> </td>
<td>Date of Birth: <input type="date" name="dob" required="" class="form-control"> </td>
</tr>
<tr>
<td>Address: <input type="text" name="addrs" required="" class="form-control"> </td>
<td>Mobile No (Parent): <input type="text" name="mob" required="" class="form-control"> </td>
</tr>
</table>

<center>
<input type="submit" name="student_submit" class="btn btn-primary">
</center>


</form>


<hr>

<center><h4>Showing Students</h4></center>
<table class="table table-bordered">
<tr>
<th></th><th>Name</th><th>Roll No</th><th>Address</th><th>Mobile No</th><th>Age</th>
</tr>
<?php
$sq=mysqli_query($link, "select * from student order by id ASC");
while($sr=mysqli_fetch_array($sq)){
	$dob_year=explode('-',$sr['dob']); //1991-01-01
	$cur_year=date('Y');
	$age=$cur_year-$dob_year[0];
	?>
	<tr>
	<td><a href="edit.php?token=<?=base64_encode($sr['id'])?>">Edit</a> &nbsp; 
	<a href="DeleteAction.php?token=<?=base64_encode($sr['id'])?>">Delete</a>
	</td>
	<td><?=$sr['name']?></td>
	<td><?=$sr['roll_no']?></td>
	<td><?=$sr['address']?></td>
	<td><?=$sr['p_mob']?></td>
	<td><?=$age?> Years</td>
	</tr>
	<?php
}
?>
</table>






</div>
<?php
include 'footer.php';
?>
