@extends('layouts.main')

@section('content')
    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin-top: 20px;">
        
        <h2 style="margin-top: 0; color: #333; text-align: center; border-bottom: 2px solid #F39C12; padding-bottom: 15px;">📞 Hubungi Admin Djapang</h2>

        <div style="display: flex; gap: 15px; margin-bottom: 30px; margin-top: 20px;">
            <div style="flex: 1; background: #E8E4F8; padding: 15px; border-radius: 10px; text-align: center; border: 1px solid #ccc;">
                <span style="font-size: 2rem;">𝕏</span>
                <p style="margin: 5px 0 0 0; font-weight: bold; color: #8E44AD;">@Djapang123</p>
            </div>
            <div style="flex: 1; background: #E8E4F8; padding: 15px; border-radius: 10px; text-align: center; border: 1px solid #ccc;">
                <span style="font-size: 2rem;">✉️</span>
                <p style="margin: 5px 0 0 0; font-weight: bold; color: #8E44AD;">djapang@Nekat.com</p>
            </div>
        </div>

        <div style="background: #f9f9f9; padding: 25px; border-radius: 15px; border: 1px solid #ddd;">
            <h3 style="margin-top: 0; color: #333; text-align: center;">Kirim Pesan / Keluhan</h3>
            
            <div style="margin-bottom: 15px;">
                <input type="text" placeholder="Masukkan Nama Anda" style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem; box-sizing: border-box;">
            </div>
            
            <div style="margin-bottom: 15px;">
                <input type="email" placeholder="Masukkan Email Anda" style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="font-weight: bold; color: #555; display: block; margin-bottom: 5px;">Apa keluhan/pertanyaan Anda?</label>
                <textarea rows="5" placeholder="Tulis di sini ya..." style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem; resize: vertical; box-sizing: border-box;"></textarea>
            </div>

            <button style="width: 100%; background-color: #2C3E50; color: white; border: none; padding: 15px; border-radius: 10px; font-size: 1.2rem; font-weight: bold; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.2);">
                KIRIM PESAN 🚀
            </button>
        </div>

    </div>
@endsection