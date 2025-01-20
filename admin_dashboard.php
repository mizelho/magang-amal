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

$sql_count = "SELECT COUNT(*) AS total FROM pelamar WHERE role != 'admin'";
$result_count = $conn->query($sql_count);
$row_count = $result_count->fetch_assoc();
$total_rows = $row_count['total'];

$total_pages = ceil($total_rows / $results_per_page);

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$start_from = ($page - 1) * $results_per_page;

$sql = "SELECT kode_pelamar, nama, email FROM pelamar WHERE role != 'admin' LIMIT $start_from, $results_per_page";
$result = $conn->query($sql);
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
                    if ($result->num_rows > 0) {
                        $no = $start_from + 1;
                        while($row = $result->fetch_assoc()) {
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
                if ($page > 1) {
                    echo "<li class='page-item'><a class='page-link' href='admin_dashboard.php?page=" . ($page - 1) . "'>&laquo; Previous</a></li>";
                }

                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i == $page) {
                        echo "<li class='page-item active'><a class='page-link' href='admin_dashboard.php?page=$i'>$i</a></li>";
                    } else {
                        echo "<li class='page-item'><a class='page-link' href='admin_dashboard.php?page=$i'>$i</a></li>";
                    }
                }

                if ($page < $total_pages) {
                    echo "<li class='page-item'><a class='page-link' href='admin_dashboard.php?page=" . ($page + 1) . "'>Next &raquo;</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</body>
</html>
