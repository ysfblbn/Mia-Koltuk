<?php include '../../sistem/baglan.php' ?>;

<?php include 'sidebar.php'  ?>

<?php
$iletisim = $db->prepare("SELECT * FROM  iletisim");
$iletisim->execute();
$iletisimCek = $iletisim->fetch(PDO::FETCH_ASSOC);

?>


<div class="col-md-6 grid-margin stretch-card" style="width: 1610px;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">İletişim Düzeltme</h4>
      <p class="card-description">
      </p>
      <form class="forms-sample" action="islem.php" method="POST">
        <div class="form-group">
          <label for="exampleInputUsername1">Adres</label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="iletisimAdres" placeholder="" value="<?= $iletisimCek["iletisimAdres"] ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">Telefon Numarası</label>
          <input type="text" class="form-control" id="exampleInputUsername1" name="iletisimTel" placeholder="" value="<?= $iletisimCek["iletisimTel"] ?>">
        </div>
        <input type="hidden" value="<?= $iletisimCek["iletisimID"]   ?>" name="iletisimID">
        <button type="submit" name="iletisimGuncelle" class="btn btn-primary me-2">Güncelle</button>
      </form>
    </div>
  </div>
</div>