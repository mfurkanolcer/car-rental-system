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
            $sql_1 = "UPDATE rezervasyonlar SET alma_tarihi='$alma_tarihi', teslim_tarihi='$teslim_tarihi'  WHERE id=$row[id]";
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

    header("Location: rezervasyonlarim.php");
}

if (isset($_POST['vazgec'])) {
    $sql_2 = "DELETE FROM rezervasyonlar WHERE id=(SELECT max(id) FROM rezervasyonlar)";
    $cevap_2 = mysqli_query($baglanti, $sql_2);

    header("Location: index.php");
}

?>


<div class="container">
    <h3><b>REZERVASYON</b></h3>
    <p>3- Kiralamalak istediğiniz tarih aralığını seçiniz.</p>
    <hr><br>

    <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST">
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group text-center">
                        <label class="col-sm-4" for="alma_tarihi">Başlangıç Tarihi:</label>
                        <div class="col-sm-8">
                            <input name="alma_tarihi" type="date" class="form-control" value="<?php echo $alma_tarihi ?>" required/>
                        </div>
                    </div>
    </div>


    <div class="col-sm-6">
      <div class="form-group text-center">
                        <label class="col-sm-4" for="teslim_tarihi">Teslim Tarihi:</label>
                        <div class="col-sm-8">
                            <input name="teslim_tarihi" type="date" class="form-control" value="<?php echo $teslim_tarihi ?>" required/>
                        </div>
                    </div>
    </div>
  </div>
  <hr><br><br><br>
  
  <div class="form-group text-left">
      <div class="col-sm-6">
        <button type="submit" class="btn btn-danger" name="vazgec">Vazgeç</button>
      </div>
      <div class="form-group text-right">
        <div class="col-sm-6">
          <button type="submit" class="btn btn-success" name="submit">Rezervasyonu Kaydet</button>
        </div>
      </div>
    </div>
    <br><br>

</form><hr>

</div>

<?php

include 'footer.php';

?>