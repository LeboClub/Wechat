<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>获奖结果 - 中文乐高</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/css/one-page-parallax/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body data-spy="scroll" data-target="#header" data-offset="51">
	<!-- begin #page-container -->
	<div id="page-container" class="fade">

		<!-- begin #team -->
		<div id="team" class="content" data-scrollview="true">
			<div class="container">
				<h2 class="content-title">获奖名单</h2>
				<p class="content-desc">
					为了感谢中文乐高的粉丝，从在 2020 年 7 月 15 日前关注中文乐高微信公众号的网友中随机选取两名幸运儿，赠送乐高机器人 Boost 套装各一套<br />
					幸运儿如下。
				</p>
				<div class="row text-center">
                    @foreach($luckyers as $luckyer)
    					<div class="col-md-6 col-sm-12">
    						<div class="team">
    							<div class="image animate__animated animate__fadeInDownBig" data-animation="true" data-animation-type="flipInX">
    								<img src="{{ $luckyer['headimgurl'] }}" alt="Ryan Teller" />
    							</div>
    							<div class="info">
    								<h3 class="name animate__animated animate__fadeInUpBig">{{ $luckyer['nickname'] }}</h3>
    								<div class="title text-primary animate__animated animate__fadeInUpBig">关注日期：{{ Date('Y-m-d', $luckyer['subscribe_time']) }}</div>
    							</div>
    						</div>
    					</div>
                    @endforeach
				</div>
			</div>
		</div>

		<!-- begin #footer -->
		<div id="footer" class="footer">
			<div class="container">
				<div class="footer-brand">
                    <img src="logo.png" width="50px" height="50px"><br>
					中文乐高
				</div>
				<p>
					&copy; Copyright cmnxt 2019 <br />
					An admin & front end theme with serious impact. Created by <a href="#">SeanTheme</a>
				</p>
			</div>
		</div>
		<!-- end #footer -->

	</div>
	<!-- end #page-container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/js/one-page-parallax/app.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</body>
</html>
