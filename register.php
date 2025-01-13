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
  <style>
    .main-nav {
      background-color: #ffffff;
      padding: 10px 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .main-nav .brand {
      display: flex;
      align-items: center;
    }

    .main-nav .brand img {
      width: 50px;
      margin-right: 10px;
    }

    .main-nav a {
      color: #f8f9fa;
      text-decoration: none;
      font-weight: 500;
      margin: 0 15px;
      transition: color 0.3s ease-in-out;
    }

    .main-nav a:hover {
      color: #ffc107;
    }

    .main-nav .links ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .main-nav .links ul li {
      margin: 0 10px;
    }

    .icon-for-user a {
      color: #f8f9fa;
    }

    .icon-for-user a:hover {
      color: #ffc107;
    }

    .register {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 80vh;
    }

    .register .form {
      width: 100%;
      max-width: 500px;
      background: #f8f9fa;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
  <title>Register</title>
</head>

<body>
  <header>
    <nav class="main-nav d-flex justify-content-between align-items-center">
      <div class="brand text-main">
        <!-- Logo -->
        <img src="assets/images/logo.png" alt="Logo">
        <!-- Nama Perusahaan -->
        <a href="index.php" class="text-decoration-none">
          <h1 class="m-0">Amal Solution</h1>
        </a>
      </div>
      <div class="links">
        <ul class="d-flex">
          <li><a href="index.php">Menu</a></li>
          <li><a href="lamar.php">Lamar</a></li>
        </ul>
      </div>
      <div class="icon-for-user dropdown">
        <?php if (!isset($_SESSION['user'])) { ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="user_login.php">Login</a>
            <a class="dropdown-item" href="register.php">Register</a>
          </div>
        <?php } else { ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="proses/logout.php">Log Out</a>
          </div>
        <?php } ?>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="register">
        <div class="text-register">
          <h2 class="text-main">Register</h2>
        </div>
        <div class="form">
          <form action="proses/register.php" method="POST">
            <div class="form-group">
              <label for="nama" class="text-second">Nama Lengkap</label>
              <input type="text" class="form-control text-second" id="nama" name="nama" placeholder="Nama Lengkap" required>
            </div><br>
            <div class="form-group">
              <label for="email" class="text-second">Email</label>
              <input type="email" class="form-control text-second" id="email" name="email" placeholder="Email" required>
            </div><br>
            <div class="form-group">
              <label for="username" class="text-second">Username</label>
              <input type="text" class="form-control text-second" id="username" name="username" placeholder="Username" required>
            </div><br>
            <div class="form-group">
              <label for="password" class="text-second">Password</label>
              <input type="password" class="form-control text-second" id="password" name="password" placeholder="Password" required>
            </div><br>
            <div class="form-group">
              <label for="konfirmasi" class="text-second">Konfirmasi Password</label>
              <input type="password" class="form-control text-second" id="konfirmasi" name="konfirmasi" placeholder="Konfirmasi Password" required>
            </div><br>
            <div class="button-wrapper text-center">
              <button type="submit" class="btn btn-dark text-second">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <footer>
      <div class="copyright-section border-top mt-4 pt-3 text-center">
        <p class="text-second">Amal Solution Store Copyright &copy; 2024 All Rights Reserved</p>
      </div>
    </div>
  </footer>
</body>

</html>
