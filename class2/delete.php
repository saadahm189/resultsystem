<?php
include '../partial/connection.php';
if (isset($_GET['aid'])) {
    $aid = $_GET['aid'];
}
if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $y = $_GET['class'];
    $query1 = "DELETE FROM student WHERE id=$x and class=$y";
    mysqli_query($conn, $query1);
    $query2 = "DELETE FROM result WHERE Id=$x and Class=$y";
    mysqli_query($conn, $query2);
    // Age foreign key jekhane add korsi sei table e operation hobe then shei data main thable theke remove korte parbpo
    $query3 = "ALTER TABLE login AUTO_INCREMENT=1;";
    mysqli_query($conn, $query3);
    header("Location: /cse/admin.php?id=$x&class=$y&aid=$aid");
    mysqli_close($conn);

}
