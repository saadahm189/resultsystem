<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create New Notice</title>
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
    <div class="container m-5">
        <form method="POST" action="">
            <div class="form-group mb-3 mt-3">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="notice">Notice:</label>
                <input type="text" class="form-control" id="notice" name="notice" required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $date = $_REQUEST['date'];
        $notice = $_REQUEST['notice'];
        $query = "INSERT INTO notice (Date,Message)
        VALUES ('$date','$notice')";
        $query_run = mysqli_query($conn, $query);
        header("Location: /cse/editnotice.php?aid=$aid"); // Ei file a redirected hobe button press er pore //plus id class pass kore jate admin recive kore button e pass kore jate button press na korei direct table show kore
        mysqli_close($conn);
    }
    ?>
</body>

</html>