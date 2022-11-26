<!DOCTYPE html>
<html lang="tr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page </title>
    <link rel="icon" type="image/x-icon" href="style/images/login.png">
    <link href="style/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="style/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="style/vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="style/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form>
                        <h1>Giriş Yap</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Kullanıcı adı" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Şifre" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default" style="margin-right: 160px;">Giriş</a>
                            <a class="reset_pass" href="#">Şifreni mi unuttun?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Üye mi olmak istiyorsun ?
                                <a href="#signup" class="to_register"> Kayıt Ol </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Kayıt Ol</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Kullanıcı adı" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Şifre" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default">Kayıt Ol</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Zaten kayıtlı mısın ?
                                <a href="#signin" class="to_register"> Giriş Yap </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="php/admin.js"></script>
</body>
</html>