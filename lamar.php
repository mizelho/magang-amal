<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lamar Pekerjaan</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Lamar Pekerjaan</h2>
        <form action="submit_lamaran.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="job" class="form-label">Posisi yang Dilamar</label>
                <select class="form-select" id="job" name="job">
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <option value="IT Consultant">IT Consultant</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">Upload CV</label>
                <input type="file" class="form-control" id="cv" name="cv" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Lamaran</button>
        </form>
    </div>
</body>
</html>
