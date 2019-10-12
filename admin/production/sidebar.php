<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3><?php
            if ($kullanicicek['kullanici_yetki']==5){?>
            YETKİ : <a style="margin-left: 7px "  class="label label-success"> YÖNETİCİ</a></li>
             <?php
            } else { ?>
            YETKİ : <a style="margin-left: 7px "  class="label label-success"> SATIŞ DANIŞMANI</a></li>
              <?php  }?></h3>
        <ul class="nav side-menu">
            <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa </a></li>
            <li><a><i class="fa fa-cog"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="genel-ayar.php">Genel Ayarlar</a></li>
                    <li><a href="iletisim-ayar.php">İletişim Ayarları</a></li>
                    <li><a href="api-ayar.php">Api Ayarları</a></li>
                    <li><a href="sosyal-ayar.php">Sosyal Medya Ayarları</a></li>
                    <li><a href="mail-ayar.php">Mail Ayarları</a></li>
                </ul>
            </li>
            <li><a href="hakkimizda.php"><i class="fa fa-book"></i> Hakkımızda </a></li>
            <li><a href="slider.php"><i class="fa fa-image"></i> Slider İşlemleri</a></li>
            <li><a href="menu.php"><i class="fa fa-list"></i> Menü İşlemleri</a></li>
            <li><a href="emlak.php"><i class="fa fa-home"></i> Emlak İşlemleri</a></li>
            <li><a href="icerik.php"><i class="fa fa-file-text"></i> İçerik İşlemleri</a></li>



        </ul>
    </div>
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" href="kullanici-profil.php" title="Ayarlar">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Tam Ekran">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Kilitle">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Çıkış Yap">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
</div>