<?php
session_start();

require('mysqlbaglan.php');



if (isset($_POST['admin_name']) and isset($_POST['password'])) {

    extract($_POST);



    $password = hash('sha256', $password);

    $sql = "SELECT * FROM `admin` WHERE ";

    $sql = $sql . "kullaniciadi='$admin_name' and sifre='$password'";



    $cevap = mysqli_query($baglanti, $sql);

    //eger cevap FALSE ise hata yazdiriyoruz.       

    if (!$cevap) {

        echo '<br>Hata:' . mysqli_error($baglanti);
    }

    //veritabanindan dönen satır sayısını bul 

    $say = mysqli_num_rows($cevap);

    if ($say == 1) {

        $_SESSION['admin_name'] = $admin_name;
    }
    
    else {

        $mesaj = '<h5 style="color:red; text-align:center;"> Hatalı Kullanıcı adı veya Şifre !</h5>';
    }
}

if (isset($_SESSION['admin_name'])) {

    header("Location: index.php");
}

?>

<?php
include 'header.php'
?>

<div class="container">
    <h3><b>KURUMSAL GİRİŞ</b></h3>
    <p>Kurumsal giriş ile tüm rezervasyon hareketleri ve üye bilgileri kontrol edilebilmektedir.</p>
    <hr>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="jumbotron">

                <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST">

                    <?php
                    if (isset($mesaj)) {
                        echo $mesaj;
                    }
                    ?>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Kullanıcı Adı:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="admin_name" placeholder="Kullanıcı adını giriniz">
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
                </form>
            </div>

        </div>
        <div class="col-sm-6">
            <div class="col-sm-12 text-center"><br><br>
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
    </div><br><br>

</div>


<?php
include 'footer.php'
?>