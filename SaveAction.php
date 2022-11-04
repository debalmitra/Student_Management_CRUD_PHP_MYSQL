<?php
include 'class/config.php';
?>
<title><?php echo $master_details['project_name'] ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if(isset($_POST['student_submit'])){
echo 'Saving.....';
$name=$link -> real_escape_string($_POST['nm']);
$dob=$link -> real_escape_string($_POST['dob']);
$addrs=$link -> real_escape_string($_POST['addrs']);
$mob=$link -> real_escape_string($_POST['mob']);

$roll_sql=mysqli_fetch_array(mysqli_query($link, "select id from student order by id DESC"));
$last_roll=$roll_sql['id']+1;
$roll_no=date("ymd").$last_roll;

$iq=mysqli_query($link,"insert into student (`name`, `dob`, `address`, `roll_no`, `p_mob`, `eat`)
 values ('".$name."', '".$dob."', '".$addrs."', '".$roll_no."', '".$mob."', NOW())") or die(mysqli_error($link));
}
echo '<meta http-equiv="refresh" content="0; URL=index.php" />'; 
exit();
?>