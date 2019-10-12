<?php

include "header.php";
include '../netting/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
    <head>
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    </head>
<div class="right_col" role="main">
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Profil İşlemleri</h3>
        </div>

<!--        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelimenizi Giriniz.">
                    <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ara</button>
            </span>
                </div>
            </div>  -->
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                  <h2> <?php echo $kullanicicek['kullanici_adsoyad'];?>
                   <small>

                    <?php
                    if ($_GET['durum']=='ok') {?>
                        <b style="color:green;">Güncelleme başarılı..</b>
                        <?php }
                    elseif ($_GET['durum']=='no'){?>
                        <b style="color: red;">Güncelleme yapılamadı..</b>
                    <?php }?>

                   </small>
                  </h2>
                    <ul class="nav navbar-right panel-toolbox"></ul>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Resmi<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                            <?php
                            if(strlen($kullanicicek['kullanici_resim'])>0) { ?>
                               <img width="125" src="../../<?php echo $kullanicicek['kullanici_resim'];?>" >

                                <?php } else {?>
                                <img width="100" src="../../dimg/profil-yok.jpg" > <!-- 313*103 -->
                               <?php } ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="first-name" name="kullanici_resim" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <input type="hidden" name="eski_yol" value="<?php echo $kullanicicek['kullanici_resim'];?>">

                        <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>">

                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="kresimduzenle" class="btn btn-success">Güncelle</button>
                        </div>



                    </form>

                    <hr>

                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" required="required" disabled="" name="kullanici_ad" value="<?php echo $kullanicicek['kullanici_ad'];?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Şifre<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="first-name" required="required" name="kullanici_password" value="<?php echo $kullanicicek['kullanici_password'];?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Ad Soyad<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" required="required" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'];?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Pozisyon<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" required="required" name="kullanici_pozisyon" value="<?php echo $kullanicicek['kullanici_pozisyon'];?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Telefon<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name"  name="kullanici_tel" value="<?php echo $kullanicicek['kullanici_tel'];?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Mail<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name"  name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'];?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı İnfo
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="ckeditor" id="editor1" name="kullanici_info" value="<?php echo $kullanicicek['kullanici_info'];?>"></textarea>

                            </div>
                        </div>

                        <script type="text/javascript">

                            CKEDITOR.replace('editor1',
                                {
                                    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                                    filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                                    filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
                                    filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                    filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                    filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                    forcePasteAsPlainText: true
                                }
                            );


                        </script>
                        <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>">






                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="kullaniciprofilkaydet" class="btn btn-success">Güncelle</button>
                        </div>
                    </form>
                </div>





            </div>
        </div>
    </div>
</div>
</div>


<!-- /page content -->

<!-- footer content -->
<?php
include "footer.php";
?>