@extends('layouts.main')

@section('content')
    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin-top: 20px;">
        
        <div style="text-align: center; margin-bottom: 30px;">
            <div style="width: 100px; height: 100px; background-color: #E8DAEF; border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center; border: 3px solid #9B59B6;">
                <span style="font-size: 3rem;">👤</span>
            </div>
            <h2 style="margin: 0; color: #333;">{{ auth()->user()->name ?? 'Kendra' }}</h2>
            <p style="margin: 5px 0 0 0; color: #7f8c8d; font-weight: bold;">Siswa - XI RPL 2</p>
        </div>

        <div style="margin-bottom: 30px;">
            <div style="margin-bottom: 15px;">
                <label style="font-weight: bold; color: #555;">Nama Lengkap:</label>
                <input type="text" value="Kendra" readonly style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; background-color: #f5f5f5; margin-top: 5px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label style="font-weight: bold; color: #555;">Kelas / Jurusan:</label>
                <input type="text" value="XI RPL 2" readonly style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; background-color: #f5f5f5; margin-top: 5px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label style="font-weight: bold; color: #555;">No WA (Untuk Sistem):</label>
                <input type="text" value="08123456789" readonly style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; background-color: #f5f5f5; margin-top: 5px; box-sizing: border-box;">
            </div>
        </div>

        <div id="box-belum-jualan" style="background-color: #FFF9E6; padding: 20px; border-radius: 10px; border: 2px dashed #F39C12; text-align: center;">
            <h3 style="margin-top: 0; color: #D68910;">Ingin coba berjualan?</h3>
            <p style="color: #555; margin-bottom: 20px;">Silakan isi form pengajuan barang untuk mulai menjual jajanan buatanmu di Djapang!</p>
            <a href="/pengajuan-jualan" style="text-decoration: none;">
                <button style="width: 100%; background-color: #3498DB; color: white; border: none; padding: 15px; border-radius: 10px; font-size: 1.1rem; font-weight: bold; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.2);">
                    UPLOAD JUALAN 🚀
                </button>
            </a>
        </div>

        <div id="box-sudah-jualan" style="display: none; background-color: #E8F8F5; padding: 20px; border-radius: 10px; border: 2px dashed #1ABC9C; text-align: center;">
            <h3 style="margin-top: 0; color: #16A085;">Toko Kamu Sudah Aktif! 🏪</h3>
            <p style="color: #555; margin-bottom: 20px;">Kelola produk dan pantau pesanan yang masuk ke tokomu.</p>
            <a href="/dashboard-penjual" style="text-decoration: none;">
                <button style="width: 100%; background-color: #1ABC9C; color: white; border: none; padding: 15px; border-radius: 10px; font-size: 1.1rem; font-weight: bold; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.2);">
                    BUKA DASHBOARD PENJUAL
                </button>
            </a>
        </div>

        <div style="margin-top: 30px; text-align: center;">
            <button style="background-color: transparent; border: 2px solid #E74C3C; padding: 10px 30px; border-radius: 8px; font-weight: bold; cursor: pointer;">
                <a href="/login" style="text-decoration: none; color: #E74C3C;">LOG OUT 🚪</a>
            </button>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cek apakah di local storage ada data is_seller = true
            if (localStorage.getItem('is_seller') === 'true') {
                // Sembunyikan kotak penawaran jualan
                document.getElementById('box-belum-jualan').style.display = 'none';
                // Tampilkan kotak dashboard penjual
                document.getElementById('box-sudah-jualan').style.display = 'block';
            }
        });
    </script>
@endsection