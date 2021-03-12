<?php
$title = "Новостной сайт";
require("header.php");
$main_page = "index.php";
if (isset($_SESSION['user_id'])) 
    if ($_SESSION['user_id'] == 'admin') 
        $main_page = "admin_index.php";
?>
<div id="current_news">
    <?php $id = $_GET["page"];
    $res = $mysqli->query("SELECT * FROM Tablica WHERE id = $id");
    $res->data_seek(0);
    $row = $res->fetch_assoc() ?>
    <img class="round" src="Images/<?= $row["image"]; ?>" align="center">
    <div class="news_text">
        <h1 style="text-align:center"><?= $row["title"]; ?></h1>
        <p><?= $row["text"]; ?></p>
        <a href=<?= $main_page?> class="gradient-button">На главную</a>
    </div>
</div>
<time><?= $row['date'] ?></time>
<?php
require("footer.php");
?>