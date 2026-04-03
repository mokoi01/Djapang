@extends('layouts.main')

@section('content')
<style>
    .form-container { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-top: 20px; }
    .form-header { text-align: center; margin-bottom: 30px; }
    .form-group { margin-bottom: 20px; }
    .form-label { display: block; font-weight: bold; color: #444; margin-bottom: 8px; }
    .form-input { width: 100%; padding: 12px; border-radius: 10px; border: 1px solid #ddd; background-color: #fafafa; font-size: 1rem; box-sizing: border-box; transition: border-color 0.3s; }
    .form-input:focus { border-color: #9B59B6; outline: none; }
    .file-drop-area { border: 2px dashed #9B59B6; border-radius: 10px; padding: 30px; text-align: center; background: #fdfafc; cursor: pointer; color: #777; }
    .btn-submit { width: 100%; background-color: #9B59B6; color: white; border: none; padding: 15px; border-radius: 10px; font-size: 1.1rem; font-weight: bold; cursor: pointer; box-shadow: 0 4px 10px rgba(155, 89, 182, 0.3); margin-top: 10px; }
    .btn-submit:hover { background-color: #8E44AD; }
</style>

<div class="form-container">
    <div class="form-header">
        <h2 style="color: #333; margin:0;">Form Pengajuan Jualan 🍱</h2>
        <p style="color: #777; margin-top: 5px;">Ceritakan jajanan yang ingin kamu jual agar admin bisa memberikan izin!</p>
    </div>

    <form action="/menunggu-verifikasi" method="POST" enctype="multipart/form-data" onsubmit="localStorage.setItem('is_seller', 'true');">
        @csrf 
        
        <div class="form-group">
            <label class="form-label">Nama Jajanan / Produk</label>
            <input type="text" class="form-input" placeholder="Contoh: Risol Mayo Lumer" required>
        </div>

        <div class="form-group">
            <label class="form-label">Harga Satuan (Rp)</label>
            <input type="number" class="form-input" placeholder="Contoh: 3000" required>
        </div>

        <div class="form-group">
            <label class="form-label">Deskripsi Singkat</label>
            <textarea class="form-input" rows="3" placeholder="Jelaskan rasanya, isiannya, dll..." required></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Upload Foto Produk (Preview)</label>
            <div class="file-drop-area">
                <span style="font-size: 2rem;">📸</span>
                <p style="margin: 10px 0 0 0;">Klik atau seret foto jajananmu ke sini</p>
                <input type="file" style="display: none;" id="foto_produk">
            </div>
        </div>

        <button type="submit" class="btn-submit">KIRIM PENGAJUAN ✅</button>
    </form>
</div>
@endsection