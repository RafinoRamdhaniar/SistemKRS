<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

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

<?= $this->endSection() ?>