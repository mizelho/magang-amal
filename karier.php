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
        main {
            margin-bottom: 100px;
        }

        .karier-section {
            padding: 50px 0;
        }

        .karier-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .karier-list {
            margin-top: 20px;
        }

        .karier-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        footer {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="main-nav">
            <div class="brand text-main">
                <a href="index.php">
                    <h1>Amal Solution</h1>
                </a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="index.php">Menu</a></li>
                    <li><a href="karier.php">karier</a></li>
                    <li class="active"><a href="karier.php">Karier</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="karier-section">
            <div class="container">
                <h2 class="text-main">Karier di Amal Solution</h2>
                <p class="text-center">Bergabunglah dengan tim kami dan tumbuh bersama di dunia teknologi!</p>

                <div class="karier-list">
                    <div class="karier-item">
                        <h4>Software Engineer</h4>
                        <p>Deskripsi Pekerjaan: Membangun dan memelihara aplikasi berbasis web dan mobile.</p>
                        <p>Kualifikasi: Pengalaman minimal 2 tahun, menguasai PHP, JavaScript, dan Framework Laravel.</p>
                        <a href="lamar.php" class="btn btn-primary">Lamar Sekarang</a>
                    </div>

                    <div class="karier-item">
                        <h4>UI/UX Designer</h4>
                        <p>Deskripsi Pekerjaan: Mendesain antarmuka yang menarik dan pengalaman pengguna yang intuitif.</p>
                        <p>Kualifikasi: Pengalaman minimal 1 tahun, menguasai Figma atau Adobe XD.</p>
                        <a href="lamar.php" class="btn btn-primary">Lamar Sekarang</a>
                    </div>

                    <div class="karier-item">
                        <h4>IT Consultant</h4>
                        <p>Deskripsi Pekerjaan: Memberikan solusi teknologi untuk kebutuhan klien.</p>
                        <p>Kualifikasi: Pengalaman minimal 3 tahun di bidang konsultasi teknologi.</p>
                        <a href="lamar.php" class="btn btn-primary">Lamar Sekarang</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
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
