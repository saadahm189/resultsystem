<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'class\header.php';
    ?>
    <?php include 'class\nav.php';
    ?>
    <?php include 'partial\connection.php';
        if (isset($_GET['aid'])) {
            $aid = $_GET['aid'];
        }
        if (isset($_GET['class'])) {
            $class = $_GET['class'];
        }
        // bivinno page theke pass kora id class recieve kore variable a rakhe 
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
    ?>
        <div class="table-responsive m-5">
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
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM result r
                    LEFT JOIN student s
                    ON r.ID=s.id and r.Class=s.class 
                    where r.class=$class and r.id=$x";
                    $result = mysqli_query($conn, $sql);
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
                            <td><?php echo $row['pass']; ?></td>
                            <td>
                                <a class="btn btn-info" href="./class2/update.php?id=<?php echo $row['ID']; ?>&class=<?php echo $row['Class']; ?>&aid=<?php echo $aid; ?>">Edit</a>&nbsp;
                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" href="./class2/delete.php?id=<?php echo $row['ID'];  ?>&class=<?php echo $row['Class']; ?>&aid=<?php echo $aid; ?>">Delete</a>
                            </td>
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