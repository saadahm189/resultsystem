<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
        ob_start();
    ?>
    <?php include 'partial\headNav.php';
    ?>
    <?php include 'partial\connection.php';
    ?>
    <div class="container mt-5">
        <center>
            <h2 class="mt-5">Studnet Login</h2>
        </center>
        <form method="post" action="">
            <select class="form-select" name="class" aria-label="Default select example">
                <option selected>Select a class here</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
            <div class="mb-3 mt-3">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" required>
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>
            <center>
                <input type="submit" name="submit" class="btn btn-primary" value="Log In">
                <input type="reset" class="btn btn-secondary">
            </center>

        </form>
    </div>
    <?php

    if (isset($_POST['submit'])) {
        $s_class = $_POST['class'];
        $s_id = $_POST['id'];
        $query = "select * from student where class ='$s_class' and id = '$s_id'";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            if ($row['id'] == $_POST['id']) {
                if ($row['pass'] == $_POST['password']) {
                    header("Location:specres.php?sid=$row[id]&sclass=$row[class]");
                } else {
                    echo "Wrong Password";
                }
            } else {
                echo "Email doesn't match";
            }
        }
    }
    ?>
    <?php include 'partial\footer.php';
    ?>
    <?php 
        ob_flush();
    ?>
</body>

</html>