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
      $sql_1 = "UPDATE rezervasyonlar SET arac_model='$arac_model'  WHERE id=$row[id]";
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

  header("Location: rezervasyon-tarih.php");

}

if (isset($_POST['vazgec'])) {
  $sql_2 = "DELETE FROM rezervasyonlar WHERE id=(SELECT max(id) FROM rezervasyonlar)";
  $cevap_2 = mysqli_query($baglanti, $sql_2);

  header("Location: index.php");
}

?>


<div class="container">
        <h3><b>REZERVASYON</b></h3>
        <p>2- Kiralamalak istediğiniz araç modelini seçiniz.</p><hr>
        <br>
        
        <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST">
        <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">RENAULT FLUENCE DİZEL</div>
        <div class="panel-body"><img src="img/orta/fluence.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1095</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT FLUENCE DİZEL" name="arac_model" />
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">OPEL ASTRA BENZİNLİ</div>
        <div class="panel-body"><img src="img/orta/astra.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1185</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="OPEL ASTRA BENZİNLİ" name="arac_model" />
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">TOYOTA COROLLA DİZEL</div>
        <div class="panel-body"><img src="img/orta/corolla.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1074</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="TOYOTA COROLLA DİZEL" name="arac_model" />
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
        <div class="panel-heading text-center">RENAULT FLUENCE DİZEL</div>
        <div class="panel-body"><img src="img/orta/fluence.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1142</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT FLUENCE DİZEL" name="arac_model" />
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">TOYOTA COROLLA HYBRİD</div>
        <div class="panel-body"><img src="img/orta/corolla_1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1089</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="TOYOTA COROLLA HYBRİD" name="arac_model" />
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">PEUGEOT 2008 BENZİNLİ</div>
        <div class="panel-body"><img src="img/orta/2008.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1028</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="PEUGEOT 2008 BENZİNLİ" name="arac_model" />
            </div>
          </div>

        </div>
      </div>
    </div>


    <hr>
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">RENAULT MEGANE BENZİNLİ</div>
          <div class="panel-body"><img src="img/orta/megane.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-6" style="font-size: 14px;">
                <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
              </div>
              <div class="col-md-6">
                <p style="font-size: 40px;"><b>&#8378 1168</b></p>
                <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT MEGANE BENZİNLİ" name="arac_model" />
              </div>
            </div>

          </div>
        </div>
      </div>



      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">RENAULT TALİANT BENZİNLİ</div>
          <div class="panel-body"><img src="img/ekonomik/clio.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-6" style="font-size: 14px;">
                <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
              </div>
              <div class="col-md-6">
                <p style="font-size: 40px;"><b>&#8378 1110</b></p>
                <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT TALİANT BENZİNLİ" name="arac_model" />
              </div>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
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
    <hr><br>

    </form>
         
</div>

<?php

  include 'footer.php';
  
?>