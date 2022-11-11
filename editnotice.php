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
    ?>
    <?php 
    include './partial/connection.php';
    include './class/nav.php';
    ?>
    <div class="table-responsive m-5">
            <table class="table table-bordered">
                <h3 class="text-center">Notice Board</h3>
                <thead class="table-dark">
                    <tr>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM notice";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['Date']; ?></td>
                            <td><?php echo $row['Message']; ?></td>
                            <td>
                                <a class="btn btn-info" href="./notice/update.php?id=<?php echo $row['ID']; ?>&aid=<?php echo $aid; ?>">Edit</a>&nbsp;
                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" href="./notice/delete.php?id=<?php echo $row['ID']; ?>&aid=<?php echo $aid; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="./notice/create.php?aid=<?php echo $aid; ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Notice</a>
        </div>



</body>

</html>