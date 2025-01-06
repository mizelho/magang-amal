<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Media</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        main {
            margin-bottom: 100px;
            padding: 20px;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .album {
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .album:hover {
            transform: scale(1.05);
        }

        .album h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 1.25rem;
            font-weight: bold;
        }

        .album-images {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .album-images img {
            width: 100%;
            max-width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .album-images img:hover {
            transform: scale(1.1);
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

        .copyright-section {
            margin-top: 40px;
            border-top: 1px solid #444;
            padding-top: 20px;
            text-align: center;
            color: #bbb;
        }

        .text-main {
            color: #1e2a47;
        }

        .text-second {
            color: #ccc;
        }
    </style>
</head>

<body>
    <header>
    <nav class="main-nav">
        <div class="brand text-main" style="display: flex; align-items: center;">
            <!-- Logo -->
            <img src="assets/images/logo.png" alt="Logo" style="width: 50px; height: auto; margin-right: 10px;">
            <!-- Nama Perusahaan -->
            <a href="index.php">
                <h1>Amal Solution</h1>
            </a>
        </div>
            <div class="links">
                <ul>
                    <li><a href="index.php">Menu</a></li>
                    <li class="active"><a href="produk.php">Media</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-5 mb-5">
            <h2 class="text-center text-main mb-4">Album Media</h2>

            <div class="gallery-container">
                <!-- Album 1 -->
                <div class="album">
                    <h3>Amal Solution Team</h3>
                    <div class="album-images">
                        <img src="assets/images/photo1.jpg" alt="Event Launch 1">
                        <img src="assets/images/photo2.jpg" alt="Event Launch 2">
                        <img src="assets/images/photo3.jpg" alt="Event Launch 3">
                        <img src="assets/images/photo4.jpg" alt="Event Launch 4">
                        <img src="assets/images/photo5.jpg" alt="Event Launch 5">
                        <img src="assets/images/photo6.jpg" alt="Event Launch 6">
                        <img src="assets/images/photo66.jpg" alt="Event Launch 7">
                        <img src="assets/images/photo666.jpg" alt="Event Launch 8">
                        <img src="assets/images/photo6666.jpg" alt="Event Launch 9">
                        <img src="assets/images/photo66666.jpg" alt="Event Launch 10">
                    </div>
                </div>
                <!-- Album 2 -->
                <div class="album">
                    <h3>Kegiatan Rapat Team</h3>
                    <div class="album-images">
                        <img src="assets/images/photo7.jpg" alt="Team Meeting 1">
                        <img src="assets/images/photo8.jpg" alt="Team Meeting 2">
                        <img src="assets/images/photo9.jpg" alt="Team Meeting 3">
                        <img src="assets/images/photo10.jpg" alt="Team Meeting 4">
                        <img src="assets/images/photo11.jpg" alt="Team Meeting 5">
                        <img src="assets/images/photo12.jpg" alt="Team Meeting 6">
                        <img src="assets/images/photo122.jpg" alt="Team Meeting 7">
                        <img src="assets/images/photo1222.jpg" alt="Team Meeting 8">
                        <img src="assets/images/photo12222.jpg" alt="Team Meeting 9">
                        <img src="assets/images/photo122222.jpg" alt="Team Meeting 10">
                    </div>
                </div>
                <!-- Album 3 -->
                <div class="album">
                    <h3>Kegiatan Presentasi</h3>
                    <div class="album-images">
                        <img src="assets/images/photo13.jpg" alt="Presentation 1">
                        <img src="assets/images/photo14.jpg" alt="Presentation 2">
                        <img src="assets/images/photo15.jpg" alt="Presentation 3">
                        <img src="assets/images/photo16.jpg" alt="Presentation 4">
                        <img src="assets/images/photo17.jpg" alt="Presentation 5">
                        <img src="assets/images/photo18.jpg" alt="Presentation 6">
                        <img src="assets/images/photo19.jpg" alt="Presentation 7">
                        <img src="assets/images/photo20.jpg" alt="Presentation 8">
                        <img src="assets/images/photo21.jpg" alt="Presentation 9">
                        <img src="assets/images/photo22.jpg" alt="Presentation 10">
                    </div>
                </div>
            </div>
        </div>
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
