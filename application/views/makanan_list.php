<h3 align="center">DATA MAKANAN</h3>
<a href="<?= site_url() ?>/makanan/form" class="btn btn-primary">Tambah Data</a>
<table class="table table-striped table-responsive">

    <thead>
        <tr class="info">
            <th>FOTO</th>
            <th>ID MAKANAN</th>
            <th>NAMA</th>
            <th>DESKRIPSI</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($makanan as $r) { ?>
        <tr>
            <td>
                <img src="<?= base_url() ?>foto_makanan/<?= $r['foto'] ?>" width="200" />
            </td>
            <td><?= $r['id_ma'] ?></td>
            <td><?= $r['nama'] ?></td>
            <td><?= $r['deskripsi'] ?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?= site_url() ?>/makanan/edit/<?= $r['id_ma'] ?>">
                    <span class="glyphicon glyphicon-edit">Ubah</span>
                </a>
                <a class="btn btn-primary btn-sm del" href="#" rel="<?= site_url() ?>/makanan/del/<?= $r['id_ma'] ?>">
                    <span class="glyphicon glyphicon-trash">Hapus</span>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>