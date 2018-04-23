<!DOCTYPE html>

<html>
    <head>
         <title>NAN_NAN CAFE</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/style.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/datatables/datatables.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/sweetalert/sweetalert.css" />
        <script type="text/javascript" src="<?= base_url('assets/jquery-1.12.3.min.js') ?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/datatables/datatables.min.js') ?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/sweetalert/sweetalert.min.js') ?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/validator.min.js') ?>" ></script>
    </head>
    <body>
        <div class="atas">
            <img src="<?= base_url() ?>/assets/gambar/1.jpg" width="100%" height="200" />
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
                    </button>
		<div class="navbar-header">
                    <a class="navbar-brand" href="<?= site_url() ?>/home" role="home" target="content" id="tempat"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">				
                            <li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" class="active">Menu
                                    <span class="caret"></span>
					<ul class="dropdown-menu">
                                            <li><a href="<?= site_url() ?>/makanan" role="makanan" target="content" id="tempat">Makanan</a></li>
                                            <li><a href="<?= site_url() ?>/minuman" role="minuman" target="content" id="tempat">Minuman</a></li>
					</ul>
                            </li>
                            <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li>
                            <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li>
                            <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li>
                            <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li>
                            <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li>
                            <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li>
                           
                            
                            <li><a href="<?= site_url() ?>/makanan_user" role="makanan_user" target="content" id="tempat">Lihat</a></li>
                            <li><a href="<?= site_url() ?>/logout" role="logout" target="content" id="tempat">Logout</a></li>
                    </ul>
                                
		</div>
                </div>
            </nav>
        </div>
<!--        <div class="samping">
            <img src="<?= base_url() ?>/assets/gambar/3.jpg" width="290" height="490" />
        </div>-->
        <div class="tengah">
            <?= $content ?>  
        </div>
<!--        <div class="bawah">bawah</div>-->

        <script type="text/javascript">
            $('table').DataTable({
                responsive: true,
                dom: "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-6'Bi><'col-sm-6'p>>",
                buttons: [
                    'excel', 'copy', 'pdf'
                ]
            });
           $(document).on('click','.del',function(){
                var href = $(this).attr('rel');
                swal({
                    title: "Anda Yakin ? ",
                    text: "Data yang telah dihapus tidak dapat dikembalikan!",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Batalkan",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Ya, Saya Yakin!",
                    closeOnConfirm: false
                },
                function(){
                    swal({
                        title: "Terhapus!",
                        text: "Data yang anda maksud telah berhasil dihapus.",
                        type: "success"
                    },
                        function(){
                            window.location = href;
                        });
                    });
                return false;
            });
            
        </script>
    </body>
</html>

