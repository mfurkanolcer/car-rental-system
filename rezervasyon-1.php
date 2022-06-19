<?php

include 'rezervasyon-header.php';

?>

<?php
require('mysqlbaglan.php');

if (isset($_POST['submit'])) {

  extract($_POST);


  $sql = "SELECT * FROM rezervasyonlar WHERE id=(SELECT max(id) FROM rezervasyonlar)";

  $result = $baglanti->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $sql_1 = "UPDATE rezervasyonlar SET rezervasyon_tarihi=CURRENT_TIMESTAMP, arac_turu='$arac_turu'  WHERE id=$row[id]";
    }
  }


  $cevap = mysqli_query($baglanti, $sql_1);


  if (!$cevap) {
    echo '<br>Hata:' . mysqli_error($baglanti);
  }

}


?>

<?php
if (isset($_POST['submit'])) {
  extract($_POST);

  switch ($arac_turu) {
    case 'Ekonomik':
      header("Location: rezervasyon-ekonomik.php");
      break;
    case 'Orta':
      header("Location: rezervasyon-orta.php");
      break;
    case 'SUV':
      header("Location: rezervasyon-suv.php");
      break;
    case 'Minibüs':
      header("Location: rezervasyon-minibus.php");
      break;
    case 'Üst':
      header("Location: rezervasyon-ust.php");
      break;
    case 'Karavan':
      header("Location: rezervasyon-karavan.php");
      break;
  }
}

if (isset($_POST['vazgec'])) {
  $sql_2 = "DELETE FROM rezervasyonlar WHERE id=(SELECT max(id) FROM rezervasyonlar)";
  $cevap_2 = mysqli_query($baglanti, $sql_2);

  header("Location: index.php");
}

?>


<div class="container">
  <h3><b>REZERVASYON</b></h3>
  <p>1- Kiralamalak istediğiniz araç türünü seçiniz.</p>
  <hr>
  <br>

  <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST">

    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">EKONOMİK</div>
          <div class="panel-body"><img src="img/ekonomik/i20.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-12">
                <input type="radio" style=" width: 30px; height:30px" class="radio" value="Ekonomik" name="arac_turu" /></label>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">ORTA</div>
          <div class="panel-body"><img src="img/orta/corolla_1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-12">
                <input type="radio" style=" width: 30px; height:30px" class="radio" value="Orta" name="arac_turu" /></label>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">SUV</div>
          <div class="panel-body"><img src="img/suv/3008.png" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-12">
                <input type="radio" style=" width: 30px; height:30px" class="radio" value="SUV" name="arac_turu" /></label>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">MİNİBÜS</div>
          <div class="panel-body"><img src="img/minibus/vito.png" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-12">
                <input type="radio" style=" width: 30px; height:30px" class="radio" value="Minibüs" name="arac_turu" /></label>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">ÜST</div>
          <div class="panel-body"><img src="img/ust/a4.png" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-12">
                <input type="radio" style=" width: 30px; height:30px" class="radio" value="Üst" name="arac_turu" /></label>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">KARAVAN</div>
          <div class="panel-body"><img src="img/karavan/crawler.png" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-12">
                <input type="radio" style=" width: 30px; height:30px" class="radio" value="Karavan" name="arac_turu" /></label>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div><br>

    <div class="form-group text-left">
      <div class="col-sm-6">
        <button type="submit" class="btn btn-danger" name="vazgec">Vazgeç</button>
      </div>
      <div class="form-group text-right">
        <div class="col-sm-6">
          <button type="submit" class="btn btn-success" name="submit">Devam Et</button>
        </div>
      </div>
    </div>
    <hr><br><br><br>
  </form>

</div>

<?php

include 'footer.php';

?>