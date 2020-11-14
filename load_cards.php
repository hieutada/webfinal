<?php
// Load card lớp học của tôi - ko hiện avatar
$sql1 = "SELECT * FROM `classes` WHERE id_teacher = '$id_user'";
$result1 = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_assoc($result1)) {
?>
    <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
        <div class="card border-bottom-0 rounded-0">
            <img class="card-img-top" src="img/Code.jpg">
            <div class="card-img-overlay">
                <h5 class="card-title"><?php echo $row["classname"] ?></h5>
                <div class="card-text"><?php echo $row["description"] ?></div>
            </div>
            <div class="card-block"></div>
        </div>
        <div class="card border-top-0 rounded-0">
            <div class="card-footer border-0">
                <a class="btn btn-secondary float-left btn-sm" href="classes.php">See classroom</a>
                <button class="btn float-right btn-sm"><i class="fa fa-ellipsis-v fa-lg"></i></button>
            </div>
        </div>
    </div>
<?php
}
// Load các lớp học đẫ ĐK của người khác - hiện avatar
$sql2 = "SELECT `classes`.* FROM `joinclass`, `classes` WHERE `joinclass`.`id_student` = '$id_user' AND `joinclass`.`id_class`=`classes`.`id_class`";
$result2 = mysqli_query($conn, $sql2);
while ($row = mysqli_fetch_assoc($result2)) {
?>
    <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
        <div class="card border-bottom-0 rounded-0">
            <img class="card-img-top" src="img/Code.jpg">
            <div class="card-img-overlay">
                <h5 class="card-title"><?php echo $row["classname"] ?></h5>
                <div class="card-text"><?php echo $row["description"] ?></div>
            </div>
            <div class="card-block">
                <figure class="profile">
                    <img src="https://picsum.photos/200/150/?random" class="profile-avatar" alt="">
                </figure>
            </div>
        </div>
        <div class="card border-top-0 rounded-0">
            <div class="card-footer border-0">
                <button class="btn btn-secondary float-left btn-sm">See classroom</button>
                <button class="btn float-right btn-sm"><i class="fa fa-ellipsis-v fa-lg"></i></button>
            </div>
        </div>
    </div>
<?php
}
?>