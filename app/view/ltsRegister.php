<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Kayıt Ol - LTS Bilişim</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/nifty.min.css" rel="stylesheet">
    <link href="../assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <link href="../assets/css/demo/nifty-demo.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>

</head>
<body>
    <div id="container" class="cls-container">
        
		
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		
		
		<!-- REGISTRATION FORM -->
		<div class="cls-content">
		    <div class="cls-content-lg panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
                        <img src="../img/lts_bilisim_logo.png" style="width: 50%; margin-top: -80px">
                        <h1 class="h3"> Yeni Hesap Oluşturun </h1>
		                <p> Siz de LTS Bilişim'e katılın!</p>
		            </div>

                    <!--FORM ACTION-->
		            <form action="../controller/register.php" method="POST">
		                <div class="row">
		                    <div class="col-sm-15">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="username" required autofocus>
		                        </div>
		                        <div class="form-group">
		                            <input type="password" class="form-control" placeholder="Parola" name="password" required>
		                        </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-Mail" name="email" required>
                                </div>
		                    </div>
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" required>
		                    <label for="demo-form-checkbox"> Şartlar Ve Koşulları <a href="#" class="btn-link text-bold"> Kabul Ediyorum </a></label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit"> Kayıt Ol </button>
		            </form>
		        </div>
		        <div class="pad-all"> Zaten kayıtlı mısınız ? <a href="ltsLogin.php" class="btn-link mar-rgt text-bold"> Oturum Açın </a>
		
		            <div class="media pad-top bord-top">
		                <div class="pull-right">
		                    <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
		                </div>
		                <div class="media-body text-left text-main text-bold"> Sosyal Medya Hesaplarınızı Kullanarak Oturum Açın
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

            <!--=============KULLANICI VARSA UYARI GOSTER======================-->
            <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'alreadyRegistered') {} ?>
                <div class="alert alert-danger">
                    <button class="close" onclick="window.location.href='ltsRegister.php';" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                    <strong> Kullanıcı zaten sistemde kayıtlı </strong>
                </div>
                <?php } ?>

		
		<!-- DEMO PURPOSE ONLY -->
		<div class="demo-bg">
		    <div id="demo-bg-list">
		        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
		        <img class="demo-chg-bg bg-trans active" src="../img/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-1.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="../img/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
		    </div>
		</div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/nifty.min.js"></script>
    <script src="../assets/js/demo/bg-images.js"></script>

</body>
</html>
