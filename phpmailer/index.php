<?php
include "../admin/netting/baglan.php";
ob_start();
session_start();

$ayarsor=$db->prepare("SELECT * FROM ayar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$smtpuser=$ayarcek['ayar_smtpuser'];
$smtphost=$ayarcek['ayar_smtphost'];
$smtpport=$ayarcek['ayar_smtpport'];
$smtppass=$ayarcek['ayar_smtppassword'];

if(isset($_POST['iletisimform'])){
    $adsoyad = htmlspecialchars(trim($_POST['adsoyad']));
    $mesaj = htmlspecialchars(trim($_POST['mesaj']));
    $eposta = htmlspecialchars(trim($_POST['eposta']));
    $ip = htmlspecialchars(trim($_POST['iletisim_ip']));
}






    require("class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
    $mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
    $mail->SMTPSecure = 'tls'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
    $mail->Host = $smtphost; // Mail sunucusunun adresi (IP de olabilir)
    $mail->Port = $smtpport; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
    $mail->IsHTML(true);
    $mail->SetLanguage("tr", "phpmailer/language");
    $mail->CharSet = "utf-8";
    $mail->Username = $smtpuser; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
    $mail->Password = $smtppass; // Mail adresimizin sifresi
    $mail->SetFrom($mail->Username, $adsoyad); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
    $mail->AddAddress($eposta, $adsoyad); // Mailin gönderileceği alıcı adres
    $mail->Subject = "İletişim Formu"; // Email konu başlığı
    $content = '
	<b>Websitenizden gelen iletişim maili</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">

		<tr>
			<td class="tg-031e">Ad Soyad</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$adsoyad.'</td>
		</tr>
		
		<tr>
			<td class="tg-031e">E-Posta</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$eposta.'</td>
		</tr>
	
		<tr>
			<td class="tg-031e">Mesaj</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$mesaj.'</td>
		</tr>
		<tr>
			<td class="tg-031e">İp Adresi</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$ip.'</td>
		</tr>
	</table>'; // Mailin içeriği

    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Email Gönderim Hatasi: " . $mail->ErrorInfo;
    } else {
        echo "Email Gonderildi";
    }

?>