<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['take_username'])) {
    header("Location: index.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <!-- Logo link -->
            <div class="navbar-header">
                <!-- Tên lớp học -->
                <a class="navbar-brand" href="#">TDTU Classroom</a>
            </div>

            <!-- Nut menu khi thay doi ti le man hinh -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <!-- nút To-do -->
                        <a class="nav-link" href="#">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            To-do
                        </a>
                    </li>
                    <li>
                        <!-- To review -->
                        <a class="nav-link" href="#">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            To review
                            <span class="badge badge-pill badge-primary">3</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a type="button" class="nav-link" data-toggle="modal" data-target="#addBtnModal" href="#">
                            <i class="fa fa-plus"></i>
                            Add
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://via.placeholder.com/40x40?text=Avt" width="30" height="30" class="rounded-circle border">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  -->
    <div class="modal fade" id="addBtnModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- thanh tiêu đề tab -->
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#join">Join Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#create">Create Class</a>
                        </li>
                    </ul><br>
                    <!-- nội dung tab -->
                    <div class="tab-content">
                        <!-- tab vào một lớp học -->
                        <div class="tab-pane fade show active" id="join" role="tabpanel" aria-labelledby="join-tab">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Class Code:</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" name="join-code">
                                </div>
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary" name="join-submit">Join</button>
                                </div>
                            </form>
                        </div>
                        <!-- tab tạo một lớp học -->
                        <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="create-tab">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Class name</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" name="create-classname">
                                </div>
                                <div class="form-group">
                                    <label for="">Description:</label>
                                    <input type="text" class="form-control" placeholder="Enter Description" name="create-d">
                                </div>
                                <div class="form-group">
                                    <label for="">Course:</label>
                                    <input type="text" class="form-control" placeholder="Enter Course" name="create-course">
                                </div>
                                <div class="form-group">
                                    <label for="">Room:</label>
                                    <input type="text" class="form-control" placeholder="Enter Room" name="create-room">
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
    </div>

    <!-- chứa card lớp học -->
    <div class="container pt-3">
        <?php
        echo "<h6>Hello <b>" . $_SESSION['take_fullname'] . "</b>!</h6><br>";
        ?>
        <!-- card lớp học -->
        <div class="card-columns">
            <div class="card" style="width:300px">
                <img src="./img/Backtoschool.jpg" class="card-img" alt="image" style="width:100%; height:100px">
                <div class="row card-img-overlay text-white">
                    <div class="col-10">
                        <h5 class="card-title">My Classroom</h5>
                        <p class="card-title">Description</p>
                    </div>
                    <div class="col-2">
                        <button class="btn" type="submit" style="color: white;"><i class="fa fa-ellipsis-v fa-lg"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary stretched-link">See Classroom</a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>