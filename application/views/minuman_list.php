<h3 align="center">DATA MINUMAN</h3>
<a href="<?= site_url() ?>/minuman/form" class="btn btn-primary">Tambah Data</a>
<table class="table table-striped">

    <thead>
        <tr class="info">
            <th>FOTO</th>
            <th>ID MINUMAN</th>
            <th>NAMA</th>
            <th>DESKRIPSI</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($minuman as $r) { ?>
        <tr>
            <td>
                <img src="<?= base_url() ?>foto_minuman/<?= $r['foto'] ?>" width="200" />
            </td>
            <td><?= $r['id_mi'] ?></td>
            <td><?= $r['nama'] ?></td>
            <td><?= $r['deskripsi'] ?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?= site_url() ?>/minuman/edit/<?= $r['id_mi'] ?>">
                    <span class="glyphicon glyphicon-edit">Ubah</span>
                </a>
                <a class="btn btn-primary btn-sm del" href="#" rel="<?= site_url() ?>/minuman/del/<?= $r['id_mi'] ?>">
                    <span class="glyphicon glyphicon-trash">Hapus</span>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>