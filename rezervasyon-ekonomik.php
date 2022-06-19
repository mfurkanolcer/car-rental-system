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
  <p>2- Kiralamalak istediğiniz araç modelini seçiniz.</p>
  <hr><br>

  <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">HYUNDAI i20 DİZEL</div>
        <div class="panel-body"><img src="img/ekonomik/i20.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 888</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="HYUNDAI i20 DİZEL" name="arac_model" />
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">RENAULT CLİO HB DİZEL</div>
        <div class="panel-body"><img src="img/ekonomik/clio.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 870</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT CLİO HB DİZEL" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">RENAULT SYMBOL BENZİNLİ</div>
        <div class="panel-body"><img src="img/ekonomik/symbol.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 959</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT SYMBOL BENZİNLİ" name="arac_model" />
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
        <div class="panel-heading text-center">FORD TOURNEO COURİER DİZEL</div>
        <div class="panel-body"><img src="img/ekonomik/courier.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1.066</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="FORD TOURNEO COURİER DİZEL" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">RENAULT SYMBOL DİZEL</div>
        <div class="panel-body"><img src="img/ekonomik/symbol.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 909</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT SYMBOL DİZEL" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">RENAULT CLİO JOY BENZİNLİ</div>
        <div class="panel-body"><img src="img/ekonomik/clio_1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 813</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT CLİO JOY BENZİNLİ" name="arac_model" />
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
        <div class="panel-heading text-center">HYUNDAİ i20 BENZİNLİ</div>
        <div class="panel-body"><img src="img/ekonomik/i20.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 888</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="HYUNDAİ i20 BENZİNLİ" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">RENAULT CLİO DİZEL</div>
        <div class="panel-body"><img src="img/ekonomik/clio.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 871</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT CLİO DİZEL" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">PEUGEOT 208 BENZİNLİ</div>
        <div class="panel-body"><img src="img/ekonomik/208.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 871</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="PEUGEOT 208 BENZİNLİ" name="arac_model" />
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
        <div class="panel-heading text-center">SKODA FABİA BENZİNLİ</div>
        <div class="panel-body"><img src="img/ekonomik/fabia.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 813</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="SKODA FABİA BENZİNLİ" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">PEUGEOT 301 DİZEL</div>
        <div class="panel-body"><img src="img/ekonomik/301.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 928</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="PEUGEOT 301 DİZEL" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">FİAT EGEA DİZEL</div>
        <div class="panel-body"><img src="img/ekonomik/egea.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 925</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="FİAT EGEA DİZEL" name="arac_model" />
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
        <div class="panel-heading text-center">HYUNDAI i20 DİZEL</div>
        <div class="panel-body"><img src="img/ekonomik/i20.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 888</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="HYUNDAI i20 DİZEL" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">RENAULT TALİANT BENZİNLİ</div>
        <div class="panel-body"><img src="img/ekonomik/taliant.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1.181</b></p>
              <input type="radio" style=" width: 30px; height:30px" class="radio" value="RENAULT TALİANT BENZİNLİ" name="arac_model" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
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