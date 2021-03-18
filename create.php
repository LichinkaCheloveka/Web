<?php
session_start();
require("header.php");
require("connect_db.php");
$mysqli = connect_db();
date_default_timezone_set('UTC');
if (isset($_SESSION['user_id']))
{
if ($_SESSION['user_id'] == 'admin') 
{ 
?>
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
                <input type="date" name="date" value="<?php date("d.m.Y")?>">
            </p><br>
            <p>Добавьте картинку<br>
                <input type="hidden" value="30000">
                <input type="file" name="image">
            </p>

            <input name="submitChanges" type="submit" value="Добавить">
        </div>
    </form>
<?php
} else echo("Please Log in");
}
?>

   <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

    <!-- Scripts -->
    <script src="scripts/vendors/jquery-3.4.1.min.js"></script>
    <script src="scripts/vendors/jquery.hoverIntent.min.js"></script>
    <script src="scripts/vendors/perfect-scrollbar.min.js"></script>
    <script src="scripts/vendors/jquery.easing.min.js"></script>
    <script src="scripts/vendors/wow.min.js"></script>
    <script src="scripts/vendors/parallax.min.js"></script>
    <script src="scripts/vendors/isotope.min.js"></script>
    <script src="scripts/vendors/imagesloaded.pkgd.min.js"></script>
    <script src="scripts/vendors/packery-mode.pkgd.min.js"></script>
    <script src="scripts/vendors/owl-carousel.min.js"></script>
    <script src="scripts/vendors/jquery.appear.js"></script>
    <script src="scripts/vendors/jquery.countTo.js"></script>
    <script src="scripts/main.js"></script>
