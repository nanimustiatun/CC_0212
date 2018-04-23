<?php
    $action = isset($data['id_ma']) ? 'update' : 'save';
    $id_ma = isset($data['id_ma']) ? $data['id_ma'] : '';
    $nama = isset($data['id_ma']) ? $data['nama'] : '';
    $deskripsi = isset($data['id_ma']) ? $data['deskripsi'] : '';
    $foto = isset($data['id_ma']) ? $data['foto'] : '';
    $readonly = isset($data['id_ma']) ? 'readonly' : '';
?>

<h3 align="center" style="border-bottom: 1px #00cc33 outset">FORM DATA MAKANAN</h3>
<hr/>
<!--enctype="multipart/form-data" u upload file-->
<form enctype="multipart/form-data" data-toggle="validator" class="form" method="post"
      action="<?= site_url() ?>/makanan/<?= $action ?>">
    <div class="form-group">
        <label>ID</label>
        <input required="" data-error="ID Makanan Harus Diisi" type="text" name="id_ma" class="form-control" value="<?= $id_ma ?>" <?= $readonly ?>/>
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