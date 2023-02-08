<?php include '../../sistem/baglan.php' ?>;

<?php include 'sidebar.php'  ?>

<?php

error_reporting(0);
$urunID     =   $_GET["urunID"];
$urunler       =   $db->prepare("SELECT * FROM  urunler WHERE urunID=?");
$urunler->execute(array($urunID));
$urunCek    =   $urunler->fetch(PDO::FETCH_ASSOC);
?>


<div class="col-md-6 grid-margin stretch-card" style="width: 1610px;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Ürün Düzeltme</h4>
      <p class="card-description"></p>
      <form class="forms-sample" action="islem.php" method="POST">
        <div class="form-group">
          <label for="exampleInputUsername1">Ürün Adı</label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="urunAd" value="<?= $urunCek["urunAd"] ?>">
        </div>
          <input type="hidden" name="urunID" value="<?= $urunCek["urunID"] ?>">
        <button type="submit" name="urunAdGuncelle" class="btn btn-primary me-2">Güncelle</button>
      </form>
    </div>
  </div>
</div>

<form action="islem.php" method="POST" enctype="multipart/form-data">
  <div class="form-floating mb-3" >
    <div for="inputTitle">Fotograf Guncelle</div>
    <img width="500" src="../../img/<?= $urunCek["urunFoto"] ?>" >
  </div>


  <label for="inputTitle">Fotograf Yükle</label>
  <div class="form-floating mb-3">

    <input class="form-control" name="urunFoto" type="file">

  </div>
  <input name="urunID" value="<?= $urunCek["urunID"]; ?>" type="hidden">
  <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
    <button name="urunFotoGuncelle" class="btn btn-primary text-center">Güncele</button>
  </div>
  <br>
</form>