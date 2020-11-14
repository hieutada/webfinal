<div class="list-group list-group-flush">
    <a href="index.php" class="list-group-item list-group-item-action bg-light">
        <i class="fa fa-home" aria-hidden="true"></i> Classroom
    </a>
    <a href="todo.php" class="list-group-item list-group-item-action bg-light">
        <i class="fa fa-tasks" aria-hidden="true"></i> To-do
    </a>
    <div class="list-group-item list-group-item-action bg-light">
        <p><i class="fa fa-tags" aria-hidden="true"></i> Registered:</p>
        <!-- Load các lớp học tại đây -->
        <?php
        $sql1 = "SELECT * FROM `classes` WHERE id_teacher = '$id_user'";
        $result1 = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_assoc($result1)) {
        ?>
            <div class="overflow-auto">
                <div class="d-flex bd-highlight mb-2">
                    <img class="rounded-circle" src="https://via.placeholder.com/40x40?text=Avt" alt="Teacher Image">
                    <a class="nav-link" href="#"><?php echo $row["classname"] ?></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <a href="#" class="list-group-item list-group-item-action bg-light">
        <i class="fa fa-archive" aria-hidden="true"></i> Storage
    </a>
    <a href="#" class="list-group-item list-group-item-action bg-light">
        <i class="fa fa-cog" aria-hidden="true"></i> Setting
    </a>
</div>