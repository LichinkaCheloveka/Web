<?php
	session_start();
    $title = "Добавить новость";
    require("admin_header.php");
    	if(isset($_SESSION['login']))
	{ ?>
    <form action="create.php" method="POST">
	    <div id="container1">
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
        <input class="gradient-button" name="submitChanges" type="submit" value="Добавить" />
        </div>
    </form>
<?php
    require("footer.php");
    }
    else
    echo "Нужно авторизоваться";
?>