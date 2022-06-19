<?php 
   session_start(); 
   
   require('mysqlbaglan.php'); 
   
    
   
   if (isset($_POST['username']) and isset($_POST['password'])){ 
   
   extract($_POST); 
   

   
   $password = hash('sha256', $password); 
   
   $sql = "SELECT * FROM `users` WHERE "; 
   
   $sql= $sql . "kullanici_adi='$username' and sifre='$password'"; 
   
    
   
   $cevap = mysqli_query($baglanti, $sql); 
       
   
   if(!$cevap ){ 
   
       echo '<br>Hata:' . mysqli_error($baglanti); 
   
   } 
   
   
   $say = mysqli_num_rows($cevap); 
   
   if ($say == 1){ 
   
       $_SESSION['username'] = $username; 
   
    }else{ 
   
   $mesaj = '<p style="color: red;font-size: 15px;">Kullanıcı adı veye şifreyi hatalı girdiniz !</p>'; 
   
    } 
   
   } 
   
   if (isset($_SESSION['username'])){ 
   
   header("Location: index.php"); 
   
   }

   ?> 

<?php
  include 'header.php'
?>


<div class="container">
        <h3><b>ÜYE GİRİŞİ</b></h3>
        <p>Giriş yaparak, hem size özel kampanya ve indirimlerden faydalanın, hem de daha hızlı rezervasyon yapın.</p><hr>
        <br>

        <div class="row">
            <div class="col-sm-6">
                <div class="jumbotron">

            <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST">
            
                <?php  
                if(isset($mesaj)){ echo $mesaj;}
                ?> 

                        <div class="form-group">
                            <label class="control-label col-sm-4">Kullanıcı Adı:</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="username" placeholder="Kullanıcı adını giriniz">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Şifre:</label>
                            <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" placeholder="Şifre giriniz">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                            <div class="checkbox">
                                <label><input type="checkbox"> Beni unutma</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                            <input type="submit" class="btn btn-success" value="Giriş Yap">
                            </div>
                        </div>

                        <div class="form-group text-left">
                            <div class="col-sm-offset-2 col-sm-10">
                                <p style="font-size:15px"> Üye değil misiniz? &nbsp;<a href="kayit.php">Kayıt Ol</a></p>
                            </div>
                        </div>
                </form>
        </div>
        
    </div>
    <div class="col-sm-6">
    <div class="col-sm-12 text-center"><br><br>
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

</div>

<?php
  include 'footer.php'
?>
