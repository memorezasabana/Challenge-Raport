<?php
include 'koneksi.php';

if (isset($_POST['Simpan'])){
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $id_jurusan = "";
        if($_POST['id_jurusan'] == "Rekayasa Perangkat Lunak"){
            $id_jurusan = 1;
        }else if($_POST['id_jurusan'] == "Teknik Komputer Jaringan"){
            $id_jurusan = 2;
        }else if($_POST['id_jurusan'] == "Multimedia"){
            $id_jurusan = 3;
        }
    $id_kelas = "";
        if($_POST['id_kelas'] == "X"){
            $id_kelas = 1;
        }else if($_POST['id_kelas'] == "XI"){
            $id_kelas = 2;
        }else if($_POST['id_kelas'] == "XII"){
            $id_kelas = 3;
        }

$nilai_web      = $_POST['nilai_web'];
$nilai_pbo      = $_POST['nilai_pbo'];
$nilai_basdat   = $_POST['nilai_basdat'];
$nilai_desain   = $_POST['nilai_desain'];
$nilai_progdas  = $_POST['nilai_progdas'];
$ratarata       = ($nilai_web+$nilai_pbo+$nilai_basdat+$nilai_desain+$nilai_progdas)/5;
$predikat       = "";
    if($ratarata > 89 && $ratarata < 100){
        $predikat = "A";
    }else if($ratarata > 79 && $ratarata < 90){
        $predikat = "B";
    }else if($ratarata > 69 && $ratarata < 80){
        $predikat = "C";
    }else if($ratarata > 59 && $ratarata < 70){
        $predikat = "D";
    }else if($ratarata <51){
        $predikat = "E";
    }
$keterangan     = "";    
    if($ratarata > 89 && $ratarata < 100){
        $keterangan = "Excellent";
    }else if($ratarata > 79 && $ratarata < 90){
        $keterangan = "Baik";
    }else if($ratarata > 69 && $ratarata < 80){
        $keterangan = "Cukup";
    }else if($ratarata > 59 && $ratarata < 70){
        $keterangan = "Kurang";
    }else if($ratarata <51){
        $keterangan = "Rendah";
    }
$sql = "INSERT INTO nilai (nis, nama, alamat, id_jurusan, id_kelas, nilai_web, nilai_pbo, nilai_basdat, nilai_desain, 
nilai_progdas, ratarata, predikat, keterangan)
VALUES ('$nis', '$nama', '$alamat','$id_jurusan', '$id_kelas', '$nilai_web', '$nilai_pbo', '$nilai_basdat', 
'$nilai_desain', '$nilai_progdas', '$ratarata', '$predikat', '$keterangan')";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);

    if ($count == 1) {
        header("Location: index.php");
    } else {
        header("Location: form-nilai.php");
    }
}else{
    header("Location: form-nilai.php");
}
?>
