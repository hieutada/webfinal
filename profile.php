<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/simple-sidebar.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- 1. Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper" style="margin-top: 60px;">
            <div class="list-group list-group-flush">
                <a href="index.php" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Classroom
                </a>
                <a href="todo.php" class="list-group-item list-group-item-action bg-light">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    To-do
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
                    <i class="fa fa-archive" aria-hidden="true"></i>
                    Storage
                </a>
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
                        <span class="navbar-brand">Profile</span>
                    </div>
                </div>
            </nav>

            <!-- 2.2 Tab content -->
            <div class="container" style="margin-top: 70px;">
                <div class="card">
                    <div class="card-body">
                        <div class="e-profile">
                            <div class="row">
                                <div class="col-12 col-sm-auto mb-3">
                                    <div class="mx-auto d-flex justify-content-center align-items-center">
                                        <img src="https://via.placeholder.com/140x140" alt="" width="140" height="140">
                                    </div>
                                </div>
                                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                                        <p class="mb-0">@johnny.s</p>
                                        <div class="text-muted"><small>Revised December 20, 2020</small></div>
                                        <div class="mt-2">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fa fa-fw fa-camera"></i>
                                                <span>Change Photo</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item active nav-link">Settings</li>
                            </ul>
                            <form class="form mt-3" novalidate="">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control" type="text" name="name" value="John Smith">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input class="form-control" type="text" name="username" value="johnny.s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control" type="text" value="0833432056">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3">
                                        <div class="mb-2"><b>Change Password</b></div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Current Password</label>
                                                    <input class="form-control" type="password" placeholder="••••••">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input class="form-control" type="password" placeholder="••••••">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                    <input class="form-control" type="password" placeholder="••••••"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <button class="btn btn-primary mr-2" type="submit">Save Changes</button>
                                        <button class="btn btn-secondary">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
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