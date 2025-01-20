<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('HTTP/1.0 404 Not Found');
    include('404.php');
    exit;
}
include('check_admin.php');
include('koneksi/koneksi.php');

$results_per_page = 10;

$sql_count_pelamar = "SELECT COUNT(*) AS total FROM pelamar WHERE role != 'admin'";
$result_count_pelamar = $conn->query($sql_count_pelamar);
$row_count_pelamar = $result_count_pelamar->fetch_assoc();
$total_rows_pelamar = $row_count_pelamar['total'];

$total_pages_pelamar = ceil($total_rows_pelamar / $results_per_page);

$page_pelamar = isset($_GET['page_pelamar']) ? $_GET['page_pelamar'] : 1;
$start_from_pelamar = ($page_pelamar - 1) * $results_per_page;

$sql_pelamar = "SELECT kode_pelamar, nama, email FROM pelamar WHERE role != 'admin' LIMIT $start_from_pelamar, $results_per_page";
$result_pelamar = $conn->query($sql_pelamar);

$sql_count_lamaran = "SELECT COUNT(*) AS total FROM lamaran";
$result_count_lamaran = $conn->query($sql_count_lamaran);
$row_count_lamaran = $result_count_lamaran->fetch_assoc();
$total_rows_lamaran = $row_count_lamaran['total'];

$total_pages_lamaran = ceil($total_rows_lamaran / $results_per_page);

$page_lamaran = isset($_GET['page_lamaran']) ? $_GET['page_lamaran'] : 1;
$start_from_lamaran = ($page_lamaran - 1) * $results_per_page;

$sql_lamaran = "SELECT id, name, email, job, experience, motivation, cv_path FROM lamaran LIMIT $start_from_lamaran, $results_per_page";
$result_lamaran = $conn->query($sql_lamaran);
?>

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

    <title>Admin Dashboard</title>
</head>
<body>
    <header>
        <?php include './components/navbarAdmin.php'; ?>
    </header>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Pelamar List</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover mx-auto" style="width: 80%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pelamar</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result_pelamar->num_rows > 0) {
                        $no = $start_from_pelamar + 1; 
                        while($row = $result_pelamar->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$row['kode_pelamar']}</td>
                                    <td>{$row['nama']}</td>
                                    <td>{$row['email']}</td>
                                  </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center'>No applicants found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                if ($page_pelamar > 1) {
                    echo "<li class='page-item'><a class='page-link' href='admin_dashboard.php?page_pelamar=" . ($page_pelamar - 1) . "'>&laquo; Previous</a></li>";
                }

                for ($i = 1; $i <= $total_pages_pelamar; $i++) {
                    echo "<li class='page-item " . ($i == $page_pelamar ? 'active' : '') . "'><a class='page-link' href='admin_dashboard.php?page_pelamar=$i'>$i</a></li>";
                }

                if ($page_pelamar < $total_pages_pelamar) {
                    echo "<li class='page-item'><a class='page-link' href='admin_dashboard.php?page_pelamar=" . ($page_pelamar + 1) . "'>Next &raquo;</a></li>";
                }
                ?>
            </ul>
        </nav>

        <h2 class="text-center mt-5 mb-4">Lamaran List</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover mx-auto" style="width: 80%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Job</th>
                        <th>Experience</th>
                        <th>Motivation</th>
                        <th>CV</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result_lamaran->num_rows > 0) {
                        $no = $start_from_lamaran + 1;
                        while($row = $result_lamaran->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['job']}</td>
                                    <td>{$row['experience']}</td>
                                    <td>{$row['motivation']}</td>
                                    <td><a href='{$row['cv_path']}' target='_blank'>Download CV</a></td>
                                  </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>No applications found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                if ($page_lamaran > 1) {
                    echo "<li class='page-item'><a class='page-link' href='admin_dashboard.php?page_lamaran=" . ($page_lamaran - 1) . "'>&laquo; Previous</a></li>";
                }

                for ($i = 1; $i <= $total_pages_lamaran; $i++) {
                    echo "<li class='page-item " . ($i == $page_lamaran ? 'active' : '') . "'><a class='page-link' href='admin_dashboard.php?page_lamaran=$i'>$i</a></li>";
                }

                if ($page_lamaran < $total_pages_lamaran) {
                    echo "<li class='page-item'><a class='page-link' href='admin_dashboard.php?page_lamaran=" . ($page_lamaran + 1) . "'>Next &raquo;</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</body>
</html>
