<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['kd_pm']);
header('location:../user_login.php');
