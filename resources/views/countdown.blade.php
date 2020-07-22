<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<title>开奖倒计时 - 中文乐高</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('css/default/app.min.css') }}" rel="stylesheet" />

	<link href="{{ asset('plugins/countdown/jquery.countdown.css') }}" rel="stylesheet" />
</head>
<body class="bg-white pace-top">
	<div id="page-container" class="page-container fade">
		<div class="coming-soon">
			<div class="coming-soon-header">
				<div class="bg-cover"></div>
				<div class="brand">
                    <img src="logo.png" width="70px" height="70px"><br>
                    <b>中文乐高</b>抽奖
				</div>
				<div class="desc">
					{{ $data['title'] }} <br />
				</div>
				<div class="timer">
					<div id="timer"></div>
				</div>
			</div>
			<div class="coming-soon-content">
				<div class="desc">
					 中文乐高微信公众号粉丝 <b>抽奖</b> 即将开始!<br /> 希望你就是其中一位 <b>幸运儿</b>.
				</div>
			</div>
		</div>
	</div>

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('js/app.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('plugins/countdown/jquery.plugin.min.js') }}"></script>
	<script src="{{ asset('plugins/countdown/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('plugins/countdown/jquery.countdown-zh-CN.js') }}"></script>
    <script>
        $('#timer').countdown({until: new Date('{{ $data['endTime'] }}')});
    </script>
</body>
</html>
