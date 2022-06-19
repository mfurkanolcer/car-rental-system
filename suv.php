<?php

session_start();

if (isset($_SESSION['username'])) {
  $user_name = $row['kullanici_adi'];
  include 'user-header.php';
} else {

  include 'header.php';
}

?>

<div class="container">
  <h3><b>KİRALIK ARAÇ FİLOSU</b></h3>
  <p>Nereye giderseniz gidin, SUV, sedan veya ticari, istediğiniz her araca sahipsiniz.</p>
  <p> Giriş yaparak hemen rezervasyon yapabilirsiniz. &nbsp;<a href="giris.php">Giriş Yap</a></p>
  <hr>
  <ul class="nav nav-tabs nav-justified">
    <li><a href="ekonomik.php">Ekonomik</a></li>
    <li><a href="orta.php">Orta</a></li>
    <li class="active"><a href="suv.php">SUV</a></li>
    <li><a href="minibus.php">Minibüs</a></li>
    <li><a href="ust.php">Üst</a></li>
    <li><a href="karavan.php">Karavan</a></li>
  </ul>
  <br>

  <div class="row">
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
              <p style="font-size: 40px;"><b>&#8378 1202</b></p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">PEUGEOT 3008 BENZİNLİ</div>
        <div class="panel-body"><img src="img/suv/3008.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1311</b></p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">MG ZS EV BENZİNLİ</div>
        <div class="panel-body"><img src="img/suv/zs.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1350</b></p>
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
        <div class="panel-heading text-center">DACİA DUSTER 4X4 DİZEL</div>
        <div class="panel-body"><img src="img/suv/duster.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Manuel</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1220</b></p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">RENAULT CAPTUR BENZİNLİ</div>
        <div class="panel-body"><img src="img/suv/captur.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1317</b></p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">OPEL MOKKA BENZİNLİ</div>
        <div class="panel-body"><img src="img/suv/mokka.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 4</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1285</b></p>
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
        <div class="panel-heading text-center">RENAULT KADJAR DİZEL</div>
        <div class="panel-body"><img src="img/suv/kadjar.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1242</b></p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">FORD RANGER 4X4 PİCKUP DİZEL</div>
        <div class="panel-body"><img src="img/suv/ranger.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6" style="font-size: 14px;">
              <p><span class="glyphicon glyphicon-user"></span><b> Kişi:</b> 5</p>
              <p><span class="glyphicon glyphicon-road"></span><b> Vites:</b> Otomatik</p>
              <p><span class="glyphicon glyphicon-lock"></span><b> Çanta:</b> 5</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 40px;"><b>&#8378 1320</b></p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <hr>


  <hr>
</div>

<?php

include 'footer.php';

?>