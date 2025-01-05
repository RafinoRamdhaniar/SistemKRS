<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UDINUS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* CSS untuk parallax */
        .parallax {
            background-image: url('<?= base_url("assets/img/Background.jpeg") ?>');
            /* Gambar lokal */
            height: 800px;
            /* Tinggi parallax */
            background-attachment: flex;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-container {
            margin-top: 180px;
        }

        /* Optimasi form */
        .card {
            opacity: 0.95;
            /* Transparansi untuk efek estetika */
        }

        @media (max-width: 768px) {

            /* Nonaktifkan efek parallax untuk perangkat kecil */
            .parallax {
                background-attachment: scroll;
            }
        }
    </style>
</head>

<body class="parallax">
    <!-- Login Form Section -->
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h4><i class="fas fa-user-lock"></i> Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('login') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="form-outline mb-4">
                                <input type="text" name="nim" id="nim" class="form-control" required />
                                <label class="form-label" for="nim">NIM</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="password" class="form-control" required />
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col text-start">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" />
                                        <label class="form-check-label" for="rememberMe"> Remember Me </label>
                                    </div>
                                </div>
                                <div class="col text-end">
                                    <a href="<?= base_url('auth/forgot_password') ?>">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Not registered? <a href="<?= base_url('auth/register') ?>">Create an account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>