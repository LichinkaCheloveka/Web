<?php
$title="Редактировать новость";
session_start();
if ($_SESSION['user_id'] == NULL): ?>
<p>Нужно залогиниться.</p>
<?php else: 
require('header.php');?>
<body>
     <?php $id = $_GET["page"];
          $res = $mysqli->query("SELECT * FROM Tablica WHERE id = $id");
          $res->data_seek(0);
      $row = $res->fetch_assoc() ?>
      <div id="content">
      <div id="news1">
      <form action="redact2.php" method="POST">
        <input name="id" type="hidden" value="<?= $row["id"];?>">
        <input name="title" value="<?= $row["title"];?>"><br><br>
        <textarea rows="5" cols="80" name="announce"><?= $row["announce"];?></textarea><br><br>
        <textarea rows="15" cols="80" name="text"><?= $row["text"];?></textarea><br><br>
        <input type="datetime-local" name="date" value="<?= $row["date"];?>"><br><br>
        <input name="image" value="<?= $row["image"];?>"><br><br>
        <input name="submitChanges" type="submit" value="Сохранить" />
      </form>
      </div>
  	</div> 
  	</body>
</html>
<?php endif; ?>
