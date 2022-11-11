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
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM login  where ID='$aid' ";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <a class="btn btn-info" href="./class/update.php?aid=<?php echo $aid; ?>">Edit</a>&nbsp;
                        </td>
                    </tr>
                <?php
                }
                $result->free();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>