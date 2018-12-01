<?php
  $file = file_get_contents('history.json');
  $usageCount = json_decode($file, true);
 ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RiFlowTH</title>

  	<!-- Include Libraries -->
    <link rel="shortcut icon" href="https://cdn.riflowth.me/image/VectierLogo.png">
    <link rel="stylesheet" href="https://cdn.riflowth.me/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="https://cdn.riflowth.me/fontawesome/css/all.min.css">
  	<link rel="stylesheet" href="https://cdn.riflowth.me/css/styles.css">

  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  	<meta name="description" content="SkinFile Generator for SkinsRestorer">
  	<meta name="keywords" content="RiFlowTH, VectierThailand, Vectier">
  	<meta name="author" content="RiFlowTH">

    <style>
      body, html{
        font-family: -apple-system,BlinkMacSystemFont,Roboto,"Segoe UI","Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji","Pridi";
      }
    </style>
  </head>
  <body class="bg-light">
    <!-- Navigator -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm px-lg-5 stricky-top">
      <p class="navbar-brand mb-0">
        <img src="https://cdn.riflowth.me/image/VectierLogo.png" width="30" height="30" class="d-inline-block align-top rounded-circle mr-1" alt="">
        <span>Vectier</span>
      </p>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <div class="navbar-nav ml-auto mt-lg-0 mt-2">
          <a class="nav-item btn btn-sm btn-pill btn-info" href="https://api.riflowth.me"><i class="fas fa-plus"></i> Another API</a>
        </div>
      </div>
    </nav>

  	<section id="banner">
  		<div class="container p-5 text-center">
  			<h1>SkinFile Generator <small class="lead">v.1.0</small></h1>
  			<p class="mb-1">Create skin files for <u>SkinsRestorer!</u></p>
        <p class="mt-3 mb-1"><i class="fas fa-wrench"></i> <small>Developed by <a href="https://www.facebook.com/alphabet.romeo.90" target="_blank">RiFlowTH</a></small></p>
  		</div>
  	</section>

    <section id="main" class="box-shadow">
      <div class="container p-5">
        <div class="row">
          <!-- API Information -->
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="list-group shadow">
              <li class="list-group-item border-0">
                <div class="absolute-fixed-top pt-1 bg-dark"></div>
  							<blockquote class="blockquote mb-0">
                  <p class="mb-0"><i class="fas fa-coins text-warning"></i> Feel free to use!</p>
                  <span class="blockquote-footer"> By <cite>RiFlowTH</cite></span>
                </blockquote>
  						</li>
              <li class="list-group-item border-top border-left-0 border-right-0 border-bottom-0">
  							<blockquote class="blockquote mb-0">
  								<p class="mb-0"><i class="fas fa-unlock text-danger"></i> Unlimited usage!</p>
  								<span class="blockquote-footer"> It's <cite>good so NICE!!</cite></span>
  							</blockquote>
  						</li>
            </ul>
          </div>
          <!-- Uploader -->
          <div class="col-lg-5 mb-lg-0 mb-4">
            <div class="position-relative bg-white shadow rounded-1 p-4">
              <div class="absolute-fixed-top pt-1 bg-dark"></div>
              <p><i class="fas fa-star text-warning"></i> Select your skin file(s)!</p>
              <form id="uploadFile" method="post">
                <div class="custom-file">
                  <input name="file" class="custom-file-input" type="file">
                  <label class="custom-file-label text-truncate">Choose skins(s)...</label>
                </div>
                <button class="btn btn-success mt-3 w-100" type="submit">Upload!</button>
              </form>
            </div>
          </div>
          <!-- API Information -->
          <div class="col-lg-3 text-center">
            <div class="position-relative bg-white shadow rounded-1 p-4">
              <div class="absolute-fixed-top pt-1 bg-dark"></div>
              <h6><i class="fas fa-signal text-success"></i> API Status <span class="badge badge-success">ONLINE</span></h6>
              <h6 class="mb-0"><i class="fas fa-users"></i> Usage <u id="usageCount"><?php echo $usageCount; ?></u> times</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="Information" class="bg-white shadow">
      <div class="container p-5">
        <h5>😊 I'm very happy if you want to contribute this API <small>#skinfilegenerator</small></h5>
        <p>&mdash; We hope you will help us. <cite>LOL</cite></p>
        <a class="btn btn-outline-primary px-3 mb-lg-0 mb-1" href="https://github.com/riflowth" target="_blank"><i class="fab fa-github"></i> GitHub</a>
        <a class="btn btn-outline-danger px-3 mb-lg-0 mb-1" href="https://github.com/riflowth" target="_blank"><i class="fab fa-github"></i> Report issue</a>
        <a class="btn btn-outline-success px-3 mb-lg-0 mb-1" href="https://github.com/riflowth" target="_blank"><i class="fab fa-github"></i> Pull request</a>
        <div class="row my-5">
          <div class="col-lg-3 col-md-4 col-6">
            <img class="w-100 shadow rounded-circle animate-zoom-1" src="https://cdn.riflowth.me/image/avatar.jpg" alt="RiFlowTH Avatar">
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <img class="w-100 shadow rounded-circle animate-zoom-1" src="https://cdn.riflowth.me/image/VectierLogo.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark">
			<div class="text-white-50 text-center py-2">
				<div class="row m-0">
					<div class="col-4">
						<small><i class="fas fa-balance-scale"></i> <u>Terms</u></small>
						<small>+</small>
						<small><i class="fas fa-user-secret"></i> <u>Privacy</u></small>
					</div>
					<div class="col-4">
						<small><i class="fas fa-broadcast-tower"></i> Powered by <u>Vectier</u></small>
					</div>
					<div class="col-4">
						<small><i class="fas fa-copyright"></i> Vectier 2018</small>
					</div>
				</div>
			</div>
		</footer>

    <!-- Include JavaScripts -->
    <script src="https://cdn.riflowth.me/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.riflowth.me/js/bootstrap-4.1.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
	  <script src="Libraries/core.js"></script>
  </body>
</html>
