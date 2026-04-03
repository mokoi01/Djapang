@extends('layouts.main')

@section('content')
    <div style="background: linear-gradient(135deg, #FFCC00, #FF9900); border-radius: 20px; padding: 40px; display: flex; align-items: center; justify-content: space-between; margin-bottom: 30px; box-shadow: 0 10px 20px rgba(255, 153, 0, 0.2); color: white;">
        <div>
            <h1 style="margin: 0 0 10px 0; font-size: 2.2rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">Jajan Tanpa Antre!</h1>
            <p style="margin: 0; font-size: 1.1rem;">Pesan sekarang, ambil pas istirahat.</p>
        </div>
        <div style="font-size: 4rem;">🍱</div>
    </div>

    <div style="margin-bottom: 35px;">
        <h3 style="margin: 0 0 15px 0; font-size: 1.2rem; color: #2C3E50;">Penjual Terpopuler 🔥</h3>
        <div style="display: flex; gap: 20px; overflow-x: auto; padding-bottom: 10px; scrollbar-width: none;">
            <a href="/toko" style="text-decoration: none; text-align: center; min-width: 80px;">
                <div style="width: 70px; height: 70px; background: white; border-radius: 50%; border: 3px solid #E67E22; display: flex; justify-content: center; align-items: center; font-size: 2rem; margin: 0 auto 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">🧑‍🍳</div>
                <span style="font-size: 0.85rem; color: #333; font-weight: bold;">Mang Udin</span>
            </a>
            <a href="/toko" style="text-decoration: none; text-align: center; min-width: 80px;">
                <div style="width: 70px; height: 70px; background: white; border-radius: 50%; border: 3px solid #3498DB; display: flex; justify-content: center; align-items: center; font-size: 2rem; margin: 0 auto 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">👩‍🍳</div>
                <span style="font-size: 0.85rem; color: #333; font-weight: bold;">Neng Rara</span>
            </a>
            <a href="/toko" style="text-decoration: none; text-align: center; min-width: 80px;">
                <div style="width: 70px; height: 70px; background: white; border-radius: 50%; border: 3px solid #2ECC71; display: flex; justify-content: center; align-items: center; font-size: 2rem; margin: 0 auto 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">🎒</div>
                <span style="font-size: 0.85rem; color: #333; font-weight: bold;">Denis Es</span>
            </a>
        </div>
    </div>

    <div style="position: relative; margin-bottom: 40px;">
        <input type="text" placeholder="Cari jajanan seger..." style="width: 100%; padding: 15px 20px 15px 50px; border-radius: 30px; border: 1px solid #ddd; font-size: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.03); outline: none; box-sizing: border-box;">
        <span style="position: absolute; left: 20px; top: 15px; font-size: 1.1rem; color: #999;">🔍</span>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div class="product-card">
            <a href="/detail" style="display: block;"><div style="height: 180px; background: #eee url('https://placehold.co/400x300/E8F8F5/1ABC9C?text=Risol') center/cover;"></div></a>
            <div style="padding: 15px;">
                <h4 style="margin: 0;">Risol Mayo</h4>
                <p style="margin: 5px 0 10px 0;"><a href="/toko" style="color: #3498DB; text-decoration: none; font-weight: bold; font-size: 0.85rem;">Kantin Mang Udin</a></p>
                <h3 style="margin: 0; color: #E67E22;">Rp 3.500</h3>
                <button class="btn-primary">+ Keranjang</button>
            </div>
        </div>

        <div class="product-card">
            <a href="/detail" style="display: block;"><div style="height: 180px; background: #eee url('https://placehold.co/400x300/FDEDEC/E74C3C?text=Cireng') center/cover;"></div></a>
            <div style="padding: 15px;">
                <h4 style="margin: 0;">Cireng Rujak</h4>
                <p style="margin: 5px 0 10px 0;"><a href="/toko" style="color: #E67E22; text-decoration: none; font-weight: bold; font-size: 0.85rem;">Neng Rara (XI RPL 2)</a></p>
                <h3 style="margin: 0; color: #E67E22;">Rp 2.500</h3>
                <button class="btn-primary">+ Keranjang</button>
            </div>
        </div>
    </div>
@endsection