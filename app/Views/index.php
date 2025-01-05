<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
/* Carousel Container */
#contentCarousel {
        margin: 0 auto;
        overflow: hidden;
        width: 100%;
    }

    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-item {
        flex: 0 0 33.33%;
        /* Tiga item dalam satu baris */
        padding: 10px;
    }

    /* Card Style */
    .card {
        height: 200px;
        border-radius: 8px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .card-body {
        padding: 10px;
    }

    /* Navigation Buttons */
    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
        border-radius: 50%;
        padding: 10px;
    }
</style>

<div class="d-flex justify-content-between align-items-center py-3">
    <h1>Sistem KRS</h1>

    <div class="dropdown">
        <a href="#" class="dropdown-toggle text-decoration-none d-flex align-items-center" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= base_url('assets/img/profile.png') ?>" class="profile-picture" alt="Profile">
            <div class="ms-2">
                <strong>Nama Mahasiswa</strong><br>
                <span>NIM</span>
            </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li><a class="dropdown-item" href="/profile">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="/logout">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Carousel 1 -->
<div id="contentCarousel1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Kotak 1</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Kotak 2</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Buttons -->
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#contentCarousel1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#contentCarousel1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
</div>

<!-- Carousel 2-->
<div id="contentCarousel2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Kotak 1</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Kotak 2</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Buttons -->
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#contentCarousel2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#contentCarousel2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
</div>

<!-- Carousel 3-->
<div id="contentCarousel3" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Kotak 1</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Kotak 2</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation Buttons -->
<!-- <button class="carousel-control-prev" type="button" data-bs-target="#contentCarouse3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#contentCarousel3" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button> -->
</div>


<?= $this->endSection() ?>