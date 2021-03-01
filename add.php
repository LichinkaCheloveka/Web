<?php
    $title = "Добавить новость";
    require("header.php");
if ($_SESSION['user_id'] == NULL) : ?>
    <p>Нужно залогиниться.</p>
<?php else : ?>
    <form action="create.php" method="POST">
        <p>Введите заголовок:<br>
            <input type="text" name="title" />
        </p>
        <p>Введите анонс: <br>
            <textarea rows="5" cols="80" name="announce"></textarea><br><br>
        <p>Введите текст: <br>
            <textarea rows="15" cols="80" name="text"></textarea><br><br>
        <p>Введите имя картинки: <br>
            <input type="text" name="image" />
        </p>
        <input name="submitChanges" type="submit" value="Добавить" />
    </form>
<?php
    require("footer.php");
    endif;
?>