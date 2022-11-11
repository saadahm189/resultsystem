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
    <!-- PHOTO -->
    <div class="container-fluid" style="display: flex;">
        <img src="./img//img1.jpg" class="d-block w-100" alt="Hello">
        <img src="./img//img2.jpg" class="d-block w-100" alt="There">
    </div>
    <!-- RESULT TOP THREE -->
    <center>
        <h2 class="mt-5">TOP THREE RESULTS OF WHOLE SCHOOL</h2>
    </center>

    

        <div class="container-fluid" style="display: inline-block;">
            <div class="table-responsive m-5">
                <h3>Class 1</h3>
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
                        $sql = "SELECT * FROM result where class=1 ORDER BY Total DESC LIMIT 3";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Total']; ?></td>
                                <td><?php echo $row['Grade']; ?></td>
                            </tr>
                        <?php
                        }
                        $result->free();
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive m-5">
                <h3>Class 2</h3>
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
                        $sql = "SELECT * FROM result where class=2 ORDER BY Total DESC LIMIT 3";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Total']; ?></td>
                                <td><?php echo $row['Grade']; ?></td>
                            </tr>
                        <?php
                        }
                        $result->free();
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive m-5">
                <h3>Class 3</h3>
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
                        $sql = "SELECT * FROM result where class=3 ORDER BY Total DESC LIMIT 3";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Total']; ?></td>
                                <td><?php echo $row['Grade']; ?></td>
                            </tr>
                        <?php
                        }
                        $result->free();
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive m-5">
                <h3>Class 4</h3>
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
                        $sql = "SELECT * FROM result where class=4 ORDER BY Total DESC LIMIT 3";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Total']; ?></td>
                                <td><?php echo $row['Grade']; ?></td>
                            </tr>
                        <?php
                        }
                        $result->free();
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive m-5">
                <h3>Class 5</h3>
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
                        $sql = "SELECT * FROM result where class=5 ORDER BY Total DESC LIMIT 3";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Total']; ?></td>
                                <td><?php echo $row['Grade']; ?></td>
                            </tr>
                        <?php
                        }
                        $result->free();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include 'partial\footer.php';
        ?>
</body>

</html>