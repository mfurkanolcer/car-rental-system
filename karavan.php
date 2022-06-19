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
            <li><a href="ust.php">Üst</a></li>
            <li class="active"><a href="karavan.php">Karavan</a></li>
        </ul>
            <br>

            <div class="row">
                <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">ÇEKME KARAVAN + SKODA KAMİQ</div>
                      <div class="panel-body"><img src="img/karavan/kamiq_karavan.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1744</b></p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                  
                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                      <div class="panel-heading text-center">CRAWLER ÇEKME KARAVAN + PİCK UP</div>
                      <div class="panel-body"><img src="img/karavan/crawler.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1787</b></p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>


                  <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                    <div class="panel-heading text-center">CRAWLER ANKA 300 KARAVAN + PİCK UP</div>
                      <div class="panel-body"><img src="img/karavan/crawler_1.png" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">
                      <div class="row">
                        <div class="col-md-6" style="font-size: 14px;">
                          <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 8</p>
                          <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
                          <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 7</p>
                        </div>
                        <div class="col-md-6">
                          <p style="font-size: 40px;"><b>&#8378 1872</b></p>
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
