<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Media</title>
    <style>
      body {
          font-family: 'Poppins', sans-serif;
          background: linear-gradient(135deg, #f9f9f9, #eaeff2);
          margin: 0;
          padding: 0;
      }

      header {
          background: #ffffff;
          color: #000000;
          padding: 10px 20px;
      }

      header .main-nav {
          display: flex;
          justify-content: space-between;
          align-items: center;
      }

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
          color: #fff;
          font-weight: 500;
      }

      header .links ul li a:hover,
      header .links ul li.active a {
          color: #ffca2c;
      }

      main {
          padding: 40px 20px;
      }

      h2 {
          text-align: center;
          color: #1e2a47;
          font-weight: 700;
          margin-bottom: 40px;
          position: relative;
      }

      h2::after {
          content: '';
          width: 100px;
          height: 3px;
          background: #ff5722;
          position: absolute;
          bottom: -10px;
          left: 50%;
          transform: translateX(-50%);
      }

      .gallery-container {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
          gap: 20px;
      }

      .album {
          background: #fff;
          border-radius: 12px;
          box-shadow: 0 4px 8px rgba(179, 3, 3, 0.75);
          overflow: hidden;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .album:hover {
          transform: translateY(-10px);
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }

      .album h3 {
          text-align: center;
          padding: 20px;
          background: linear-gradient(135deg,rgb(121, 54, 41),rgb(201, 38, 6));
          color: #fff;
          margin: 0;
          font-size: 1.5rem;
      }

      .album-images {
          display: flex;
          flex-wrap: wrap;
          gap: 10px;
          padding: 15px;
          justify-content: center;
      }

      .album-images img {
          border-radius: 8px;
          width: 100%;
          max-width: 120px;
          height: 120px;
          object-fit: cover;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .album-images img:hover {
          transform: scale(1.1);
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }
    </style>
</head>

<body>
    <header>
      <?php include './components/navbar.php'; ?>
    </header>

    <main>
        <h2>Album Media</h2>
        <div class="gallery-container">
            <div class="album">
                <h3>Amal Solution Team</h3>
                <div class="album-images">
                <img src="assets/images/photo1.jpg" alt="Event Launch 1">
                        <img src="assets/images/photo2.jpg" alt="Event Launch 2">
                        <img src="assets/images/photo3.jpg" alt="Event Launch 3">
                        <img src="assets/images/photo4.jpg" alt="Event Launch 4">
                        <img src="assets/images/photo5.jpg" alt="Event Launch 5">
                        <img src="assets/images/photo6.jpg" alt="Event Launch 6">
                        <img src="assets/images/photo66.jpg" alt="Event Launch 7">
                        <img src="assets/images/photo666.jpg" alt="Event Launch 8">
                        <img src="assets/images/photo6666.jpg" alt="Event Launch 9">
                </div>
            </div>
            <div class="album">
                <h3>Kegiatan Rapat Team</h3>
                <div class="album-images">
                <img src="assets/images/photo7.jpg" alt="Team Meeting 1">
                        <img src="assets/images/photo8.jpg" alt="Team Meeting 2">
                        <img src="assets/images/photo9.jpg" alt="Team Meeting 3">
                        <img src="assets/images/photo10.jpg" alt="Team Meeting 4">
                        <img src="assets/images/photo11.jpg" alt="Team Meeting 5">
                        <img src="assets/images/photo12.jpg" alt="Team Meeting 6">
                        <img src="assets/images/photo122.jpg" alt="Team Meeting 7">
                        <img src="assets/images/photo1222.jpg" alt="Team Meeting 8">
                        <img src="assets/images/photo12222.jpg" alt="Team Meeting 9">
                </div>
            </div>
            <div class="album">
                <h3>Kegiatan Presentasi</h3>
                <div class="album-images">
                <img src="assets/images/photo13.jpg" alt="Presentation 1">
                        <img src="assets/images/photo14.jpg" alt="Presentation 2">
                        <img src="assets/images/photo15.jpg" alt="Presentation 3">
                        <img src="assets/images/photo16.jpg" alt="Presentation 4">
                        <img src="assets/images/photo17.jpg" alt="Presentation 5">
                        <img src="assets/images/photo18.jpg" alt="Presentation 6">
                        <img src="assets/images/photo19.jpg" alt="Presentation 7">
                        <img src="assets/images/photo20.jpg" alt="Presentation 8">
                        <img src="assets/images/photo21.jpg" alt="Presentation 9">
                </div>
            </div>
        </div>
    </main>

    <?php include './components/footer.php'; ?>

</body>

</html>
