<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['take_id_user'])) {
    header("Location: login.php");
} else {
    require 'connect.php';
    $id_user = $_SESSION['take_id_user'];
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- 1. Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper" style="margin-top: 60px;">
            <?php
            require "load_sidebar.php"
            ?>
        </div>

        <!-- 2. Content -->
        <div id="page-content-wrapper">
            <!-- 2.1 Thanh navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
                <div class="container-fluid px-0">
                    <!-- 2.1.1 Home Logo Link-->
                    <div class="navbar-header">
                        <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        <span class="navbar-brand">Profile</span>
                    </div>
                </div>
            </nav>

            <!-- 2.2 Tab content -->
            <div class="container" style="margin-top: 70px;">
                <div class="card">
                    <div class="card-body">
                        <?php
                        require "load_profile.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>