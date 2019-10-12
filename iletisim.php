<?php
include 'header.php';
?>

<div role="main" class="main">

    <section class="page-header page-header-light page-header-more-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>İletişim</h1>
                    <ul class="breadcrumb breadcrumb-valign-mid">
                        <li><a href="index.php">Anasayfa</a></li>
                        <li class="active">İLETİŞİM</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-8">

                <h4 class="heading-primary mt-lg">Bize Ulaşın</h4>
                <p>Bize ulaşmak için aşağıda yer alan iletişim formunu doldurunuz.</p>

                <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                    <strong>Başarılı!</strong> Mesajınız başarıyla gönderildi.
                </div>

                <div class="alert alert-danger hidden mt-lg" id="contactError">
                    <strong>Hata!</strong> Mesaj gönderilirken bir hata oluştu.
                    <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                </div>

                <form id="contactForm" action="phpmailer/index.php" method="POST">
                    <input type="hidden" value="Contact Form" name="subject" id="subject">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-9">
                                <label>Adınız *</label>
                                <input type="text" value="" data-msg-required="Lütfen adınızı giriniz." maxlength="100" class="form-control" name="name" id="adsoyad" required>
                            </div>
                            <div class="col-md-9">
                                <label>Mail Adresiniz *</label>
                                <input type="email" value="" data-msg-required="Lütfen mail adresinizi giriniz." data-msg-email="Lütfen doğru bir mail adresi giriniz." maxlength="100" class="form-control" name="eposta" id="email" required>
                            </div>
                            <div class="col-md-9">
                                <label>Konu *</label>
                                <input type="text" value="" data-msg-required="Lütfen konuyu giriniz."  maxlength="100" class="form-control" name="konu" id="konu" required>
                            </div>
                            <div class="col-md-9">
                                <label>Mesaj *</label>
                                <textarea maxlength="5000" data-msg-required="Lütfen mesajınızı giriniz." rows="5" class="form-control" name="mesaj" id="message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Gönder" name="iletisimform" class="btn btn-secondary mb-xlg" data-loading-text="Yükleniyor...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">

                <h4 class="heading-primary mt-lg">Adres&İletişim</h4>
                <ul class="list list-icons mt-md">
                    <li>
                        <a href="mailto: mail@domain.com">
                            <i class="icon-envelope-open icons"></i><?php echo $ayarcek['ayar_mail']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-call-out icons"></i> <?php echo $ayarcek['ayar_tel']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-call-out icons"></i> <?php echo $ayarcek['ayar_gsm']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-linkedin icons"></i> <?php echo $ayarcek['ayar_linkedln']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-facebook icons"></i> <?php echo $ayarcek['ayar_facebook']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-twitter icons"></i> <?php echo $ayarcek['ayar_twitter']; ?>
                        </a>
                    </li>
                </ul>

                <hr class="solid mt-xlg mb-xlg">

                <h4 class="heading-primary">Çalışma Saatleri</h4>
                <ul class="list list-icons mt-md">
                    <li><i class="fa fa-clock-o"></i> Pzt - Cu - 9.00 - 17.00</li>
                    <li><i class="fa fa-clock-o"></i> Cmt - 9.00 - 14.00</li>
                    <li><i class="fa fa-clock-o"></i> Pazar - Kapalı</li>
                </ul>

            </div>

        </div>

    </div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map mt-xlg mb-none">
            <iframe
                width="100%"
                height="100%"
                frameborder="0" style="border: 0"
                src="https://www.google.com/maps/embed/v1/place?key=<?php echo $ayarcek['ayar_googlemap'];?>
                        &q=<?php echo $ayarcek['ayar_adres'];?>" allowfullscreen>
            </iframe>
        </div>



<?php
include 'footer.php';
?>