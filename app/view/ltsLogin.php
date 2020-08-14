<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> LTS Bilişim - Giriş Yap</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/nifty.min.css" rel="stylesheet">
    <link href="../assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <link href="../assets/css/demo/nifty-demo.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</head>

<body>
<div id="container" class="cls-container">

    <!-- BACKGROUND IMAGE -->
    <!--<div id="bg-overlay" class="bg-img" style="background-image: url("../img/bg-img/bg-img-4/");></div>-->
    <!-- LOGIN FORM -->
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <img src="../img/lts_bilisim_logo.png" style="width: 80%; margin: auto">
                    <h1 class="h3"> Giriş Yap </h1>
                    <p> Hesabınıza giriş yapın </p>
                </div>

                <!--FORM ACTION-->
                <form action="../controller/login.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="username" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Parola" name="password" id="passwordField" required>
                        <input type="checkbox" onclick="showPassword()"> Parolayı Göster
                    </div>
                    <div class="checkbox pad-btm text-left">
                        <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
                        <label for="demo-form-checkbox"> Beni Hatırla </label>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit"> Oturum Aç</button>
                </form>
            </div>


            <div class="pad-all">
                <a href="ltsRegister.php" class="btn-link mar-lft"> Yeni Hesap Oluştur <br><br> </a>
                                <!-- FARKLI OTURUM AÇMA SEÇENEKLERİ
                <div class="media pad-top bord-top">
                    <div class="pull-right">
                        <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
                        <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
                        <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
                    </div>
                    <div class="media-body text-left text-bold text-main">
                        Login with
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

            <!--=============KULLANICI VARSA UYARI GOSTER======================-->
            <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'fail') {} ?>
                <div class="alert alert-danger">
                    <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                    <strong> Hata, Lütfen bilgilerinizi gözden geçirin </strong>
                </div>
            <?php } ?>
                <!--===================================================-->


                <!-- DEMO PURPOSE ONLY -->
                <div class="demo-bg">
                    <div id="demo-bg-list">
                        <img class="demo-chg-bg bg-trans active" src="../img/bg-img/thumbs/bg-trns.jpg">
                        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-1.jpg">
                        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-2.jpg">
                        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-3.jpg">
                        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-4.jpg">
                        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-5.jpg">
                        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-6.jpg">
                        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-7.jpg">
                    </div>
                </div>
            </div>

            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>
            <script src="../assets/js/nifty.min.js"></script>
            <script src="../assets/js/demo/bg-images.js"></script>

</body>
</html>
