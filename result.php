<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'partial\headNav.php';
    ?>
    <?php include 'partial\connection.php';
    ?>
    <div class="container mt-3">
        <center>
            <h2>Search Here</h2>
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
            <div class="mt-3 mb-3">
                <h6 for="s_id">ID</h6>
                <input type="text" class="form-control" id="s_id" placeholder="Enter ID" name="s_id" required>
            </div>
            <center>
                <input type="submit" name="submit" class="btn btn-primary mt-3" value="Search">
            </center>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $class = $_REQUEST['class'];
        $x = $_REQUEST['s_id'];
        $query = "SELECT * FROM result Where Class=$class and id=$x";
        $query_run = mysqli_query($conn, $query);
    ?>
        <div class="table-responsive m-5">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Total</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $query_run->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Total']; ?></td>
                            <td><?php echo $row['Grade']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
        mysqli_close($conn);
    }
    ?>
    <?php include 'partial\footer.php';
    ?>
</body>

</html>