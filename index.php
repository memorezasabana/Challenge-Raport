<?php
include 'aset/header.php';
?>
<?php
include 'koneksi.php';
    $sql = "SELECT * FROM nilai 
    INNER JOIN kelas ON nilai.id_kelas=kelas.id_kelas
    INNER JOIN jurusan ON nilai.id_jurusan=jurusan.id_jurusan ORDER BY nis";

    $res = mysqli_query($koneksi, $sql);
    $dasis = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $dasis[] = $data;
    }
?>
<style>
body{
    background-color: #f7e3c1;

}#cont{
font-family:"Helvetica-serif";
}
</style>
<div id="body">
<div class="container">
    <div class="row at-4">
    <div class="col-md">
            </div>
        </div>
</div>
<div class="card">
    <div id="cont" class="card-header">
        <h2 class="card-title"><i class="fas fa-table"></i><b> Data Raport</b></h2>
        <a href="form-nilai.php" class="btn btn-warning btn-md "><b>Input Data</b></a>

  <div id="cont" class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Kelas</th>
      <th scope="col">Nilai Web</th>
      <th scope="col">Nilai PBO</th>
      <th scope="col">Nilai Basdat</th>
      <th scope="col">Nilai Desain</th>
      <th scope="col">Nilai Progdas</th>
      <th scope="col">Nilai Rata-Rata</th>
      <th scope="col">Predikat</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <?php
    $no = 1;
    foreach ($dasis as $d) { ?>
    <tr>
    <td scope="row"><?= $no ?></td>
    <td><?= $d['nis']?></th>
        <td><?= $d['nama']?></th>
        <td><?= $d['alamat']?></th> 
        <td><?= $d['jurusan']?></th>
        <td><?= $d['kelas']?></th>
        <td><?= $d['nilai_web']?></th>
        <td><?= $d['nilai_pbo']?></th>
        <td><?= $d['nilai_basdat']?></th>
        <td><?= $d['nilai_desain']?></th>
        <td><?= $d['nilai_progdas']?></th>
        <td><?= $d['ratarata']?></th>
        <td><?= $d['predikat']?></th>
        <td><?= $d['keterangan']?></th>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>

    </div>
</div>
</div>
<?php
include 'aset/footer.php';
?>