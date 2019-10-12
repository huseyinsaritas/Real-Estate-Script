<?php
include 'header.php';
?>
    <div role="main" class="main">

        <section class="page-header page-header-light page-header-more-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Temsilcilerimiz</h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="index.php">Anasayfa</a></li>
                            <li><a href="#">Hakkımızda</a></li>
                            <li class="active">Temsilcilerimiz</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
   <?php
                $kullanicisor=$db->prepare("SELECT * FROM kullanici ORDER BY kullanici_id ASC ");
                $kullanicisor->execute();
                while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)){  ?>



            <div class="agent-item">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?php echo $kullanicicek['kullanici_resim'];?>" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3 class="mt-xs mb-xs"><?php echo $kullanicicek['kullanici_adsoyad'];?></h3>
                        <h6 class="mb-xs"><?php echo $kullanicicek['kullanici_pozisyon'];?></h6>
                        <p><?php echo $kullanicicek['kullanici_info'];?></p>
                        <a class="btn btn-secondary btn-sm mt-md" href="temsilci-<?=seo($kullanicicek['kullanici_adsoyad']).'-'.$kullanicicek['kullanici_id'];?>">Profili Görüntüle</a>
                    </div>
                    <div class="col-md-4">
                        <ul class="list list-icons m-sm ml-xl">
                            <li>
                                <a href="mailto: mail@domain.com">
                                    <i class="icon-envelope-open icons"></i> <?php echo $kullanicicek['kullanici_mail'];?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-call-out icons"></i> <?php echo $kullanicicek['kullanici_tel'];?>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
<?php } ?>






        </div>

<?php
include 'footer.php';
?>