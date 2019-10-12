<?php
include 'header.php';

$kullanicisor = $db->prepare("SELECT * FROM kullanici ");
$kullanicisor->execute(array(
    'kullanici_id' => $_GET['kullanici_id']
));

$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

?>

<div role="main" class="main">

    <section class="page-header page-header-light page-header-more-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $kullanicicek['kullanici_adsoyad'];?></h1>
                    <ul class="breadcrumb breadcrumb-valign-mid">
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="#">Hakkımızda</a></li>
                        <li><a href="temsilcilerimiz.php">Temsilcilerimiz</a></li>
                        <li class="active"><?php echo $kullanicicek['kullanici_adsoyad'];?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="agent-item agent-item-detail">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?php echo $kullanicicek['kullanici_resim'];?>" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-5">
                            <h2 class="mt-none mb-xs font-weight-normal text-uppercase"><?php echo $kullanicicek['kullanici_adsoyad'];?></h2>
                            <h6 class="mb-xs"><?php echo $kullanicicek['kullanici_pozisyon'];?></h6>
                            <div class="font-size-lg mt-xl mb-md">
                                <p><?php echo $kullanicicek['kullanici_info'];?></p>
                            </div>
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
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mt-xl">İletişime Geçin</h4>

                            <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                                <strong>Success!</strong> Mesajınız iletildi.
                            </div>

                            <div class="alert alert-danger hidden mt-lg" id="contactError">
                                <strong>Hata!</strong> Mesaj gönderirken bir hata oluştu.
                                <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                            </div>

                            <form id="contactForm" action="phpmailer/index.php" method="POST">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Adınız" value="" data-msg-required="Lütfen adınızı giriniz." maxlength="100" class="form-control" name="adsoyad" id="name" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="email" placeholder="Mail Adresiniz" value="" data-msg-required="Lütfen mail adresinizi giriniz." data-msg-email="Lütfen doğru bir mail adresi giriniz." maxlength="100" class="form-control" name="eposta" id="email" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Konu" value="" data-msg-required="Lütfen konuyu giriniz." maxlength="100" class="form-control" name="konu" id="subject" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea maxlength="5000" placeholder="Mesaj" data-msg-required="Please enter your message." rows="5" class="form-control" name="mesaj" id="message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Mesaj Gönder" class="btn btn-secondary" data-loading-text="Bekleniyor...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $emlaksor=$db->prepare("SELECT * FROM emlak WHERE emlak_id=:emlak_id");
        $emlaksor->execute(array(
            'emlak_id' => $_GET['emlak_id']
        ));
        while($emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC)){
        $kullanici_id=$emlakcek['kullanici_id'];?>
        <div class="row">
            <div class="col-md-12">
                <h4 class="mt-md mb-none">İlanları</h4>
                <div class="row mb-xlg">
                    <ul class="properties-listing sort-destination p-none">
                        <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                            <div class="listing-item">
                                <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="thumb-info thumb-info-lighten">
													<span class="thumb-info-wrapper m-none">
														<img style="width: 262px; height: 165px;" src="<?php echo $emlakcek['emlak_resimyol'];?>" class="img-responsive" alt="">
														 <span <?php
                                                         if($emlakcek['emlak_durum']=="Satılık") { ?>
                                                             style="background-color: red !important;"

                                                         <?php }

                                                         elseif($emlakcek['emlak_durum']=="Kiralık") { ?>
                                                             style="background-color: green !important;"

                                                         <?php } ?>

                                                                class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
															<?php echo $emlakcek['emlak_durum'] ?>
														</span>
													</span>
													<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
														<?php echo $emlakcek['emlak_fiyat'];?>
														<i class="fa fa-caret-right text-color-secondary pull-right"></i>
													</span>
													<span class="custom-thumb-info-title b-normal p-lg">
														<span class="thumb-info-inner text-md"><?php echo $emlakcek['emlak_baslik'];?></span>
														<ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
															<li>
																<span class="accomodation-title">
																	Oda:
																</span>
																<span class="accomodation-value custom-color-1">
																	3+1
																</span>
															</li>
															<li>
																<span class="accomodation-title">
                                                                    m²:
																</span>
																<span class="accomodation-value custom-color-1">
																	300
																</span>
															</li>
															<li>
																<span class="accomodation-title">
																	Oda Sayısı:
																</span>
																<span class="accomodation-value custom-color-1">
																	2+1
																</span>
															</li>
														</ul>
													</span>
												</span>
                                </a>
                            </div>
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