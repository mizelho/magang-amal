<?php
session_start(); // Pastikan session dimulai
include 'koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>Login</title>
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
          <li><a href="lamar.php">Lamar</a></li>
        </ul>
      </div>
      <div class="icon-for-user">
        <a href="#"></a>
        <?php
        if (!isset($_SESSION['user'])) {
        ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="user_login.php">Login</a>
            <a class="dropdown-item" href="register.php">Register</a>
          </div>
        <?php
        } else {
        ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['user']; ?></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="proses/logout.php">Log Out</a>
          </div>
        <?php
        }
        ?>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="login">
        <div class="text-login">
          <h2 class="text-main">Login</h2>
        </div>
        <div class="form">
          <form action="proses/login.php" method="POST">
            <div class="form-group">
              <label for="username" class="text-second">Username</label>
              <input type="text" class="form-control text-second" id="username" name="username" placeholder="Username" style="width: 500px;" required>
            </div><br>
            <div class="form-group">
              <label for="password" class="text-second">Password</label>
              <input type="password" class="form-control text-second" id="password" name="pass" placeholder="Password" style="width: 500px;" required>
            </div><br>
            <div class="button-wrapper">
              <button type="submit" class="btn btn-dark text-second">Login</button>
              <a href="register.php" class="btn btn-dark text-second">Register</a>
            </div>
          </form>
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
