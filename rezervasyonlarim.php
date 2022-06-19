<?php
    include 'user-header.php'
?>


<div class="container">
        <h3><b>REZERVASYONLARIM</b></h3>
        <p>Sisteme kaydettiğiniz tüm rezervasyonlarınızı görüp, kontrol edelebilirsiniz.</p><hr>
        <br>
    <div class="row">
            <div class="col-md-12">
                <?php
                    include("mysqlbaglan.php");

                    if(session_id() == '') {
                        session_start();
                    }

                    $username = $_SESSION['username'];

                    $sql = "SELECT * FROM rezervasyonlar WHERE kullanici_adi ='$username'";

                    $cevap = mysqli_query($baglanti,$sql);
     
                    if(!$cevap )
                    {
                        echo '<br>Hata:' . mysqli_error($baglanti);
                    }

                    //sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
                    //önce tablo başlıkları oluşturalım
                    echo "<table style='border-radius:6px;font-size: 15px;'>";
                    echo "<tr>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Rezervasyon No</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Rezervasyon Oluşturma Tarihi</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Araç Türü</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Araç Model</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Başlangıç Tarihi</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Teslim Tarihi</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'></th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'></th></tr>";

                    //veritabanından gelen cevabı satır satır alıyoruz.
                    while($gelen=mysqli_fetch_array($cevap))
                    {
                        // veritabanından gelen değerlerle tablo satırları oluşturalım
                        echo "<tr><td style='text-align: center;padding: 13px;'>".$gelen['id']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['rezervasyon_tarihi']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['arac_turu']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['arac_model']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['alma_tarihi']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['teslim_tarihi']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'><a style='background-color: #337AB7; color: white; padding: 10px 15px; text-decoration: none; border-radius:10px' href=rezervasyon-guncelle.php?id=" . $gelen['id'] . ">Güncelle</a></td>";    
                        echo "<td style='text-align: center;padding: 13px;'><a style='background-color: #f44336; color: white; padding: 10px 15px; text-decoration: none; border-radius:10px' href=rezervasyon-sil.php?id=" . $gelen['id'] . ">X</a></td></tr>";    
                    }
                    // tablo kodunu bitirelim.
                    echo "</table>";

                    //veritabani baglantisini kapatiyoruz.
                    mysqli_close($baglanti);

                    ?>
    </div>
    <br>
</div>
<br><hr><br></div>

<?php

  include 'footer.php';

?>


