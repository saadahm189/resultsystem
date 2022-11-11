<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'partial\headNav.php';
    ?>
    <?php include 'partial\connection.php';
    ?>
    <div class="container mt-5">
        <center>
            <h2 class="mt-5">Admin Login</h2>
        </center>
        <form method="post" action="">
            <div class="mb-3 mt-3">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter username" name="username" required>
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
        $uname = $_POST['username'];
        $query = "select * from login where username = '$uname'";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            if ($row['username'] == $_POST['username']) {
                if ($row['password'] == $_POST['password']) {
                    header("Location: admin.php?aid=$row[ID];");
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
</body>

</html>