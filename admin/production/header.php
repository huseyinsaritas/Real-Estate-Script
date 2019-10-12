<?php
ob_start();
session_start();
error_reporting(0);
include '../netting/baglan.php';
date_default_timezone_set('Europe/Istanbul');


$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_ad=:ad");
$kullanicisor->execute(array(
        'ad' => $_SESSION['kullanici_ad']
));
$say=$kullanicisor->rowCount();
if($say==0){
    Header("Location:login.php?durum=izinsiz");
    exit();
}


$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html
<head>

    <meta charset="utf-8">

    <title>Hoşgeldiniz! | </title>

    <script src="../vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>FİRMA ADI</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="http://localhost/emlak/<?php echo $kullanicicek['kullanici_resim'];?>" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Hoşgeldin,</span>
                        <h2><?php echo $_SESSION['kullanici_ad'];?></h2>


                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <?php include "sidebar.php";?>


                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="http://localhost/emlak/<?php echo $kullanicicek['kullanici_resim'];?>" alt=""><?php echo $_SESSION['kullanici_ad'];?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">

                                <li>
                                    <a href="kullanici-profil.php">Profil</a>
                                </li>
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Çıkış</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>


