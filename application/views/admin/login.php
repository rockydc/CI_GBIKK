<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Admin</title>
    <link rel="stylesheet" href="<?= base_url();?>asset_admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>asset_admin/css/mloureiro1973-login.css">
    <link rel="stylesheet" href="<?= base_url();?>asset_admin/css/mloureiro1973-login-1.css">

</head>

<body>
    <div class="login-card">

        <div class="d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-bottom: 40px;"><img class="img-fluid d-xl-flex" src="<?= base_url();?>assets/img/gbi%20logo.png" loading="auto" style="width: 120px;"></div>


        <form class="form-signin" action="<?= base_url();?>admin/aksi_login" method="post"><input class="form-control" type="textl" id="inputEmail" name="username" required="" placeholder="username" autofocus=""><input class="form-control" type="password" id="inputPassword" name="password" required="" placeholder="Password">
            <button
                class="btn btn-primary btn-block btn-lg btn-signin" name="login" type="submit" style="background-color: rgb(241,0,30);">Login </button>
        </form>
        <?php if ($this->session->flashdata('flash')): ?>
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                username atau password <strong> salah</strong> <?php echo $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif;?>
    </div>
    <script src="<?= base_url();?>asset_admin/js/jquery.min.js"></script>
    <script src="<?= base_url();?>asset_admin/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>