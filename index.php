<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="lib/stylea.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
<body class="">
	<div class="login-bg container">
		<div class="row">
			<div class="col-xs-10 col-xs-push-1 col-sm-6 col-sm-push-3 col-md-4 col-md-push-4 col-lg-4 col-lg-push4">

<div class="dropdown dangki">
	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	  Đăng Kí
	</button> <!-- end button dangki -->
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	    
					<form action="lib/idangki.php" method="POST" role="form" class="text-center">
						<div class="form-group">
							<label for="">Tên người dùng</label>
							<input type="text" class="form-control" id=""  required="" name="name">
						</div> <!-- end tên người dùng -->

						<div class="form-group">
							<label for="">Tên tài khoản</label>
							<input type="text" class="form-control" id=""  required="" name="username">
						</div> <!-- end tên đăng nhập -->

						<div class="form-group">
							<label for="">Mật khẩu</label>
							<input type="text" class="form-control" id=""  required="" name="password">
						</div>  <!-- end mật khẩu -->

						<div class="form-group">
							<label for="">Xác nhận mật khẩu</label>
							<input type="text" class="form-control" id=""  required="" name="password1">
						</div> <!-- end nhập lại mật khẩu -->

						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" id="" required="" name="email">
						</div><!--  end email -->

						<div class="form-group">
							<input type="checkbox" value="1" name="ok"> <small>Tôi đồng ý với các điều khoản sử dụng</small>
						</div> <!-- end điều khoản sử dụng -->
					
						<button type="submit" class="btn btn-primary" style="width: 50%">Đăng kí</button>
					</form>
	  </ul>
</div><!--  end đănng kí -->

<div class="dropdown dangnhap">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Đăng Nhập
  </button>
   <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	    
					<form action="lib/idangnhap.php" method="POST" role="form" class="text-center">	
						<div class="form-group">
							<label for="">Tên tài khoản</label>
							<input type="text" class="form-control" id=""  required="" name="username">
						</div> <!-- end tên đăng nhập -->

						<div class="form-group">
							<label for="">Mật khẩu</label>
							<input type="text" class="form-control" id=""  required="" name="password">
						</div>  <!-- end mật khẩu -->
					
						<button type="submit" class="btn btn-primary" style="width: 50%">Đăng nhập</button>
					</form>
	  </ul>
</div> <!-- end đăng nhập -->

			</div>
		</div>
	</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>