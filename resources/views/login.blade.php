<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Djapang</title>
    <style>
        body { 
            background-color: #F8F9FA; font-family: 'Nunito', 'Segoe UI', Tahoma, sans-serif; 
            display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; 
        }
        .auth-card { 
            background: white; padding: 40px; border-radius: 20px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.05); width: 100%; max-width: 350px; text-align: center;
        }
        .logo { color: #E67E22; font-size: 2.2rem; font-weight: 900; margin-bottom: 5px; }
        .input-group { margin-bottom: 20px; text-align: left; }
        .input-group label { display: block; margin-bottom: 8px; font-weight: bold; color: #555; font-size: 0.9rem; }
        .input-group input { width: 100%; padding: 12px; border-radius: 10px; border: 1px solid #ddd; outline: none; box-sizing: border-box; }
        .btn-auth { background: #E67E22; color: white; border: none; padding: 15px; border-radius: 10px; font-weight: bold; cursor: pointer; width: 100%; }
    </style>
</head>
<body>

    <div class="auth-card">
        <div class="logo">DJAPANG.</div>
        <p style="color: #7f8c8d; margin-bottom: 30px;">Login dulu buat mulai jajan!</p>
        
        <div class="input-group">
            <label>Username</label>
            <input type="text" placeholder="Masukkan Username Anda">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Masukkan Password">
        </div>
        
        <button class="btn-auth" onclick="window.location.href='/'">MASUK</button>
        
        <p style="margin-top: 20px; color: #7f8c8d; font-size: 0.9rem;">
            Belum punya akun? <a href="/register" style="color: #3498DB; font-weight: bold; text-decoration: none;">Daftar</a>
        </p>

        <hr style="border: none; border-top: 1px dashed #ddd; margin: 25px 0;">
        <a href="/admin/login" style="color: #E74C3C; font-weight: bold; text-decoration: none; font-size: 0.9rem;">🔐 Login Khusus Admin</a>
    </div>

</body>
</html>