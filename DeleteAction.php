<?php
include 'class/config.php';
?>
<title><?php echo $master_details['project_name'] ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if(isset($_GET['token'])){
echo 'Deleting.....';
$getid=base64_decode($_GET['token']);
$dq=mysqli_query($link,"delete from student where id='".$getid."'") or die(mysqli_error($link));
}
echo '<meta http-equiv="refresh" content="0; URL=index.php" />'; 
exit();
?>