<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");

//degiskenleri formdan aliyoruz
extract($_POST);

//sorguyu hazirliyoruz
$sql ="UPDATE rezervasyonlar ".
      "SET alma_tarihi='$alma_tarihi',teslim_tarihi='$teslim_tarihi'".
      "WHERE id=".$_GET['id'];
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    header("Location: rezervasyonlarim.php");
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
