<form class="form-horizontal" name="f1" method='get' action="fikri1.php">  
<fieldset>

<!-- Form Name -->
<legend>Form Mahasiswa</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Masukan Nama" class="form-control input-md">
  
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matkul">Mata Kuliah </label>
  <div class="col-md-4">
    <select id="matkul" name="matkul" class="form-control">
      <option value="Pemrograman Web"> Pemrograman Web</option>
      <option value="Dasar-dasar Pemrograman"> Dasar-dasar Pemrograman</option>
    </select>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uts">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="uts" name="uts" type="text" placeholder="masukan nilai " class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UAS">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="UAS" name="UAS" type="text" placeholder="masukan nilai" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uas"> Nilai Pratikum</label>  
  <div class="col-md-4">
  <input id="uas" name="uas" type="text" placeholder="masukan nilai" class="form-control input-md">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">  
  <button id="singlebutton" name="singlebutton" class="btn btn-primary"  >Simpan</button> 
  </div>
</div>
</fieldset>
</form>