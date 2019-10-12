<?php
include "header.php";
include "../netting/baglan.php";

if(isset($_POST['arama'])) {
    $aranan=$_POST['aranan'];
    $slidersor=$db->prepare("SELECT * FROM slider WHERE slider_ad LIKE  '%$aranan%' ORDER BY slider_durum DESC, slider_sira ASC limit 25");
    $slidersor->execute();
    $say=$slidersor->rowCount();

}else{
    $slidersor=$db->prepare("SELECT * FROM slider ORDER BY slider_durum DESC ,slider_sira ASC limit 25");
    $slidersor->execute();
    $say=$slidersor->rowCount();
}

?>
    <div class="right_col" role="main">
        <div class="page-title">
        </div>
    <div class="col-md-12">
    <div class="title_right">
    <h3>Slider işlemleri</h3>
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
                       echo $say." kayıt listelendi.";

                        if ($_GET['durum']=='ok') {?>
                            <b style="color: green;">İşlem başarılı..</b>
                        <?php }
                        elseif ($_GET['durum']=='no'){?>
                            <b style="color: red;">İşlem başarısız..</b>
                        <?php } ?>

                    
                </h2><br>
            </div>
            <div align="right" class="col-md-6">
              <a href="slider-ekle.php"><button class="btn btn-danger btn-xs"><i class="fa fa-plus" aria-hidden="true"></i>Yeni Ekle</button></a>
            </div>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th width="150" class="column-title">Slider Resim</th>
                            <th class="column-title text-center">Slider Ad </th>
                            <th class="column-title text-center">Slider Sıra</th>
                            <th class="column-title text-center">Slider Durum</th>
                            <th width="80" class="column-title"></th>
                            <th width="80" class="column-title no-link last"><span class="nobr"></span>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php


                        while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){
                        ?>

                      <tr>
                            <td><img width="200" height="100" src="../../<?php echo $slidercek['slider_resimyol'];?>"></td>
                            <td class="text-center"><?php echo $slidercek['slider_ad'];?></td>
                            <td class="text-center"><?php echo $slidercek['slider_sira'];?></td>

                          <td class="text-center"><?php
                              if($slidercek['slider_durum']=="1"){
                                  echo "AKTİF";
                              }else {
                                  echo "PASİF";
                              }
                              ?>
                          </td>

                            <td class="text-center"><a href="slider-duzenle.php?slider_id=<?php echo  $slidercek['slider_id'];?>"><button style="width:80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i>Düzenle</button>
                            </td>
                          <td class="text-center"><a href="../netting/islem.php?slidersil=ok&slider_id=<?php echo  $slidercek['slider_id'];?>"><button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i>Sil</button></a>
                          </td>
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