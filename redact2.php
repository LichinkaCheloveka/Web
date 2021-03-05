<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "News");
if ($mysqli->connect_errno)
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    if(isset($_SESSION['login']))
	{
if (isset($_POST['submitChanges']))
{
    $id = $_POST['id'];
    $title = $_POST['title'];
    $announce = $_POST['announce'];
    $text = $_POST['text'];
    $date = $_POST['date'];
    $image = $_POST['image'];
    if (!($stmt = $mysqli->prepare("UPDATE Tablica 
    SET title=?, announce=?, text=?, date=?, image=? WHERE id=?")))
        echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
    if (!$stmt->bind_param("ssssss", $title, $announce, $text, $date, $image, $id))
        echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
    if (!$stmt->execute())
        echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
    $stmt->close();
    header ('Location: admin_index.php');
}
	}
	else
	echo "Нужно авторизоваться";
?>

