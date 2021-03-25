<?php	
	require('header.php');
	if (isset($_SESSION['user_id']))
	{
	if ($_SESSION['user_id'] == 'admin') 
	{
?>
<section class="large-gap about-me about-version-two">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="standard-posts">
              <div class="row">
                <div class="col-lg-12">
    <form action="create_exec.php" method="POST" enctype="multipart/form-data">
        <div>
            <p>Введите заголовок:<br>
                <input type="text" name="title">
            </p>
            <p>Введите анонс: <br>
                <textarea rows="5" cols="80" name="announce"></textarea><br><br>
            <p>Введите текст: <br>
                <textarea rows="15" cols="80" name="text"></textarea><br><br>
            <p>Введите Дату: <br>
                <input type="date" name="date" value="<?=date("Y.m.d")?>">
            </p><br>
            <p>Добавьте картинку<br>
                <input type="hidden" value="30000">
                <input type="file" name="image">
            </p>

            <input name="submitChanges" type="submit" value="Добавить">
        </div>
    </form>
          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
   
  <?php
} else echo("Please Log in");
}
?>

    <!-- Scripts -->
    <script src="scripts/vendors/jquery-3.4.1.min.js"></script>
    <script src="scripts/vendors/jquery.hoverIntent.min.js"></script>
    <script src="scripts/vendors/jquery.appear.js"></script>
    <script src="scripts/vendors/jquery.countTo.js"></script>
    <script src="scripts/main.js"></script>

