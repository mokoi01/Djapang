<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Djapang</title>
    <style>
        body { margin: 0; font-family: 'Nunito', sans-serif; background-color: #F4F6F9; display: flex; height: 100vh; }
        
        /* Sidebar Kiri */
        .sidebar { background: #2C3E50; width: 250px; color: white; display: flex; flex-direction: column; }
        .sidebar-logo { padding: 20px; font-size: 1.5rem; font-weight: 900; color: #E67E22; text-align: center; border-bottom: 1px solid #34495E; }
        .menu-item { padding: 15px 20px; color: #BDC3C7; text-decoration: none; transition: 0.3s; border-left: 4px solid transparent; cursor: pointer; display: block; }
        .menu-item:hover, .menu-item.active { background: #34495E; color: white; border-left-color: #E67E22; }
        
        /* Konten Kanan */
        .main-content { flex: 1; padding: 30px; overflow-y: auto; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .header h1 { margin: 0; color: #2C3E50; font-size: 1.8rem; }
        
        /* Cards & Tables */
        .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
        th { background: #F8F9FA; color: #555; }
        
        /* Badges & Buttons */
        .badge-pending { background: #F1C40F; color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; }
        .badge-active { background: #2ECC71; color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; }
        .badge-user { background: #3498DB; color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; }
        .btn-action { border: none; padding: 8px 12px; border-radius: 5px; cursor: pointer; color: white; font-weight: bold; }
        .btn-acc { background: #3498DB; }
        .btn-tolak { background: #E74C3C; }

        /* Tambahan untuk teks detail */
        .text-sm { font-size: 0.85rem; color: #7f8c8d; margin-top: 4px; display: block; }
        .btn-link { color: #3498DB; text-decoration: underline; cursor: pointer; background: none; border: none; padding: 0; font-family: inherit; font-size: 0.9rem; }
        
        /* Logika Tab (Sembunyikan konten yang tidak aktif) */
        .content-section { display: none; }
        .content-section.active { display: block; }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-logo">DJAPANG ADMIN</div>
        <a class="menu-item active" onclick="switchTab('tab-penjual', this)">🏪 Kelola Penjual</a>
        <a class="menu-item" onclick="switchTab('tab-pengguna', this)">👥 Daftar Pengguna</a>
        <a class="menu-item">💬 Keluhan Siswa</a>
        <a href="/" class="menu-item" style="margin-top: auto; border-top: 1px solid #34495E;">⬅ Kembali ke Web</a>
    </div>

    <div class="main-content">
        <div class="header">
            <h1 id="page-title">Manajemen Penjual</h1>
            <div style="background: white; padding: 10px 20px; border-radius: 20px; font-weight: bold; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                Admin Pusat
            </div>
        </div>

        <div id="tab-penjual" class="content-section active">
            <div class="card">
                <h3 style="margin-top: 0;">Verifikasi Pengajuan Jualan Baru</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 20px;">Daftar siswa yang mengisi form pengajuan jualan. Pastikan produk yang dijual aman dan pantas sebelum memberikan izin membuka toko.</p>
                
                <table>
                    <thead>
                        <tr>
                            <th>Siswa / Pemohon</th>
                            <th>Detail Produk (Awal)</th>
                            <th>Harga</th>
                            <th>Foto Jajanan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Kendra</strong>
                                <span class="text-sm">XI RPL 2</span>
                            </td>
                            <td style="max-width: 250px;">
                                <strong>Risol Mayo Lumer</strong>
                                <span class="text-sm">Isian smoked beef, telur, mayo lumer. Ukuran lumayan besar.</span>
                            </td>
                            <td><strong>Rp 3.000</strong></td>
                            <td><button class="btn-link">📷 Lihat Foto</button></td>
                            <td><span class="badge-pending">Menunggu Verifikasi</span></td>
                            <td>
                                <button class="btn-action btn-acc">Terima</button>
                                <button class="btn-action btn-tolak">Tolak</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Denis</strong>
                                <span class="text-sm">XI RPL 1</span>
                            </td>
                            <td style="max-width: 250px;">
                                <strong>Es Kulkas Denis</strong>
                                <span class="text-sm">Es teh manis ukuran plastik, ditaruh di kulkas kantin.</span>
                            </td>
                            <td><strong>Rp 2.000</strong></td>
                            <td><button class="btn-link">📷 Lihat Foto</button></td>
                            <td><span class="badge-pending">Menunggu Verifikasi</span></td>
                            <td>
                                <button class="btn-action btn-acc">Terima</button>
                                <button class="btn-action btn-tolak">Tolak</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="tab-pengguna" class="content-section">
            <div class="card">
                <h3 style="margin-top: 0;">Data Seluruh Pengguna</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 20px;">Daftar semua siswa/guru yang melakukan registrasi di website Djapang.</p>
                
                <table>
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Kelas / Jurusan</th>
                            <th>Email Terdaftar</th>
                            <th>No. WhatsApp</th>
                            <th>Peran / Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Budi Santoso</strong></td>
                            <td>X TKJ 1</td>
                            <td>budi.santoso@gmail.com</td>
                            <td>081234567890</td>
                            <td><span class="badge-user">Siswa Biasa</span></td>
                            <td>
                                <button class="btn-action btn-tolak" style="background: #95a5a6; padding: 5px 10px; font-size: 0.8rem;">Hapus Akun</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Kendra</strong></td>
                            <td>XI RPL 2</td>
                            <td>kendra.dev@gmail.com</td>
                            <td>088345679812</td>
                            <td><span class="badge-active">Siswa Penjual</span></td>
                            <td>
                                <button class="btn-action btn-tolak" style="background: #95a5a6; padding: 5px 10px; font-size: 0.8rem;">Hapus Akun</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Mang Udin</strong></td>
                            <td>Kantin Sekolah</td>
                            <td>kantin.udin@gmail.com</td>
                            <td>085712345678</td>
                            <td><span class="badge-active">Kantin Penjual</span></td>
                            <td>
                                <button class="btn-action btn-tolak" style="background: #95a5a6; padding: 5px 10px; font-size: 0.8rem;">Hapus Akun</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        function switchTab(tabId, element) {
            // 1. Ubah warna menu sidebar yang aktif
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => item.classList.remove('active'));
            element.classList.add('active');

            // 2. Ubah H1 Judul Halaman
            const pageTitle = document.getElementById('page-title');
            if(tabId === 'tab-penjual') pageTitle.innerText = 'Manajemen Penjual';
            if(tabId === 'tab-pengguna') pageTitle.innerText = 'Daftar Pengguna Sistem';

            // 3. Sembunyikan semua section, lalu tampilkan yang diklik
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
        }
    </script>
</body>
</html>