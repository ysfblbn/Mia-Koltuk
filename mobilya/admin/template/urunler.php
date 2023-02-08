<?php include '../../sistem/baglan.php' ?>

<?php include 'sidebar.php'  ?>

<?php
$urunler = $db->prepare("SELECT * FROM  urunler");
$urunler->execute();
$urunlerCek = $urunler->fetch(PDO::FETCH_ASSOC);

?>


<div class="col-lg-12 grid-margin stretch-card" style="text-align: center;">
  <div class="card" style="text-align: center;">
    <div class="card-body" style="text-align: center;">
      <h4 class="card-title">Ürün Güncelleme</h4><p> <a href="urunEkle.php"><button type="button" class="btn btn-success btn-rounded btn-fw" >Ürün Ekle</button></p></a>

      <p class="card-description" style="text-align: center;">
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered" style="text-align: center;">
          <thead>
            <tr>
              <th>
                Ürün ID
              </th>
              <th>
                Ürün Fotograf
              </th>
              <th>
                Ürün Ad
              </th>
              <th>
                İşlemler
              </th>

            </tr>
          </thead>
          <tbody>
            <?php
            $urunler = $db->prepare("SELECT * FROM  urunler");
            $urunler->execute();
            $urunlercek = $urunler->fetchAll(PDO::FETCH_ASSOC);
            foreach ($urunlercek as $row) { ?>
              <tr>
                <th>

                  <?= $row["urunID"] ?>
                </th>
                <th>
                  <img src="../../img/<?= $row["urunFoto"] ?>" alt="resim" style="align: center;" width="150">
                </th>
                <th>
                  <?= $row["urunAd"] ?>
                </th>
                <th>
                  <input type="hidden" value="<?= $urunlerCek["urunID"]; ?>" name="urunID">

                  <a href="urunDuzenle.php?urunID=<?= $row["urunID"]; ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Düzenle</button></a>
                  <a href="islem.php?urunsil_id=<?= $row["urunID"]; ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-trash"></i>Sil</button></a>
                </th>
              </tr>
            <?php  } ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>