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
                      <div class="panel-heading text-center">BMW X1 DİZEL</div>
                      <div class="panel-body"><img src="img/ust/x1.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1303</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="BMW X1 DİZEL" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                  
                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">MİNİ COOPER DİZEL</div>
                      <div class="panel-body"><img src="img/ust/mini.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1319</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="MİNİ COOPER DİZEL" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>


                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">MİNİ COOPER COUNTRYMAN BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/mini_1.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 3</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1385</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="MİNİ COOPER COUNTRYMAN BENZİNLİ" name="arac_model" />
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
                      <div class="panel-heading text-center">MERCEDES C200 DİZEL</div>
                      <div class="panel-body"><img src="img/ust/c200.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1309</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="MERCEDES C200 DİZEL" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                

                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">MERCEDES E180 BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/e180.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1424</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="MERCEDES E180 BENZİNLİ" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>


                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">AUDİ A4 BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/a4.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1421</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="AUDİ A4 BENZİNLİ" name="arac_model" />
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
                      <div class="panel-heading text-center">HYUNDAİ ELANTRA BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/elantra.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1353</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="HYUNDAİ ELANTRA BENZİNLİ" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                

                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">BMW 1.16 BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/1.16.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1405</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="BMW 1.16 BENZİNLİ" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>


                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">BMW X1 BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/x1.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1408</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="BMW X1 BENZİNLİ" name="arac_model" />
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
                      <div class="panel-heading text-center">BMW 2.18 BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/2.18.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1373</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="BMW 2.18 BENZİNLİ" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                

                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">BMW 3.20i BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/3.20.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1542</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="BMW 3.20i BENZİNLİ" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>


                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">BMW 2.16 COUPE DİZEL</div>
                      <div class="panel-body"><img src="img/ust/2.16.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1479</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="BMW 2.16 COUPE DİZEL" name="arac_model" />
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
                      <div class="panel-heading text-center">SKODA KODİAQ BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/kodiaq.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1415</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="SKODA KODİAQ BENZİNLİ" name="arac_model" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                

                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">AUDİ A3 SEDAN BENZİNLİ</div>
                      <div class="panel-body"><img src="img/ust/a3.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1538</b></p>
                          <input type="radio" style=" width: 30px; height:30px" class="radio" value="AUDİ A3 SEDAN BENZİNLİ" name="arac_model" />
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