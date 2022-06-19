<?php 
   
    session_start();  

    if( isset($_SESSION['username']) ) { 
        $user_name = $row['kullanici_adi']; 
        include 'user-header.php';
    }
    else{

        include 'header.php';
    }    
   
?>

    <div class="container">
        <h3><b>KİRALIK ARAÇ FİLOSU</b></h3>
        <p>Nereye giderseniz gidin, SUV, sedan veya ticari, istediğiniz her araca sahipsiniz.</p>
        <p> Giriş yaparak hemen rezervasyon yapabilirsiniz. &nbsp;<a href="giris.php">Giriş Yap</a></p><hr>
        <ul class="nav nav-tabs nav-justified">
            <li><a href="ekonomik.php">Ekonomik</a></li>
            <li><a href="orta.php">Orta</a></li>
            <li><a href="suv.php">SUV</a></li>
            <li><a href="minibus.php">Minibüs</a></li>
            <li class="active"><a href="ust.php">Üst</a></li>
            <li><a href="karavan.php">Karavan</a></li>
        </ul>
            <br>

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
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                
    </div>
    <hr>
    </div>
    
<?php

include 'footer.php';

?>
