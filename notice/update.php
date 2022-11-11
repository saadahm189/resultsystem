<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Notice</title>
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
        $dt = $_POST['dt'];
        $msg = $_POST['msg'];
        $sql = "UPDATE `notice` SET `Date`='$dt',`Message`='$msg' WHERE `ID`='$user_id'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            header("Location: /cse/editnotice.php?aid=$aid");
            echo "Record updated successfully.";
        } else {

            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
    if (isset($_GET['id'])) {

        $user_id = $_GET['id'];

        $sql = "SELECT * FROM `notice` WHERE `id`='$user_id'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                $dt = $row['Date'];

                $msg = $row['Message'];
            }
    ?>
       <div class="container mt-3">
            <h2>User Update Form</h2>
            <form action="" method="post">
                <input type="date" class="form-control"  name="dt" value="<?php echo $dt; ?>" required>
                <br>
                <input type="text" class="form-control"   name="msg" value="<?php echo $msg; ?>" required>
                <br>
                <input type="submit" class="btn btn-primary"  value="Update" name="update">
            </form>
        </div>
    <?php
        }
    }
    ?>
</body>

</html>