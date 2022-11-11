<?php
include '../partial/connection.php';
if (isset($_GET['aid'])) {
    $aid = $_GET['aid'];
}
if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $query = "DELETE FROM notice WHERE id=$x";
    $query_run = mysqli_query($conn, $query);
    // Reseted auto increament after otherwise it increase after even delete
    $query2 = "ALTER TABLE notice AUTO_INCREMENT=1;";
    $query_run = mysqli_query($conn, $query2);
    header("Location: /cse/editnotice.php?id=$x&aid=$aid");
    mysqli_close($conn);
}
