<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Djapang</title>
    <style>
        body { 
            background-color: #2C3E50; /* Warna gelap khusus admin */
            font-family: 'Nunito', sans-serif; 
            display: flex; justify-content: center; align-items: center; 
            height: 100vh; margin: 0; 
        }
        .auth-card { 
            background: white; padding: 40px; border-radius: 20px; 
            width: 100%; max-width: 350px; text-align: center;
        }
        .admin-badge {
            background: #E74C3C; color: white; padding: 5px 15px; 
            border-radius: 20px; font-size: 0.8rem; font-weight: bold;
            display: inline-block; margin-bottom: 10px;
        }
        .logo { color: #2C3E50; font-size: 2.2rem; font-weight: 900; margin-bottom: 5px; }
        .input-group { margin-bottom: 20px; text-align: left; }
        .input-group label { display: block; margin-bottom: 8px; font-weight: bold; color: #555; }
        .input-group input { 
            width: 100%; padding: 12px; border-radius: 10px; border: 1px solid #ddd; 
            box-sizing: border-box; outline: none;
        }
        .btn-admin { 
            background: #2C3E50; color: white; border: none; padding: 15px; 
            border-radius: 10px; font-weight: bold; cursor: pointer; width: 100%;
        }
    </style>
</head>
<body>

    <div class="auth-card">
        <span class="admin-badge">ADMIN PANEL</span>
        <div class="logo">DJAPANG.</div>
        <p style="color: #7f8c8d; margin-bottom: 30px;">Kelola jajanan dan pesanan siswa</p>
        
        <div class="input-group">
            <label>Username Admin</label>
            <input type="text" placeholder="Masukkan Username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Masukkan Password">
        </div>
        
        <button class="btn-admin" onclick="window.location.href='/admin/dashboard'">MASUK KE DASHBOARD</button>
        
        <a href="/login" style="display: inline-block; margin-top: 20px; color: #aaa; text-decoration: none; font-size: 0.8rem;">← Kembali ke Login Utama</a>
    </div>

</body>
</html>