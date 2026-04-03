@extends('layouts.main')

@section('content')
    <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); margin-top: 20px; border: 1px solid #f1f1f1;">
        
        <a href="/" style="text-decoration: none; color: #7f8c8d; font-weight: bold; display: inline-block; margin-bottom: 20px; font-size: 1rem;">
            ← Kembali ke Beranda
        </a>

        <div style="display: flex; gap: 40px; flex-wrap: wrap;">
            
            <div style="flex: 1; min-width: 300px;">
                <div style="width: 100%; height: 350px; background: #eee url('https://placehold.co/400x400/E8F8F5/1ABC9C?text=Foto+Risol') center/cover; border-radius: 15px;"></div>
            </div>

            <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column;">
                
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 15px;">
                    <h1 style="margin: 0; font-size: 2.2rem; color: #2C3E50; line-height: 1.2;">Risol Mayo Lumer</h1>
                    
                    <button style="background: #FFF0F5; border: 1px solid #FFB6C1; padding: 8px 15px; border-radius: 25px; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: 0.2s ease;">
                        <span style="font-size: 1.2rem;">❤️</span>
                        <span style="font-weight: bold; color: #E74C3C; font-size: 1rem;">2.5rb</span>
                    </button>
                </div>
                
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; padding: 15px; background: #F8F9FA; border-radius: 12px; border: 1px solid #eee;">
                    <div style="width: 50px; height: 50px; background: white; border-radius: 50%; display: flex; justify-content: center; align-items: center; font-size: 1.5rem; border: 2px solid #ddd;">🧑‍🍳</div>
                    <div style="flex: 1;">
                        <p style="margin: 0; color: #7f8c8d; font-size: 0.9rem;">Dijual oleh:</p>
                        <a href="/toko" style="text-decoration: none; color: #3498DB; font-weight: bold; font-size: 1.1rem;">Kantin Mang Udin</a>
                    </div>
                    <a href="/toko" style="background: white; border: 1px solid #E67E22; color: #E67E22; padding: 5px 15px; border-radius: 20px; text-decoration: none; font-weight: bold; font-size: 0.9rem;">
                        Kunjungi Toko
                    </a>
                </div>

                <h2 style="margin: 0 0 20px 0; color: #E67E22; font-size: 2rem;">Rp 3.500</h2>

                <div style="margin-bottom: 20px;">
                    <span style="background-color: #E8F8F5; color: #1ABC9C; padding: 8px 15px; border-radius: 10px; font-weight: bold; font-size: 0.9rem; border: 1px solid #1ABC9C;">
                        ✓ Stok Tersedia: 15 Pcs
                    </span>
                </div>

                <div style="margin-bottom: 30px; color: #555; line-height: 1.6; font-size: 1.05rem;">
                    <strong>Deskripsi:</strong><br>
                    Risol isi rogout ayam dan mayo yang super lumer. Bikinnya fresh tiap pagi sebelum berangkat ke sekolah. Dijamin halal dan higienis!
                </div>

                <div style="display: flex; gap: 10px; margin-top: auto; flex-wrap: wrap;">
                    <input type="number" value="1" min="1" max="15" style="width: 70px; padding: 12px; border: 2px solid #ddd; border-radius: 10px; font-size: 1.1rem; text-align: center; outline: none; font-weight: bold;">
                    
                    <button class="btn-primary" onclick="alert('🛒 Yey! Risol Mayo Lumer berhasil ditambahkan ke keranjang.')" style="flex: 1; margin-top: 0; font-size: 1rem; padding: 12px; background: white; color: #E67E22; border: 2px solid #E67E22;">
                        + Keranjang
                    </button>

                    <button class="btn-primary" style="flex: 1; margin-top: 0; font-size: 1rem; padding: 12px; background: #2ECC71;">
                        Beli Sekarang (WA)
                    </button>
                </div>

            </div>
        </div>

        <div style="margin-top: 50px; border-top: 2px dashed #eee; padding-top: 30px;">
            <h3 style="margin: 0 0 20px 0; color: #2C3E50;">Komentar & Diskusi (12)</h3>

            <div style="display: flex; gap: 15px; margin-bottom: 30px;">
                <div style="width: 40px; height: 40px; background: #E8DAEF; border-radius: 50%; display: flex; justify-content: center; align-items: center; font-size: 1.2rem; flex-shrink: 0;">👤</div>
                <div style="flex: 1;">
                    <textarea placeholder="Tanya tentang jajanan ini atau kasih komentar..." style="width: 100%; padding: 12px; border-radius: 10px; border: 1px solid #ddd; font-size: 1rem; resize: vertical; box-sizing: border-box; outline: none; margin-bottom: 10px;"></textarea>
                    <button style="background: #3498DB; color: white; border: none; padding: 8px 20px; border-radius: 8px; font-weight: bold; cursor: pointer;">Kirim Komentar</button>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 20px;">
                
                <div style="display: flex; gap: 15px;">
                    <div style="width: 40px; height: 40px; background: #D6EAF8; border-radius: 50%; display: flex; justify-content: center; align-items: center; font-size: 1.2rem; flex-shrink: 0;">👦</div>
                    <div>
                        <div style="margin-bottom: 5px;">
                            <span style="font-weight: bold; color: #333;">Denis Anak RPL</span> 
                            <span style="color: #95a5a6; font-size: 0.85rem; margin-left: 10px;">• 2 jam yang lalu</span>
                        </div>
                        <p style="margin: 0; color: #555; line-height: 1.5;">Mang, ini risolnya masih anget nggak kalau diambil pas istirahat pertama?</p>
                    </div>
                </div>

                <div style="display: flex; gap: 15px;">
                    <div style="width: 40px; height: 40px; background: #FCF3CF; border-radius: 50%; display: flex; justify-content: center; align-items: center; font-size: 1.2rem; flex-shrink: 0;">👧</div>
                    <div>
                        <div style="margin-bottom: 5px;">
                            <span style="font-weight: bold; color: #333;">Siti Bendahara</span> 
                            <span style="color: #95a5a6; font-size: 0.85rem; margin-left: 10px;">• Kemarin</span>
                        </div>
                        <p style="margin: 0; color: #555; line-height: 1.5;">Enak banget parah! Mayonya beneran lumer, besok pesen lagi deh 5 biji buat temen-temen sekelas.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection