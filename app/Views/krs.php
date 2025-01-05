<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center py-3">
    <h1 class="mt-4">Input KRS</h1>

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

<div class="container">


    <!-- Informasi Mahasiswa -->
    <h4>Selamat Datang, </h4>


    <p>Silakan pilih mata kuliah yang ingin Anda ambil:</p>


    <!-- Dropdown Pemilihan Mata Kuliah -->
    <form id="krsForm" method="post" action="/krs/simpan">
        <div class="mb-3">
            <label for="mataKuliahDropdown" class="form-label">Pilih Mata Kuliah</label>
            <select class="form-select" id="mataKuliahDropdown" name="mata_kuliah">
                <option value="">-- Pilih Mata Kuliah --</option>
                <!-- Data akan dimuat via AJAX -->
            </select>
        </div>
        <button type="button" class="btn btn-success" id="addKrsBtn">Tambah</button>
    </form>

    <!-- Tabel Konfirmasi Pengambilan KRS -->
    <h2 class="mt-4">Konfirmasi KRS</h2>
    <table class="table table-bordered" id="krsTable">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Baris akan ditambahkan secara dinamis -->
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary" id="submitKrsBtn">Simpan KRS</button>


    <!-- Tabel Pencarian Mata Kuliah -->
    <h2 class="mt-5">Daftar Mata Kuliah</h2>
    <form method="get" action="/krs">
        <div class="mb-3">
            <input type="text" class="form-control" name="search" placeholder="Cari mata kuliah">
        </div>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Peminatan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($mataKuliah) && !empty($mataKuliah)): ?>
                <?php foreach ($mataKuliah as $mk): ?>
                    <tr>
                        <td><?= esc($mk['kode']) ?></td>
                        <td><?= esc($mk['nama']) ?></td>
                        <td><?= esc($mk['teori'] + $mk['praktikum']) ?></td>
                        <td><?= esc($mk['semester']) ?></td>
                        <td><?= esc($mk['peminatan'] ?? 'Umum') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada data mata kuliah yang tersedia</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>

<script>
    // Load data mata kuliah menggunakan AJAX
    document.addEventListener('DOMContentLoaded', function() {
        const mataKuliahDropdown = document.getElementById('mataKuliahDropdown');

        // Fetch data dari server
        fetch('/krs/getMataKuliah')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    data.mataKuliah.forEach(mk => {
                        const option = document.createElement('option');
                        option.value = mk.id;
                        option.dataset.kode = mk.kode;
                        option.dataset.nama = mk.nama;
                        option.dataset.sks = mk.sks;
                        option.textContent = `${mk.kode} - ${mk.nama} (${mk.sks} SKS)`;
                        mataKuliahDropdown.appendChild(option);
                    });
                } else {
                    alert('Gagal memuat mata kuliah.');
                }
            })
            .catch(error => console.error('Error:', error));
    });

    // Menambahkan mata kuliah ke tabel
    const krsTableBody = document.getElementById('krsTable').querySelector('tbody');
    document.getElementById('addKrsBtn').addEventListener('click', function() {
        const dropdown = document.getElementById('mataKuliahDropdown');
        const selectedOption = dropdown.options[dropdown.selectedIndex];

        if (selectedOption.value) {
            // Validasi duplikasi
            const existingRows = krsTableBody.querySelectorAll('tr');
            for (let row of existingRows) {
                if (row.dataset.id === selectedOption.value) {
                    alert('Mata kuliah sudah ditambahkan ke KRS.');
                    return;
                }
            }

            // Tambahkan baris ke tabel
            const row = document.createElement('tr');
            row.dataset.id = selectedOption.value;
            row.innerHTML = `
                <td>${selectedOption.dataset.kode}</td>
                <td>${selectedOption.dataset.nama}</td>
                <td>${selectedOption.dataset.sks}</td>
                <td><button type="button" class="btn btn-danger btn-sm remove-btn">Hapus</button></td>
            `;
            krsTableBody.appendChild(row);

            // Tambahkan event listener untuk tombol hapus
            row.querySelector('.remove-btn').addEventListener('click', function() {
                row.remove();
            });

            dropdown.selectedIndex = 0;
        } else {
            alert('Silakan pilih mata kuliah terlebih dahulu.');
        }
    });

    // Simpan data KRS
    document.getElementById('submitKrsBtn').addEventListener('click', function() {
        const selectedMataKuliah = [];
        krsTableBody.querySelectorAll('tr').forEach(row => {
            selectedMataKuliah.push(row.dataset.id);
        });

        if (selectedMataKuliah.length > 0) {
            fetch('/krs/simpan', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        mata_kuliah: selectedMataKuliah
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('KRS berhasil disimpan!');
                        location.reload();
                    } else {
                        alert('Gagal menyimpan KRS.');
                    }
                })
                .catch(error => console.error('Error:', error));
        } else {
            alert('Silakan tambahkan setidaknya satu mata kuliah ke KRS.');
        }
    });

    const selectedMataKuliah = [];
    krsTableBody.querySelectorAll('tr').forEach(row => {
        selectedMataKuliah.push(row.dataset.id);
    });
</script>
<?= $this->endSection() ?>