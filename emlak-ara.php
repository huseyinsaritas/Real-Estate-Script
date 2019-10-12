<?php include "header.php";
?>


<div role="main" class="main">
    <div class="container">
        <div class="row pt-xlg mt-xlg">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-normal mb-xs">
                            <strong class="text-color-secondary font-weight-extra-bold">Satılık</strong> <span class="font-weight-light">ve</span> <strong class="text-color-secondary font-weight-extra-bold">Kiralık</strong> emlaklar
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <ul id="listingLoadMoreWrapper" class="properties-listing sort-destination p-none" data-total-pages="2">

                        <?php
                        if(empty($_POST['aranan'])){
                            $_POST['emlak_durum'];
                            $emlaksor=$db->prepare("SELECT * FROM emlak where emlak_durum=:emlak_durum and emlak_fiyat>:emlak_fiyataz or emlak_fiyat<:emlak_fiyatcok");

                            $emlaksor->execute(array(
                                    'emlak_durum' => $_POST['emlak_durum'],
                                    'emlak_fiyataz' => $_POST['emlak_fiyataz'],
                                    'emlak_fiyatcok' => $_POST['emlak_fiyatcok']
                            ));

                        }else{
                            $aranan=$_POST['aranan'];
                            $emlaksor=$db->prepare("SELECT * FROM emlak WHERE emlak_baslik LIKE '%$aranan%' ");
                            $emlaksor->execute();

                        }

                        while($emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC)){




                            ?>


                        <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                            <div class="listing-item">
                                <a href="emlak-<?=seo($emlakcek['emlak_baslik']).'-'.$emlakcek['emlak_id'];?>" class="text-decoration-none">
												<span class="thumb-info thumb-info-lighten">
													<span class="thumb-info-wrapper m-none">
														<img style="width: 262px; height: 165px;" src="<?php echo $emlakcek['emlak_resimyol'] ?>" class="img-responsive" alt="">

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
														<?php echo $emlakcek['emlak_fiyat'] ?> TL
														<i class="fa fa-caret-right text-color-secondary pull-right"></i>
													</span>
													<span class="custom-thumb-info-title b-normal p-lg">
														<span class="thumb-info-inner text-md"<?php echo $emlakcek['emlak_baslik'] ?></span>
														<ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
															<li>
																<span class="accomodation-title">
																	Beds:
																</span>
																<span class="accomodation-value custom-color-1">
																	3
																</span>
															</li>
															<li>
																<span class="accomodation-title">
																	Baths:
																</span>
																<span class="accomodation-value custom-color-1">
																	2
																</span>
															</li>
															<li>
																<span class="accomodation-title">
																	Sq Ft:
																</span>
																<span class="accomodation-value custom-color-1">
																	500
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
                <hr class="dashed">


            </div>

       <?php include 'rightbar.php';?>
        </div>
    </div>
<?php include 'footer.php';
?>
				