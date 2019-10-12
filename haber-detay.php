<?php
include 'header.php';
$iceriksor=$db->prepare("select * from icerik");
$iceriksor->execute(array(
    'icerik_id' => $_GET['icerik_id']
));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>
    <div role="main" class="main">
    <div class="container">
    <div class="row pt-xl">
        <div class="col-md-9">
            <h1 class="mt-xl mb-none"><?php echo $icerikcek['icerik_ad'];?></h1>
            <div class="divider divider-primary divider-small mb-xl">
                <hr>
            </div>

            <div class="row">

                <!-- Başla  -->
                <!-- hidden-xs mobilde div gizleme  -->



                <span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<div class="col-md-12">



                                                <!--	<span class="post-meta">
                                                         <span>January 10, 2016 | <a href="#">John Doe</a></span>
												</span>  -->
                                                <p style="font-size: 16px !important;"><img src="<?php echo $icerikcek['icerik_resimyol'];?>" class="img-responsive" alt="" style="float:left; width:395px; height: 250px; padding:10px;margin-top: 16px;">
												<?php echo $icerikcek['icerik_detay'];?> </p>
                                                <hr>
                                                <p style="font-size: 15px;"><b>Anahtar Kelimeler : </b>
                                                <?php
                                                $etiketler=explode(', ',$icerikcek['icerik_keyword']);
                                                foreach ($etiketler as $etiketbas) { ?>
                                                    <a href="arama?aranan=<?php $etiketbas; ?>"><?php echo $etiketbas; ?></a>

                                                <?php } ?>


                                                </p>
                                        </div>
									</span>

                <!--  Bitir  -->


                <!--Sidebar-->



            </div>

        </div>

        <?php include 'rightbar.php';
        ?>
    </div>

<?php 'footer.php';
?>