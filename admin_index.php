<?php
	require('header.php');
	if (isset($_SESSION['user_id']))
	{
	if ($_SESSION['user_id'] == 'admin') 
	{
?>
	
	<div class="main-banner">
      <div class="container expanded">
        <div class="owl-big-banner owl-carousel">
	        <?php
	            $res = $mysqli->query("SELECT title, announce, image FROM Tablica ORDER BY id");
	            $row = $res->fetch_assoc();
	            for ($i = 1; $i <= 3; $i++, $row = $res->fetch_assoc()){
			?> 
          <div class="item">
            <div class="overlay"></div>
            <img src="Images/<?=$row['image']?>" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>TOP News</span>
                </div>
                <a href="#"><h4><em><?=$row['title']?></em></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?=$row['date']?></a></li>
                  <li><a href="#">6 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php
	          }
	      ?>          
       </div>
        </div>
      </div>
    </div>
<section class="medium-gap standard-home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="standard-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="standard-post">
				  	<a href="<?= "create.php" ?>">Добавить новость</a>
            	  </div>
          		</div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<?php
$res = $mysqli->query("SELECT * FROM Tablica ORDER BY id DESC");
    while ($row = $res->fetch_assoc()) { 
?>
    <section class="large-gap about-me about-version-two">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="standard-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="standard-post">
                    <div class="post-image">
                      <a href="<?= "news.php?page=" . $row['id']; ?>"><img src="Images/<?=$row['image']?>" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="meta-category">
                        <span>News</span>
                      </div>
                      <a href="<?= "news.php?page=" . $row['id']; ?>"><h4><em><?= $row['title']?></em></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?= $row['date']?></a></li>
                        <li><a href="#">Admin</a></li>
                      </ul>
                      <p><?= $row['announce']?></p>
                      <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="comments-info">
                            <i class="fa fa-comment-o"></i>
                            <span>8 comments</span>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <ul class="share-post">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="<?= "update.php?page=" . $row['id'] ?>">Редактировать</a>,</li>
                            <li><a href="<?= "delete.php?page=" . $row['id'] ?>">Удалить</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
	    }
	?>
    
    <div class="instagram-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="instagram-account">
              <div class="widget-content">
                <div class="widget-header">
                  <h4><a href="#">@AboutUs</a></h4>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="instagram-item">
                      <img src="Images/about1.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="instagram-item">
                      <img src="Images/about2.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="instagram-item">
                      <img src="Images/about3.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="instagram-item">
                      <img src="Images/about4.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="footer-social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
              <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
              <li><a href="#"><i class="fa fa-behance"></i> Behance</a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i> Linkedin</a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>all rights reserved. <a href="#">Paraev Pavel, Redut Anatoly, Netyagin Mihail</a> 2020.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


  </body>
</html>
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
