<?php
include "header.php";


if(isset($_POST['arama'])) {
    $aranan=$_POST['aranan'];
    $emlaksor=$db->prepare("SELECT * FROM emlak WHERE emlak_baslik LIKE  '%$aranan%' ORDER BY emlak_id ASC limit 25");
    $emlaksor->execute();
    $say=$emlaksor->rowCount();

}else{
    $emlaksor=$db->prepare("SELECT * FROM emlak ORDER BY emlak_zaman DESC limit 25");

    $emlaksor->execute();
    $say=$emlaksor->rowCount();
}
?>
    <div class="right_col" role="main">
        <div class="page-title">
        </div>
    <div class="col-md-12">
    <div class="title_right">
    <h3>Emlak Fotoğraf İşlemleri</h3>
     <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">


       
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

                        </h2>
                <br>
            </div>
            <div align="right" class="col-md-6">
            <a href="galeri-yukle.php?emlak_id=<?php echo  $emlakcek['emlak_id'];?>"><button class="btn btn-success btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> Ürün Fotoğraf Yükle</button></a>
            <a href="../netting/islem.php?emlaksil=ok&emlak_id=<?php echo  $emlakcek['emlak_id'];?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Seçilenleri Sil</button></a>          
        

            </div>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                  
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