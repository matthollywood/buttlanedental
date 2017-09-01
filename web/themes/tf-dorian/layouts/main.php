<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<html>
    <head>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo $this->theme->baseUrl ?>/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo $this->theme->baseUrl ?>/css/style.css"  media="screen,projection"/>

    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="author" content="Imre Mehesz">
    	<meta name="description" content="A simple design based on Material UI and MaterializeCSS.">
    	<meta name="robots" content="all">
    </head>

    <body>
    	<?php $this->beginBody() ?>
      <div class="container">

        <!-- Navbar goes here -->

        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo right"><?php echo Html::encode(\Yii::$app->name); ?></a>
  					<?php
	  					echo Menu::widget([
	  					  'options' => [
	  					    "id"  => "nav-mobile",
	  					    "class" => "left side-nav"
	  					  ],
						    'items' => [
						        ['label' => 'Home', 'url' => ['site/index']],
						        ['label' => 'About', 'url' => ['site/about']],
						        ['label' => 'Contact', 'url' => ['site/contact']],
						        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
						    ],
		  				]);
			  		?>
            <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
          </div>
        </nav>

        <!-- Page Layout here -->
        <div class="row">

          <div class="left col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
            <p>
              <?php echo $content; ?>
            </p>
          </div>

          <div class="right col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
            <div class="card">
              <div class="card-image">
                <img src="<?php echo $this->theme->baseUrl ?>/images/tooth.jpg">
                <span class="card-title">Butt Lane Dental</span>
              </div>
              <div class="card-content">
                <p>Opening Hours:<br>
                  Monday & Tuesday:<br>11.00am - 2.00pm and 3.00pm - 7.00pm<br>
                  Wednesday: <br>8.15am - 12.15pm and 1.30pm - 4.15pm <br>
                  Thursday & Friday: <br>9.00am - 1.00pm and 2.00pm - 5.00pm</p>
              </div>
              <div class="card-action">
                <?= Html::a('Contact Us', ['site/contact'])?></a>
              </div>
            </div>
          </div>

        </div>

        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="grey-text">Footer Content</h5>
                <p class="grey-text text-lighten-1">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="grey-text">Links</h5>
                <li><a class="grey-text" href="#!">Link 1</a></li>
                <li><a class="grey-text" href="#!">Link 2</a></li>
                <li><a class="grey-text" href="#!">Link 3</a></li>
                <li><a class="grey-text" href="#!">Link 4</a></li>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container grey-text center">
            &copy; 2015 ThemeFactory.net
            </div>
          </div>
        </footer>

      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/materialize.min.js"></script>
      <script type="text/javascript">
        $(function(){
          $(".button-collapse").sideNav();
        });
      </script>
      <?php $this->endBody(); ?>
    </body>
  </html>
  <?php $this->endPage(); ?>
