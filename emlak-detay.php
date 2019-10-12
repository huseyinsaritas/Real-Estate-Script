<?php
include "header.php";
$emlaksor = $db->prepare("select * from emlak WHERE emlak_id=:emlak_id");
$emlaksor->execute(array(
    'emlak_id' => $_GET['emlak_id']
));
$emlakcek = $emlaksor->fetch(PDO::FETCH_ASSOC);
$kullanici_id=$emlakcek['kullanici_id'];

?>
<div role="main" class="main">

    <section class="page-header page-header-light page-header-more-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $emlakcek['emlak_baslik'];?><span><?php echo $emlakcek['emlak_adres'];?> - <a href="#map" data-hash data-hash-offset="100">(Haritada Gör)</a></span></h1>
                    <ul class="breadcrumb breadcrumb-valign-mid">
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="emlaklar.php">Emlaklar</a></li>
                        <li class="active">Detay</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row pb-xl pt-md">
            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-7">

									<span class="thumb-info-listing-type thumb-info-listing-type-detail background-color-secondary text-uppercase text-color-light font-weight-semibold p-sm pl-md pr-md">
										<?php
                                        if($emlakcek['emlak_durum']=="Satılık") { ?>
                                            SATILIK

                                        <?php }

                                        elseif($emlakcek['emlak_durum']=="Kiralık") { ?>
                                           KİRALIK

                                        <?php } ?>
									</span>

                        <div class="thumb-gallery">
                            <div class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                                <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">

                                    <div>
                                        <a href="<?php echo $emlakcek['emlak_resimyol'];?>">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
															<span class="thumb-info-wrapper font-size-xl">
																<img alt="Property Detail" src="<?php echo $emlakcek['emlak_resimyol'];?>" class="img-responsive">
																<span class="thumb-info-title font-size-xl">
																	<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
																</span>
															</span>
														</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
                                <div>
                                    <img alt="Property Detail" src="<?php echo $emlakcek['emlak_resimyol'];?>" class="img-responsive cur-pointer">
                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">

                        <table class="table table-striped">
                            <colgroup>
                                <col width="35%">
                                <col width="65%">
                            </colgroup>
                            <tbody>
                            <tr>
                                <td>
                                    İlan Tarihi
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_zaman'];?>
                                </td>
                            </tr>

                            <tr>
                                <td class="background-color-primary text-light pt-md">
                                    Fiyat
                                </td>
                                <td class="font-size-xl font-weight-bold pt-sm pb-sm background-color-primary text-light">
                                    <?php echo number_format($emlakcek['emlak_fiyat']);?> TL
                                </td>
                            </tr>
                            <tr>
                                <td>
                                     İlan Numarası
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_id'];?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Adres
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_adres'];?><br><a href="#map" class="font-size-sm" data-hash data-hash-offset="100">(Harita Gör)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Emlak Durum
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_durum'];?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    m²
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_mkare'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Oda Sayısı
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_odasayisi']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Bulunduğu Kat
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_kacincikat']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kat Sayısı
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_katsayisi']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Isıtma
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_isitma']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Bina Yaşı
                                </td>
                                <td>
                                    <?php echo $emlakcek['emlak_binayasi']?>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <h4 class="mt-md mb-md">Açıklama</h4>


                        <p><?php echo $emlakcek['emlak_detay'];?></p>

                        <hr class="solid tall">

                        <h4 class="mt-md mb-md">Özellikler</h4>

                        <ul class="list list-icons list-secondary row m-none">
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Klima <a href="#" data-plugin-tooltip data-toggle="tooltip" data-placement="top" title="+ Central Heating"><i class="fa fa-info-circle"></i></a></li>
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Sinema Sistemi</li>
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Merkezi Isıtma</li>
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Çamaşırhane</li>
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Balkon</li>
                            <li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Market</li>
                            <li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Garaj</li>
                            <li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Yardımcı</li>
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Elektrikli süpürge</li>
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Deck</li>
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Spor Salonu</li>
                            <li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Sahil</li>
                        </ul>

                        <hr class="solid tall">

                        <h4 class="mt-md mb-md" id="map">Emlak Harita</h4>
                        <div id="googlemaps" class="google-map google-map-footer">
                            <iframe
                                width="100%"
                                height="100%"
                                frameborder="0" style="border: 0"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCVPsvdhByGuRxFv5VxvWpWtcl8_1nq5TY
                        &q=<?php echo $emlakcek['emlak_adres'];?>" allowfullscreen>
                            </iframe>
                        </div>

                    </div>
                </div>

            </div>

<?php
include "sidebar.php";
?>
        </div>

    </div>
<?php
include "footer.php";
?>
				