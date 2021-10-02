
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
  var i, j, k;
  var arr1 = [
   [$('#a_1').val(), $('#a_2').val(), $('#a_3').val()],
   [$('#a_4').val(), $('#a_5').val(), $('#a_6').val()],
   [$('#a_7').val(), $('#a_8').val(), $('#a_9').val()]
  ];
  var arr2 = [
    [$('#b_1').val(), $('#b_2').val(), $('#b_3').val()],
    [$('#b_4').val(), $('#b_5').val(), $('#b_6').val()],
    [$('#b_7').val(), $('#b_8').val(), $('#b_9').val()]
  ];
  var arr3 =[
   [0, 0, 0],
   [0, 0, 0],
   [0, 0, 0]
  ];

  for(i=0; i<3; i++)
  {
   for(j=0; j<3; j++)
   {
    for(k=0; k<3; k++)
     arr3[i][j] = arr3[i][j] + arr1[i][k] * arr2[k][j];
   }
  }

  m = 1;
  for(i=0; i<3; i++)
  {
   for(j=0; j<3; j++)
   {
     $("#c_"+m).html(arr3[i][j]);
     m++;
   }
  }
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
                      <h3>Calculate 3x3 Matrix </h3>
                      <div class="post-project-fields">
                        <form method="post" action="#" enctype="multipart/form-data">
                          <div class="row">

                            <div class="col-lg-12" style="padding-bottom: 15px;font-weight: 700;">Matrix A</div>
                            <div class="row col-lg-12">
                              <div class="col-lg-4"><input type="number" id="a_1"></div>
                              <div class="col-lg-4"><input type="number" id="a_2"></div>
                              <div class="col-lg-4"><input type="number" id="a_3"></div>
                            </div>
                            <div class="row col-lg-12">
                              <div class="col-lg-4"><input type="number" id="a_4"></div>
                              <div class="col-lg-4"><input type="number" id="a_5"></div>
                              <div class="col-lg-4"><input type="number" id="a_6"></div>
                            </div>
                            <div class="row col-lg-12">
                              <div class="col-lg-4"><input type="number" id="a_7"></div>
                              <div class="col-lg-4"><input type="number" id="a_8"></div>
                              <div class="col-lg-4"><input type="number" id="a_9"></div>
                            </div>

                            <div class="col-lg-12" style="padding-bottom: 15px;font-weight: 700;">Matrix B</div>
                            <div class="row col-lg-12">
                              <div class="col-lg-4"><input type="number" id="b_1"></div>
                              <div class="col-lg-4"><input type="number" id="b_2"></div>
                              <div class="col-lg-4"><input type="number" id="b_3"></div>
                            </div>
                            <div class="row col-lg-12">
                              <div class="col-lg-4"><input type="number" id="b_4"></div>
                              <div class="col-lg-4"><input type="number" id="b_5"></div>
                              <div class="col-lg-4"><input type="number" id="b_6"></div>
                            </div>
                            <div class="row col-lg-12">
                              <div class="col-lg-4"><input type="number" id="b_7"></div>
                              <div class="col-lg-4"><input type="number" id="b_8"></div>
                              <div class="col-lg-4"><input type="number" id="b_9"></div>
                            </div>

                            <div class="col-lg-12">
                              <ul>
                                <li><button class="active" type="button" onclick="clickMe()" value="Convert">Calculate</button></li>
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
                        <p style="padding-top: 15px;">Output Value :</p>
                        <div class="row col-lg-12">
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_1" style="font-weight: 700;"></span></div>
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_2" style="font-weight: 700;"></span></div>
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_3" style="font-weight: 700;"></span></div>
                        </div>
                        <div class="row col-lg-12">
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_4" style="font-weight: 700;"></span></div>
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_5" style="font-weight: 700;"></span></div>
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_6" style="font-weight: 700;"></span></div>
                        </div>
                        <div class="row col-lg-12">
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_7" style="font-weight: 700;"></span></div>
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_8" style="font-weight: 700;"></span></div>
                          <div class="col-lg-2" style="margin-bottom: 10px;"><span id="c_9" style="font-weight: 700;"></span></div>
                        </div>
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
