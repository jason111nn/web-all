<?php
    include("./db.php");

    $sql = "INSERT INTO `tickets` (`firstname`, `lastname`, `phone`, `password`) 
            VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['phone']}', '{$_POST['password']}')";
    
    $result = $pdo->exec($sql);
    echo $result > 0 ? "成功" : "失敗";
?>
