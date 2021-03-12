<?php
    session_start();
    require("connect_db.php");
    $mysqli = connect_db();
    if (isset($_POST['submit-auth']))
    {
        $query = mysqli_query($mysqli,"SELECT login, password FROM users WHERE login='".mysqli_real_escape_string($mysqli,$_POST['login'])."' LIMIT 1");

        if(mysqli_num_rows($query) > 0)
        {
            $data = mysqli_fetch_assoc($query);
            if ($data['password'] == ($_POST['password']))
            {
                $_SESSION['user_id'] = $_POST['login'];
                echo  $_SESSION['user_id'];
                echo "Авторизация прошла успешно";
                header ('Location: admin_index.php'); 
                exit();
            }
            else
            header ('Location: login.php'); 
            echo "Неправильный пароль";
        }
        else
        header ('Location: login.php');
        echo "Неправильный логин";
    }
?>