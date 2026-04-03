@extends('layouts.main')

@section('content')
    <div style="text-align: center; padding-top: 10px;">
        <span style="background: #FFF3E0; color: #E67E22; padding: 5px 15px; border-radius: 20px; font-weight: bold; font-size: 0.9rem;">Paling Banyak Dicari</span>
        <h1 style="margin: 10px 0 40px 0; color: #2C3E50;">🔥 Jajanan Ter-Favorite</h1>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
            @for ($i = 1; $i <= 6; $i++)
            <div class="product-card" style="position: relative; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                <div style="position: absolute; top: 10px; left: 10px; background: #E67E22; color: white; width: 35px; height: 35px; border-radius: 50%; display: flex; justify-content: center; align-items: center; font-weight: bold; z-index: 5; box-shadow: 0 3px 6px rgba(0,0,0,0.2);">
                    #{{ $i }}
                </div>
                
                <a href="/detail"><div style="height: 200px; background: #eee url('https://placehold.co/400x300/E8F8F5/1ABC9C?text=Top+Product') center/cover;"></div></a>
                <div style="padding: 20px; text-align: left;">
                    <h4 style="margin: 0; font-size: 1.2rem;">Basreng Pedas Pol</h4>
                    <p style="margin: 5px 0 15px 0; font-size: 0.9rem;"><a href="/toko" style="color: #3498DB; text-decoration: none; font-weight: bold;">Koperasi Siswa</a></p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h3 style="margin: 0; color: #E67E22;">Rp 5.000</h3>
                        <span style="color: #95a5a6; font-size: 0.85rem;">❤️ 2.5rb suka</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection