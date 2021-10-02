
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
</head>

<?php
$results_1 = '';
if(isset($_REQUEST['page_num']))
{
  $page_num = $_REQUEST['page_num'];
} else {
  $page_num = '1';
}
if(isset($_REQUEST['mode']))
{
  if($_REQUEST['mode']=='add_news')
  {
    $filename = $_FILES["upload_file"]["name"];
    $tempname = $_FILES["upload_file"]["tmp_name"];
    $rnd=rand(999,10000);
    $fin_file = "Post_".$rnd."_".$filename;
    $folder = "posts/".$fin_file;
    if (move_uploaded_file($tempname, $folder))  {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
    $data = array(
    "file_url" => $folder,
    "message" => $_POST['message']
    );
    $apiurl     = 'http://localhost:4020/posts/add';
    $data_array = json_encode( $data );
    $curl       = curl_init();
    curl_setopt( $curl, CURLOPT_URL, $apiurl );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
    curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
    $result = curl_exec( $curl );
    curl_close( $curl );
  }
}
$data = array(
"page_no" => $page_num-1
);
$apiurl     = 'http://localhost:4020/posts/list';
$data_array = json_encode( $data );
$curl       = curl_init();
curl_setopt( $curl, CURLOPT_URL, $apiurl );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
$result = curl_exec( $curl );
$results_1 = json_decode( $result, true );
curl_close( $curl );

/*$data = array(
"file_url" => $_POST['email'],
);
$apiurl     = 'http://157.245.104.237:3010/api/req_details/1';
$data_array = json_encode( $data );
$curl       = curl_init();
curl_setopt( $curl, CURLOPT_URL, $apiurl );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
//curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
$result = curl_exec( $curl );
echo "<pre>";
echo "dsfgdgfgfggggggggggg";
print_r( json_decode( $result, true ) );
echo "</pre>";
curl_close( $curl );*/
?>
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
                      <h3>Post News </h3>
                      <div class="post-project-fields">
                        <form method="post" action="index.php?mode=add_news" enctype="multipart/form-data">
                          <div class="row">


                            <div class="col-lg-12">
                              <label class="btn btn-default" type="button" style="margin-bottom: 5px;background: #e44d3a;color: #fff;">
                                  <i class="la la-paperclip"></i> <input type="file" name="upload_file" hidden>
                              </label>
                            </div>
                            <!--<div class="col-lg-12">
                              <input type="file" name="upload_file" placeholder="upload_file">
                            </div>-->
                            <div class="col-lg-12">
                              <textarea name="message" placeholder="Description"></textarea>
                            </div>
                            <div class="col-lg-12">
                              <ul>
                                <li><button class="active" type="submit" value="post">Post</button></li>
                              </ul>
                            </div>
                          </div>
                        </form>
                      </div><!--post-project-fields end-->
                      <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                    </div>
									</div><!--post-topbar end-->
									<div class="posts-section">

                    <?php if(!empty($results_1)) { for($i=0; $i<count($results_1); $i++) { ?>
                    <div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="http://via.placeholder.com/50x50" alt="">
													<div class="usy-name">
														<h3>John Doe</h3>
														<span><img src="images/clock.png" alt="">3 min ago</span>
													</div>
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
												</div>
											</div>

											<div class="job_descp">
												<p><?php print_r($results_1[$i]['message']); ?></p>
												<img src="<?php print_r($results_1[$i]['file_url']); ?>" alt="" style="max-width: 100%;max-height: 100%;">
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li><a href="#"><i class="la la-heart"></i> Like</a></li>
													<li><a href="#"><i class="la la-comment"></i> Comment 15</a></li>
												</ul>
												<a><i class="la la-eye"></i>Views 50</a>
											</div>
										</div><!--post-bar end-->
                  <?php } ?>
                  <?php if($i>4) { ?>
                  <nav aria-label="Page navigation example" class="full-pagi">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link pvr" href="index.php?page_num=<?php echo $page_num-1; ?>">Previous</a></li>
                    <?php if($page_num>'1') { ?>
                      <li class="page-item"><a class="page-link" href="index.php?page_num=<?php echo $page_num-1; ?>"><?php echo $page_num-1; ?></a></li>
                    <?php } ?>
                    <li class="page-item"><a class="page-link active" href="index.php?page_num=<?php echo $page_num; ?>"><?php echo $page_num; ?></a></li>
                    <li class="page-item"><a class="page-link" href="index.php?page_num=<?php echo $page_num+1; ?>"><?php echo $page_num+1; ?></a></li>
                    <li class="page-item"><a class="page-link pvr" href="index.php?page_num=<?php echo $page_num+1; ?>">Next</a></li>
                  </ul>
                  </nav>
                <?php } ?>
                <?php } else { ?>
                    No datas found. Click Previous or page number
                    <nav aria-label="Page navigation example" class="full-pagi">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link pvr" href="index.php?page_num=<?php echo $page_num-1; ?>">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="index.php?page_num=1">1</a></li>
                      <li class="page-item"><a class="page-link pvr" href="#">No items available</a></li>
                    </ul>
                    </nav>
                  <?php } ?>

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
