<?php
require ("admin_header.php");
if (isset($_POST['submitChanges']))
{
 $title = $_POST['title'];
 $announcement = $_POST['announce'];
 $text_news = $_POST['text'];
 $image = $_POST['image'];
 if (!($stmt = $mysqli->prepare("INSERT INTO Tablica(date, title, announce, text, image)
 VALUES (current_timestamp(),?,?,?,?)")))
 echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
 if (!$stmt->bind_param("ssss", $title, $announcement, $text_news, $image))
 echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
 if (!$stmt->execute())
 echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
 $stmt->close();
    header ('Location: admin_index.php');
}
?>