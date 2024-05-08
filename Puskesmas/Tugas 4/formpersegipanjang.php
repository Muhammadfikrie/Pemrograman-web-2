<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding-top : 70px;
        }
        .container {
            border : 1px solid black;
            padding : 20px;
            border-radius : 10px;
            background-color:gold;
        }
    </style>
</head>
<body>
    <div class="container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="#">
    <h2>Menghitung Persegi Panjang</h2>
  <div class="form-group row">
    <label for="panjang" class="col-4 col-form-label">Masukkan panjang</label> 
    <div class="col-8">
      <input id="panjang" name="panjang" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="lebar" class="col-4 col-form-label">Masukkan Lebar</label> 
    <div class="col-8">
      <input id="lebar" name="lebar" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="hitung" type="submit" class="btn btn-primary">Hitung</button>
    </div>
  </div>


<?php 

require_once 'classpersegipanjang.php';

// tangkap data
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$luas = $_POST['luas'];
$keliling = $_POST['keliling'];
// buat objek
$Pp = new PersegiPanjang($panjang, $lebar);
// Cetak
echo "Luas Persegi Panjang :".$Pp->rumusLuas();
echo "<br>";
echo "Keliling Persegi Panjang :".$Pp->rumusKeliling();
?>
</form>
    </div> 
</body>
</html>