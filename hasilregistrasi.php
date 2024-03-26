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
