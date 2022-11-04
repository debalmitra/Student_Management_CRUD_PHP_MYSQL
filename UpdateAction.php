<?php
include 'class/config.php';
?>
<title><?php echo $master_details['project_name'] ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if(isset($_POST['student_submit'])){
echo 'Updating.....';
$getid=$link -> real_escape_string($_POST['getid']);
$name=$link -> real_escape_string($_POST['nm']);
$dob=$link -> real_escape_string($_POST['dob']);
$addrs=$link -> real_escape_string($_POST['addrs']);
$mob=$link -> real_escape_string($_POST['mob']);

$uq=mysqli_query($link,"update student set `name`='".$name."', `dob`='".$dob."', `address`='".$addrs."', `p_mob`='".$mob."' where id='".$getid."'") or die(mysqli_error($link));
}
echo '<meta http-equiv="refresh" content="0; URL=index.php" />'; 
exit();
?>