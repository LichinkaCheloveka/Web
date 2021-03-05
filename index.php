<?php
    $title = "Новостной сайт";
    require("header.php");
    unset($_SESSION['login']);
?>
    <?php
	    $res = $mysqli->query("SELECT * FROM Tablica ORDER BY id ASC");
		while ($row = $res->fetch_assoc()) 
		{
    ?>
        	<ul>
                <li>
                    <div class="news">
                        <img class="round" src="Images/<?=$row['image']?>">
                        <div class="news_text">
                            <h1> <?=$row['title']?> </h1>
                            <p class="anonce"> <?=$row['announce']?> </p>
                            <a href="news.php?page=<?=$row['id']?>" class="gradient-button">Подробнее</a>
                            <p><time><?=$row['date']?></time></p>
                        </div>
                    </div>
				</li>
            </ul>
		<?php
		}
      	?>
	<?php
        require("footer.php");
    ?>
</body>
</html>