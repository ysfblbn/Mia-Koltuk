<?php include '../../sistem/baglan.php' ?>;

<?php include 'sidebar.php'  ?>

<?php
$hakkimizda = $db->prepare("SELECT * FROM  hakkimizda");
$hakkimizda->execute();
$hakkimizdaCek = $hakkimizda->fetch(PDO::FETCH_ASSOC);

?>


<div class="col-md-6 grid-margin stretch-card" style="width: 1610px;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hakkımızda Düzeltme</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="islem.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Hazkkımızda Yazısı</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="hakkimizdaYazi" placeholder="" value="<?= $hakkimizdaCek["hakkimizdaYazi"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Firma Profilimiz Yazısı</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="hakkimizdaFirmaYazi" placeholder="" value="<?= $hakkimizdaCek["hakkimizdaFirmaYazi"] ?>">
                    </div>
                    <input type="hidden" value="<?= $hakkimizdaCek["hakkimizdaID"]; ?>" name="hakkimizdaID">
                    <button type="submit" name="hakkimizdaGuncelle" class="btn btn-primary me-2">Güncelle</button>
                  </form>
                </div>
              </div>
            </div>