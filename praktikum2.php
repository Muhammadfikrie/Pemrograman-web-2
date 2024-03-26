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
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<h1>Form Nilai Siswa</h1> 
<!-- Method get untuk data yang bersifat tidak terlalu penting, sedangkan method POST untuk data yang bersifat secure/rahasia-->
<form method="GET" action="#"> <!-- method =POST/GETsedangkan action mengarah ke page lain -->
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="name" name="name" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="pemweb">pemweb</option>
        <option value="UIUX">UIUX</option>
        <option value="DDP">DDP</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilaiUts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilaiUts" name="nilaiUts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilaiUas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilaiUas" name="nilaiUas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="praktikum" class="col-4 col-form-label">Nilai Praktikum</label> 
    <div class="col-8">
      <input id="praktikum" name="praktikum" placeholder="Nilai Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<table border="1">
    <tr>
<?php

$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$nilaiUts = $_GET['nilaiUts'];
$nilaiUas = $_GET['nilaiUas'];
$praktikum = $_GET['praktikum'];

// Buat Total Nilai
// dar = nilaiUts + nilaiUas + praktikum/3
$total_nilai = ($nilaiUts + $nilaiUas + $praktikum) / 3;

// Buat perhitungan IF untuk mencari Grade
if ($total_nilai >= 85){
    $grade = "A";
}
elseif($total_nilai >=70){
    $grade = "B";
}
elseif($total_nilai >=56){
    $grade = "C";
}
elseif($total_nilai >=30){
    $grade = "D";
}
else {
    $grade = "E";
}

// Buat perhitungan SWICTCASE untuk mencari Predikat
switch ($grade){
    case "A":
        $Predikat = "Sangat Memuaskan";
        break;
    case "B":
        $Predikat = "Memuaskan";
        break;
    case "C":
        $Predikat = "Cukup";
        break;

    case "D":
        $Predikat = "Kurang";
        break;
    case "E":
        $Predikat = "Sangat kurang";
        break;
    default:
        $Predikat = "Tidak tersedia";
        break;
}


// Buat perhitungan IF untuk mencari  status Lulus/gagal
if($total_nilai >= 70){
    $status ="LULUS";
}else{
    $status = "Tidak lulus";
}


// Cetak hasil
echo "Nama Lengkap : $nama<br>";
echo "Mata Kuliah : $matkul<br>";
echo "Nilai Uts : $nilaiUts <br>";
echo "Nilai Uas : $nilaiUas <br>";
echo "Praktikum : $praktikum <br>";
echo "Rata-rata nilai : $total_nilai % <br>";
echo "Grade Nilai : $grade <br>";
echo "Predikat Nilai : $Predikat<br>";
echo "Status Kelulusan : $status";


?></tr></table>
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

  














<!-- adhsjfh -->

