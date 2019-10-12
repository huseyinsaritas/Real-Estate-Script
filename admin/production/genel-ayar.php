<?php

include "header.php";
include '../netting/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>

<div class="right_col" role="main">
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Ayarlar</h3>
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
                  <h2>Genel Ayarlar<small>
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

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">

                        <div class="col-md-3 col-sm-3 col-lg-offset-3 col-xs-3 for="first-name"><span class="required"></span>

                     <?php
                            if(strlen($ayarcek['ayar_ustlogo'])>0) { ?>
                               <img style="background-color: #758999;" width="175" src="../../<?php echo $ayarcek['ayar_ustlogo'];?>" >

                                <?php } else {?>
                                <img width="175" src="../../dimg/logo-yok.png" > <!-- 313*103 -->
                               <?php } ?>
                    </div>
                        <div class="col-md-3 col-sm-3 col-lg-offset-1 col-xs-3 for="first-name"> <span class="required"></span>

                     <?php
                            if(strlen($ayarcek['ayar_altlogo'])>0) { ?>
                               <img style="background-color: #758999;" width="175" src="../../<?php echo $ayarcek['ayar_altlogo'];?>" >

                                <?php } else {?>
                                <img width="175" src="../../dimg/logo-yok.png" > <!-- 313*103 -->
                               <?php } ?>
                     </div>   
                     </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3" for="first-name">Üst Logo<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <input type="file" id="first-name" name="ayar_ustlogo" class="form-control col-md-3 col-xs-3">
                        </div>

                            <label class="control-label col-md-1 col-sm-1 col-lg-offset-1 col-xs-1" for="first-name">Alt Logo<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <input type="file" id="first-name" name="ayar_altlogo" class="form-control col-md-3 col-xs-3">
                            </div>
                        </div>

                 
                      
                         <div class="col-md-12"
                        <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_ustlogo'];?>">

                        <div align="right" class="col-md-2 col-sm-2  col-md-offset-3">
                            <button type="submit" name="ustlogoduzenle" class="btn btn-success">Güncelle</button>
                        </div>
                        <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_altlogo'];?>">

                        <div align="right" class="col-md-3 col-sm-3 col-lg-offset-1  col-md-offset-3">
                            <button type="submit" name="altlogoduzenle" class="btn btn-success">Güncelle</button>
                        </div>
</div>



                    </form>

                    <hr>

                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Adresi <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name"  name="ayar_siteurl" value="<?php echo $ayarcek['ayar_siteurl']; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name"  name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklaması <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name"  name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Anahtar Kelimeler <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name"  name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yazar <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name"  name="ayar_author" value="<?php echo $ayarcek['ayar_author']; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="heard" class="form-control" name="ayar_slider" required>


                                <?php
                                if($ayarcek['ayar_slider']==1) { ?>
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>
                                <?php } else { ?>
                                    <option value="0">Pasif</option>
                                    <option value="1">Aktif</option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="genelayarkaydet" class="btn btn-success">Güncelle</button>
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