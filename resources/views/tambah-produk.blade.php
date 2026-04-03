@extends('layouts.main')

@section('content')
<style>
    .form-container { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-top: 20px; }
    .form-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; border-bottom: 2px solid #f0f0f0; padding-bottom: 15px; }
    .form-header h2 { margin: 0; color: #333; }
    .btn-back { color: #777; text-decoration: none; font-weight: bold; background: #f5f5f5; padding: 8px 15px; border-radius: 8px; }
    
    .form-group { margin-bottom: 20px; }
    .form-label { display: block; font-weight: bold; color: #444; margin-bottom: 8px; }
    .form-input { width: 100%; padding: 12px; border-radius: 10px; border: 1px solid #ddd; background-color: #fafafa; font-size: 1rem; box-sizing: border-box; }
    .form-input:focus { border-color: #1ABC9C; outline: none; }
    
    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
    
    .file-upload-box { border: 2px dashed #1ABC9C; border-radius: 10px; padding: 30px; text-align: center; background: #E8F8F5; cursor: pointer; color: #16A085; font-weight: bold; }
    
    .btn-save { width: 100%; background-color: #1ABC9C; color: white; border: none; padding: 15px; border-radius: 10px; font-size: 1.1rem; font-weight: bold; cursor: pointer; margin-top: 20px; box-shadow: 0 4px 10px rgba(26, 188, 156, 0.3); }
    .btn-save:hover { background-color: #16A085; }
</style>

<div class="form-container">
    <div class="form-header">
        <h2>📦 Tambah / Edit Produk</h2>
        <a href="/dashboard-penjual" class="btn-back">⬅ Kembali</a>
    </div>

    <form id="formProduk">
        @csrf
        
        <div class="form-group">
            <label class="form-label">Nama Jajanan</label>
            <input type="text" id="nama" class="form-input" placeholder="Contoh: Makaroni Bantet Pedas" required>
        </div>

        <div class="grid-2">
            <div class="form-group">
                <label class="form-label">Harga (Rp)</label>
                <input type="number" id="harga" class="form-input" placeholder="Contoh: 5000" required>
            </div>
            <div class="form-group">
                <label class="form-label">Stok Tersedia</label>
                <input type="number" id="stok" class="form-input" placeholder="Contoh: 20" required>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Kategori</label>
            <select id="kategori" class="form-input" required>
                <option value="">Pilih Kategori...</option>
                <option value="makanan">Makanan Berat</option>
                <option value="cemilan">Cemilan / Snack</option>
                <option value="minuman">Minuman</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">Foto Produk (Simulasi)</label>
            <div class="file-upload-box">
                <span style="font-size: 2rem; display:block; margin-bottom:10px;">📷</span>
                Klik untuk upload foto jajananmu
                <input type="file" style="display: none;" id="foto_produk">
            </div>
        </div>

        <button type="button" onclick="simpanProdukLocal()" class="btn-save">SIMPAN PRODUK 💾</button>
    </form>
</div>

<script>
    function simpanProdukLocal() {
        // Cek apakah input wajib sudah diisi (validasi dasar)
        if(!document.getElementById('nama').value || !document.getElementById('harga').value) {
            alert('Nama dan Harga wajib diisi!');
            return;
        }

        const produkBaru = {
            id: Date.now(), // ID unik pakai timestamp
            nama: document.getElementById('nama').value,
            harga: document.getElementById('harga').value,
            stok: document.getElementById('stok').value,
            kategori: document.getElementById('kategori').value
        };

        // Ambil data lama dari localStorage (kalau ada)
        let listProduk = JSON.parse(localStorage.getItem('daftar_produk')) || [];
        
        // Tambahkan produk baru ke list
        listProduk.push(produkBaru);
        
        // Simpan kembali
        localStorage.setItem('daftar_produk', JSON.stringify(listProduk));

        alert('Produk berhasil ditambahkan!');
        window.location.href = '/dashboard-penjual';
    }
</script>
@endsection