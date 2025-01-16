<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Karier</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        main {
            margin-top: 50px;
        }

        .hero {
            background-color: #007bff;
            color: #fff;
            padding: 60px 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 50px;
        }

        .hero h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .karier-section {
            padding: 30px 0;
            background-color: #f1f1f1;
        }

        .karier-section h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 25px;
            color: #007bff;
        }

        .karier-section p {
            text-align: center;
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 40px;
        }

        .karier-item {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .karier-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .karier-item h4 {
            font-size: 1.75rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 15px;
        }

        .karier-item p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .karier-item a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .karier-item a:hover {
            background-color: #0056b3;
        }

        .why-join-section {
            background-color: #fff;
            padding: 50px 20px;
            margin-bottom: 50px;
        }

        .why-join-section h2 {
            text-align: center;
            font-size: 2.2rem;
            color: #007bff;
            margin-bottom: 30px;
        }

        .why-join-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .why-join-text {
            width: 60%;
        }

        .why-join-text h4 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
        }

        .why-join-text p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 10px;
        }

        .why-join-image {
            width: 30%;
        }

        .why-join-image img {
            width: 100%;
            border-radius: 10px;
        }

        footer {
            background-color: #222;
            color: #fff;
            padding: 40px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;
        }

        .footer-content .footer-brand h1 {
            font-size: 1.75rem;
            color: #d1d1d1;
        }

        .footer-content .footer-item h3 {
            font-size: 1.25rem;
            color: #fff;
        }

        .footer-content .footer-item p {
            margin: 5px 0;
            color: #bbb;
        }

        .footer-content .footer-item a {
            color: #d1d1d1;
            text-decoration: none;
        }

        .footer-content .footer-item a:hover {
            color: #a6a6a6;
        }

        .container {
            max-width: 1140px;
        }
    </style>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/images/logo.png" alt="Logo" style="width: 50px; height: auto; margin-right: 10px;">
                <span>Amal Solution</span>
            </a>

            <!-- Toggler Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- home Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="karier.php">Karier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="lamar.php">Lamar Sekarang</a>
                    </li>
                </ul>

                <!-- Login/Register or User Dropdown -->
                <?php if (!isset($_SESSION['user'])) { ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login/Register
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="user_login.php">Login</a></li>
                            <li><a class="dropdown-item" href="register.php">Register</a></li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= htmlspecialchars($_SESSION['user']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="proses/logout.php">Log Out</a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>

    <main>
    <section class="hero" style="background: linear-gradient(135deg, #6a5acd, #4b0082);">
    <h2>Karier di Amal Solution</h2>
    <p>Temukan peluang karier yang menantang dan inspiratif di dunia teknologi!</p>
</section>


        <!-- Mengapa Harus Menjadi Bagian Dari Kami Section -->
        <section class="why-join-section">
            <h2>Mengapa Harus Menjadi Bagian Dari Kami</h2>
            <div class="container">
                <div class="why-join-content">
                    <div class="why-join-text">
                        <h4>1. Menjadi Tenaga IT Profesional</h4>
                        <p>Mengembangkan seseorang menjadi seorang profesional di bidang Teknologi Informasi (TI) melibatkan kombinasi pendidikan formal, pengembangan keterampilan, pengalaman praktis, dan sikap yang tepat.</p>
                        <h4>2. Kekeluargaan</h4>
                        <p>Menciptakan lingkungan kerja yang hangat, mendukung, dan memupuk rasa kebersamaan di antara anggota tim atau rekan kerja.</p>
                        <h4>3. Loyalitas</h4>
                        <p>Memenuhi kebutuhan dan harapan klien secara konsisten, merawat hubungan jangka panjang, dan tetap teguh dalam melayani mereka.</p>
                        <h4>4. Pengembangan Diri</h4>
                        <p>Ruang untuk belajar keterampilan baru dan mengasah kemampuan.</p>
                    </div>
                    <div class="why-join-image">
                        <img src="assets/images/bagian.jpg" alt="Team Photo">
                    </div>
                </div>
            </div>
        </section>

        <!-- Peluang Karier Section -->
        <section class="karier-section">
            <h2>Peluang Karier</h2>
            <p>Selamat datang di halaman karier kami! Inilah tempat di mana peluang dan impian menjadi kenyataan. Bergabunglah dengan tim kami yang berdedikasi untuk menciptakan masa depan gemilang.</p>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="karier-item">
                            <h4>Software Engineer</h4>
                            <p>Deskripsi Pekerjaan: Membangun dan memelihara aplikasi berbasis web dan mobile.</p>
                            <p>Kualifikasi: Pengalaman minimal 2 tahun, menguasai PHP, JavaScript, dan Framework Laravel.</p>
                            <a href="lamar.php">Lamar Sekarang</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="karier-item">
                            <h4>UI/UX Designer</h4>
                            <p>Deskripsi Pekerjaan: Mendesain antarmuka yang menarik dan pengalaman pengguna yang intuitif.</p>
                            <p>Kualifikasi: Pengalaman minimal 1 tahun, menguasai Figma atau Adobe XD.</p>
                            <a href="lamar.php">Lamar Sekarang</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="karier-item">
                            <h4>IT Consultant</h4>
                            <p>Deskripsi Pekerjaan: Memberikan solusi teknologi untuk kebutuhan klien.</p>
                            <p>Kualifikasi: Pengalaman minimal 3 tahun di bidang konsultasi teknologi.</p>
                            <a href="lamar.php">Lamar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container mt-5">
            <div class="footer-content d-flex justify-content-between align-items-start">
                <div class="footer-brand">
                    <h1 class="text-main">Amal Solution</h1>
                </div>
                <div class="footer-item">
                    <h3 class="text-main">Bisnis</h3>
                    <p><a href="mailto:amalsolution@gmail.com">amalsolution@gmail.com</a></p>
                    <p><a href="tel:+6291219613083">091219613083</a></p>
                    <p>Bandung, Jawa Barat</p>
                </div>
            </div>
            <div class="copyright-section border-top mt-4 pt-3 text-center">
                <p class="text-second">Amal Solution Store Copyright &copy; 2024 All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>