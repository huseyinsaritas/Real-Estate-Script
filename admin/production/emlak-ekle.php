<?php

include "header.php";
include '../netting/baglan.php';

?>
    <!-- /top navigation -->

    <!-- page content -->

    <head>
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    </head>

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
            <div align="right" class="col-md-6">
                                <a href="emlak.php"><button class="btn btn-warning btn-xs"><i class="fa fa-undo" aria-hidden="true"></i>Geri Dön</button></a>
                            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Yeni Emlak Ekle</h2>
                            <ul class="nav navbar-right panel-toolbox"></ul>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kullanıcı <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" readonly=""  value="<?php echo $_SESSION['kullanici_ad']?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>" >
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kapak Resmi Seç<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="first-name"  name="emlak_resimyol" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="emlak_id" value="<?php echo $_GET['emlak_id'];?>">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Resim Seç</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="coklu_resim"  name="galeri_resimyol" multiple accept=".jpg, .png, .gif" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Emlak Zaman <span class="required"></span>
                                    </label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="date" id="first-name" required="required" value="<?php echo date('Y-m-d');?>" name="icerik_tarih"  class="form-control col-md-7 col-xs-12">
                                    </div> <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="time" id="first-name" required="required" value="<?php echo date('h:i:s');?>" name="icerik_saat"  class="form-control col-md-7 col-xs-12">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Emlak Başlık <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_baslik" placeholder="Emlak başlığını giriniz.." class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Emlak Adres<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_adres" placeholder="Emlak adresini giriniz.." class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Emlak Fiyat <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_fiyat" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kaç m² <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_mkare" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Oda Sayısı <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_odasayisi" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kaçıncı Kat <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_kacincikat" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kaç Katlı <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_katsayisi" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Isıtma<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" name="emlak_isitma" required>
                                            <option value="Kombi">Kombi</option>
                                            <option value="Kombi">Klima</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Bina Yaşı <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name"  name="emlak_binayasi" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Özellikler</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <tr>
                                    <p style="padding: 5px;">
                                      <th><input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                                      <br/></th>

                                      <th><input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                                      <br /></th>

                                            <th><input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                                                <br /></th>
                                            <th><input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                                                <br /></th>
                                        </p>
                                        </tr>
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
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Emlak Durum<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                     <select id="heard" class="form-control" name="emlak_durum" required>
                                         <option value="Satılık">Satılık</option>
                                         <option value="Kiralık">Kiralık</option>
                                     </select>
                                    </div>
                                </div>


                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="emlakkaydet" class="btn btn-success">Güncelle</button>
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

   <script>
   $(document).ready(function () {
    resim_goster();
    function resim_goster(){
        $.ajax({
            url:"urun-foto-yukle.php",
            success: function(e){
                $("#sonuc").html(e);
            }
        });
    }


       $("coklu_resim").on("submit",function () {
         var isim =$("#galeri_resimyol").val();
         if(isim==""){
             return false;
         }else{
             $.ajax({
               url:"../netting/islem.php",
               data:new FormData(this),
               type:"post",
               processData: false,
               cache:false,
               contentType:false,
               success:function (e) {
                 resim_goster();
                 }

             });
         }
       });

   });
<?php
include "footer.php";
?>