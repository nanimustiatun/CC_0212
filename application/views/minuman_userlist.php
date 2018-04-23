<html>
    <head>
        <meta charset="UTF-8">
        <title>NAN_NAN Cafe</title>
       
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/style.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    
    </head>
    <body>
        
        <br/>
        <br/>
        <br/>
<div class="container">
    <div class="">
	<div class="panel-heading pr"></div>
            <table class="table panel-primary" type="table-responsive"  >
		<thead>
                    <tr>
                       
                    </tr>
                </thead>
                 <tbody>
                    <?php foreach ($minuman as $r) { ?>
                    <tr>
                        <td>
                <img src="<?= base_url() ?>foto_minuman/<?= $r['foto'] ?>" width="200" />
                        </td>
                        <td><?= $r['nama'] ?></td>
                        <td><?= $r['deskripsi'] ?></td>
                    </tr>
                        <?php } ?>
                  </tbody>
</table>
    </div> 
</div>