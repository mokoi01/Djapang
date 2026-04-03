<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Djapang</title>
    <style>
        body { 
            background-color: #F8F9FA; font-family: 'Nunito', 'Segoe UI', Tahoma, sans-serif; 
            display: flex; justify-content: center; align-items: center; 
            min-height: 100vh; margin: 0; padding: 20px 0;
        }
        .auth-card { 
            background: white; padding: 40px; border-radius: 20px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.05); width: 100%; 
            max-width: 350px; text-align: center; border: 1px solid #f1f1f1;
        }
        .logo { color: #E67E22; font-size: 2.2rem; font-weight: 900; margin-bottom: 5px; letter-spacing: -1px; }
        .input-group { margin-bottom: 15px; text-align: left; }
        .input-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; font-size: 0.9rem; }
        .input-group input, .input-group select { 
            width: 100%; padding: 12px; border-radius: 10px; border: 1px solid #ddd; 
            font-size: 1rem; box-sizing: border-box; outline: none; transition: 0.3s; 
        }
        .input-group input:focus, .input-group select:focus { border-color: #E67E22; box-shadow: 0 0 5px rgba(230,126,34,0.3); }
        .btn-auth { 
            background: #E67E22; color: white; border: none; padding: 15px; 
            border-radius: 10px; font-size: 1.1rem; font-weight: bold; 
            cursor: pointer; width: 100%; transition: 0.3s; margin-top: 15px;
        }
        .btn-auth:hover { background: #D35400; transform: translateY(-2px); box-shadow: 0 5px 10px rgba(230,126,34,0.2); }
    </style>
</head>
<body>

    <div class="auth-card">
        <div class="logo">DJAPANG.</div>
        <p style="color: #7f8c8d; margin-bottom: 25px; margin-top: 0;">Daftar akun warga Nekat!</p>
        
        <div class="input-group">
            <label>Nama Lengkap</label>
            <input type="text" placeholder="Masukkan Nama Kamu">
        </div>
        <div class="input-group">
            <label>Username Unik</label>
            <input type="text" placeholder="Buat Username (tanpa spasi)">
        </div>
        <div class="input-group">
            <label>Kelas</label>
            <select>
                <option value="">Pilih Kelas...</option>
                <option value="10">Kelas X</option>
                <option value="11">Kelas XI</option>
                <option value="12">Kelas XII</option>
            </select>
        </div>
        <div class="input-group">
            <label>Nomor WhatsApp</label>
            <input type="text" placeholder="08xxxxxxxxxx">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Buat Password">
        </div>
        
        <button class="btn-auth" onclick="window.location.href='/'">DAFTAR & MASUK</button>
        
        <p style="margin-top: 25px; color: #7f8c8d; font-size: 0.9rem;">
            Sudah punya akun? <a href="/login" style="color: #3498DB; font-weight: bold; text-decoration: none;">Login di sini</a>
        </p>
    </div>

</body>
</html>