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
            padding : 25px 5px 0px 5px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
      <div class="inputData" style="display : flex;">
        <div class="kumpulanData"style="width:70%;" >
        <h4 class="Judul">Belanja Online</h4><hr>
    <form method="POST">
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" required class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Choose Product</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_0" type="radio" class="custom-control-input" value="TV" required> 
        <label for="product_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_1" type="radio" class="custom-control-input" value="KULKAS"required> 
        <label for="product_1"  class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_2" type="radio" class="custom-control-input" value="MESINCUCI"required> 
        <label for="product_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-4">
      <input id="jumlah" name="jumlah" type="text" class="form-control" required>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>
  <div class="tabelProduk">
    <table style="width : 130%;" border="1">
      <tr style="background-color:lightskyblue; ">
        <td style= "padding: 5px;">
          <h6>Daftar Harga</h6>
        </td>
      </tr>
      <tr>
        <td style= "padding: 5px;">
          <p>TV : Rp.4.200.000</p>
        </td>
      </tr>
      <tr>
        <td style= "padding: 5px;">
          <p>Kulkas : Rp.4.200.000</p>
        </td>
      </tr>
      <tr>
        <td style= "padding: 5px;">
          <p>Mesin Cuci : Rp.4.200.000</p>
        </td>
      </tr>
      <tr style="background-color:lightskyblue; ">
        <td style= "padding: 5px;">
          <h6>Harga Dapat Berubah Setiap Saat</h6>
        </td>
      </tr>
    </table>
  </div>
        </div>
      
  <hr>   
<?php 

if(isset($_POST["customer"])&&
isset($_POST["product"])&&
isset($_POST["jumlah"])) {

$customer = $_POST['customer'];
$product = $_POST['product'];
$jumlah = $_POST['jumlah'];

$hargaKulkas  = 3100000;
$hargaTv = 4200000;
$hargaMesincuci = 3800000;
switch($product){
  case "KULKAS":
    $total = $hargaKulkas * $jumlah;
    break;
  case "TV":
    $total = $hargaTv * $jumlah;
    break;
  case "MESINCUCI":
    $total = $hargaMesincuci * $jumlah;
    break;
}

echo "<hr>";
echo "Nama Customer : $customer <br>";
echo "Produk Pilihan: $product <br>";
echo "Jumlah Beli : $jumlah <br>";
echo "Total Belanja : Rp. $total";
}

?>  </div>
   
</body>
</html>



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

  