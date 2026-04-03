@extends('layouts.main')

@section('content')
<div style="background: white; padding: 40px 20px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-top: 20px; text-align: center;">
    <div style="font-size: 5rem; margin-bottom: 20px;">⏳</div>
    <h2 style="color: #333; margin-bottom: 10px;">Pengajuan Sedang Diproses!</h2>
    <p style="color: #666; line-height: 1.6; max-width: 400px; margin: 0 auto 30px;">
        Hebat! Jajananmu sudah masuk ke sistem. Saat ini admin sedang mengecek pengajuanmu. Pantau terus halaman ini, ya!
    </p>
    <a href="/profil" style="text-decoration: none;">
        <button style="background-color: #f1c40f; color: #fff; border: none; padding: 12px 30px; border-radius: 8px; font-weight: bold; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            Kembali ke Profil
        </button>
    </a>
</div>
@endsection