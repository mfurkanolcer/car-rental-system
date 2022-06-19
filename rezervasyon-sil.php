<?php

include("mysqlbaglan.php");


$sql = "DELETE FROM rezervasyonlar WHERE id=".$_GET['id'];


$cevap = mysqli_query($baglanti,$sql);
       
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    header("Location: rezervasyonlarim.php");
}

mysqli_close($baglanti);
?>
