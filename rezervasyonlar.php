<?php

  include 'admin-header.php';

?> 

<div class="container">
        <h3><b>REZERVASYONLAR</b></h3>
        <p>Burada sisteme kayıtlı tüm rezervasyon bilgilerini görüp, kontrol edelebilirsiniz.</p><hr>
        <br>

    <div class="row">
            <div class="col-md-12">
                <?php
                    //mysql baglanti kodunu ekliyoruz
                    include("mysqlbaglan.php");

                    //sorguyu hazirliyoruz
                    $sql = "SELECT * FROM rezervasyonlar";

                    //sorguyu veritabanina gönderiyoruz.
                    $cevap = mysqli_query($baglanti,$sql);

                    //eger cevap FALSE ise hata yazdiriyoruz.      
                    if(!$cevap )
                    {
                        echo '<br>Hata:' . mysqli_error($baglanti);
                    }

                    //sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
                    //önce tablo başlıkları oluşturalım
                    echo "<table style='border-radius:6px;font-size: 15px;'>";
                    echo "<tr>
                    <th style='padding: 5px;background-color: #48BF91;text-align: center;color: white;'>Rezervasyon No</th>
                    <th style='padding: 5px;background-color: #48BF91;text-align: center;color: white;'>Kullanıcı ID</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Adı</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Soyadı</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Telefon</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Ehliyet Türü</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Rezervasyon Oluşturma Tarihi</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Araç Türü</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Araç Model</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Başlangıç Tarihi</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Teslim Tarihi</th></tr>";

                    //veritabanından gelen cevabı satır satır alıyoruz.
                    while($gelen=mysqli_fetch_array($cevap))
                    {
                        // veritabanından gelen değerlerle tablo satırları oluşturalım
                        echo "<tr><td style='text-align: center;padding: 5px;'>".$gelen['id']."</td>";
                        echo "<td style='text-align: center;padding:5px;'>".$gelen['kullanici_id']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['ad']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['soyad']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['tel']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['ehliyet_turu']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['rezervasyon_tarihi']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['arac_turu']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['arac_model']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['alma_tarihi']."</td>";
                        echo "<td style='text-align: center;padding: 13px;'>".$gelen['teslim_tarihi']."</td></tr>";    
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


