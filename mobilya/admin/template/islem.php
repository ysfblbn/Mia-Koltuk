<?php include '../../sistem/baglan.php' ?>
<?php
extract($_POST);



// Anasayfa Yazılar Güncelleme İşlemi
if (isset($_POST["anasayfaGuncelle"])) {

    $anasayfaTitle      =   $_POST["anasayfaTitle"];
    $anasayfaBaslik         =   $_POST["anasayfaBaslik"];
    $anasayfaYazi         =   $_POST["anasayfaYazi"];
    $anasayfaFirmaAd         =   $_POST["anasayfaFirmaAd"];
    $anasayfaID         =   $_POST["anasayfaID"];



    if (!$anasayfaTitle || !$anasayfaBaslik || !$anasayfaYazi || !$anasayfaFirmaAd) {
        header("Location: anasayfa.php?update=bos");
    } else {
        $anasayfa = $db->prepare("UPDATE anasayfa SET anasayfaTitle=?,anasayfaBaslik=?,anasayfaYazi=?,anasayfaFirmaAd=? WHERE anasayfaID=?");
        $anasayfa->execute(array($anasayfaTitle, $anasayfaBaslik, $anasayfaYazi, $anasayfaFirmaAd, $anasayfaID));
        if ($anasayfa) {
            header("Location: anasayfa.php?update=yes");
        } else {
            header("Location: anasayfa.php?update=no");
        }
    }
}

// Anasayfa Fotoğraf Güncelleme İşlemi

if (isset($_POST["anasayfaFotoGuncelle"])) {

    $anasayfaID     =   $_POST["anasayfaID"];
    $kaynak = $_FILES["anasayfaFotograf"]["tmp_name"];
    $isim = $_FILES["anasayfaFotograf"]["name"];
    $turu = $_FILES["anasayfaFotograf"]["type"];

    $hedef = "../../img/" . basename($isim);


    if (move_uploaded_file($kaynak, $hedef)) {
        $yukle  = $db->prepare("UPDATE anasayfa SET anasayfaArkaPlan=? WHERE anasayfaID=?");
        $update = $yukle->execute(array($isim, $anasayfaID));

        if ($update) {
            header("Location: anasayfa.php?update=yes");
        } else {
            header("Location: anasayfa.php?update=no");
        }
    }
}

// Hakkımızda Yazı Güncelleme İşlemi
if (isset($_POST["hakkimizdaGuncelle"])) {

    $hakkimizdaYazi      =   $_POST["hakkimizdaYazi"];
    $hakkimizdaFirmaYazi         =   $_POST["hakkimizdaFirmaYazi"];
    $hakkimizdaID         =   $_POST["hakkimizdaID"];



    if (!$hakkimizdaYazi || !$hakkimizdaFirmaYazi) {
        header("Location: hakkimizda.php?update=bos");
    } else {
        $hakkimizda = $db->prepare("UPDATE hakkimizda SET hakkimizdaYazi=?,hakkimizdaFirmaYazi=? WHERE hakkimizdaID=?");
        $hakkimizda->execute(array($hakkimizdaYazi, $hakkimizdaFirmaYazi, $hakkimizdaID));
        if ($hakkimizda) {
            header("Location: hakkimizda.php?update=yes");
        } else {
            header("Location: hakkimizda.php?update=no");
        }
    }
}

// İletişim Sayfası Güncelleme İşlemi
if (isset($_POST["iletisimGuncelle"])) {

    $iletisimTel      =   $_POST["iletisimTel"];
    $iletisimAdres         =   $_POST["iletisimAdres"];
    $iletisimID         =   $_POST["iletisimID"];



    if (!$iletisimAdres || !$iletisimTel) {
        header("Location: iletisim.php?update=bos");
    } else {
        $iletisim = $db->prepare("UPDATE iletisim SET iletisimAdres=?,iletisimTel=? WHERE iletisimID=?");
        $iletisim->execute(array($iletisimAdres, $iletisimTel, $iletisimID));
        if ($iletisim) {
            header("Location: iletisim.php?update=yes");
        } else {
            header("Location: iletisim.php?update=no");
        }
    }
}

// Memnuniyet Sayfası Yazı Güncelleme İşlemi
if (isset($_POST["memnuniyetGuncelle"])) {

    $memnunYazi      =   $_POST["memnunYazi"];
    $memnunID         =   $_POST["memnunID"];

    if (!$memnunYazi) {
        header("Location: memnuniyet.php?update=bos");
    } else {
        $memnun = $db->prepare("UPDATE anasayfa SET memnunYazi=? ");
        $memnun->execute(array($memnunYazi));
        if ($memnun) {
            header("Location: memnuniyet.php?update=yes");
        } else {
            header("Location: memnuniyet.php?update=no");
        }
    }
}

// Memnuniyet Sayfası Url Güncelleme İşlemi
if (isset($_POST["memnuniyetGuncelle"])) {

    $memnunUrl      =   $_POST["memnunUrl"];
    $memnunID         =   $_POST["memnunID"];



    if (!$memnunUrl) {
        header("Location: memnunDuzenle.php?update=bos");
    } else {
        $memnun = $db->prepare("UPDATE memnun SET memnunUrl=? WHERE memnunID=?");
        $memnun->execute(array($memnunUrl, $memnunID));
        if ($memnun) {
            header("Location: memnuniyet.php?update=yes");
        } else {
            header("Location: memnunDuzenle.php?update=no");
        }
    }
}

// Memnuniyet Fotoğraf Güncelleme İşlemi

if (isset($_POST["memnunFotoGuncelle"])) {

    $memnunID     =   $_POST["memnunID"];
    $kaynak = $_FILES["memnunFoto"]["tmp_name"];
    $isim = $_FILES["memnunFoto"]["name"];
    $turu = $_FILES["memnunFoto"]["type"];

    $hedef = "../../img/" . basename($isim);


    if (move_uploaded_file($kaynak, $hedef)) {
        $yukle  = $db->prepare("UPDATE memnun SET memnunFoto=? WHERE memnunID=?");
        $update = $yukle->execute(array($isim, $memnunID));

        if ($update) {
            header("Location: memnuniyet.php?update=yes");
        } else {
            header("Location: anasayfa.php?update=no");
        }
    }
}

// Memnuniyet Silme
$memnunsil_id = $_GET["memnunsil_id"];
if (isset($memnunsil_id)) {


    $memnun = $db->prepare("DELETE FROM memnun WHERE memnunID=?");
    $memnun->execute(array($memnunsil_id));
    if ($memnun) {
        header("Location: memnuniyet.php?sonuc=yes");
    } else {
        header("Location: memnuniyet.php?sonuc=no");
    }
}

// Ürünler Sayfası Ad Güncelleme İşlemi
if (isset($_POST["urunAdGuncelle"])) {

    $urunAd      =   $_POST["urunAd"];
    $urunID         =   $_POST["urunID"];



    if ($urunAd=="") {
        header("Location: urunDuzenle.php?update=bos");
    } else {
        $urunler = $db->prepare("UPDATE urunler SET urunAd=? WHERE urunID=?");
        $urunler->execute(array($urunAd, $urunID));
        if ($urunler) {
            header("Location: urunler.php?update=yes");
        } else {
            header("Location: urunDuzenle.php?update=no");
        }
    }
}

// Ürünler Fotoğraf Güncelleme İşlemi

if (isset($_POST["urunFotoGuncelle"])) {

    $memnunID     =   $_POST["urunID"];
    $kaynak = $_FILES["urunFoto"]["tmp_name"];
    $isim = $_FILES["urunFoto"]["name"];
    $turu = $_FILES["urunFoto"]["type"];

    $hedef = "../../img/gallery/" . basename($isim);


    if (move_uploaded_file($kaynak, $hedef)) {
        $yukle  = $db->prepare("UPDATE urunler SET urunFoto=? WHERE urunID=?");
        $update = $yukle->execute(array($isim, $urunID));

        if ($update) {
            header("Location: urunler.php?update=yes");
        } else {
            header("Location: urunDuzenle.php?update=no");
        }
    }
}

// Ürün Silme
$urunsil_id = $_GET["urunsil_id"];
if (isset($urunsil_id)) {


    $urunler = $db->prepare("DELETE FROM urunler WHERE urunID=?");
    $urunler->execute(array($urunsil_id));
    if ($memnun) {
        header("Location: urunler.php?sonuc=yes");
    } else {
        header("Location: urunler.php?sonuc=no");
    }
}

// Ürün ekleme işlemi

if (isset($_POST["urunEkle"])) {
    $kaynak = $_FILES["urunFoto"]["tmp_name"];
    $isim = $_FILES["urunFoto"]["name"];
    $turu = $_FILES["urunFoto"]["type"];

    $hedef = "../../img/" . basename($isim);

    $urunAd      =   $_POST["urunAd"];

    if (move_uploaded_file($kaynak, $hedef)) {
        $yukle  = $db->prepare("INSERT INTO  urunler SET urunFoto=?, urunAd=?");
        $yukle->execute(array($isim, $urunAd));

        if ($yukle) {
            header("Location: urunler.php?update=yes");
        } else {
            header("Location: urunEkle.php?update=no");
        }
    }
}

// Memnuniyet ekleme işlemi

if (isset($_POST["memnunEkle"])) {
    $kaynak = $_FILES["memnunFoto"]["tmp_name"];
    $isim = $_FILES["memnunFoto"]["name"];
    $turu = $_FILES["memnunFoto"]["type"];

    $hedef = "../../img/" . basename($isim);

    $memnunUrl      =   $_POST["memnunUrl"];

    if (move_uploaded_file($kaynak, $hedef)) {
        $yukle  = $db->prepare("INSERT INTO  memnun SET memnunFoto=?, memnunUrl=?");
        $yukle->execute(array($isim, $memnunUrl));

        if ($yukle) {
            header("Location: memnuniyet.php?update=yes");
        } else {
            header("Location: memnunEkle.php?update=no");
        }
    }
}

 


// İletişim Kısmı Veri Tabanına Kaydetme
if (isset($_POST["formGonder"])) {

    
    $iletisimFormAd         =   $_POST["iletisimFormAd"];
    $iletisimFormMail       =   $_POST["iletisimFormMail"];
    $iletisimFormMesaj      =   $_POST["iletisimFormMesaj"];
    
  
        $sorgu  =   $db->prepare("INSERT INTO  iletisimform SET iletisimFormAd=? , iletisimFormMail=? , iletisimFormMesaj=?");
        $sorgu  ->  execute(array($iletisimFormAd, $iletisimFormMail, $iletisimFormMesaj));
        if ($sorgu) {
            header("Location: index.php?update=yes");
        } else {
            header("Location: index.php?update=no");
        }
    }

    //İletişim Silme
    // Ürün Silme
$iletisimsil_id = $_GET["iletisimsil_id"];
if (isset($iletisimsil_id)) {


    $iletisimform = $db->prepare("DELETE FROM iletisimform WHERE iletisimFormID=?");
    $iletisimform->execute(array($iletisimsil_id));
    if ($iletisimform) {
        header("Location: mesaj.php?sonuc=yes");
    } else {
        header("Location: mesaj.php?sonuc=no");
    }
}

 

// Admin Giriş Paneli 
ob_start();
session_start();
// Admin Giriş Paneli 
if(isset($_POST["admingiris"])){
$gelenMail = $_POST["email"];
$gelenSifre =$_POST["sifre"];


    $adminKontrol =$db->prepare("SELECT * FROM users WHERE usersMail=? AND usersSifre=?");
    $adminKontrol -> execute([$gelenMail,$gelenSifre]);


    if ($adminKontrol){
      
        $_SESSION["mail"] = $gelenMail;
        $_SESSION["pass"] = $gelenSifre;
        
        header("Location: index.php");


    }else{
        echo '<div class="alert alert-danger">Bu Bilgilere Ait Kullanıcı Bulunamadı</div>';
        header("Location: login.php");

    }
}
