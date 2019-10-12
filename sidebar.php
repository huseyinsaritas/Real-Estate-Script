<?php

$kullanicisor=$db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute(array(
    'id' => $_SESSION['kullanici_id']
));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
?>
<div class="col-md-3">
    <aside class="sidebar">
        <div class="agents text-color-light center">
            <h4 class="text-light pt-xl m-none"><?php echo $kullanicicek['kullanici_pozisyon'];?></h4>
            <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs pt-md m-none" data-plugin-options='{"items": 1, "loop": false, "dots": false, "nav": true}'>



                <div class="pr-sm pl-sm">
                    <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
												<span class="agent-thumb">
													<img class="img-responsive img-circle" src="http://localhost/emlak/<?php echo $kullanicicek['kullanici_resim'];?>" alt />
												</span>
                        <span class="agent-infos text-light pt-md">
													<strong class="text-uppercase font-weight-bold"><?php echo $kullanicicek['kullanici_adsoyad'];?></strong>
													<span class="font-weight-light"><?php echo $kullanicicek['kullanici_tel'];?></span>
													<span class="font-weight-light"><?php echo $kullanicicek['kullanici_mail'];?></span>
												</span>
                    </a>
                    <hr>
                </div>


            </div>
        </div>

        <h4 class="pt-lg mb-md text-color-dark">Detaylı Bilgi</h4>
        <p>Daha fazla bilgi edinmek için lütfen bizimle iletişime geçin.</p>

        <form id="contactForm" action="phpmailer/index.php" method="POST" class="mb-lg">
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Adınız *</label>
                        <input type="text" value="" data-msg-required="Lütfen adınızı giriniz." maxlength="100" class="form-control" name="name" id="name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Mail Adresiniz *</label>
                        <input type="email" value="" data-msg-required="Lütfen mail adresinizi giriniz." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Konu</label>
                        <input type="text" value="" data-msg-required="Lütfen konuyu giriniz." maxlength="100" class="form-control" name="subject" id="subject" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Mesaj *</label>
                        <textarea maxlength="5000" data-msg-required="Lütfen mesajınızı giriniz." rows="6" class="form-control" name="message" id="message" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" value=" Mesaj Gönder" name="iletisimform" class="btn btn-secondary mb-xl" data-loading-text="Bekleniyor...">

                    <div class="alert alert-success hidden" id="contactSuccess">
                        Mesajınız iletildi.
                    </div>

                    <div class="alert alert-danger hidden" id="contactError">
                        Mesaj gönderirken bir hata oluştu.
                    </div>
                </div>
            </div>
        </form>
    </aside>
</div>