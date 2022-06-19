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
    <li class="active"><a href="ekonomik.php">Ekonomik</a></li>
    <li><a href="orta.php">Orta</a></li>
    <li><a href="suv.php">SUV</a></li>
    <li><a href="minibus.php">Minibüs</a></li>
    <li><a href="ust.php">Üst</a></li>
    <li><a href="karavan.php">Karavan</a></li>
  </ul>
  <br>

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