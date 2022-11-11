<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../partial/connection.php';
    ?>
    <?php
    if (isset($_POST['update'])) {
        $aid = $_GET['aid'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "UPDATE `login` SET `username`='$username',`password`='$password' WHERE `id`='$aid'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            header("Location: /cse/editadmin.php?aid=$aid");
            echo "Record updated successfully.";
        } else {

            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
    if (isset($_GET['aid'])) {

        $aid = $_GET['aid'];

        $sql = "SELECT * FROM `login` WHERE `id`='$aid'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                $username = $row['username'];

                $password = $row['password'];
            }
    ?>

<div class="container mt-3">
<h2>User Update Form</h2>
        <form method="post" action="">
            <div class="mb-3 mt-3">
                <label for="username">Username:</label>
                <input type="text" class="form-control"  name="username" value="<?php echo $username; ?>"  required>
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="text" class="form-control"  name="password" value="<?php echo $password; ?>" required>
            </div>
           
            <input type="submit"  class="btn btn-primary" value="Update" name="update">
  
        </form>
    </div>



</body>

</html>

<?php

        } else {

            header('Location: /cse/editadmin.php?');
        }
    }

?>
</body>

</html>