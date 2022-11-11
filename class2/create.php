<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../partial/connection.php';
    if (isset($_GET['aid'])) {
        $aid = $_GET['aid'];
    }
    ?>
    <div class="container m-5">
        <form method="POST" action="">
            <select class="form-select" name="class" aria-label="Default select example" required>
                <option selected>Select a class here</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
            <div class="form-group mb-3 mt-3">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="bangla">Bangla:</label>
                <input type="text" class="form-control" id="bangla" name="bangla" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="english">English:</label>
                <input type="text" class="form-control" id="english" name="english" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="math">Math:</label>
                <input type="text" class="form-control" id="math" name="math" required>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="pass">Password:</label>
                <input type="text" class="form-control" id="pass" name="pass" required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $cls = $_REQUEST['class'];
        $s_id = $_REQUEST['id'];
        $s_name = $_REQUEST['name'];
        $bangla = $_REQUEST['bangla'];
        $english = $_REQUEST['english'];
        $math = $_REQUEST['math'];
        $pass = $_REQUEST['pass'];
        $total = $bangla + $english + $math;
        if ($bangla < 33 && $english < 33 && $math < 30) {
            $s_grade = 'Failed';
        } else {
            if ($bangla >= 33 && $english >= 33 && $math >= 33) {
                if ($total >= 90 && $total < 120) {
                    $s_grade = 'D';
                } else if ($total >= 120 && $total < 180) {
                    $s_grade = 'C';
                } else if ($total >= 180 && $total < 210) {
                    $s_grade = 'B';
                } else if ($total >= 210 && $total < 240) {
                    $s_grade = 'A';
                } else if ($total >= 240 && $total <= 300) {
                    $s_grade = 'A+';
                } else {
                    $s_grade = 'Failed!';
                }
            } else {
                $s_grade = 'Held';
            }
        }
        //chek whether id already exists:
        $sql = "SELECT * FROM result WHERE Class='$cls' AND ID='$s_id'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {

            echo "Already Exits ID!";
        } else {
            if ($bangla > 100 or $english > 100 or $math > 100) {
                echo "Not valid marks";
            } else if ($bangla < 0 or $english < 0 or $math < 0) {
                echo "Not valid marks";
            } else {
                $query1 = "INSERT INTO result (Class,ID,Name,Bangla,English,Math,Total,Grade)
            VALUES ($cls,$s_id,'$s_name','$bangla','$english','$math','$total','$s_grade')";
                $query2 = "INSERT INTO student (class,id,pass)
            VALUES ('$cls','$s_id','$pass')";
                mysqli_query($conn, $query1);
                mysqli_query($conn, $query2);
                header("Location: /cse/admin.php?class=$cls&aid=$aid");
            }
        }
        mysqli_close($conn);
    }
    ?>
</body>

</html>