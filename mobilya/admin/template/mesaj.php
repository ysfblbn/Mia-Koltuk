<?php include '../../sistem/baglan.php' ?>

<?php include 'sidebar.php'  ?>




<div class="col-lg-12 grid-margin stretch-card" style="text-align: center;">
  <div class="card" style="text-align: center;">
    <div class="card-body" style="text-align: center;">
      <h4 class="card-title">Gelen Mesaj</h4>

      <p class="card-description" style="text-align: center;">
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered" style="text-align: center;">
          <thead>
            <tr>
              <th>
                Ad Soyad
              </th>
              <th>
                E-Mail
              </th>
              <th>
                Mesaj
              </th>
              <th>
                İşlemler
              </th>
              

            </tr>
          </thead>
          <tbody>
            <?php
            $iletisimform = $db->prepare("SELECT * FROM  iletisimform");
            $iletisimform->execute();
            $iletisimformcek = $iletisimform->fetchAll(PDO::FETCH_ASSOC);
            foreach ($iletisimformcek as $row) { ?>
              <tr>
                <th>

                  <?= $row["iletisimFormAd"] ?>
                </th>
                <th>
                  <?= $row["iletisimFormMail"] ?>
                </th>
                <th>
                  <?= $row["iletisimFormMesaj"] ?>
                </th>
                <th>
                  <a href="islem.php?iletisimsil_id=<?= $row["iletisimFormID"]; ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-trash"></i>Sil</button></a>
                </th>
              </tr>
            <?php  } ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>