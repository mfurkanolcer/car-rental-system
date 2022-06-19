<?php 
   
    session_start();  

    if( isset($_SESSION['username']) ) {
        include 'user-header.php';
    }
    else{

        include 'header.php';
    }    
   
?>


<?php 
   require ('mysqlbaglan.php'); 

   if (isset($_POST['ad']) && isset($_POST['soyad']) && isset($_POST['email']) && isset($_POST['konu_basligi']) && isset($_POST['mesaj'])){ 
   
    extract($_POST); 
   
   $sql="INSERT INTO `mesajlar` (ad, soyad, email, konu_basligi, mesaj, mesaj_tarihi)"; 

   $sql = $sql . "VALUES ('$ad' , '$soyad' , '$email' , '$konu_basligi' , '$mesaj' , CURRENT_TIMESTAMP )"; 
   
        
   
       $cevap = mysqli_query($baglanti, $sql); 
 
    
   } 
?> 


<div class="container">
<section class="mb-4">

    <h2 class="h1-responsive font-weight-bold text-left my-4">BİZE ULAŞIN</h2>
    <p class="w-responsive mx-auto mb-5">Ekibimiz size yardımcı olmak için birkaç saat içinde size geri dönecektir.</p><hr>

    <div class="row">

        
        <div class="col-md-8">
        <div class="jumbotron">
        <div class="panel-heading text-center" style="color:green; font-size: 16px;"></div>
        <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST">

                <div class="row">

                    <div class="col-md-4">
                        <div class="md-form mb-0">
                            <label for="ad" class="">Adınız</label>
                            <input type="text" name="ad" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="md-form mb-0">
                            <label for="soyad" class="">Soyadınız</label>
                            <input type="text" name="soyad" class="form-control">
                        </div>
                    </div>
                    

                    <div class="col-md-4">
                        <div class="md-form mb-0">
                            <label for="email" class="">Email Adresiniz</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>

                </div><br>

                <div class="row">

                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="konu_basligi" class="">Konu Başlığı</label>
                            <input type="text" name="konu_basligi" class="form-control">
                        </div>
                    </div>

                </div><br>

                <div class="row">

                    <div class="col-md-12">
                        <div class="md-form">
                            <label for="mesaj">Mesajınız</label>
                            <textarea type="text" name="mesaj" rows="6" class="form-control md-textarea"></textarea>
                        </div>
                    </div>

                </div><br>
                
            </form>

            <div class="text-left text-md-left">
            <button type="submit" class="btn btn-primary" name="mesaj_gonder">GÖNDER</button>
            </div>
        </div>
        </div>

        <div class="col-md-4 text-left">
        <div class="col-sm-12 text-center"><br><br><br><br>
                        <img src="img/logo.png" alt="Rent a Car"><hr><br>
                        <ul class="list-unstyled mb-0">
                        <li>
                        <p><i class="glyphicon glyphicon-map-marker"></i>&nbsp;&nbsp;&nbsp; Pendik, İstanbul, Türkiye</p>
                        </li>
    
                        <li>
                            <p><i class="glyphicon glyphicon-earphone"></i>&nbsp;&nbsp;&nbsp;987 654 32 10</p>
                        </li>
    
                        <li>
                            <p><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;&nbsp;ornek@mail.com</p>
                        </li>
                    </ul>
                    </div>
        </div>

    </div><br><br>

</section>
</div>

<?php

  include 'footer.php';

?>