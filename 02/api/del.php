<?php
include("./db.php");
    $id = $_POST['id'];
    $sql = "DELETE FROM tickets WHERE id = $id";
    $stmt = $pdo->query($sql);

    echo "success";
?>