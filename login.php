<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>login</title>
    <link rel="stylesheet" href="/public/bs337/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/public/fa463/css/font-awesome.min.css"/>
    <!-- Customers -->
    <link rel="stylesheet" href="/public/assets/css/support.css"/>
    <link rel="stylesheet" href="/public/assets/css/login.css"/>
</head>

<body>

    <div id="login">
        <div class="login-heading">
            <h1 class="title">ĐĂNG NHẬP</h1>
        </div>

        <div class="login-content">

            <div class="login-error">
                <div class="alert alert-danger">
                    Vui lòng nhập tài khoản!
                </div>
            </div>

            <div class="login-error">
                <div class="alert alert-danger">
                    Vui lòng nhập mật khẩu!
                </div>
            </div>

            <form action="" class="form-horizontal">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="username">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Tài khoản" aria-describedby="username">
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="password">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Mật khẩu" aria-describedby="password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox">
                            <label for="rememberMe">
                                <input type="checkbox" id="rememberMe"> Duy trì đăng nhập?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <a href="#" class="btn btn-success">ĐĂNG NHẬP</a>
                            <a href="#" class="btn btn-default">HỦY BỎ</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="login-footer">
            <div class="text-center">
                <a href="#">Về trang chủ</a>
                <span>|</span>
                <a href="#">Quên mật khẩu?</a>
            </div>
        </div>
    </div>

    <!-- jQuery, Bootstrap JavaScript -->
    <script src="/public/assets/js/jquery-1.11.1.min.js"></script>
    <script src="/public/bs337/js/bootstrap.min.js"></script>
</body>
</html>