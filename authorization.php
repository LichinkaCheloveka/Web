<?php
    session_start();
    $mysqli = new mysqli("localhost", "root", "", "News");
    if ($mysqli->connect_errno)
        echo "Не удалось подключиться к MySQL:(". $mysqli->connect_errno .") ".$mysqli->connect_error;

    if (isset($_POST['submit-auth']))
    {
        $query = mysqli_query($mysqli,"SELECT login, password FROM users WHERE login='"
        .mysqli_real_escape_string($mysqli,$_POST['login'])."' LIMIT 1");

        if(mysqli_num_rows($query) > 0)
        {
            $data = mysqli_fetch_assoc($query);
            if ($data['password'] == ($_POST['password']))
            {
                $_SESSION['user_id'] = $_POST['login'];
                echo "Авторизация прошла успешно";
                $_SESSION['login']=1;
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