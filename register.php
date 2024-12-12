

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>Register</title>
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
        <a href="keranjang.php" style="padding-right: 40px;">
          <img src="assets/icons/shop-bag.png">
        </a>
        <a href="#">
          <img src="assets/icons/person.png">
        </a>
        <?php
        if (!isset($_SESSION['user'])) {
        ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="user_login.php">Login</a>
            <a class="dropdown-item" href="register.php">Register</a>
          </div>
        <?php
        } else {
        ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['user']; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="proses/logout.php">Log Out</a>
          </div>
        <?php
        }
        ?>
      </div>
    </nav>
  </header><!-- /header -->

  <main>
    <div class="container">
      <div class="register">
        <div class="text-register">
          <h2 class="text-main">Register</h2>
          <br>
          <div class="form">
            <form action="proses/register.php" method="POST">
              <div class="row">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama" style="width: 500px;" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-second">Username</label>
                  <input type="text" class="form-control text-second" id="exampleInputPassword1" placeholder="Username" name="username" style="width: 500px;" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-second">Email</label>
                  <input type="email" class="form-control text-second" id="exampleInputPassword1" placeholder="Email" name="email" style="width: 500px;" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-second">Password</label>
                  <input type="password" class="form-control text-second" id="exampleInputPassword1" placeholder="Password" name="password" style="width: 500px;" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-second">Konfirmasi Password</label>
                  <input type="password" class="form-control text-second" id="exampleInputPassword1" placeholder="Konfirmasi Password" name="konfirmasi" style="width: 500px;" required>
                </div>
              </div>
              <br>
              <div class="button-wrapper">
                <button type="submit" class="btn btn-dark">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-brand">
          <div>
            <h1 class="text-main">Amal Solution</h1>
          </div>
        </div>

        <div class="footer-item">
          <div>
            <h3 class="text-main">Bisnis</h3>
            <p><a href="#">amalsolution@gmail.com</a></p>
            <p><a href="#">081219613083</a></p>
            <p><a href="#">Bandung,jawa barat</a></p>
          </div>
        </div>
      </div>
      <div class="copyright-section border-top">
        <div class="row">
          <div class="copyright-content text-center mt-4">
            <p class="text-second">amalsolution Store Copyright &copy; 2024 All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>