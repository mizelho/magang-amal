<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Contact Us</title>
    <style>
        main {
            margin-bottom: 100px;
        }

        .contact-section {
            padding: 50px 0;
        }

        .contact-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-section form {
            max-width: 600px;
            margin: 0 auto;
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
                    <li><a href="karier.php">Karier</a></li>
                    <li class="active"><a href="contact.php">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="contact-section">
            <div class="container">
                <h2 class="text-main">Hubungi Kami</h2>
                <p class="text-center">Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan isi formulir di bawah ini.</p>

                <form action="proses_kontak.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
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
