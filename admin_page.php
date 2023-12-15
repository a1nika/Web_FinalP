<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:login.php');
}
?>

<!DOCTYPE html>

<head>
    <title>Admin Panel</title>
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel='stylesheet' href="admin_style.css">
</head>

<body>
    <?php include 'admin_header.php'; ?>




    
    <script src="admin_srcipt.js"></script>
</body>