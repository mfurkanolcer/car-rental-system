
<?php 
   
    session_start();  
   
    if ( isset($_SESSION['admin_name']) ) { 
        include 'admin-header.php';
    }

    else if( isset($_SESSION['username']) ) { 
        include 'user-header.php';
    }
    else{

        include 'header.php';
    }    
   
?>

       

    <div class="container">
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/slide1.jpg" alt="Image">
                <div class="carousel-caption">
                </div>      
              </div>
        
              <div class="item">
                <img src="img/slide2.jpg" alt="Image">
                <div class="carousel-caption">
                </div>      
              </div>
      
              <div class="item">
                <img src="img/slide3.jpg" alt="Image">
                <div class="carousel-caption">
                </div>      
              </div>
            </div>
            
        
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div><br><br>

        <h2>Rent A Car'ın Sunduğu Ayrıcalıklar</h2><br>
        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body"><img src="img/icon/icon_1.png" class="img-responsive center-block" alt="Image"></div>
                    <div class="panel-footer text-center">
                        <p><b>En İyi Fiyat Garantisi</b></p>
                        <p>Sizin için en uygun fiyatları listeliyoruz</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body"><img src="img/icon/icon_2.png" class="img-responsive center-block" alt="Image"></div>
                    <div class="panel-footer text-center">
                        <p><b>Binlerce Marka ve Model</b></p>
                        <p>Tüm araçları tek ekran üzerinden kıyaslayabilirsiniz</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body"><img src="img/icon/icon_3.png" class="img-responsive center-block" alt="Image"></div>
                    <div class="panel-footer text-center">
                        <p><b>7 gün 24 saat Misafir Desteği</b></p>
                        <p>Tüm işlemlerinizde 24 saat sizlerle beraberiz</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body"><img src="img/icon/icon_4.png" class="img-responsive center-block" alt="Image"></div>
                    <div class="panel-footer text-center">
                        <p><b>Daima Güler Yüzlü Misafirler</b></p>
                        <p>Rent A Car’dan aracını kiralayanlar daima mutlu</p>
                    </div>
                </div>
            </div>
                
        </div>
        <br><br>

        <h2>Rent A Car Misafirleri</h2>
        <br>

        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading-custom panel-heading heading"></div>
                    <div class="panel-body"><img src="img/icon/icon_5.png" class="img-responsive center-block" alt="Image"></div>
                    <div class="panel-footer text-center">
                        <p><b>FATMA DEMİR</b></p>
                        <p>"Aracı temiz teslim aldım ve araç gözümün önünde temizlendiği için içim çok rahatladı. 
                            Araçlar kazalı değildi ve aracın içi ve dışı çok temizdi, aracı tam saatinde teslim aldım." 
                            </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body"><img src="img/icon/icon_5.png" class="img-responsive center-block" alt="Image"></div>
                    <div class="panel-footer text-center">
                        <p><b>GÖKHAN CEYLAN</b></p>
                        <p>"Rent A Car'ı bilmiyordum aslında, arkadaşım tavsiye etti. 
                            Kurumsal güvenilir bir firma olduğunu söyledi. Araçlar sıfırdı 
                            ve için yeni araç kokuyordu bu çok hoşuma gitti."</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body"><img src="img/icon/icon_5.png" class="img-responsive center-block" alt="Image"></div>
                    <div class="panel-footer text-center">
                        <p><b>ALİ GÜNEŞ</b></p>
                        <p>"Benim Rent A Car'ı tercih etmemin sebebi işlem kolaylığı. 
                            Alırken de teslim ederken de zaman kaybetmiyorum.
                            İşlemlerimi çok hızlı bir şekilde gerçekleştirmiş oluyorum."</p>
                    </div>
                </div>
            </div>                
        </div>
        <br>

        <h2>Rent A Car</h2>
        <br>
        <div class="well well-lg text-center">
            
            <p>Rent A Car, Türkiye'deki en iyi rent a car firmasıdır. Tüm ülke çapındaki havalimanı ve illerde müşterilere uygun bir maliyetle kaliteli hizmet sunarlar. 
                Müşteri hizmetleri çalışanları, sorularınızı yanıtlamak ve sahip olabileceğiniz herhangi bir sorunda size yardımcı olmak için her zaman hazırdır, 
                bu nedenle asla çok uzakta olmazlar! Mükemmel araç kiralama kampanyaları arıyorsanız, tercih edilecek ilk yer burasıdır. 
                Rent A Car ile ucuz fiyat araç kiralama hiç bu kadar kolay olmamıştı! Müşteri hizmetleri ekibi her zaman hizmetinizdedir ve kiralamalar veya ilgili herhangi bir şeyle ilgili detaylı bilgi verebilir! 
                Araç kiralama ilginizi çekecek bir şey gibi geliyorsa, nasıl çalıştığı hakkında daha fazla bilgi için web sitemizi kontrol ettiğinizden emin olun. Türkiye'nin her havalimanı ve ilinde ekonomik kiralık araba hizmeti veriyoruz, 
                bu yüzden seyahatiniz sizi ülkemizin neresine götürürse götürsün, Rent A Car bu konuda size yardımcı olacak ve yol boyunca kaliteli hizmetler sunacak.
            </p>
            
        </div><br><br>
    </div>

<?php
  include 'footer.php';
?>