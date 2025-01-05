<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistem KRS' ?></title>
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Menggunakan Flexbox pada container untuk membuat layout responsif */
        /* .container-fluid {
            display: flex;
            height: 100vh;
        } */

        /* Sidebar dengan lebar tetap 250px, tetapi bisa disesuaikan */
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 20px;
            /* width: 250px; Lebar sidebar tetap */
            transition: 0.3s;
            position: fixed;
        }

        /* Konten utama (content area) yang akan menyesuaikan lebar dengan sidebar */
        .main-content {
            flex-grow: 1;
            /* Membuat konten mengambil sisa ruang */
            padding: 20px;
            background-color: #fff;
            overflow-y: auto;
            margin-left: 250px;
            /* Mengatur konten utama agar tidak terhalang sidebar */
            transition: margin-left 0.3s ease;
        }

        /* Untuk menyesuaikan tampilan mobile */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -250px;
                /* Menyembunyikan sidebar di luar layar pada mobile */
            }

            .sidebar.show {
                left: 0;
                /* Menampilkan sidebar */
            }

            .main-content {
                margin-left: 0;
            }

            /* Overlay untuk menutupi konten ketika sidebar terbuka */
            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1;
                display: none;
            }

            .overlay.show {
                display: block;
            }
        }

        /* Efek hover dan aktif untuk menu */
        .nav-item {
            border-bottom: 1px solid #ddd;
            /* Tambahkan separator antar menu */
        }

        .nav-link {
            color: #000;
        }

        .nav-link:hover {
            background-color: #f1f1f1;
            color: #007bff;
        }

        .nav-link.active {
            background-color: #007bff;
            color: white;
        }
    </style>

<body>
    <div class="container-fluid">

        <!-- Tombol Burger Menu -->
        <button class="btn btn-primary d-md-none my-3" id="sidebarToggle">
            &#9776; Menu
        </button>

        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-md-block bg-light sidebar collapse" id="sidebarMenu">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('/') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/krs') ?>">Input KRS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/bantuan') ?>">Bantuan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/profile') ?>">profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="<?= base_url('/logout') ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->

            <!-- Left -->

            <!-- Right -->
            <!-- <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div> -->
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>content 1
                        </h6>

                    </div>

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            content 2
                        </h6>

                    </div>

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            content 3
                        </h6>

                    </div>

                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->

        <footer class="text-center p-4 bg-body-tertiary text-muted">
            <p>&copy; 2024 Sistem KRS</p>
        </footer>
       
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fungsi untuk toggle sidebar
        document.getElementById("sidebarToggle").addEventListener("click", function() {
            const sidebar = document.getElementById("sidebarMenu");
            const content = document.querySelector(".main-content");
            const overlay = document.getElementById("overlay");

            sidebar.classList.toggle("show");
            content.classList.toggle("full");
            overlay.classList.toggle("show");
        });

        document.getElementById("overlay").addEventListener("click", function() {
            const sidebar = document.getElementById("sidebarMenu");
            const content = document.querySelector(".main-content");
            this.classList.remove("show");
            sidebar.classList.remove("show");
            content.classList.remove("full");
        });
    </script>
</body>

</html>