<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
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
                <a class="navbar-brand" href="#">IELTS Dan</a>
            </div>

            <!-- Nut menu khi thay doi ti le man hinh -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                <ul class="navbar-nav ml-auto">
                    <!-- avtar user -->
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle" src="https://via.placeholder.com/50x50?text=Avt" style="width:30px; height:30px">
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
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Classroom
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            To-do
                        </a>
                    </li>
                    <li class="list-group-item ">
                        <p>Registered:</p>
                        <div class="overflow-auto" style="max-height: 100px;">
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
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            Storage
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            Setting
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    <!-- Stream tab-->
                    <div class="tab-pane fade show active" id="stream" role="tabpanel" aria-labelledby="stream-tab">

                        <!-- Up status/document -->
                        <form class="border rounded mb-3" action="" method="post">
                            <!-- text input -->
                            <div class="form-group px-2 pt-3">
                                <label for="exampleFormControlTextarea1">Share with your class</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group row pl-2">
                                <!-- up file -->
                                <div class="col-sm pb-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile"></label>
                                    </div>
                                    <script>
                                        $(".custom-file-input").on("change", function() {
                                            var fileName = $(this).val().split("\\").pop();
                                            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                        });
                                    </script>
                                </div>
                                <!-- submit document -->
                                <div class="col-sm pb-2">
                                    <button type="submit" class="btn btn-primary ">Post</button>
                                </div>
                            </div>
                        </form>

                        <!-- document link card -->
                        <div class="card mb-3">
                            <div class="card-body d-flex">
                                <div class="align-self-center mr-3">
                                    <i class="fa fa-bookmark-o fa-2x" aria-hidden="true"></i>
                                </div>
                                <div style="flex: 1;">
                                    <a href="#" class="font-weight-bold text-dark stretched-link">Keynote 3</a>
                                    <!-- <div class="font-weight-normal">Date post: 20/10/2020</div> -->
                                    <div>
                                        <small>Date post: 20/10/2020</small>
                                    </div>
                                </div>
                                <button class="btn"><i class="fa fa-ellipsis-v fa-lg" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Classwork tab -->
                    <div class="tab-pane fade" id="classwork" role="tabpanel" aria-labelledby="classwork-tab">

                    </div>

                    <!-- People tab -->
                    <div class="tab-pane fade mt-3" id="people" role="tabpanel" aria-labelledby="people-tab">
                        <!-- teacher -->
                        <div class="h4 font-weight-normal text-primary">Teacher</div>
                        <hr>
                        <div class="d-flex bd-highlight mt-3">
                            <img class="rounded-circle mr-3" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image" style="width:40px; height:40px">
                            <div class="align-self-center">Trần Thi Đan</div>
                        </div>
                        <br><br>
                        <!-- classmate -->
                        <span class="h4 font-weight-normal text-primary mr-2">Classmates</span><span class="align-self-center">(2 Students)</span>
                        <hr>
                        <div class="d-flex bd-highlight mt-2">
                            <img class="rounded-circle mr-3" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image" style="width:40px; height:40px">
                            <div class="align-self-center">Tạ Trung Hiếu</div>
                        </div>
                        <div class="d-flex bd-highlight mt-3">
                            <img class="rounded-circle mr-3" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image" style="width:40px; height:40px">
                            <div class="align-self-center">Phạm Hà Giang</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>