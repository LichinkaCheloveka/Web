<?php
    $title = "Авторизация";
    require("header.php");
?>
    <div class="input-container">
        <img src="https://dwstroy.ru/lessons/les3373/demo/img/men.png">
        <form action="authorization.php" method="POST"> 
            <div>
                <input type="text" name="login" placeholder="Введите логин"><br><br>
            </div>
            <div>
                <input type="password" name="password" placeholder="Введите пароль"><br><br>
            </div>
            <input class="gradient-button" type="submit" name="submit-auth" value="ВОЙТИ">
        </form>
    </div>
    <?php
        require("footer.php");
    ?>
</body>