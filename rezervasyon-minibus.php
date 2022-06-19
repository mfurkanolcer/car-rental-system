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
                      <div class="panel-heading text-center">PEUGEOT TRAVELLER DİZEL</div>
                      <div class="panel-body"><img src="img/minibus/traveller.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 8</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 7</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1544</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="PEUGEOT TRAVELLER DİZEL" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                  
                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">MERCEDES VİTO DİZEL</div>
                      <div class="panel-body"><img src="img/minibus/vito.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 8</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 7</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1578</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="MERCEDES VİTO DİZEL" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>


                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                    <div class="panel-heading text-center">MERCEDES VİTO DİZEL</div>
                      <div class="panel-body"><img src="img/minibus/vito.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 8</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 7</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1467</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="MERCEDES VİTO DİZEL" name="arac_model" />
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
                    <div class="panel-heading text-center">FORD TOURNEO CUSTOM DİZEL</div>
                      <div class="panel-body"><img src="img/minibus/custom.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 9</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 6</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1499</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="FORD TOURNEO CUSTOM DİZEL" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                

                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">FORD TOURNEO CUSTOM DİZEL</div>
                      <div class="panel-body"><img src="img/minibus/custom.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 9</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 6</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1531</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="FORD TOURNEO CUSTOM DİZEL" name="arac_model" />
                        </div>
                      </div>

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