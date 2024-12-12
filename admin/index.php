<?php
session_start();
if (isset($_SESSION['admin'])) {
  header('location:halaman_utama.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../style/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>Login Admin</title>
</head>

<body>
  <br><br><br>
  <main>
    <div class="container">
      <div class="login">
        <div class="text-login">
          <h2 class="text-main">Login admin</h2>
        </div>
        <div class="form">
          <form action="proses/login.php" method="POST">
            <div class="form-group">
              <label for="usernameInput" class="text-second">Username</label>
              <input type="text" class="form-control text-second" id="usernameInput" placeholder="Username" name="user" style="width: 500px;">
            </div>
            <br>
            <div class="form-group">
              <label for="passwordInput" class="text-second">Password</label>
              <input type="password" class="form-control text-second" id="passwordInput" placeholder="Password" name="pass" style="width: 500px;">
            </div>
            <br>
            <div class="button-wrapper">
              <button type="submit" class="btn btn-dark text-second">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

</body>

</html>