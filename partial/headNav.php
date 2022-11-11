<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .navbar .navbar-nav .nav-link:hover {
        background-color: black;
        color: white;
    }

    .news-content {
        color: red;
    }
</style>


<body>
    <?php
    include 'connection.php';
    ?>
    <?php
    $sql = "SELECT * FROM notice ORDER BY ID DESC LIMIT 3";
    $result = $conn->query($sql);
    ?>
    <div class="container-fluid pt-2 pb-2 bg-dark text-white text-center">
        <h1>Sadipur Cantonment Public School and College</h1>
        <h4>Saidpur, Nilphamari</h4>
    </div>
    <div class="container-fluid">
        <div class="news">
            <marquee class="news-content">
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <p3 style="color: black;">
                        <b>
                            <?php echo $row['Date']; ?>
                        </b>
                    </p3>
                    <p3>
                        <?php echo $row['Message']; ?>
                    </p3>
                <?php
                }
                ?>
            </marquee>
        </div>
    </div>


    <nav class="navbar navbar-expand bg-success navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="allresult.php">Merit List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="result.php">Search Result</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="slogin.php">Student Login</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>