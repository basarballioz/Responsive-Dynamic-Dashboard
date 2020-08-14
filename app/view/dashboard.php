<?php
include "../init.php";
include ROOT . "/all.php";
include APP . "header.php";

//KULLANICI CIKIS YAPTIGINDA LOGIN EKRANINA YONLENDIR
if (!isset($userid)) {
    header("Location:ltsLogin.php");
}
?>
<body>

<?php include APP . 'navbar.php'; ?>

<!--CONTENT-->
<div class="boxed">
    <!--CONTENT CONTAINER-->
    <div id="content-container">
        <div id="page-head">

            <!--Page Title-->
            <div id="page-title">
                <h1 class="page-header text-overflow"> Dashboard </h1>
            </div>


        </div>

        <!--Page content-->
        <div id="page-content">
            <hr class="new-section-sm bord-no">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-body text-center">
                        <div class="panel-heading"><h3> Admin Panel </h3></div>
                        <div class="panel-body"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--======================================================================-->


        <?php include APP . 'navigation.php'; ?>
        <?php include APP . 'footer.php'; ?>

</body>