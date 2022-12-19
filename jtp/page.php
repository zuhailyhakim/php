<?php
include "header.php";
include "connection.php";
if(isset($_POST['ndp'])){
    $nama=$_POST['nama'];
    $ndp=$_POST['ndp'];
    $kesalahan=$_POST['kesalahan'];
    $jtp=$_POST['jtp'];

    $sql="INSERT INTO masuk (nama,ndp,kesalahan,jtp)
    values ('$nama','$ndp','$kesalahan','$jtp')";
    $result=mysqli_query($samb,$sql);
    if($result){
      echo "<script>alert('pendaftaran ahli berjaya');
      window.location='page.php'</script>";
    }else{
      echo "<script>alert('pendaftaran ahli gagal!');
      window.location='page.php'</script>"; 
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table,tr,th,td{border: 2px black solid; 
       border-collapse: collapse;
      padding: 20px; text-align: center; margin: auto;}
    body{background-color: cadetblue;}
      .img1{height: 200px; width: 200px; margin-left: 150px;}
      .img2{height: 200px; width: 200px; margin-left: 650px;}
      .button{margin-left: 650px;}
    </style>
    
</head>
<body><img src="logo_JTM.png" class="img1"><img src="JATA.png" class="img2">
<div class="container"><button class="button"> <a href="add.php" > add user</a></button></div>
<table class="table">
<html>
    
<head>
<body>

<table>
  <tr>
    <th>nama</th>
    <th>ndp</th>
    <th>kesalahan</th>
    <th>jtp</th>
  </tr>
  <tr>
    <td>allysa</td>
    <td>23221010</td>
    <td>mencuri</td>
    <td>jtp2</td>
    <td>
      <a class='btn btn-denger btn -sm' href='delete.php'>delete</a>
    </td>
  </tr>
  <tr>
    <td>ali bin abu</td>
    <td>23221013</td>
    <td>tidur dalam class</td>
    <td>jtp3</td>
    <td>
      <a class='btn btn-denger btn -sm' href='delete.php'>delete</a>
    </td>
  </tr>
  <tr>
    <td>azlan</td>
    <td>23221093</td>
    <td>membuli</td>
    <td>jtp3</td>
    <td>
      <a class='btn btn-denger btn -sm' href='delete.php'>delete</a>
    </td>
  </tr>
  <tr>
    <td>muhammad zuhaily hakim</td>
    <td>23221094</td>
    <td>keluar tanpa izin</td>
    <td>jtp3</td>
    <td>
      <a class='btn btn-denger btn -sm' href='delete.php'>delete</a>
    </td>
  </tr>
  <tr>
    <td>abu bin din</td>
    <td>23221101</td>
    <td>merokok</td>
    <td>jtp2</td>
    <td>
      <a class='btn btn-denger btn -sm' href='delete.php'>delete</a>
    </td>
  </tr>
 
</table>



</head>
</body>
</html>