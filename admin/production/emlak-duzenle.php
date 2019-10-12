<?php

include "header.php";
include '../netting/baglan.php';
$emlaksor=$db->prepare("select * from emlak where emlak_id=:emlak_id");
$emlaksor->execute(array(
        'emlak_id' => $_GET['emlak_id']
));
$emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC);

?>
    <head>
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    </head>
    <!-- /top navigation -->
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Emlak İşlemleri</h3>
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
                                <h2>Emlak Düzenle</h2>
                            </div>
                            <div align="right" class="col-md-6">
                                <a href="emlak.php"><button class="btn btn-warning btn-xs"><i class="fa fa-undo" aria-hidden="true"></i>Geri Dön</button></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                        <div class="x_content">
                            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <input type="hidden" name="emlak_id" value="<?php echo $emlakcek['emlak_id'];?>">
                                <input type="hidden" name="emlak_resimyol" value="<?php echo $emlakcek['emlak_resimyol'];?>">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img width="200" height="100" src="../../<?php echo $emlakcek['emlak_resimyol'];?>" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kapak Resmi Seç<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="first-name" name="emlak_resimyol" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Emlak Zaman <span class="required"></span>
                                    </label>
                                    <div class="col-md-3">
                                        <input type="date" id="first-name" required="required" value="<?php echo date('Y-m-d');?>" name="emlak_tarih"  class="form-control col-md-7 col-xs-12">
                                    </div> <div class="col-md-3">
                                        <input type="time" id="first-name" required="required" value="<?php echo date('h:i:s');?>" name="emlak_saat"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Emlak Başlık <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_baslik" value="<?php echo $emlakcek['emlak_baslik'];?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Emlak Adres<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_adres" value="<?php echo $emlakcek['emlak_adres'];?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Emlak Fiyat <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_fiyat" value="<?php echo number_format($emlakcek['emlak_fiyat']);?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kaç m² <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_mkare" value="<?php echo number_format($emlakcek['emlak_mkare']);?>"class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Oda Sayısı <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_odasayisi" value="<?php echo number_format($emlakcek['emlak_odasayisi']);?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kaçıncı Kat <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_kacincikat" value="<?php echo number_format($emlakcek['emlak_kacincikat']);?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kaç katlı <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_katsayisi" value="<?php echo number_format($emlakcek['emlak_katsayisi']);?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Isıtma<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" name="emlak_isitma" value="<?php echo number_format($emlakcek['emlak_isitma']);?>" required>
                                            <option value="Kombi">Kombi</option>
                                            <option value="Kombi">Klima</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Bina Yaşı <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_binayasi" value="<?php echo number_format($emlakcek['emlak_binayasi']);?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Emlak Detay <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="ckeditor" id="editor1" name="emlak_detay" ></textarea>

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
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Emlak Durum<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                     <select id="heard" class="form-control" name="emlak_durum" required>
                                         <?php
                                         if($emlakcek['emlak_durum']=="Satılık"){?>
                                         <option value="Satılık">Satılık</option>
                                         <option value="Kiralık">Kiralık</option>
                                         <?php } else { ?>
                                         <option value="Kiralık">Kiralık</option>
                                         <option value="Satılık">Satılık</option>
                                          <?php } ?>
                                     </select>
                                    </div>
                                </div>


                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="emlakduzenle" class="btn btn-success">Güncelle</button>
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