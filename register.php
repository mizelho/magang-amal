<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Register</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow-x: hidden;
      overflow-y: hidden;
    }

    body {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    #particles-js {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    main {
      flex-grow: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      z-index: 1;
      overflow: hidden;
    }

    footer {
      background-color: #343a40;
      color: white;
      padding: 10px 0;
      font-size: 0.85rem;
      text-align: center;
    }

    footer p {
      margin: 0;
    }

    .input-group {
      display: flex;
      align-items: center;
    }

    .input-group .input-group-text {
      cursor: pointer;
      display: flex;
      align-items: center;
      padding: 0.375rem 0.75rem;
      height: 100%;
      font-size: 1rem;
    }

    .input-group input {
      height: 100%;
    }

    .input-group .input-group-text i {
      font-size: 1.25rem;
    }

    
    .input-group input {
      padding-right: 2.5rem; 
    }
  </style>
</head>

<body>
  <header>
    <?php include './components/navbarRegister.php'; ?>
  </header>

  <div id="particles-js"></div>
  <main>
    <div class="container">
      <div class="card col-md-6 mx-auto">
        <h5 class="card-header">Register User</h5>
        <div class="card-body">
          <form id="registerForm">
            <div class="row mb-3">
              <div class="col-md-6">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Full Name" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
              </div>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  <span class="input-group-text" id="togglePassword"><i class="fas fa-eye"></i></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <input type="password" class="form-control" id="konfirmasi" name="konfirmasi" placeholder="Confirm Password" required>
                  <span class="input-group-text" id="toggleConfirmPassword"><i class="fas fa-eye"></i></span>
                </div>
              </div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <p>Amal Solution Store &copy; 2024. All Rights Reserved.</p>
  </footer>

  <script>
    particlesJS('particles-js', {
      "particles": {
        "number": {
          "value": 80,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#030202"
        },
        "shape": {
          "type": "circle"
        },
        "opacity": {
          "value": 0.5
        },
        "size": {
          "value": 3
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#030202",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out"
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "repulse"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          }
        }
      },
      "retina_detect": true
    });

    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');
    togglePassword.addEventListener('click', function () {
      const type = passwordField.type === 'password' ? 'text' : 'password';
      passwordField.type = type;
      this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });

    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const confirmPasswordField = document.getElementById('konfirmasi');
    toggleConfirmPassword.addEventListener('click', function () {
      const type = confirmPasswordField.type === 'password' ? 'text' : 'password';
      confirmPasswordField.type = type;
      this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });

    document.querySelector('#registerForm').addEventListener('submit', function (e) {
      e.preventDefault();

      let formData = new FormData(this);

      fetch('proses/register.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'error') {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: data.message
          });
        } else if (data.status === 'success') {
          Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: data.message
          }).then(() => {
            window.location = '../user_login.php';
          });
        }
      })
      .catch(error => {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong.'
        });
      });
    });
  </script>
</body>

</html>
