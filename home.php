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
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- 1. Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper" style="margin-top: 60px;">
            <div class="sidebar-heading">Classroom </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Classroom
                </a>
                <a href="todo.php" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    To-do
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-archive" aria-hidden="true"></i>
                    Storage
                </a>
                <div class="list-group-item list-group-item-action bg-light">
                    <p>Registered:</p>
                    <!-- Load các lớp học tại đây -->
                    <div class="overflow-auto">
                        <div class="d-flex bd-highlight mb-2">
                            <img class="rounded-circle" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image" style="width: 40px; height:40px">
                            <a class="nav-link" href="#">IELTS Dan</a>
                        </div>
                        <div class="d-flex bd-highlight mb-2">
                            <img class="rounded-circle" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image" style="width: 40px; height:40px">
                            <a class="nav-link" href="#">Data Structure</a>
                        </div>
                        <div class="d-flex bd-highlight mb-2">
                            <img class="rounded-circle" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image" style="width: 40px; height:40px">
                            <a class="nav-link" href="#">C/C++</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    Setting
                </a>
            </div>
        </div>

        <!-- 2. Content -->
        <div id="page-content-wrapper">
            <!-- 2.1 Thanh navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
                <div class="container-fluid px-0">
                    <!-- 2.1.1 Home Logo Link-->
                    <div class="navbar-header">
                        <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        <a class="navbar-brand" href="#"><img src="./img/tdtu_logo.png" alt="" style="height: 30px;"> Classroom</a>
                    </div>
                    <!-- 2.1.2 Join/create control item-->
                    <span class="nav-item ml-auto">
                        <a type="button" class="nav-link" data-toggle="modal" data-target="#addBtnModal" href="#">
                            <i class="fa fa-plus"></i>
                        </a>
                    </span>
                    <!-- 2.1.3 Account item -->
                    <span class="nav-item">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://via.placeholder.com/40x40?text=Avt" width="30" height="30" class="rounded-circle border">
                        </a>
                        <span class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </span>
                    </span>
                </div>
            </nav>

            <!-- 2.2 Tab content -->
            <div class="container-fluid" style="margin-top: 80px;">

                <div class="card-columns">
                    <!-- Load card lớp học của tôi -->
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

                    <!-- Load các lớp học đã đăng ký của người khác -->
                    <!-- Example: 5 time loop -->
                    <?php for ($x = 0; $x < 5; $x++) { ?>
                    <div class="card" style="width:300px">
                        <img src="./img/Code.jpg" class="card-img" alt="image" style="width:100%; height:100px">
                        <div class="row card-img-overlay text-white">
                            <div class="col-10">
                                <h5 class="card-title">Other Classroom</h5>
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
                    <?php } ?>
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
                    <!-- tab form tạo một lớp học -->
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



    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>