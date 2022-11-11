<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include './class/header.php';

    if (isset($_GET['aid'])) {
        $aid = $_GET['aid'];
    }
    if (isset($_GET['class'])) {
        $class = $_GET['class'];
    }
    // bivinno page theke pass kora id class recieve kore variable a rakhe 
    ?>
    <?php 
    include './partial/connection.php';
    include './class/nav.php';
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
    // after insert del update 
    if (isset($_GET['class'])) {
        $btn = $_REQUEST['class'];
    ?>
        <div class="table-responsive m-5">
            <table class="table table-bordered">
                <h3 class="text-center">Class <?php echo $btn ?></h3>
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
                    where r.class=$btn";
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
            <a href="./class2/create.php?aid=<?php echo $aid; ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Record</a>
        </div>
    <?php
        $result->free();
    }
    //after class button
     else if (isset($_POST['submit'])) {
        $btn = $_REQUEST['submit'];
    ?>
        <div class="table-responsive m-5">
            <table class="table table-bordered">
                <h3 class="text-center">Class <?php echo $btn ?></h3>
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
                    where r.Class=$btn";
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
            <a href="./class2/create.php?aid=<?php echo $aid; ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Record</a>
        </div>
    <?php
        $result->free();
    }
    ?>
</body>

</html>