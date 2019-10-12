<?php
include 'header.php';
?>
<div role="main" class="main">

    <section class="page-header page-header-light page-header-more-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Emlaklar<span><hr>Satılık ve Kiralık tüm emlaklar listeleniyor.</h1>
                    <ul class="breadcrumb breadcrumb-valign-mid">
                        <li><a href="index.php">Anasayfa</a></li>
                        <li class="active">Emlaklar</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-lg">
                <div class="col-md-12">

          <!--          <form id="propertiesForm" action="demo-real-estate-properties.html" method="POST">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-control-custom mb-md">
                                    <select class="form-control text-uppercase font-size-sm" name="propertiesPropertyType" data-msg-required="This field is required." id="propertiesPropertyType" required="">
                                        <option value="">Emlak Durumu</option>
                                        <option value="1">Satılık</option>
                                        <option value="2">Kiralık</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-control-custom mb-md">
                                    <select class="form-control text-uppercase font-size-sm" name="propertiesLocation" data-msg-required="This field is required." id="propertiesLocation" required="">
                                        <option value="">Lokasyon</option>
                                        <option value="1">Karşıyaka</option>
                                        <option value="2">Göztepe</option>
                                        <option value="3">Konak</option>
                                        <option value="4">Narlıdere</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-control-custom mb-md">
                                    <select class="form-control text-uppercase font-size-sm" name="propertiesMinBeds" data-msg-required="This field is required." id="propertiesMinBeds" required="">
                                        <option value="">Oda Sayısı</option>
                                        <option value="1">1+1</option>
                                        <option value="2">2+1</option>
                                        <option value="3">3+1</option>
                                        <option value="4">4+1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-control-custom mb-md">
                                    <select class="form-control text-uppercase font-size-sm" name="propertiesMinPrice" data-msg-required="This field is required." id="propertiesMinPrice" required="">
                                        <option value="">En Az</option>
                                        <option value="150000">$150,000</option>
                                        <option value="200000">$200,000</option>
                                        <option value="250000">$250,000</option>
                                        <option value="300000">$300,000</option>
                                        <option value="350000">$350,000</option>
                                        <option value="400000">$400,000</option>
                                        <option value="450000">$450,000</option>
                                        <option value="500000">$500,000</option>
                                        <option value="550000">$550,000</option>
                                        <option value="600000">$600,000</option>
                                        <option value="650000">$650,000</option>
                                        <option value="700000">$700,000</option>
                                        <option value="750000">$750,000</option>
                                        <option value="800000">$800,000</option>
                                        <option value="850000">$850,000</option>
                                        <option value="900000">$900,000</option>
                                        <option value="950000">$950,000</option>
                                        <option value="1000000">$1,000,000</option>
                                        <option value="1250000">$1,250,000</option>
                                        <option value="1500000">$1,500,000</option>
                                        <option value="1750000">$1,750,000</option>
                                        <option value="2000000">$2,000,000</option>
                                        <option value="2250000">$2,250,000</option>
                                        <option value="2500000">$2,500,000</option>
                                        <option value="2750000">$2,750,000</option>
                                        <option value="3000000">$3,000,000</option>
                                        <option value="3250000">$3,250,000</option>
                                        <option value="3500000">$3,500,000</option>
                                        <option value="3750000">$3,750,000</option>
                                        <option value="4000000">$4,000,000</option>
                                        <option value="4250000">$4,250,000</option>
                                        <option value="4500000">$4,500,000</option>
                                        <option value="4750000">$4,750,000</option>
                                        <option value="5000000">$5,000,000</option>
                                        <option value="6000000">$6,000,000</option>
                                        <option value="7000000">$7,000,000</option>
                                        <option value="8000000">$8,000,000</option>
                                        <option value="9000000">$9,000,000</option>
                                        <option value="10000000">$10,000,000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-control-custom mb-md">
                                    <select class="form-control text-uppercase font-size-sm" name="propertiesMaxPrice" data-msg-required="This field is required." id="propertiesMaxPrice" required="">
                                        <option value="">En Çok</option>
                                        <option value="150000">$150,000</option>
                                        <option value="200000">$200,000</option>
                                        <option value="250000">$250,000</option>
                                        <option value="300000">$300,000</option>
                                        <option value="350000">$350,000</option>
                                        <option value="400000">$400,000</option>
                                        <option value="450000">$450,000</option>
                                        <option value="500000">$500,000</option>
                                        <option value="550000">$550,000</option>
                                        <option value="600000">$600,000</option>
                                        <option value="650000">$650,000</option>
                                        <option value="700000">$700,000</option>
                                        <option value="750000">$750,000</option>
                                        <option value="800000">$800,000</option>
                                        <option value="850000">$850,000</option>
                                        <option value="900000">$900,000</option>
                                        <option value="950000">$950,000</option>
                                        <option value="1000000">$1,000,000</option>
                                        <option value="1250000">$1,250,000</option>
                                        <option value="1500000">$1,500,000</option>
                                        <option value="1750000">$1,750,000</option>
                                        <option value="2000000">$2,000,000</option>
                                        <option value="2250000">$2,250,000</option>
                                        <option value="2500000">$2,500,000</option>
                                        <option value="2750000">$2,750,000</option>
                                        <option value="3000000">$3,000,000</option>
                                        <option value="3250000">$3,250,000</option>
                                        <option value="3500000">$3,500,000</option>
                                        <option value="3750000">$3,750,000</option>
                                        <option value="4000000">$4,000,000</option>
                                        <option value="4250000">$4,250,000</option>
                                        <option value="4500000">$4,500,000</option>
                                        <option value="4750000">$4,750,000</option>
                                        <option value="5000000">$5,000,000</option>
                                        <option value="6000000">$6,000,000</option>
                                        <option value="7000000">$7,000,000</option>
                                        <option value="8000000">$8,000,000</option>
                                        <option value="9000000">$9,000,000</option>
                                        <option value="10000000">$10,000,000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" value="Emlak Ara" name="emlakara" class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
                            </div>
                        </div>
                    </form> !-->

                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row mb-lg">

            <ul class="properties-listing sort-destination p-none">
                <?php
                $sayfada=9; //sayfada gösterilecek içerik miktarı
                $sorgu=$db->prepare("SELECT * FROM emlak");
                $sorgu->execute();
                $toplam_icerik=$sorgu->rowCount();
                $toplam_sayfa=ceil($toplam_icerik / $sayfada);
                //eğer sayfa girilmemişse 1 sayalım
                $sayfa=isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
                //eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                if($sayfa < 1) $sayfa=1;
                //toplam sayfa sayımızdan fazla yazılırsa en son sayfsayı varsayalım.
                if($sayfa > $toplam_sayfa) $sayfa=$toplam_sayfa;

                $limit = ($sayfa - 1) * $sayfada;
                $emlaksor=$db->prepare("SELECT * FROM emlak ORDER BY emlak_zaman DESC limit $limit,$sayfada");
                $emlaksor->execute();
                while($emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC)){  ?>


                    <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                        <div class="listing-item">
                            <a href="emlak-<?=seo($emlakcek['emlak_baslik']).'-'.$emlakcek['emlak_id'];?>" class="text-decoration-none">
												<span class="thumb-info thumb-info-lighten">
													<span class="thumb-info-wrapper m-none">
														<img style="width: 262px; height: 165px;" src="<?php echo $emlakcek['emlak_resimyol'];?>" class="img-responsive" alt="">

                                                        <span <?php
                                                        if($emlakcek['emlak_durum']=="Satılık") { ?>
                                                            style="background-color: red !important;"

                                                        <?php }

                                                        elseif($emlakcek['emlak_durum']=="Kiralık") { ?>
                                                            style="background-color: green !important;"

                                                        <?php } ?>

                                                                class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
															<?php echo $emlakcek['emlak_durum'] ?>
														</span>
													</span>
													<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
														<?php echo number_format($emlakcek['emlak_fiyat']); ?> TL
														<i class="fa fa-caret-right text-color-secondary pull-right"></i>
													</span>
													<span class="custom-thumb-info-title b-normal p-lg">
                                                    <span class="thumb-info-inner text-md"><?php echo $emlakcek['emlak_baslik'] ?></span>
														<ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
															<li>
																<span class="accomodation-title">
                                                                    m²:
																</span>
																<span class="accomodation-value custom-color-1">
																	<?php echo $emlakcek['emlak_mkare'] ?>
																</span>
															</li>
															<li>
																<span class="accomodation-title">
																	Oda Sayısı:
																</span>
																<span class="accomodation-value custom-color-1">
																	<?php echo $emlakcek['emlak_odasayisi'] ?>
																</span>
															</li>

														</ul>
													</span>
                                </span>
                            </a>
                        </div>
                    </li>

                <?php  } ?>






            </ul>
        </div>

        <div class="row mt-lg mb-xlg">
            <div class="col-md-12 center">
                <ul class="pagination">
                    <?php
                    $s=0;
                    while ($s < $toplam_sayfa){
                        $s++; ?>
                        <?php
                        if ($s==$sayfa) {?>
                            <li class="active">
                                <a href="emlaklar?sayfa=<?php echo $s;?>"><?php echo $s; ?></a>
                            </li>
                        <?php } else {?>
                            <li>
                                <a href="emlaklar?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                            </li>
                        <?php }
                    }
                    ?>
                </ul>
            </div>
        </div>




    </div>

    <?php
    include 'footer.php';
    ?>
