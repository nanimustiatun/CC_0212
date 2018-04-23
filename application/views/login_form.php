<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>"/>
	<script src="<?= base_url('assets/jquery-1.12.3.min.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    </head>
	<body>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <div class="container">
            <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-primary">
            <div class="panel-heading">
		Silakan Login
            </div>
            <div class="panel-body">
                <form method="post" action="<?= site_url('login/validasi') ?>">
            <div class="form_group">
                <label>Username</label>
                <input class="form-control" required="" type="username" name="username" />
            </div>
            <div class="form_group">
                <label>Password</label>
                <input class="form-control" required="" type="password" name="password" />
            </div>
            <br/>
            <button class="btn btn-primary">Login</button>
            <span class="text-danger">
            <?= $this->session->flashdata('error') ?>
            </span>
            </form>
            </div>
            </div>
            </div>
            </div>
	</body>
</html>