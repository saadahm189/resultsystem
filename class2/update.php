<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../partial/connection.php';
    if (isset($_GET['aid'])) {
        $aid = $_GET['aid'];
    }
    ?>
    <?php
    if (isset($_POST['update'])) {
        $user_id = $_GET['id'];
        $user_class = $_GET['class'];
        $class = $_POST['class'];
        $s_id = $_POST['s_id'];
        $name = $_POST['name'];
        $bangla = $_POST['bangla'];
        $english = $_POST['english'];
        $math = $_POST['math'];
        $pass = $_POST['pass'];
        $total = $bangla + $english + $math;
        if ($bangla < 33 && $english < 33 && $math < 30) {
            $s_grade = 'Failed';
        } else {
            if ($bangla >= 33 && $english >= 33 && $math >= 33) {
                if ($total >= 90 && $total < 120) {
                    $s_grade = 'D';
                } else if ($total >= 120 && $total < 180) {
                    $s_grade = 'C';
                } else if ($total >= 180 && $total < 210) {
                    $s_grade = 'B';
                } else if ($total >= 210 && $total < 240) {
                    $s_grade = 'A';
                } else if ($total >= 240 && $total <= 300) {
                    $s_grade = 'A+';
                } else {
                    $s_grade = 'Failed!';
                }
            } else {
                $s_grade = 'Held';
            }
        }
        if ($bangla > 100 or $english > 100 or $math > 100) {
            echo "Not valid marks";
        } else if ($bangla < 0 or $english < 0 or $math < 0) {
            echo "Not valid marks";
        } else {
            $sql1 = "UPDATE `result` SET `class`='$class',`id`='$s_id', `name`='$name', `Bangla`='$bangla', `English`='$english', `Math`='$math', `Total`='$total', `Grade`='$s_grade' WHERE `ID`='$user_id' and `Class`='$user_class'";
            mysqli_query($conn, $sql1);
            $sql2 = "UPDATE `student` SET `class`='$class',`id`='$s_id', `pass`='$pass' WHERE `id`='$user_id' and `class`='$user_class'";
            mysqli_query($conn, $sql2);
            header("Location: /cse/admin.php?id=$user_id&class=$user_class&aid=$aid");
        }
    }
    if (isset($_GET['id'])) {

        $user_id = $_GET['id'];
        $user_class = $_GET['class'];

        $sql = "SELECT * FROM result r
        LEFT JOIN student s
        ON r.ID=s.id and r.Class=s.class WHERE r.ID='$user_id' and r.Class='$user_class'";

        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                $class = $row['Class'];
                $s_id = $row['ID'];
                $name = $row['Name'];
                $bangla = $row['Bangla'];
                $english = $row['English'];
                $math = $row['Math'];
                $pass = $row['pass'];
            }

    ?>
            <div class="container mt-3">
                <h2>User Update Form</h2>


                <form method="post" action="">
                    <legend>Personal information:</legend>
                    <div class="mb-3 mt-3">
                        <label for="username">Class:</label>
                        <input type="text" class="form-control" name="class" value="<?php echo $class; ?>" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="username">Student Id:</label>
                        <input type="text" class="form-control" name="s_id" value="<?php echo $s_id; ?>" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="username">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="username">Bangla:</label>
                        <input type="text" class="form-control" name="bangla" value="<?php echo $bangla; ?>" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="username">English:</label>
                        <input type="text" class="form-control" name="english" value="<?php echo $english; ?>" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="username">Math:</label>
                        <input type="text" class="form-control" name="math" value="<?php echo $math; ?>" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="username">Pass:</label>
                        <input type="text" class="form-control" name="pass" value="<?php echo $pass; ?>" required>
                    </div>

                    <center>
                        <input type="submit" class="btn btn-primary" value="Update" name="update">
                    </center>
                </form>

            </div>



</body>

</html>

<?php

        } else {
        }
    }

?>
</body>

</html>