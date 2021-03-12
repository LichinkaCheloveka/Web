<?php
session_start();
require("connect_db.php");
$mysqli = connect_db();
$uploaddir = 'Images/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
if (isset($_SESSION['user_id'])) {
	if ($_SESSION['user_id'] == 'admin') {
		if (isset($_POST['submitChanges'])) {
			$date = $_POST['date'];
			$title = $_POST['title'];
			$announcement = $_POST['announce'];
			$text_news = $_POST['text'];
			$image = $_FILES['image']['name'];
			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
				echo "Файл корректен и был успешно загружен.\n";
			} else {
				echo "Error!\n";
			}
			if (!($stmt = $mysqli->prepare("INSERT INTO Tablica(date, title, announce, text, image) VALUES (?,?,?,?,?)")))
				echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
			if (!$stmt->bind_param("sssss", $date, $title, $announcement, $text_news, $image))
				echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
			if (!$stmt->execute())
				echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
			$stmt->close();
			header('Location: admin_index.php');
		}
	} else
		echo "Нужно авторизоваться";
}
