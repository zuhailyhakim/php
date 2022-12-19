<?php
include ('connection.php');
$ndp = $_GET['ndp'];
$samb = mysqli_connect($host,$user,$password,$database);
$sql = mysqli_query($samb,$sql);
if($hasil)
{
echo "<script>alert('berjaya padam rekod')</script>";
}
else{
echo "<script>alert('tidak berjaya padam rekod')</script>";
echo "<script>window.location='add.php'</script>";
}
?>

