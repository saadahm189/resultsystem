<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand bg-success navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./admin.php?aid=<?php echo $aid; ?>"">Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./searchadmin.php?aid=<?php echo $aid; ?>"">Search Result</a>
                </li>
                <li class=" nav-item">
                        <a class="nav-link active" href="./editadmin.php?aid=<?php echo $aid; ?>">Edit Admin</a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link active" href="./editnotice.php?aid=<?php echo $aid; ?>">Edit Notice</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>