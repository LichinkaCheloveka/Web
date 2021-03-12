<?php
date_default_timezone_set('UTC');
$title = "Добавить новость";
require("header.php");
if (isset($_SESSION['user_id']))
{
if ($_SESSION['user_id'] == 'admin') { ?>
    <form action="create_exec.php" method="POST" enctype="multipart/form-data">
        <div id="container1">
            <p>Введите заголовок:<br>
                <input type="text" name="title">
            </p>
            <p>Введите анонс: <br>
                <textarea rows="5" cols="80" name="announce"></textarea><br><br>
            <p>Введите текст: <br>
                <textarea rows="15" cols="80" name="text"></textarea><br><br>
            <p>Введите Дату: <br>
                <input type="date" name="date" value="2020-03-05" min="1971-01-01" max="2050-12-31">
            </p><br>
            <p>Добавьте картинку<br>
                <input type="hidden" value="30000">
                <input type="file" name="image">
            </p>

            <input class="gradient-button" name="submitChanges" type="submit" value="Добавить">
        </div>
    </form>
<?php
    require("footer.php");
} else
    echo "Нужно авторизоваться";
}
?>