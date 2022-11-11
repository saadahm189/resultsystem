<!DOCTYPE html>
<html lang="en">

<head>
    <title>Merit List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'partial\headNav.php';
    ?>
    <?php include 'partial\connection.php';
    ?>
    <h4 class="m-5">Select Class</h4>
    <center>
        <div class="container" style="display:flex ;">

            <form method="POST" action="" style="margin: 15px;">
                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="1">
            </form>
            <form method="POST" action="" style="margin: 15px;">
                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="2">
            </form>
            <form method="POST" action="" style="margin: 15px;">
                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="3">
            </form>
            <form method="POST" action="" style="margin: 15px;">
                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="4">
            </form>
            <form method="POST" action="" style="margin: 15px;">
                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="5">
            </form>
        </div>
    </center>
    <?php
    if (isset($_POST['submit'])) {
        $btn = $_REQUEST['submit'];
        $merit = 1;
    ?>
        <div class="table-responsive m-5">
            <table class="table table-bordered">
                <h3 class="text-center">Class <?php echo $btn ?></h3>
                <thead class="table-dark">
                    <tr>
                        <th>Position</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Total</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM result where class=$btn ORDER BY Total DESC";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $merit; ?></td>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Total']; ?></td>
                            <td><?php echo $row['Grade']; ?></td>
                        </tr>
                    <?php
                        $merit++;
                    }
                    ?>
                </tbody>
            <?php
            $result->free();
        }
            ?>
</body>

</html>