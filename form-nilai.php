<?php

include 'koneksi.php';
?>
<?php
include 'aset/header.php';
?>
<style>
body{
    background-color: #f7e3c1;

}#cont{
font-family:"Helvetica-serif";
}
</style>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-16">
        <div class="card">
<div id="cont"  class="card-header">
    <h3><center><b>DATA RAPORT</b></center></h3>
</div>
<div class="card-body">
<form method="post" action="proses-nilai.php">
<div id="cont"  class="form-row">
<div class="form-group col-md-5">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan nis">
                        </div>
		<div class="form-group col-md-7">
 <label for="nama">Nama</label>
                             <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                        </div>
                        </div>
                        <div  id="cont"  class="form-row">
                        <div class="form-group col-md-12">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                            </div>
                            </div>
                        	<div  id="cont"  class="form-row">
		<div class="form-group col-md-4">
                            <label for="id_jurusan">Jurusan</label><br>
                            <select class="form-control"  name="id_jurusan" id="sel">
                                <option value="">Pilih Jurusan</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                <option value="Multimedia">Multimedia</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_kelas">Kelas</label><br>
                            <select class="form-control"  name="id_kelas" id="sel">
                                <option value="">Pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        </div>
                        <div  id="cont"  class="form-row">
		<div class="form-group col-md-2">
      <label for="nilai_web">Nilai Matpel Web</label>
      <input type="text" name="nilai_web" class="form-control " placeholder="Nilai Web">
</div>
<div class="form-group col-md-2">
      <label for="nilai_pbo">Nilai Matpel PBO</label>
      <input type="text" name="nilai_pbo" class="form-control" placeholder="Nilai PBO">
</div>
<div class="form-group col-md-2">
      <label for="nilai_basdat">Nilai Matpel Basdat</label>
      <input type="text" name="nilai_basdat" class="form-control"placeholder="Nilai Basdat">
</div>         
<div class="form-group col-md-2">
      <label for="nilai_desain">Nilai Matpel Desain</label>
      <input type="text" name="nilai_desain" class="form-control" placeholder="Nilai Desain">
</div>  
<div class="form-group col-md-2">
      <label for="nilai_progdas">Nilai Matpel Progdas</label>
      <input type="text" name="nilai_progdas" class="form-control" placeholder="Nilai Progdas">
</div>   
</div>       
<div  id="cont"  class="form-group">
       <button type="submit" name="Simpan" class="btn btn-warning mr-auto"><b>Simpan</b></button>
</div>

</form>     
</div>
</div>    
        </div>
    </div>
</div>
<?php
include 'aset/footer.php';
?>

 