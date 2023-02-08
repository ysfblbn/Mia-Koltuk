<?php include '../../sistem/baglan.php' ?>;

<?php include 'sidebar.php'  ?>

<?php
$anasayfa = $db->prepare("SELECT * FROM  anasayfa");
$anasayfa->execute();
$anasayfaCek = $anasayfa->fetch(PDO::FETCH_ASSOC);

error_reporting(0);
$anasayfaID     =   $_GET["anasayfaID"];
$anasayfa = $db->prepare("SELECT * FROM  anasayfa WHERE anasayfaID=?");
$anasayfa->execute(array($anasayfaID));
$fotocek = $anasayfa->fetch(PDO::FETCH_ASSOC);
?>


<div class="col-md-6 grid-margin stretch-card" style="width: 1610px;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Anasayfa Düzeltme</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="islem.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Site Title</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="anasayfaTitle" placeholder="" value="<?= $anasayfaCek["anasayfaTitle"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Başlık</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="anasayfaBaslik" placeholder="" value="<?= $anasayfaCek["anasayfaBaslik"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Yazı</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="anasayfaYazi" placeholder="" value="<?= $anasayfaCek["anasayfaYazi"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Firma Adı</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="anasayfaFirmaAd" placeholder="" value="<?= $anasayfaCek["anasayfaFirmaAd"] ?>">
                    </div>
                    <input type="hidden" value="<?= $anasayfaCek["anasayfaID"]; ?>" name="anasayfaID">

                    <button type="submit" name="anasayfaGuncelle" class="btn btn-primary me-2">Güncelle</button>
                  </form>
                </div>
              </div>
            </div>
            <form action="islem.php" method="POST" enctype="multipart/form-data">

    <div class="form-floating mb-3">
        <div for="inputTitle">Fotograf Guncelle</div>
        <img width="500px" height="500px" src="../../img/<?= $anasayfaCek["anasayfaArkaPlan"];?>">
    </div>


    <label for="inputTitle">Fotograf Yükle</label>
    <div class="form-floating mb-3">

        <input class="form-control" name="anasayfaFotograf" type="file">

    </div>
    <input name="anasayfaID" value="<?= $anasayfaCek["anasayfaID"]; ?>" type="hidden">
    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <button name="anasayfaFotoGuncelle" class="btn btn-primary text-center">Güncele</button>
    </div>
    <br>
</form>