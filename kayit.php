<?php

include 'header.php';

?>

<?php
header("Content-Type: text/html;charset=UTF-8");

require('mysqlbaglan.php');

if (isset($_POST['username']) && isset($_POST['password'])) {

    extract($_POST);

    $username = utf8_encode(utf8_decode($username));
    $ad = utf8_encode(utf8_decode($ad));
    $soyad = utf8_encode(utf8_decode($soyad));



    $password = hash('sha256', $password);

    $select = " SELECT * FROM users WHERE kullanici_adi = '$username' ";

    $sonuc = mysqli_query($baglanti, $select);

    if (mysqli_num_rows($sonuc) > 0) {

        $hata[] = '<p class="alert alert-danger" style="color: red;font-size: 15px;">Bu kullanıcı adı daha önce alınmış. Lütfen başka bir kullanıcı adı deneyiniz</p>';
    }

    if (mysqli_num_rows($sonuc) == 0) {
        
        if ($_POST['password']!= $_POST['password_2']){
            $hata[] = '<p class="alert alert-danger" style="color: red;font-size: 15px;">Girdiğiniz şifreler eşleşmedi. Tekrar deneyin</p>';
        } 
        
        else {
            $sql = "INSERT INTO `users` (kullanici_adi, ad, soyad, sifre, tel, email, dogum_tarihi, uyelik_tarihi, ehliyet_turu, ehliyet_tarihi) VALUES ('$username', '$ad' , '$soyad' , '$password', '$tel' , '$email' , '$dogum_tarihi' , CURRENT_TIMESTAMP , '$ehliyet_turu','$ehliyet_tarihi' )";
            mysqli_query($baglanti, $sql);
            $hata[] = '<p class="alert alert-success" style="color: green;font-size: 15px;">Kayıt başarılı. Giriş yapabilirsiniz</p>';
        }
    }
}

?>


<div class="container">
    <h3><b>KAYIT OL</b></h3>
    <p>Kayıt olarak, hem size özel kampanya ve indirimlerden faydalanın, hem de daha hızlı rezervasyon yapın.</p>
    <hr>
    <br>

    <div class="row">
        <div class="col-sm-6">
            <div class="jumbotron">

                <div class="panel-heading text-center">
                    <?php
                    if (isset($hata)) {
                        foreach ($hata as $hata) {
                            echo '<span class="error-msg">' . $hata . '</span>';
                        };
                    };
                    ?>

                </div>

                <form class="form-horizontal" accept-charset="utf-8" action="<?php $_PHP_SELF ?>" method="POST">
                    <div class="form-group text-right">
                        <label class="col-sm-4" for="email">Kullanıcı Adı:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="username" required>
                        </div>

                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="email">Ad:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="ad" required>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="email">Soyad:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="soyad" required>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="pwd">Şifre:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="pwd">Şifreyi Tekrar Giriniz:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password_2" required>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="pwd">Telefon:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tel" maxlength="10" required />
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="dogum_tarihi">Doğum Tarihi:</label>
                        <div class="col-sm-8">
                            <input name="dogum_tarihi" type="date" class="form-control" value="<?php echo $dogum_tarihi ?>" required/>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="ehliyet_turu">Ehliyet Türü:</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="ehliyet_turu" required>
                                <option>B (Otomobil ve Kamyonet)</option>
                                <option>BE (Römorklu Otomobil ve Kamyonet)</option>
                                <option>C (Kamyon ve Çekici)</option>
                                <option>D1 (Minibüs)</option>
                                <option>D (Minibüs ve Otobüs)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <label class="col-sm-4" for="ehliyet_tarihi">Ehliyet Alma Tarihi:</label>
                        <div class="col-sm-8">
                            <input name="ehliyet_tarihi" type="date" class="form-control" value="<?php echo $ehliyet_tarihi ?>" required/>
                        </div>
                    </div>


                    <br>

                    <div class="form-group text-left">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success" name="uye_ol" id="uye_ol">ÜYE OL</button>
                        </div>
                    </div><br>

                    <div class="form-group text-left">
                        <div class="col-sm-offset-2 col-sm-10">
                            <p style="font-size:15px"> Zaten üye misiniz? &nbsp;<a href="giris.php">Giriş Yap</a></p>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="col-sm-6">
            <div class="col-sm-12 text-center"><br><br><br><br>
                <img src="img/logo.png" alt="Rent a Car">
                <hr><br>
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
    </div>

</div><br><br>


<?php

include 'footer.php';

?>