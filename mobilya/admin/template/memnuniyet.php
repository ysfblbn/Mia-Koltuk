<?php include '../../sistem/baglan.php' ?>

<?php include 'sidebar.php'  ?>

<?php
$memnun = $db->prepare("SELECT * FROM  memnun");
$memnun->execute();
$memnunCek = $memnun->fetch(PDO::FETCH_ASSOC);

$anasayfa = $db->prepare("SELECT * FROM  anasayfa");
$anasayfa->execute();
$anasayfaCek = $anasayfa->fetch(PDO::FETCH_ASSOC);
?>

<div class="col-md-6 grid-margin stretch-card" style="width: 1610px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Memnuniyet Yazısı Düzeltme</h4><a href="memnunEkle.php"><button type="button" class="btn btn-success btn-rounded btn-fw" >Ürün Ekle</button></p></a>
            <p class="card-description">
            </p>
            <form class="forms-sample" action="islem.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputUsername1">Menuniyet Yazısı</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" name="memnunYazi" placeholder="" value="<?= $anasayfaCek["memnunYazi"] ?>">
                </div>
                <input type="hidden" value="<?= $memnunCek["memnunID"]  ?>" name="memnunID" >
                <button type="submit" name="memnuniyetGuncelle" class="btn btn-primary me-2">Güncelle</button>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card" style="text-align: center;">
    <div class="card" style="text-align: center;">
        <div class="card-body" style="text-align: center;">
            <h4 class="card-title">Ürün Güncelleme</h4>
            <p class="card-description" style="text-align: center;">
            </p>
            <div class="table-responsive pt-3">
                <table class="table table-bordered" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>
                                Memnuniyet ID
                            </th>
                            <th>
                                Memnuniyet Fotograf
                            </th>
                            <th>
                                URL
                            </th>
                            <th>
                                İşlemler
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $memnun = $db->prepare("SELECT * FROM  memnun");
                        $memnun->execute();
                        $memnuncek = $memnun->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($memnuncek as $row) { ?>
                            <tr>
                                <th>

                                    <?= $row["memnunID"] ?>
                                </th>
                                <th>
                                    <img src="../../img/<?= $row["memnunFoto"] ?>" alt="resim" style="align: center;" width="150">
                                </th>
                                <th>
                                    <?= $row["memnunUrl"] ?>
                                </th>
                                <th>
                                    <a href="memnunDuzenle.php?memnunID=<?= $row["memnunID"]; ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Düzenle</button></a>
                                    <a href="islem.php?memnunsil_id=<?= $row["memnunID"]; ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-trash"></i>Sil</button></a>
                                </th>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>