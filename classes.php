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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Classes</title>

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
            <!-- 2.1 Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
                <div class="container-fluid px-0">
                    <!-- 2.1.1 Button sidebar + Class Name -->
                    <span class="navbar-header">
                        <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        <a class="navbar-brand" href="#">IELTS Dan</a>
                    </span>

                    <!-- 2.1.2 Tab control item -->
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="stream-tab" data-toggle="tab" href="#stream" role="tab" aria-controls="stream" aria-selected="true">Stream</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="classwork-tab" data-toggle="tab" href="#classwork" role="tab" aria-controls="classwork" aria-selected="false">Classwork</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="people-tab" data-toggle="tab" href="#people" role="tab" aria-controls="people" aria-selected="false">People</a>
                        </li>
                    </ul>

                    <!-- 2.1.3 Account item -->
                    <div class="nav-item dropdown">
                        <a class="btn dropdown p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle" src="https://via.placeholder.com/30x30?text=Avt" width="35px" height="35">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- 2.2 Tab content -->
            <div class="container tab-content">
                <!-- 2.2.0 Ảnh bìa -->
                <div class="card">
                    <img class="img-fluid rounded" src="./img/Backtoschool.jpg" class="card-img" alt="image">
                    <div class="card-img-overlay text-white">
                        <h5 class="card-title">My Classroom</h5>
                        <div class="card-text">Description</div>
                        <div class="card-text">Code: </div>
                    </div>
                </div>
                <!-- 2.2.1. Stream tab-->
                <div class="tab-pane fade show active pt-3" id="stream" role="tabpanel" aria-labelledby="stream-tab">
                    <!-- Up status/document -->
                    <form class="border rounded mb-3" action="" method="post">
                        <!-- Text input -->
                        <div class="form-group px-2 pt-3">
                            <label for="exampleFormControlTextarea1">Share with your class</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group row pl-2">
                            <!-- Up file -->
                            <div class="col-sm">
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <!-- Submit document -->
                            <div class="col-sm">
                                <button type="submit" class="btn btn-primary ">Post</button>
                            </div>
                        </div>
                    </form>

                    <!-- Document link card (Example: 10 time loop)-->
                    <?php for ($x = 0; $x <= 10; $x++) { ?>
                        <div class="card mb-3">
                            <div class="card-body d-flex">
                                <span class="align-self-center mr-3">
                                    <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                                </span>
                                <span>
                                    <a href="#" class="font-weight-bold text-dark stretched-link">Keynote 3</a>
                                    <div><small>Date post: 20/10/2020</small></div>
                                </span>
                                <button class="btn ml-auto"><i class="fa fa-ellipsis-v fa-lg" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- 2.2.2. Classwork tab -->
                <div class="tab-pane fade pt-3" id="classwork" role="tabpanel" aria-labelledby="classwork-tab">
                    
                </div>

                <!--2.2.3. People tab -->
                <div class="tab-pane fade pt-3" id="people" role="tabpanel" aria-labelledby="people-tab">
                    <!-- teacher -->
                    <div class="h4 font-weight-normal text-primary">Teacher</div>
                    <hr>
                    <div class="d-flex bd-highlight mt-3">
                        <img class="rounded-circle mr-3" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image">
                        <div class="align-self-center">Trần Thi Đan</div>
                    </div>
                    <br><br>
                    <!-- classmate -->
                    <span class="h4 font-weight-normal text-primary mr-2">Classmates</span><span class="align-self-center">(2 Students)</span>
                    <hr>
                    <div class="d-flex bd-highlight mt-2">
                        <img class="rounded-circle mr-3" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image">
                        <div class="align-self-center">Tạ Trung Hiếu</div>
                    </div>
                    <div class="d-flex bd-highlight mt-3">
                        <img class="rounded-circle mr-3" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image">
                        <div class="align-self-center">Phạm Hà Giang</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="main.js"></script>
</body>

</html>