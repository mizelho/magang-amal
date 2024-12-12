<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Lamar</title>
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
                    <li><a href="produk.php">Produk</a></li>
                </ul>
            </div>
            <div class="icon-for-user">
                <a href="lamar.php" style="padding-right: 40px;">
                    <img src="assets/icons/check.png" alt="Lamar Icon">
                </a>
                <a href="#">
                    <img src="assets/icons/person.png" alt="User Icon">
                </a>
                <?php if (!isset($_SESSION['user'])) { ?>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login/Register
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="user_login.php">Login</a>
                        <a class="dropdown-item" href="register.php">Register</a>
                    </div>
                <?php } else { ?>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= htmlspecialchars($_SESSION['user']); ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="proses/logout.php">Log Out</a>
                    </div>
                <?php } ?>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-5">
            <div class="keranjang">
                <div class="text-keranjang mb-4">
                    <h2 class="text-main">Lamaran</h2>
                </div>
                <div class="alert alert-info text-center">
                    <h5 class="text-black text-second">
                        <b>SILAHKAN LOGIN TERLEBIH DAHULU SEBELUM MELAMAR</b>
                    </h5>
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
                    <p><a href="tel:+6281219613083">0812-1961-3083</a></p>
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
