<?php
include "header.php";
include "connection.php";
if(isset($_POST['ndp'])){
    $nama=$_POST['nama'];
    $ndp=$_POST['ndp'];
    $kesalahan=$_POST['kesalahan'];
    $jtp=$_POST['jtp'];

   $sql= " INSERT INTO masuk (nama,ndp,kesalahan,jtp)
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
<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    body{background-color: cadetblue;}
</style>
<body>

<div class="container">
<form method="POST">
  <div class="from group">
    <label>nama</label>
    <input type="text" class="form-control" name="nama">
  </div>

  <div class="from group">
    <label>ndp</label>
    <input type="text" class="form-control" name="ndp">
  </div>

  <div class="from group">
    <label>kesalahan</label>
    <input type="text" class="form-control" name="kesalahan">
  </div>

  <div class="from group">
    <label>jtp</label>
    <input type="text" class="form-control" name="jtp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>
</html>