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
    <title>Login</title>
    <style>
      /* Global Reset */
      html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow-x: hidden; 
      }

      body {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
        top: 0;
        left: 0;
        overflow: hidden;
      }

      .card {
        max-width: 900px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .row.g-0 {
        height: 100%;
      }

      .col-lg-6 {
        height: 100%;
      }

      .img-fluid {
        height: 100%;
        object-fit: cover;
      }

      .card-body {
        padding: 2rem;
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

      main {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
      }
    </style>
  </head>
  <body>
    <header>
      <?php include './components/navbarLogin.php'; ?>
    </header>
    <div id="particles-js"></div>
    <main>
      <div class="card shadow-lg" style="width: 100%; height: 680px;">
        <div class="row g-0">
          <div class="col-lg-6">
            <img src="./assets/images/photo122.jpg" class="img-fluid h-100 rounded-start" alt="Login Image">
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="card-body">
              <div class="d-flex justify-content-center mb-4">
                <img src="./assets/images/logo.png" alt="Logo" class="img-fluid" style="max-width: 200px; width: 120px; height: 100px; margin-top: -110px;">
              </div>
              <h2 class="text-center fw-bold mb-4">Login</h2>
              <form action="proses/login.php" method="POST" id="loginForm">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3 input-group">
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Password" required>
                    <span class="input-group-text" id="togglePassword"><i class="fas fa-eye"></i></span>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label mb-3" for="terms">
                        I agree to the <a href="#" id="termsLink">Terms of Service</a>
                    </label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-danger mb-2">Login</button>
                </div>
                <div class="d-grid">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='register.php';">Register</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <p class="mb-0">Amal Solution Store &copy; 2024. All Rights Reserved.</p>
    </footer>
    <script>
      // Initialize Particle.js
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

      document.getElementById('termsLink').addEventListener('click', function(e) {
        e.preventDefault();
        fetch('./modal/term.php')
          .then(response => response.text())
          .then(data => {
            const modalElement = document.createElement('div');
            modalElement.innerHTML = data;
            document.body.appendChild(modalElement);
            const modal = new bootstrap.Modal(modalElement.querySelector('#termsModal'));
            modal.show();
          })
          .catch(error => console.error('Error loading modal:', error));
      });
      document.getElementById('loginForm').addEventListener('submit', function(event) {
        const termsCheckbox = document.getElementById('terms');
        if (!termsCheckbox.checked) {
          event.preventDefault();
          Swal.fire({
              icon: 'warning',
              title: 'Terms and Conditions',
              text: 'You must agree to the Terms of Service before logging in.',
          });
        }
      });
      const urlParams = new URLSearchParams(window.location.search);
      const error = urlParams.get('error');
      const message = urlParams.get('message');

      if (error) {
          let errorMessage = '';

          switch (error) {
            case 'missing_credentials':
              errorMessage = 'Username or password is missing.';
              break;
            case 'query_error':
              errorMessage = `Query Error: ${message || 'An error occurred while processing the query.'}`;
              break;
            case 'invalid_credentials':
              errorMessage = 'Password or username is missing.';
              break;
            case 'user_not_found':
              errorMessage = 'Invalid username or password.';
              break;
            default:
              errorMessage = 'An unknown error occurred.';
          }

          Swal.fire({
              icon: 'error',
              title: 'Login Gagal',
              text: errorMessage
          });
          history.replaceState(null, '', window.location.pathname);
      }
    </script>
  </body>
</html>
