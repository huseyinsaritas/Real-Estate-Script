<?php
include "header.php";
include "../netting/baglan.php";

if(isset($_POST['arama'])) {
    $aranan=$_POST['aranan'];
    $iceriksor=$db->prepare("SELECT * FROM icerik WHERE icerik_ad LIKE  '%$aranan%' ORDER BY icerik_id ASC limit 25");
    $iceriksor->execute();

    $say=$iceriksor->rowCount();

}else{
    $iceriksor=$db->prepare("SELECT * FROM icerik ORDER BY icerik_id DESC limit 25");
    $iceriksor->execute();
    $say=$iceriksor->rowCount();
}
?>
    <div class="right_col" role="main">
        <div class="page-title">
        </div>
    <div class="col-md-12">
    <div class="title_right">
    <h3>İçerik işlemleri</h3>
     <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">


       <form action="" method="POST">
         <div class="input-group">
            <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelimenizi Giriniz.">
            <span class="input-group-btn">
            <button class="btn btn-default" type="submit" name="arama">Ara!</button>
            </span>
       </div>
       </form>
      </div>
   </div>
  </div>
    <div class="clearfix"></div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <div align="left" class="col-md-6">
                <h2>     
                       <?php
                       echo $say." kayıt listelendi.";?>
                        
                    
                        <?php
                        if ($_GET['durum']=='ok') {?>
                            <b style="color: green;">İşlem başarılı..</b>
                        <?php }
                        elseif ($_GET['durum']=='no'){?>
                            <b style="color: red;">İşlem başarısız..</b>
                        <?php } ?>
                    </small>
                    
                </h2><br>
            </div>
            <div align="right" class="col-md-6">
              <a href="icerik-ekle.php"><button class="btn btn-danger btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button></a>
            </div>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th width="179" class="column-title text-center">İçerik Tarih</th>
                            <th class="column-title">İçerik Ad</th>
                            <th class="column-title text-center">İçerik Durum</th>
                            <th width="80" class="column-title"></th>
                            <th width="80" class="column-title no-link last"><span class="nobr"></span>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php


                        while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){
                        ?>

                      <tr>
                            <td class="text-center"><?php echo $icerikcek['icerik_zaman'];?></td>
                            <td class=""><?php echo $icerikcek['icerik_ad'];?></td>


                            <td class="text-center"><?php
                              if($icerikcek['icerik_durum']=="1"){
                                  echo "AKTİF";
                              }else {
                                  echo "PASİF";
                              }
                              ?>
                            </td>
































                            <td class="text-center"><button style="width:80px;" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"> <i class="fa fa-trash" aria-hidden="true"> </i> Sil</button></td>
                              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">

                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Sil</h4>
                                      </div>
                                      <div class="modal-body">
                                          <h4>Silmek istediğinize emin misiniz?</h4>
                                      </div>
                                      <div class="modal-footer">
                                          <a href="../netting/islem.php?iceriksil=ok&icerik_id=<?php echo  $icerikcek['icerik_id'];?>"><button class="btn btn-default" data-dismiss="modal">Sil</button></a>
                                          <a href="icerik.php"><button type="button" class="btn btn-primary">Vazgeç</button></a>
                                      </div>

                                  </div>
                              </div>
                          </div>





















                          <td class="text-center"><a href="icerik-duzenle.php?icerik_id=<?php echo  $icerikcek['icerik_id'];?>"><button style="width:80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button>
                            </td>
                      <!--    <td class="text-center"><a href="../netting/islem.php?iceriksil=ok&icerik_id=<?php echo  $icerikcek['icerik_id'];?>"><button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i>Sil</button></a>
                          </td>-->
                      </tr>




                        <?php } ?>
                      </tbody>
                    </table>
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>




<?php
include "footer.php";
?>