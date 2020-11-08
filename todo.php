<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do</title>

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
            <div class="list-group list-group-flush">
                <a href="home.php" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Classroom
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    To-do
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-archive" aria-hidden="true"></i>
                    Storage
                </a>
                <div class="list-group-item list-group-item-action bg-light">
                    <p>Registered:</p>
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
            <!-- 2.1 Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
                <div class="container-fluid px-0">
                    <!-- 2.1.1 Link -->
                    <div class="navbar-header">
                        <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        <a class="navbar-brand" href="todo.php">To-do</a>
                    </div>

                    <!-- 2.1.2 Tab control -->
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="assigned-tab" data-toggle="tab" href="#assigned" role="tab" aria-controls="assigned" aria-selected="true">Assigned</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="missing-tab" data-toggle="tab" href="#missing" role="tab" aria-controls="missing" aria-selected="false">Missing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="done-tab" data-toggle="tab" href="#done" role="tab" aria-controls="done" aria-selected="false">Done</a>
                        </li>
                    </ul>

                    <!-- 2.1.3 Account item -->
                    <span class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle" src="https://via.placeholder.com/40x40?text=Avt" style="width:30px; height:30px">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </div>
                    </span>
                </div>
            </nav>

            <!-- 2.2 Tab content -->
            <div class="container-fluid tab-content" id="myTabContent" style="margin-top: 80px;">
                <!-- 2.2.0 Lựa chọn lớp học -->
                <form action="" method="post">
                    <div class="form-group" style="width: 200px;">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>All classes</option>
                            <option>IELTS Dan</option>
                            <option>Data Structure</option>
                            <option>C/C++</option>
                        </select>
                    </div>
                </form>
                <!-- 2.2.1 Assigned tab-->
                <div class="tab-pane fade show active mt-3" id="assigned" role="tabpanel" aria-labelledby="assigned-tab">
                    <!-- Load card bài tập tại đây-->
                    <div class="card mb-3">
                        <div class="card-body d-flex">
                            <div class="align-self-center mr-3">
                                <i class="fa fa-sticky-note-o fa-2x" aria-hidden="true"></i>
                            </div>
                            <div style="flex: 1;">
                                <a href="#" class="font-weight-bold text-dark stretched-link">Writing task 1</a>
                                <!-- <div class="font-weight-normal">Date post: 20/10/2020</div> -->
                                <div><small>IELTS Dan</small></div>
                                <div><small>Date post: 20/10/2020</small></div>
                            </div>
                            <button class="btn"><i class="fa fa-ellipsis-v fa-lg" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

                <!-- 2.2.2 Missing tab -->
                <div class="tab-pane fade mt-3" id="missing" role="tabpanel" aria-labelledby="missing-tab">
                    Bo Lo
                </div>

                <!-- 2.2.3. Done tab -->
                <div class="tab-pane fade mt-3" id="done" role="tabpanel" aria-labelledby="done-tab">
                    Hoan Thanh
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>