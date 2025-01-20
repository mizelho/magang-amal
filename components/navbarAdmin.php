<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="assets/images/logo.png" alt="Logo" class="me-2" style="height: 40px;">
      <h1 class="m-0 fs-4">Amal Solution</h1>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
      <ul class="navbar-nav mx-auto">
      </ul>
      <ul class="navbar-nav align-items-center">
        
        <li class="nav-item dropdown">
          <?php if (!isset($_SESSION['user'])) { ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user me-2"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="user_login.php">Login</a></li>
              <li><a class="dropdown-item" href="register.php">Register</a></li>
            </ul>
          <?php } else { ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user me-2"></i> <?= htmlspecialchars($_SESSION['user']); ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="proses/logout.php">Log Out</a></li>
            </ul>
          <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
