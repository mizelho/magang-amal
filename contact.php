<?php
session_start(); 
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    header(header: 'HTTP/1.0 404 Not Found');
    include('404.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <title>Hubungi Kami</title>
    <style>
        header .brand {
            display: flex;
            align-items: center;
        }

        header .brand img {
            width: 50px;
            margin-right: 10px;
        }

        header .brand h1 {
            font-size: 1.5rem;
            margin: 0;
        }

        header .links ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        header .links ul li {
            margin-left: 20px;
        }

        header .links ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        header .links ul li a:hover,
        header .links ul li.active a {
            color: #ff5722;
        }

        .contact-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
            text-align: center;
            background-color: #f7f8fa;
            border-radius: 8px;
            margin: 40px auto;
            max-width: 800px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-section form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-section input,
        .contact-section textarea {
            width: 90%;
            max-width: 500px;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        .contact-section button {
            background-color: #ff5722;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .contact-section button:hover {
            background-color: #e64a19;
        }
    </style>
</head>

<body>
    <header>
        <?php include './components/navbar.php'; ?>
    </header>

    <main>
        <section class="contact-section">
            <h2>Hubungi Kami</h2>
            <form action="submit_form.php" method="post">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="message" rows="5" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </section>
    </main>

    <?php include './components/footer.php'; ?>

</body>

</html>
