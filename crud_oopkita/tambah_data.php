<?php
include "template/header.php";
?>

<div class="container d-flex justify-content-center">
<div class="card" style="width: 36rem;">
<div class="card-header bg-info text-white">
    Regisrasi 
    </div>
    <div class="card-body ">
<form method="post" action="input.php">
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Nim</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nim">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama">
    </div>
    </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
    <select  name="jurusan" class="form-control">
    <option >Pilihan Jurusan</option>
    <option value="Teknik Informatika"> Teknik Informatika</option>
    <option value="Teknik  Sipil">Teknik  Sipil</option>
    <option value="Teknik Elektro"> Teknik Elektro</option>
    <option value=" Teknik Mesin"> Teknik Mesin</option>
    </select>
    <div class="col-sm-10 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-3" name="submit">Simpan  Data</button>
    </div>
        </div>
    </div>
</form>
</div>
</div>
</div>

<?php
include "template/footer.php";  
?>
