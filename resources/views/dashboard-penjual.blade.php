@extends('layouts.main')

@section('content')
<style>
    .dashboard-wrapper { margin-top: 20px; }
    .header-dashboard { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    .header-dashboard h2 { margin: 0; color: #333; }
    
    /* Stats Cards */
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-bottom: 30px; }
    .stat-card { background: white; padding: 20px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); display: flex; align-items: center; }
    .stat-icon { width: 50px; height: 50px; border-radius: 12px; display: flex; justify-content: center; align-items: center; font-size: 1.5rem; margin-right: 15px; }
    .stat-info h4 { margin: 0; color: #888; font-size: 0.9rem; font-weight: normal; }
    .stat-info p { margin: 5px 0 0 0; color: #333; font-size: 1.2rem; font-weight: bold; }

    /* Section Global */
    .section-card { background: white; padding: 20px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); margin-bottom: 20px; }
    .section-title { margin-top: 0; color: #333; font-size: 1.2rem; margin-bottom: 15px; border-bottom: 2px solid #f0f0f0; padding-bottom: 10px; }

    /* Table Styles */
    table { width: 100%; border-collapse: collapse; }
    th, td { text-align: left; padding: 12px; border-bottom: 1px solid #eee; }
    th { color: #888; font-size: 0.9rem; }
    td { color: #444; font-size: 0.95rem; }
    .badge { padding: 5px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; }
    .badge-pending { background: #FFF3CD; color: #856404; }
    .badge-success { background: #D4EDDA; color: #155724; }
    
    .btn-add { background: #2ECC71; color: white; border: none; padding: 10px 15px; border-radius: 8px; cursor: pointer; font-weight: bold; text-decoration: none; display: inline-block; }
</style>

<div class="dashboard-wrapper">
    <div class="header-dashboard">
        <h2>Toko Kendra 🏪</h2>
        <a href="/tambah-produk" class="btn-add">+ Tambah Produk</a>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon" style="background: #E8F8F5; color: #1ABC9C;">💰</div>
            <div class="stat-info">
                <h4>Pendapatan</h4>
                <p>Rp 45.000</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon" style="background: #FEF9E7; color: #F1C40F;">📦</div>
            <div class="stat-info">
                <h4>Terjual</h4>
                <p>15 Porsi</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon" style="background: #F4ECF7; color: #9B59B6;">🍔</div>
            <div class="stat-info">
                <h4>Produk Aktif</h4>
                <p id="total-produk">0 Produk</p>
            </div>
        </div>
    </div>

    <div class="section-card">
        <h3 class="section-title">Pesanan Masuk (Hari Ini)</h3>
        <div style="overflow-x: auto;">
            <table>
                <thead>
                    <tr>
                        <th>Pembeli</th>
                        <th>Pesanan</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Budi (X TKJ 1)</td>
                        <td>2x Risol Mayo</td>
                        <td>Rp 6.000</td>
                        <td><span class="badge badge-pending">Menunggu</span></td>
                        <td><button style="background:#3498DB; color:white; border:none; padding:5px 10px; border-radius:5px; cursor:pointer;">Terima</button></td>
                    </tr>
                    <tr>
                        <td>Siti (XII AKL)</td>
                        <td>1x Es Teh</td>
                        <td>Rp 3.000</td>
                        <td><span class="badge badge-success">Selesai</span></td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="section-card">
        <h3 class="section-title">Etalase Produkmu 🛍️</h3>
        <div id="container-produk" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 15px;">
            </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        renderProduk();
    });

    function renderProduk() {
        const container = document.getElementById('container-produk');
        const listProduk = JSON.parse(localStorage.getItem('daftar_produk')) || [];

        // Update angka statistik produk
        document.getElementById('total-produk').innerText = listProduk.length + ' Produk';

        // Jika kosong, tampilkan pesan
        if (listProduk.length === 0) {
            container.innerHTML = '<p style="color:#999; text-align:center; grid-column: 1/-1;">Belum ada produk. Yuk klik "+ Tambah Produk" di atas!</p>';
            return;
        }

        container.innerHTML = ''; // Bersihkan container sebelum looping

        listProduk.forEach(produk => {
            // Tentukan emoji berdasarkan kategori
            let emoji = '🥟'; // default makanan
            if(produk.kategori === 'minuman') emoji = '🧋';
            if(produk.kategori === 'cemilan') emoji = '🥨';

            const card = `
                <div id="produk-${produk.id}" style="border: 1px solid #eee; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.02);">
                    <div style="height: 120px; background: #f9f9f9; display: flex; align-items: center; justify-content: center; font-size: 3rem;">${emoji}</div>
                    <div style="padding: 15px;">
                        <h4 style="margin: 0 0 5px 0; font-size: 1.1rem; color: #333;">${produk.nama}</h4>
                        <p style="margin: 0 0 10px 0; color: #E74C3C; font-weight: bold;">Rp ${Number(produk.harga).toLocaleString('id-ID')} <span style="font-size: 0.8rem; color:#999; font-weight:normal;">| Stok: ${produk.stok}</span></p>
                        
                        <div style="display: flex; gap: 5px;">
                            <a href="/tambah-produk" style="flex: 1; text-align: center; background: #F1C40F; color: #fff; text-decoration: none; padding: 6px; border-radius: 6px; font-size: 0.85rem; font-weight: bold;">✏️ Edit</a>
                            <button onclick="hapusProdukLocal(${produk.id})" style="flex: 1; border: none; background: #E74C3C; color: #fff; padding: 6px; border-radius: 6px; font-size: 0.85rem; font-weight: bold; cursor: pointer;">🗑️ Hapus</button>
                        </div>
                    </div>
                </div>
            `;
            container.innerHTML += card;
        });
    }

    function hapusProdukLocal(id) {
        if (confirm('Yakin ingin menghapus produk ini?')) {
            let listProduk = JSON.parse(localStorage.getItem('daftar_produk')) || [];
            // Filter list, buang ID yang dipilih
            listProduk = listProduk.filter(p => p.id !== id);
            // Simpan perubahan ke local storage
            localStorage.setItem('daftar_produk', JSON.stringify(listProduk));
            // Render ulang tampilan agar kartu langsung hilang
            renderProduk();
        }
    }
</script>
@endsection