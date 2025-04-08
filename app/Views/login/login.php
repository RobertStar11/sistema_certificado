<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('public/plugins/fontawesome-free/css/all.min.css') ?>" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('public/dist/css/adminlte.min.css') ?>" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Vali</b>CERTI</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Ingrese sus datos</p>

                <form action="../../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id='txtuser' name='txtuser' placeholder="DNI">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa-solid fa-id-card"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id='txtpassword' name="txtpassword" placeholder="Contraseña">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="#" id="togglePassword">
                                    <!-- Ícono de ojo abierto -->
                                    <i id="eye-open" class="fa-solid fa-eye"></i>
                                    <!-- Ícono de ojo cerrado (oculto por defecto) -->
                                    <i id="eye-closed" class="fa-solid fa-eye-slash" style="display: none;"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;Iniciar sesion</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('public/plugins/jquery/jquery.min.js') ?>" defer></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('public/bootstrap/js/bootstrap.bundle.min.js') ?>" defer></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('public/dist/js/adminlte.min.js') ?>" defer></script>
    <!-- JS Local -->
    <script src="<?= base_url('public/dist/js/pagina/login.js') ?>" defer></script>
</body>

</html>