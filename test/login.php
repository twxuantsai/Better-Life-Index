<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ITTEAM</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  
	<link href="css/sticky-footer-navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="fbl.js"></script>
  </head>
  <body>
     <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #fff;font:12pt Georgia;opacity:0.8;font-weight:bold;">
      <a class="navbar-brand" style="font-size:18pt;" href="#">ITTEAM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://happinessindex.hol.es/fbpost/login.php">首頁 <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- Begin page content -->
	<header>
	
	</header>
    <div id="container">
		<div id="start">
			<div id="startR">
			<!---fb-->
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10&appId=324635984585359';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<p id="step">你最常在FB貼文中使用的字詞是什麼呢？</p>
				<p id="step1">What are the most often used words in your FB posts?</p>
				<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" onlogin="fb_login()"></div>
			</div>
		</div>
		<div id="rr">
					<div id="step2" style="display:none;">統計結果  RESULT</div>
					<img id="loading" src="css/ajax-loader.gif" style="display:none;"></img>
					<div id="myresult"></div>
		</div>
    </div>

    <footer class="footer">
      <div class="container">
        <span class="text-muted" href="https://www.facebook.com/findtamsui/">Follow Us</span><br>
		<i class="fa fa-facebook-official" style="font-size:40px;color:#aaa;"></i>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  
	<!-- jQuery -->
    <script src="js/jquery-3.1.1.min.js"></script>
	<script src="https://pulipulichen.github.io/jieba-js/jquery.js"></script>
	<script src="https://pulipulichen.github.io/jieba-js/require-jieba-js.js"></script>
	
  </body>
 
</html>