<?php include '../../sistem/baglan.php' ?>;

<?php include 'sidebar.php'  ?>

<?php

error_reporting(0);
$memnunID     =   $_GET["memnunID"];
$memnun       =   $db->prepare("SELECT * FROM  memnun WHERE memnunID=?");
$memnun->execute(array($memnunID));
$memnunCek    =   $memnun->fetch(PDO::FETCH_ASSOC);
?>


<div class="col-md-6 grid-margin stretch-card" style="width: 1610px;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Memnuniyet Düzeltme</h4>
      <p class="card-description"></p>
      <form class="forms-sample" action="islem.php" method="POST">
        <div class="form-group">
          <label for="exampleInputUsername1">Memnun Url</label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="memnunUrl" value="<?= $memnunCek["memnunUrl"] ?>">
        </div>
        <input type="hidden" value="<?= $memnunCek["memnunID"]; ?>" name="memnunID">

        <button type="submit" name="memnuniyetGuncelle" class="btn btn-primary me-2">Güncelle</button>
      </form>
    </div>
  </div>
</div>

<form action="islem.php" method="POST" enctype="multipart/form-data">
  <div class="form-floating mb-3">
    <div for="inputTitle">Fotograf Guncelle</div>
    <img width="500" src="../../img/<?= $memnunCek["memnunFoto"]; ?>">
  </div>


  <label for="inputTitle">Fotograf Yükle</label>
  <div class="form-floating mb-3">

    <input class="form-control" name="memnunFoto" type="file">

  </div>
  <input name="memnunID" value="<?= $memnunCek["memnunID"]; ?>" type="hidden">
  <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
    <button name="memnunFotoGuncelle" class="btn btn-primary text-center">Güncele</button>
  </div>
  <br>
</form>