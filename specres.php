<!DOCTYPE html>
<html lang="en">

<head>
    <title>Specific Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid pt-2 pb-2 bg-dark text-white text-center">
        <h1>Student's Specific Result</h1>
    </div>
    <div>
        <ul class="navbar-nav bg-success">
            <li class="nav-item">
                <a class="nav-link active" style="color:white;float:left" href="./slogout.php">LOGOUT</a>
            </li>
        </ul>
    </div>
    <?php include 'partial\connection.php';
    if (isset($_GET['sid'])) {
        $sid = $_GET['sid'];
    }
    if (isset($_GET['sclass'])) {
        $sclass = $_GET['sclass'];
    }
    ?>
    <div class="container-fluid" style="display: inline-block;">
        <div class="table-responsive m-5">
            <center>
                <h3>Class <?php echo $sclass; ?></h3>
            </center>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Total</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM result r
                    LEFT JOIN student s
                    ON r.ID=s.id and r.Class=s.class 
                    where r.ID=$sid and r.Class=$sclass";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Bangla']; ?></td>
                            <td><?php echo $row['English']; ?></td>
                            <td><?php echo $row['Math']; ?></td>
                            <td><?php echo $row['Total']; ?></td>
                            <td><?php echo $row['Grade']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</body>

</html>