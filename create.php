<?php
require ("admin_header.php");
$uploaddir = '/Users/pavelparaev/Downloads/Images/';
$uploadfile = $uploaddir.basename($_FILES['image']['name']);
if(isset($_SESSION['login']))
	{
if (isset($_POST['submitChanges']))
{
 $date = $_POST['date'];
 $title = $_POST['title'];
 $announcement = $_POST['announce'];
 $text_news = $_POST['text'];
 $image = $uploadfile;
 //print($_FILES['image']['tmp_name']);
move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);
//if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir)) { 
//   echo "Файл корректен и был успешно загружен.\n";
//    var_dump($_FILES);
//} else {
//    echo "Error!\n";
//   var_dump($_FILES);
//}
 if (!($stmt = $mysqli->prepare("INSERT INTO Tablica(date, title, announce, text, image) VALUES (?,?,?,?,?)")))
 	echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
 if (!$stmt->bind_param("sssss",$date, $title, $announcement, $text_news, $image))
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
