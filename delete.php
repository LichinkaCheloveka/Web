<?php
session_start();
if ($_SESSION['user_id'] == NULL)
    echo "нужно войти";
else
    {
        $mysqli = new mysqli("localhost", "root", "", "News");
        if ($mysqli->connect_errno)
            echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        $id = $_GET["page"];
        $query ="DELETE FROM Tablica WHERE id = '$id'";
        $result = mysqli_query($mysqli, $query);
        header ('Location: admin_index.php');
    }
?>
