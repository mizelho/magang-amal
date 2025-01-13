<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lamar Pekerjaan</title>
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
    <div class="container mt-5">
        <!-- Form Card -->
        <div class="card">
            <div class="card-header">
                <h2>Lamar Pekerjaan</h2>
            </div>
            <div class="card-body">
                <form action="submit_lamaran.php" method="POST" enctype="multipart/form-data">
                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                    </div>

                    <!-- Posisi yang Dilamar -->
                    <div class="mb-3">
                        <label for="job" class="form-label">Posisi yang Dilamar</label>
                        <select class="form-select" id="job" name="job" required>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="UI/UX Designer">UI/UX Designer</option>
                            <option value="IT Consultant">IT Consultant</option>
                        </select>
                    </div>

                    <!-- Pengalaman Kerja -->
                    <div class="mb-3">
                        <label for="experience" class="form-label">Pengalaman Kerja</label>
                        <textarea class="form-control" id="experience" name="experience" rows="3" placeholder="Tuliskan pengalaman kerja Anda jika ada" required></textarea>
                    </div>

                    <!-- Upload CV -->
                    <div class="mb-3">
                        <label for="cv" class="form-label">Upload CV (PDF, DOCX)</label>
                        <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.docx" required>
                    </div>

                    <!-- Letter of Motivation -->
                    <div class="mb-3">
                        <label for="motivation" class="form-label">Surat Motivasi</label>
                        <textarea class="form-control" id="motivation" name="motivation" rows="5" placeholder="Tuliskan surat motivasi Anda" required></textarea>
                    </div>

                    <!-- Checkbox - Pernyataan Keaslian Lamaran -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="declaration" name="declaration" required>
                        <label class="form-check-label" for="declaration">
                            Saya menyatakan bahwa informasi yang diberikan dalam lamaran ini adalah benar dan lengkap.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-submit">Kirim Lamaran</button>
                </form>
            </div>
            <div class="card-footer">
                <small>Pastikan semua informasi yang diberikan sudah benar sebelum mengirim lamaran.</small>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
