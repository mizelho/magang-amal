<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Job Application</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
            border: none;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .card {
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: white;
        }

        .card-header {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .card-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-check-label {
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <header>
      <?php include './components/navbarLogin.php'; ?>
    </header>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Job Application</h2>
            </div>
            <div class="card-body">
                <form action="submit_lamaran.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" id="job" name="job" required>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="UI/UX Designer">UI/UX Designer</option>
                            <option value="IT Consultant">Software Engineer</option>
                            <option value="IT Consultant">IT Consultant</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="experience" name="experience" rows="3" placeholder="Describe your work experience if any" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.docx" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="motivation" name="motivation" rows="5" placeholder="Write your motivation letter" required></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="declaration" name="declaration" required>
                        <label class="form-check-label" for="declaration">
                            I declare that the information provided in this application is true and complete.
                        </label>
                    </div>
                    <button type="submit" class="btn-submit">Submit Application</button>
                </form>
            </div>
            <div class="card-footer">
                <small>Make sure all information is correct before submitting your application.</small>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
