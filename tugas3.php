<?php
include_once'header.php';
include_once 'sidebar.php';
?>


  <!-- Main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INI HALAMAN HOME</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Judul</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            width : 65%;
            margin-top:10px;
            border : 1px solid grey;
            border-radius: 10px;
            background-color: gold;
            margin-top: 50px;
        }
        h3 {
            text-align : center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    $ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","BD"=>"Bisnis Digital"];
    $ar_skill = ["Html"=>10, "Css"=>10,"javascript"=>20,"Rwd boostrap"=>20,"PHP"=>30,"Pyhton"=>30,"java"=>50];
    $domisili = ["Jakarta","Depok","Bogor","Tanggerang","Bekasi","Lainnya"];
    ?>
    <div class="container">
        <h3>Form Registrasi</h3>
<form method="POST" action="#">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Pria"> 
        <label for="jk_0" class="custom-control-label">Pria</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <!-- <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Bisnis Digital">Bisnis Digital</option> -->
        <?php
        foreach ($ar_prodi as $index_prodi => $value_prodi) {
        ?>    
            <option value="<?=$index_prodi?>"><?=$value_prodi ?></option>
       <?php } ?>
      </select>
     
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web & Programming</label> 
    <div class="col-8">
        <?php
        foreach($ar_skill as $k=>$v){
            echo '<input type="checkbox" name="skills[]" value="'. $k.'"> '.  $k;
        }
        ?>
      <!-- <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="skill_2" class="custom-control-label">Javascript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_3" type="checkbox" class="custom-control-input" value="rwd"> 
        <label for="skill_3" class="custom-control-label">RWD Boostrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_5" type="checkbox" class="custom-control-input" value="py"> 
        <label for="skill_5" class="custom-control-label">Phyton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill_6" class="custom-control-label">Java</label>
      </div> -->
      
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Palembang">Palembang</option>
        <option value="Muara Enim">Muara Enim</option>
        <option value="Medan">Medan</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-google-wallet"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
   
   
   

</body>
</html>

<!-- Hasil -->
<!-- PHP  -->
<?php

$NIM = $_POST['nim'];
$namaLengkap = $_POST['nama'];
$jenisKelamin = $_POST['jk'];
$value_prodi = $_POST["prodi"];
$skill_pilihan = $_POST['skills'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
$nilai=0;


foreach($skill_pilihan as $skor){
    switch($skor){
        case 'Html':
        case 'Css':
            $nilai += 10;
            break;
            default:
            break;
            
    }
}
foreach ($skill_pilihan as $skor ) {
    switch ($skor) {
        case 'javascript' :
        case 'Rwd boostrap' :
        
            $nilai += 20;
            break;
            default:
            break;
    }
}
foreach ($skill_pilihan as $skor ) {
    switch ($skor) {
        case 'PHP' :
        case 'Python' :
        
            $nilai += 30;
            break;
            default:
            break;
    }
}
foreach ($skill_pilihan as $skor ) {
    switch ($skor) {
        case 'Java' :
            $nilai += 50;
            break;
            default:
            break;
    }
}
if($nilai == 0){
    $predikat = "Tidak memadai";
} else if($nilai > 0 & $nilai<=40 ){
    $predikat = "Kurang";
}else if($nilai > 40 & $nilai<=60 ){
    $predikat = "Cukup";
}else if($nilai > 60 & $nilai<=100 ){
    $predikat = "Baik";
}else if($nilai > 100 & $nilai<=150 ){
    $predikat = "Sangat Baik";
}else {
    $predikat = "Nilai tak tersedia";
}

echo "<table style='border: 1px solid #ccc; width: 50%; margin: 10% auto; padding: 20px 20px; border-radius:8px; background-color:gold'>";
echo "<tr><td colspan='2'><h3>Data Terkirim</h3></td></tr>";
echo "<tr><td>Nim</td><td>:</td>\<td> $NIM </td></tr>";
echo "<tr><td>Nama Lengkap</td><td>:</td><td> $namaLengkap</td</tr>";
echo "<tr><td>Jenis Kelamin</td><td>:</td><td>$jenisKelamin</td></tr>";   
echo "<tr><td>Program Studi </td><td>:</td><td>$value_prodi</td></tr>"; 
echo "<tr><td>Skill</td><td>:</td><td>"; 
foreach($skill_pilihan as $value){
    echo "$value ,";
}
echo "</td></tr>";
echo "<tr><td>Skor skill</td><td>:</td><td>$nilai</td></tr>";  
echo "<tr><td>Kategori Nilai</td><td>:</td><td>$predikat</td></tr>";
echo "<tr><td>Domisili</td><td> : </td><td>$domisili</td></tr>";
echo "<tr><td>Email</td><td> :</td><td>$email</td></tr>"; 
?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'footer.php';
  ?>

  