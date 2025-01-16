<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hubungi Kami</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #eceff1, #f5f7f9);
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 100;
            background-color: #fff;
            color: #000;
            padding: 10px 20px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }

        header .main-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .brand {
            display: flex;
            align-items: center;
        }

        header .brand img {
            width: 50px;
            margin-right: 10px;
        }

        header .brand h1 {
            font-size: 1.5rem;
            margin: 0;
        }

        header .links ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        header .links ul li {
            margin-left: 20px;
        }

        header .links ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        header .links ul li a:hover,
        header .links ul li.active a {
            color: #ff5722;
        }

        .contact-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
            text-align: center;
            background-color: #f7f8fa;
            border-radius: 8px;
            margin: 40px auto;
            max-width: 800px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-section form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-section input,
        .contact-section textarea {
            width: 90%;
            max-width: 500px;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        .contact-section button {
            background-color: #ff5722;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .contact-section button:hover {
            background-color: #e64a19;
        }

        footer {
            background-color: #1e2a47;
            color: #f1f1f1;
            text-align: center;
            padding: 40px 20px;
            margin-top: 50px;
        }

        footer .footer-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        footer .footer-brand h1 {
            font-size: 1.8rem;
            margin-left: 10px;
            font-weight: 700;
            color: #fff;
        }

        footer .contact-details p {
            margin: 5px 0;
            font-size: 1rem;
        }

        footer .contact-details a {
            color: #ffca2c;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer .contact-details a:hover {
            color: #ffd966;
        }

        footer .social-links {
            margin: 20px 0;
        }

        footer .social-links a {
            color: #f1f1f1;
            margin: 0 10px;
            font-size: 1.5rem;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer .social-links a:hover {
            color: #ffca2c;
        }

        footer .copyright {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #bbb;
        }
    </style>
</head>

<body>
    <header>
        <nav class="main-nav">
            <div class="brand">
                <img src="assets/images/logo.png" alt="Logo">
                <h1>Amal Solution</h1>
            </div>
            <div class="links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="media.php">Media</a></li>
                    <li class="active"><a href="contact.php">Hubungi Kami</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="contact-section">
            <h2>Hubungi Kami</h2>
            <form action="submit_form.php" method="post">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="message" rows="5" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-brand">
            <img src="assets/images/logo.png" alt="Logo" style="width: 40px;">
            <h1>Amal Solution</h1>
        </div>
        <div class="contact-details">
            <p>Bandung, Jawa Barat</p>
            <p><a href="mailto:amalsolution@gmail.com">amalsolution@gmail.com</a></p>
            <p><a href="tel:+6281219613083">+6281219613083</a></p>
        </div>
        <div class="social-links">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
        <div class="copyright">
            &copy; 2024 Amal Solution Store. All Rights Reserved.
        </div>
    </footer>
</body>

</html>
