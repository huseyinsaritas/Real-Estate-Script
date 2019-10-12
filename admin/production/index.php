<?php
include "header.php";
?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Yönetim Paneli</h3>
                    </div>


                </div>
            </div>

    <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">




                                        <?php
                                        $kullanicisor=$db->prepare("SELECT * FROM kullanici ORDER BY kullanici_id ASC ");
                                        $kullanicisor->execute();
                                        while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)){  ?>





                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">

                                        <div class="well profile_view">
                                            <div class="col-sm-12">
                                                <h4 class="brief"><i><?php echo $kullanicicek['kullanici_pozisyon'];?></i></h4>
                                                <div class="left col-xs-7">
                                                    <h2><?php echo $kullanicicek['kullanici_adsoyad'];?></h2>
                                                    <p><strong>Pozisyon: </strong><?php echo $kullanicicek['kullanici_pozisyon'];?></p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-building"></i> Tel: <?php echo $kullanicicek['kullanici_tel'];?> </li>
                                                        <li><i class="fa fa-phone"></i> Mail: <?php echo $kullanicicek['kullanici_mail'];?></li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <img src="../../<?php echo $kullanicicek['kullanici_resim'];?>" alt="" class="img-circle img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <p class="ratings">
                                                        <a>4.0</a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <button type="button" class="btn btn-primary btn-xs" href="">
                                                        <i class="fa fa-user"> </i> Profili Görüntüle
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /page content -->

    <!-- footer content -->

                </div>


            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
<?php
include "footer.php";
?>