<?php include '../../sistem/baglan.php' ?>;

<?php include 'sidebar.php'  ?>



<div class="col-md-6 grid-margin stretch-card" style="width: 1610px;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Memnuniyet Ekleme</h4>
      <p class="card-description"></p>
      <form class="for ms-sample" action="islem.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputUsername1">Memnuniyet URL</label>
          <input type="text" class="form-control" name="memnunUrl" placeholder="URL Giriniz"><br>
          <input class="form-control" name="memnunFoto" type="file"><br>
          <button name="memnunEkle" class="btn btn-primary text-center">Güncele</button>

        </div>
      </form>
    </div>
  </div>
</div>
