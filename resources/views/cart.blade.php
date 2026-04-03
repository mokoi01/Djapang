@extends('layouts.main')

@section('content')
    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin-top: 20px;">
        
        <h2 style="margin-top: 0; color: #333; border-bottom: 2px solid #F39C12; padding-bottom: 10px;">🛒 Keranjang Belanja</h2>

        <div style="margin-bottom: 30px;">
            <div style="display: flex; justify-content: space-between; align-items: center; background: #f9f9f9; padding: 15px; border-radius: 10px; margin-bottom: 10px; border: 1px solid #eee;">
                <div style="display: flex; gap: 15px; align-items: center;">
                    <div style="width: 60px; height: 60px; background: #ccc; border-radius: 10px;"></div>
                    <div>
                        <h4 style="margin: 0; font-size: 1.2rem;">Risol Mayo Nekat</h4>
                        <p style="margin: 5px 0 0 0; color: #7f8c8d;">Rp 3.500 x 2</p>
                    </div>
                </div>
                <div style="font-weight: bold; font-size: 1.2rem; color: #E74C3C;">Rp 7.000</div>
            </div>
            
            <div style="text-align: right; font-size: 1.5rem; font-weight: bold; margin-top: 20px;">
                Total: <span style="color: #2ECC71;">Rp 7.000</span>
            </div>
        </div>

        <h3 style="color: #333; margin-bottom: 15px;">📍 Atur Janjian Pengambilan</h3>
        <div style="background: #FFF9E6; padding: 20px; border-radius: 10px; border: 1px dashed #F39C12;">
            
            <div style="margin-bottom: 15px;">
                <label style="font-weight: bold; display: block; margin-bottom: 5px;">Metode Pengambilan:</label>
                <select style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem;">
                    <option>Diantar ke Kelas (Khusus 1 Jurusan)</option>
                    <option>Ambil di Kantin Sekolah</option>
                    <option>Ambil di Gerbang Depan (Pas Pulang)</option>
                    <option>Lainnya (Tulis di detail)</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: bold; display: block; margin-bottom: 5px;">Waktu Ketemuan:</label>
                <select style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem;">
                    <option>Istirahat Pertama (10.00)</option>
                    <option>Istirahat Kedua (12.00)</option>
                    <option>Pulang Sekolah (15.00)</option>
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="font-weight: bold; display: block; margin-bottom: 5px;">Detail Lokasi Patokan:</label>
                <textarea rows="3" placeholder="Contoh: Kelas XI RPL 2, Meja deretan paling kanan belakang ya..." style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem; resize: vertical; box-sizing: border-box;"></textarea>
            </div>

            <button style="width: 100%; background-color: #2ECC71; color: white; border: none; padding: 15px; border-radius: 10px; font-size: 1.2rem; font-weight: bold; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.2);">
                Konfirmasi Pesanan & Janjian
            </button>
        </div>

    </div>
@endsection