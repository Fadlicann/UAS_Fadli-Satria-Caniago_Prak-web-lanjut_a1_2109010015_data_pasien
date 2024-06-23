<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login Aplikasi FadliSatria~2109010015</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper" style="background-color: ;">
        <div class="vertical-align-wrap" style="width: 90%; padding-left: 30ch;">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="content">
                        <div class="header"
                            style="display: flex; justify-content: center; align-items: center; height: 8vh;  background-color: ;">
                            <p class="lead" style="color: rgb(0, 0, 0); text-align: center; margin: 0;">Aplikasi
                                Rumah Sakit FadliSatria~2109010015</p>
                        </div>

                        <div style="width: 80%; padding-left: 20%">
                            <form class="form-auth-small" action="/postlogin" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" name="email" class="form-control" id="signin-email"
                                        placeholder="Email" value="fadli_caniago@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" id="signin-password"
                                        placeholder="Password" value="rahasia">
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                    style="background-color: ;color: black">Masuk</button>

                            </form>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>
