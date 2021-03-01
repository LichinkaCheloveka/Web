<?php
$mysqli = new mysqli("localhost", "root", "", "News");
if ($mysqli->connect_errno) 
    {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Новости</title>
    <link href="index.css" rel="stylesheet" type="text/css" />
</head>

<body>
        <header>
            <div id="logo"><img id="logo_image" src="Images/logo.PNG" alt=""></div>
            <div id="head_text">Новостная лента</div>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="index.php" id="menu">Новости</a>
                </li>
                <li>
                    <a href="" id="menu">О нас</a>
                </li>
                <li>
                <a href="login.php" id="menu">Войти</a>
            </li>
            </ul>
        </nav>
        <div id="container">
            <div id="content">
                <div id="current_news">
                <?php $id = $_GET["page"];
                    $res = $mysqli->query("SELECT * FROM Tablica WHERE id = $id");
                    $res->data_seek(0);
                    $row = $res->fetch_assoc() ?> 
                    <img class="round" src="Images/<?=$row["image"]; ?>" align="center">
                    <div class="news_text">
                        <h1 style="text-align:center"><?=$row["title"];?></h1>
                        <p><?=$row["text"];?></p>
                        <a href="index.php" class="gradient-button">На главную</a>
                    </div>
                </div>
            </div>
        </div>
    <footer>Редут А.Ю. Нетягин М.С. Параев П.А.</footer>
</body>

</html>