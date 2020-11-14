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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TDTU Classroom</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- 1. Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
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
                        <a class="navbar-brand" href="#"><img src="./img/tdtu_logo.png" alt=""> Classroom</a>
                    </div>
                    <!-- 2.1.2 Join/create control item-->
                    <span class="nav-item ml-auto">
                        <a type="button" class="nav-link" data-toggle="modal" data-target="#addBtnModal" href="#">
                            <i class="fa fa-plus"></i>
                        </a>
                    </span>
                    <!-- 2.1.3 Thanh tìm kiếm -->
                    <form class="form-inline pr-2">
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- 2.1.4 Account item -->
                    <!-- <div class="nav-item dropdown"> -->
                    <a class="nav-link nav-item dropdown p-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle border" src="https://via.placeholder.com/40x40?text=Avt" width="35" height="35">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                    <!-- </div> -->
                </div>
            </nav>

            <!-- 2.2 Tab content -->
            <div class="container" id="tab-content" style="margin-top: 75px;">
                <div class="row">
                    <!-- load card lớp học -->
                    <?php
                    require "load_cards.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- 1.2+. Modal show 1.2 control-->
    <div class="modal fade" id="addBtnModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-body">
                <!-- 1.2.1 thanh tiêu đề tab -->
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#join">Join Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#create">Create Class</a>
                    </li>
                </ul><br>
                <!-- 1.2.2 nội dung tab -->
                <div class="tab-content">
                    <!-- tab form gia nhập lớp học -->
                    <div class="tab-pane fade show active" id="join" role="tabpanel" aria-labelledby="join-tab">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="">Class Code:</label>
                                <input type="text" class="form-control" placeholder="Enter Username" name="join-code">
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary" name="join-submit">Join</button>
                            </div>
                        </form>
                    </div>
                    <!-- tab form tạo một lớp học -->
                    <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="create-tab">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="">Class name</label>
                                <input type="text" class="form-control" placeholder="Enter Username" name="create-classname" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description:</label>
                                <input type="text" class="form-control" placeholder="Enter Description" name="create-description" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="create-submit">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Tạo Lớp học
    if (isset($_POST['create-submit'])) {
        $code = substr(md5(uniqid(mt_rand(), true)), 0, 7); // Tạo code ngẩu nhiên
        $classname = $_POST['create-classname'];
        $description = $_POST['create-description'];

        $sql1 = "INSERT INTO `teachers`(`id_teacher`) VALUES ('$id_user')";
        mysqli_query($conn, $sql1);

        $sql2 = "INSERT INTO `classes`(`code`, `id_teacher`, `classname`, `description`) VALUES ('$code', '$id_user', '$classname', '$description')";
        $query = mysqli_query($conn, $sql2);

        if ($query != 0) {
            header("Location: index.php");
        }
    }

    // Vào một lớp học
    if (isset($_POST['join-submit'])) {
        $code = $_POST['join-code'];

        $sql_classes = "SELECT * FROM `classes` WHERE `code` = '$code'";
        $id_teacher = mysqli_fetch_assoc(mysqli_query($conn, $sql_classes))['id_teacher'];
        $id_class = mysqli_fetch_assoc(mysqli_query($conn, $sql_classes))['id_class'];

        if ($id_user != $id_teacher) { // nếu user hiện tại chưa phải là giáo viên thì chi user được quyền được thêm vào bảng
            $sql1 = "INSERT INTO `students`(`id_student`) VALUES ('$id_user')";
            mysqli_query($conn, $sql1);
            $sql2 = "INSERT INTO `joinclass`(`id_student`, `id_class`) VALUES ('$id_user','$id_class')";
            mysqli_query($conn, $sql2);
        }
    }
    ?>
    
    <!-- JS -->
    <script src="main.js"></script>
</body>

</html>