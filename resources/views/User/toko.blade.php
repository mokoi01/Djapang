@extends('layouts.main')

@section('content')
    <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.03); margin-bottom: 40px; border: 1px solid #f1f1f1;">
        <div style="height: 150px; background: linear-gradient(135deg, #3498DB, #2980B9);"></div>
        
        <div style="padding: 0 30px 30px 30px; position: relative; display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 20px;">
            
            <div style="display: flex; align-items: flex-end; gap: 20px; margin-top: -50px;">
                <div style="width: 120px; height: 120px; background: white; border-radius: 50%; border: 5px solid white; box-shadow: 0 4px 10px rgba(0,0,0,0.1); display: flex; justify-content: center; align-items: center; font-size: 4rem; flex-shrink: 0;">
                    🧑‍🍳
                </div>
                <div style="padding-bottom: 10px;">
                    <h2 style="margin: 0; font-size: 1.8rem; color: #2C3E50;">Kantin Mang Udin</h2>
                    <p style="margin: 5px 0 0 0; color: #7f8c8d; font-size: 1rem;">📍 Area Kantin Utama • Aktif 2 jam lalu</p>
                </div>
            </div>
            
            <div style="text-align: right; padding-bottom: 10px; background: #F8F9FA; padding: 15px; border-radius: 15px; border: 1px solid #eee;">
                <div style="font-size: 1.2rem; font-weight: bold; color: #E67E22;">⭐ 4.8 / 5.0</div>
                <div style="color: #95a5a6; font-size: 0.9rem; margin-top: 5px;">(120 Ulasan) • <span style="color: #E74C3C; font-weight: bold;">❤️ 10.5rb Suka</span></div>
            </div>
            
        </div>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h3 style="margin: 0; color: #2C3E50;">Semua Jajanan Mang Udin</h3>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div class="product-card">
            <a href="/detail" style="display: block;">
                <div style="height: 180px; background: #eee url('https://placehold.co/400x300/E8F8F5/1ABC9C?text=Foto+Risol') center/cover; border-bottom: 1px solid #f1f1f1;"></div>
            </a>
            <div style="padding: 15px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <a href="/detail" style="text-decoration: none; color: inherit;">
                        <h4 style="margin: 0 0 5px 0; font-size: 1.1rem;">Risol Mayo Lumer</h4>
                    </a>
                    <span style="background: #FFF3E0; color: #E67E22; font-size: 0.8rem; padding: 3px 8px; border-radius: 10px; font-weight: bold;">⭐ 4.8</span>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
                    <h3 style="margin: 0; color: #E67E22; font-size: 1.3rem;">Rp 3.500</h3>
                    <span style="color: #95a5a6; font-size: 0.85rem; font-weight: bold;">❤️ 2.5rb</span>
                </div>
                
                <button class="btn-primary">+ Keranjang</button>
            </div>
        </div>

        <div class="product-card">
            <a href="/detail" style="display: block;">
                <div style="height: 180px; background: #eee url('https://placehold.co/400x300/FDEDEC/E74C3C?text=Foto+Cireng') center/cover; border-bottom: 1px solid #f1f1f1;"></div>
            </a>
            <div style="padding: 15px;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <a href="/detail" style="text-decoration: none; color: inherit;">
                        <h4 style="margin: 0 0 5px 0; font-size: 1.1rem;">Cireng Bumbu Rujak</h4>
                    </a>
                    <span style="background: #FFF3E0; color: #E67E22; font-size: 0.8rem; padding: 3px 8px; border-radius: 10px; font-weight: bold;">⭐ 4.6</span>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
                    <h3 style="margin: 0; color: #E67E22; font-size: 1.3rem;">Rp 2.000</h3>
                    <span style="color: #95a5a6; font-size: 0.85rem; font-weight: bold;">❤️ 1.2rb</span>
                </div>
                
                <button class="btn-primary">+ Keranjang</button>
            </div>
        </div>
    </div>
@endsection