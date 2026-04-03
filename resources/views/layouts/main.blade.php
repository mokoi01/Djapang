<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djapang - E-Commerce SMKN 1 Katapang</title>
    <style>
        /* Reset & Global */
        body {
            background-color: #F8F9FA; /* Abu-abu super muda, lega & bersih */
            font-family: 'Nunito', 'Segoe UI', Tahoma, sans-serif;
            margin: 0; padding: 0; color: #333;
        }
        
        /* Navbar Modern */
        .navbar {
            background: white;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05); /* Shadow halus banget */
            position: sticky; top: 0; z-index: 100;
        }
        .logo strong { font-size: 1.8rem; color: #E67E22; font-weight: 900; letter-spacing: -1px; }
        
        .nav-links { display: flex; gap: 20px; }
        .nav-links a {
            text-decoration: none; color: #7f8c8d; font-weight: 700;
            padding: 8px 15px; border-radius: 20px; transition: all 0.3s ease;
        }
        .nav-links a:hover, .nav-links a.active {
            background-color: #FFF3E0; color: #E67E22; /* Aksen Oranye Djapang */
        }
        
        .icons a {
            text-decoration: none; font-size: 1.3rem; margin-left: 10px;
            background-color: #F8F9FA; padding: 10px; border-radius: 50%;
            display: inline-block; transition: all 0.3s ease;
        }
        .icons a:hover { background-color: #FFE0B2; transform: scale(1.1); }
        
        /* Main Container */
        main { max-width: 1050px; margin: 30px auto; padding: 0 20px; }
        
        /* Utility E-commerce Cards */
        .product-card {
            background: white; border-radius: 16px; overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03); /* Bayangan tipis E-commerce */
            transition: all 0.3s ease; border: 1px solid #f1f1f1;
        }
        .product-card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 12px 25px rgba(230, 126, 34, 0.15); /* Nyala oranye pas disentuh */
        }
        
        .btn-primary {
            background: #E67E22; color: white; border: none;
            padding: 10px 15px; border-radius: 10px; font-weight: bold;
            cursor: pointer; transition: 0.3s ease; width: 100%; margin-top: 10px;
        }
        .btn-primary:hover { background: #D35400; }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo"><a href="/" style="text-decoration:none;"><strong>DJAPANG.</strong></a></div>
        <div class="nav-links">
            <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a>
            <a href="/top" class="{{ Request::is('top') ? 'active' : '' }}">Top Jajanan</a>
            <a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
        </div>
        <div class="icons">
            <a href="/cart">🛒</a>
            <a href="/profil">👤</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>