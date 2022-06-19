<?php

include 'user-header.php';

?>

<?php
require('mysqlbaglan.php');


if (isset($_POST['submit'])) {

  $sql = "INSERT INTO rezervasyonlar(kullanici_id,kullanici_adi,ad,soyad,tel,ehliyet_turu) SELECT id,kullanici_adi,ad,soyad,tel,ehliyet_turu FROM users WHERE `kullanici_adi` = '$_SESSION[username]'";

  $cevap = mysqli_query($baglanti, $sql);

  if (!$cevap) {
    echo '<br>Hata:' . mysqli_error($baglanti);
  }



?>

<?php
  if (isset($_POST['submit'])) {


    header("Location: rezervasyon-1.php");
  }
}
?>


<div class="container">
  <h3><b>REZERVASYON</b></h3>
  <p>İhtiyacınız olan, size uygun aracı seçmek için tıklayınız.</p>
  <hr>
  <br><br><br>
  <div class="row">


    <div class="col-md-6">
    <div class="col-sm-12 text-center">
        <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST">
          <div class="form-group text-center">
            <div class="col-sm-12"><br><br>
              <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Araç Seç</button>
            </div>
          </div><br><br>
        </form>
      </div>
      </div>

    <div class="col-md-6 text-left">
      <div class="col-sm-12 text-center">
        <img src="img/logo.png" alt="Rent a Car">
        <hr><br>
        <ul class="list-unstyled mb-0">
          <li>
            <p><i class="glyphicon glyphicon-map-marker"></i>&nbsp;&nbsp;&nbsp; Pendik, İstanbul, Türkiye</p>
          </li>

          <li>
            <p><i class="glyphicon glyphicon-earphone"></i>&nbsp;&nbsp;&nbsp;987 654 32 10</p>
          </li>

          <li>
            <p><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;&nbsp;ornek@mail.com</p>
          </li>
        </ul>
      </div>
    </div>

  </div><br><br><br><br>

</div>

<?php

include 'footer.php';

?>