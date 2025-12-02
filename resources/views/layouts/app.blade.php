<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>B-University</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- GLOBAL STYLE --- */
        body { font-family: 'Montserrat', sans-serif; color: #1f2937; }
        a { text-decoration: none; }
        
        /* WARNA CUSTOM (Sesuai Desain) */
        .text-primary-dark { color: #1e1b4b; } /* Biru Gelap Judul */
        .text-purple { color: #7c3aed; }
        .text-pink { color: #db2777; }
        .text-grey-soft { color: #6b7280; }
        
        /* HERO SECTION STYLE */
        .hero-section {
            margin-top: 5rem;
            border-radius: 30px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%); /* Gradient Biru-Ungu */
            min-height: 550px;
            display: flex;
            align-items: center;
        }

        /* FLOATING CARD (Partner) */
        .floating-card {
            background: white;
            border-radius: 30px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            max-width: 90%;
            margin: -80px auto 0 auto; /* Negative Margin agar naik ke atas */
            position: relative;
            z-index: 10;
        }

        /* ANNOUNCEMENT (Gradient Ungu Pink) */
        .announcement-bg {
            background: linear-gradient(90deg, #4c1d95 0%, #d946ef 100%);
            border-radius: 0;
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }
        
        /* UTILS */
        .rounded-30 { border-radius: 30px; }
        .rounded-20 { border-radius: 20px; }
        .btn-custom-outline {
            border: 1px solid #1e3a8a;
            color: #1e3a8a;
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s;
        }
        .btn-custom-outline:hover { background: #1e3a8a; color: white; }

        /* Scrollbar Hide */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body>
    
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>