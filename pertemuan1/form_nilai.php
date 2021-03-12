<!DOCTYPE html>
<html>
<head>
	<title>Form Nilai</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<form class="form-horizontal" method="get" action="array_siswa.php">
<fieldset>

<!-- Form Name -->
<legend style="text-align: center;">Form Nilai</legend>

<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" value="" size="30" class="form-control input-md"/>
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="matkul">Mata Kuliah</label>
  <div class="col-md-4">
    <select id="matkul" name="matkul" class="form-control">
      <option value="Dasar-Dasar Pemrograman">Dasar-Dasar pemrograman</option>
      <option value="Basis Data I">Basis Data I</option>
      <option value="Pemrograman Web I">Pemrograman Web I</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="nilai_uts">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="nilai_uts" name="nilai_uts" type="text" value="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="nilai_uas">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="nilai_uas" name="nilai_uas" type="text" value="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="nilai_tugas">Nilai Tugas/Praktikum</label>  
  <div class="col-md-4">
  <input id="nilai_tugas" name="nilai_tugas" type="text" value="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Button -->
<div class="form-group" align="center">
 	<br/>
    <!-- <input type="submit" id="proses" name="proses"/> -->
    <button type="submit" id="proses" name="proses" class="btn btn-primary">Proses</button>
  </div>
</div>

</fieldset>
</form>

<!-- <?php  
$proses= $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
echo 'Proses : '.$proses;
echo "<br/>Nama : ".$nama_siswa;
echo "<br/>Mata Kuliah : ".$mata_kuliah;
echo "<br/>Nilai UTS : ".$nilai_uts;
echo "<br/>Nilai UAS : ".$nilai_uas;
echo "<br/>Nilai Tugas Praktikum : ".$nilai_tugas;
?> -->
</body>
</html>