<?php
$title = "Новостной сайт";
$button_href = "login.php";
$button_href_name = "Войти";
require("header.php");
?>
<?php
$res = $mysqli->query("SELECT * FROM Tablica ORDER BY id ASC");
//  echo "Исходный порядок строк...\n";
?>
<ul>
    <?php
    while ($row = $res->fetch_assoc()) {
    ?>
        <li>
            <div class="news">
                <img class="round" src="Images/<?= $row['image'] ?>">
                <div class="news_text">
                    <h1> <?= $row['title'] ?> </h1>
                    <p class="anonce"> <?= $row['announce'] ?> </p>
                    <a href="<?= "news.php?page=" . $row['id'] ?>" class="gradient-button">Подробнее</a>
                </div>
            </div>
            <time><?= $row['date'] ?></time><br>
        </li>
    <?php
    }
    ?>
</ul>
<?php
require("footer.php");
?>