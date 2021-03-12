<?php
$title = "Панель администрирования";
require("header.php");
if (isset($_SESSION['user_id']))
{
if ($_SESSION['user_id'] == 'admin') {
?>
    <a class="gradient-button1" href="<?= "create.php" ?>">Добавить новость</a>
    <ul>
        <?php
        $res = $mysqli->query("SELECT * FROM Tablica ORDER BY id ASC");
        while ($row = $res->fetch_assoc()) {
        ?>
            <li>
                <div class="news">
                    <img class="round" src="Images/<?= $row['image'] ?>">
                    <div class="news_text">
                        <h1> <?= $row['title'] ?> </h1>
                        <p class="anonce"> <?= $row['announce'] ?> </p>
                        <a href="<?= "news.php?page=" . $row['id']; ?>" class="gradient-button">Подробнее</a>
                        <a class="gradient-button" href="<?= "update.php?page=" . $row['id'] ?>">Редактировать новость</a>
                        <a class="gradient-button" href="<?= "delete.php?page=" . $row['id'] ?>">Удалить новость</a>
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
<?php
} else
    echo "Нужно авторизироваться";
}
?>