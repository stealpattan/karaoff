<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/common/all_page_common.css">
	<link rel="stylesheet" type="text/css" href="css/frontPage/frontPageMain.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
	<title>music-off</title>
</head>
	<body class="d-flex flex-column body_style" style="min-height: 100vh">
		<div class="navbar-fixed-top navbar navbar-expand-sm bg-light navbar-light">
			<nav id="top_nav_bar" class="navbar-expand-md">
				<div class="horizontal_item" id="site_title_on_top_nav_bar">
					KARAOKEオフ
				</div>
				<!-- toggler button -->
				<button class="navbar-toggler nav_content_on_right" type="button" data-toggle="collapse" data-target="#navContent"  aria-controlls="navContent" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="horizontal_item collapse navbar-collapse nav_content_on_right" id="navContent">
					<div class="horizontal_item button_on_nav_bar_all" id="func_button_on_nav_bar">
						<div class="horizontal_item nav_func">
							<button class="all_button_on_nav_bar">
								ログイン
							</button>
						</div>
						<div class="horizontal_item nav_func">
							<button class="all_button_on_nav_bar">
								新規登録
							</button>
						</div>
					</div>
					<div class="horizontal_item nav_func">
						<input type="text" name="search_text_box">
						<button class="button_on_nav_bar_all all_button_on_nav_bar">
							探す 
						</button>
					</div>
				</div>
			</nav>
		</div>

		@yield('content')

		<div id="footer">
			Contact us.
		</div>
		<!-- js libralies... -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>