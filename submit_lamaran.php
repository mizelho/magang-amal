<?php
include 'koneksi/koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $job = mysqli_real_escape_string($conn, $_POST['job']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $motivation = mysqli_real_escape_string($conn, $_POST['motivation']);
    
    if (isset($_FILES['cv'])) {
        $cv_name = $_FILES['cv']['name'];
        $cv_tmp_name = $_FILES['cv']['tmp_name'];
        $cv_error = $_FILES['cv']['error'];
        $cv_size = $_FILES['cv']['size'];
        
        if ($cv_error === 0) {
            $allowed_ext = ['pdf', 'docx'];
            $cv_ext = pathinfo($cv_name, PATHINFO_EXTENSION);
            
            if (in_array($cv_ext, $allowed_ext)) {
                $upload_dir = 'uploads/cvs/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true); 
                }

                $cv_path = $upload_dir . time() . '_' . $cv_name;
                
                if (move_uploaded_file($cv_tmp_name, $cv_path)) {
                    $sql = "INSERT INTO lamaran (name, email, job, experience, motivation, cv_path) 
                            VALUES ('$name', '$email', '$job', '$experience', '$motivation', '$cv_path')";
                    
                    if (mysqli_query($conn, $sql)) {
                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                        echo '<script>
                                window.onload = function() {
                                    Swal.fire({
                                        title: "Application Submitted!",
                                        text: "Your application has been successfully submitted.",
                                        icon: "success",
                                        confirmButtonText: "OK"
                                    }).then(function() {
                                        window.location.href = "http://localhost/magang-amal/index.php";
                                    });
                                }
                              </script>';
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                } else {
                    echo "Failed to upload CV.";
                }
            } else {
                echo "Invalid file type. Please upload a PDF or DOCX file.";
            }
        } else {
            echo "Error uploading file.";
        }
    }
}
?>
