
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>News Feed</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<script>
function clickMe(){
  let num = $('#deci_num').val();
  let binary = (num % 2).toString();
  for (; num > 1; ) {
      num = parseInt(num / 2);
      binary =  (num % 2) + (binary);
  }
  $("#dis_bin").html(binary);
  /*let x = $('#deci_num').val();
  let bin = 0;
    let rem, i = 1, step = 1;
    while (x != 0) {
        rem = x % 2;

        x = parseInt(x / 2);
        bin = bin + rem * i;
        i = i * 10;
    }
    $("#dis_bin").html(bin);*/
}
</script>
</head>

<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="index.php" title="">
									<span><img src="images/icon1.png" alt=""></span>
									Home
								</a>
							</li>
              <li>
								<a href="binary.php" title="">
									<span><img src="images/icon2.png" alt=""></span>
									Number to Binary
								</a>
							</li>
              <li>
								<a href="matrix.php" title="">
									<span><img src="images/icon3.png" alt=""></span>
									3x3 Matrix
								</a>
							</li>
						</ul>
					</nav><!--nav end-->
				</div><!--header-data end-->
			</div>
		</header><!--header end-->

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="http://via.placeholder.com/100x100" alt="">
												</div>
											</div><!--username-dt end-->
											<div class="user-specs">
												<h3>John Doe</h3>
												<span>Graphic Designer at Self Employed</span>
											</div>
										</div><!--user-profile end-->
										<ul class="user-fw-status">
											<li>
												<h4>Following</h4>
												<span>34</span>
											</li>
											<li>
												<h4>Followers</h4>
												<span>155</span>
											</li>
											<li>
												<a href="#" title="">View Profile</a>
											</li>
										</ul>
									</div><!--user-data end-->
								</div><!--main-left-sidebar end-->
							</div>


              <div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
									<div class="post-topbar">
                    <div class="post-project">
                      <h3>Convert Decimal to Binary </h3>
                      <div class="post-project-fields">
                        <form method="post" action="#" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-lg-12">
                              <input type="number" id="deci_num">
                            </div>
                            <div class="col-lg-12">
                              <ul>
                                <li><button class="active" type="button" onclick="clickMe()" value="Convert">Convert</button></li>
                              </ul>
                            </div>
                          </div>
                        </form>
                      </div><!--post-project-fields end-->
                      <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                    </div>
									</div><!--post-topbar end-->

									<div class="posts-section">
                    <div class="post-bar">
                      <div class="job_descp">
                        <p style="padding-top: 15px;">Binary Value : <span id="dis_bin" style="font-weight: 700;">0</span></p>
                      </div>
                    </div><!--post-bar end-->
									</div><!--posts-section end-->

								</div><!--main-ws-sec end-->
							</div>

							<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
									<div class="widget widget-about">
										<img src="images/wd-logo.png" alt="">
										<h3>Testing Project</h3>
										<span>This is test content</span>
										<div class="sign_link">
											<h3><a href="#" title="">Sign up</a></h3>
											<a href="#" title="">Learn More</a>
										</div>
									</div><!--widget-about end-->
								</div><!--right-sidebar end-->
							</div>

						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>

	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
