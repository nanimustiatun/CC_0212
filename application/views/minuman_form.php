<?php
    $action = isset($data['id_mi']) ? 'update' : 'save';
    $id_mi = isset($data['id_mi']) ? $data['id_mi'] : '';
    $nama = isset($data['id_mi']) ? $data['nama'] : '';
    $deskripsi = isset($data['id_mi']) ? $data['deskripsi'] : '';
    $foto = isset($data['id_mi']) ? $data['foto'] : '';
    $readonly = isset($data['id_mi']) ? 'readonly' : '';
?>

<h3 align="center" style="border-bottom: 1px #00cc33 outset">FORM DATA MINUMAN</h3>
<hr/>
<!--enctype="multipart/form-data" u upload file-->
<form enctype="multipart/form-data" data-toggle="validator" class="form" method="post"
      action="<?= site_url() ?>/minuman/<?= $action ?>">
    <div class="form-group">
        <label>ID</label>
        <input required="" data-error="ID Minuman Harus Diisi" type="text" name="id_mi" class="form-control" value="<?= $id_mi ?>" <?= $readonly ?>/>
        <div class="help-block with-errors"></div>
        <!--<div class="help-block with-errors small"></div>-->
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input required="" type="text" name="nama" class="form-control" value="<?= $nama ?>"/>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <input required="" type="text" name="deskripsi" class="form-control" value="<?= $deskripsi ?>"/>
        <!--<input required="" type="email" name="telepon" class="form-control" value="<?= $telepon ?>"/> jika data belum berbentuk email, maka data error-->
    </div>
    <div class="form-group">
     <label>FOTO</label>
        <input required="" data-error="Foto Harus Diisi" type="file" name="foto" class="form-control" value="<?= $foto ?>"/>
        <div class="help-block with-errors"></div>
    </div>
    
    <button type="submit" class="btn btn-success">
        Simpan Data 
    </button>
</form>