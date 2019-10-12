<?php

include "header.php";
include '../netting/baglan.php';
$iceriksor=$db->prepare("select * from icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
        'icerik_id' => $_GET['icerik_id']
));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);

?>
    <!-- /top navigation -->
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>İçerik İşlemleri</h3>
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
                            <div align="left" class="col-md-6">
                                <h2>İçerik Düzenle</h2>
                            </div>
                            <div align="right" class="col-md-6">
                                <a href="icerik.php"><button class="btn btn-warning btn-xs"><i class="fa fa-undo" aria-hidden="true"></i>Geri Dön</button></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                        <div class="x_content">
                            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <input type="hidden" name="icerik_id" value="<?php echo $icerikcek['icerik_id'];?>">
                                <input type="hidden" name="icerik_resimyol" value="<?php echo $icerikcek['icerik_resimyol'];?>">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img width="200" height="100" src="../../<?php echo $icerikcek['icerik_resimyol'];?>" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="first-name" name="icerik_resimyol" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Zaman <span class="required"></span>
                                    </label>
                                    <div class="col-md-3">
                                        <input type="date" id="first-name" required="required" value="<?php echo date('Y-m-d');?>" name="icerik_tarih"  class="form-control col-md-7 col-xs-12">
                                    </div> <div class="col-md-3">
                                        <input type="time" id="first-name" required="required" value="<?php echo date('h:i:s');?>" name="icerik_saat"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">icerik Ad <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="icerik_ad" value="<?php echo $icerikcek['icerik_ad'];?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">icerik Detay<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="icerik_detay" value="<?php echo $icerikcek['icerik_detay'];?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">icerik Keyword <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="icerik_keyword" value="<?php echo $icerikcek['icerik_keyword'];?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">icerik Durum<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                     <select id="heard" class="form-control" name="icerik_durum" required>
                                         <?php
                                         if($icerikcek['icerik_durum']=="1"){?>
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
                                    <button type="submit" name="icerikduzenle" class="btn btn-success">Güncelle</button>
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