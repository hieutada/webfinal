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
    <title>Assignment</title>

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
                        <a class="navbar-brand" href="#"><img src="./img/tdtu_logo.png" alt=""> Assignment Name</a>
                    </div>
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
                    <div class="col-sm-9">
                        <!-- 2.2.1 Hiển thị thông tin bài tập -->
                        <div>
                            <h4 class="">Titile Assignment</h4>
                            <div class="text-secondary">Tran Thi Dan | Aug 18 </div> <!-- Lấy tên giao viên và Ngày tháng đăng -->
                            <div class="text-secondary"><b>100 points</b></div>
                        </div>
                        <hr>
                        <!-- 2.2.2 Phần hiển thị nội dung chi tiết bài tập -->
                        <div class="h5">
                            Phân tích hình tượng Sóng trong bài thơ cùng tên của Xuân Quỳnh để cảm nhận về tâm hồn người phụ nữ trong tình yêu
                            qua bài thơ, từ đó liên hệ với hình tượng người phụ nữ Việt ngày nay?
                            <!-- đang xử lý hiển thị file, download -->
                        </div>
                        <hr>
                        <!-- 2.2.3 Phần hiện comment -->
                        <div>
                            <h5 class="text-secondary pb-2"><i class="fa fa-comments-o" aria-hidden="true"></i> Class comments</h5>
                            <!-- Load comment của những người khác tại đây -->
                            <div class="d-flex mt-3">
                                <img class="rounded-circle mr-3" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image">
                                <div>
                                    <h6>Nguyễn Thành Long</h6>
                                    <div>
                                        Trời ơi bài khó quá vậy thầy!
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex mt-3">
                                <img class="rounded-circle mr-3" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image">
                                <div>
                                    <h6>Đinh Hồng Hà</h6>
                                    <div>
                                        Game Esay :))
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- Comment của tôi -->
                            <div class="row mt-3">
                                <div class="col-1">
                                    <img class="rounded-circle" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image">
                                </div>
                                <div class="col-11">
                                    <form action="" method="POST" class="d-flex">
                                        <input type="text" class="form-control input-lg" placeholder="">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2.2.2 Hiển thị phần nộp bài -->
                    <div class="col-sm-3">
                        <div class="d-flex mb-3">
                            <h5>Your work</h5>
                            <div class="ml-auto">Status</div>
                        </div>
                        <div>
                            <!-- div hiển thị file, liên kết hoặc text đã upload -->
                        </div>
                        <div class="dropdown show mb-3">
                            <a class="btn btn-secondary btn-block dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-plus mr-2" aria-hidden="true"></i>Add or create
                            </a>
                            <div class="dropdown-menu text-secondary" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLink">
                                    <i class="fa fa-link mr-2" aria-hidden="true"></i>
                                    <span>Link</span>
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalFile">
                                    <i class="fa fa-file mr-2" aria-hidden="true"></i>
                                    <span>File</span>
                                </a>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#modalText">
                                    <i class="fa fa-file-text-o mr-2" aria-hidden="true"></i>
                                    <span>Text</span>
                                </a>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block">Turn in</button>
                    </div>
                </div>

                <!-- modal turn in File-->
                <div class="modal fade" id="modalFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body mx-3">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <h5>Choose your file</h5>
                                        <input type="file" class="custom-file-input" id="customFile" name="turnFile">
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                    <div class="modal-footer d-flex">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal turn in Link-->
                <div class="modal fade" id="modalLink" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body mx-3">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <h5>Paste your answer</h5>
                                        <input type="text" name="turnLink" class="form-control">
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                    <div class="modal-footer d-flex">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal turn in Text-->
                <div class="modal fade" id="modalText" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body mx-3">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <h5>Input your answer</h5>
                                        <textarea name="turnText" class="form-control" rows="3"></textarea>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                    <div class="modal-footer d-flex">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="main.js"></script>
</body>

</html>