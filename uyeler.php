<?php

include 'admin-header.php';

?>

<?php

if (isset($_POST['submit'])) {

    extract($_POST);
    $sql = "DELETE FROM users WHERE id=" . $_POST['id'];

    $cevap = mysqli_query($baglanti, $sql);

    header("Location: admin-duzenle.php");
}



?>

<div class="container">
    <h3><b>ÜYE SİL</b></h3>
    <p>Burada sisteme kayıtlı üyelerin bilgilerini görüp, istenilen üye silinebilmektedir.</p>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-12">
        </div>
        <?php
        //mysql baglanti kodunu ekliyoruz
        include("mysqlbaglan.php");

        //sorguyu hazirliyoruz
        $sql = "SELECT * FROM users";

        //sorguyu veritabanina gönderiyoruz.
        $cevap = mysqli_query($baglanti, $sql);

        //eger cevap FALSE ise hata yazdiriyoruz.      
        if (!$cevap) {
            echo '<br>Hata:' . mysqli_error($baglanti);
        }

        //sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
        //önce tablo başlıkları oluşturalım
        echo "<table style='border-radius:6px;font-size: 15px;'>";
        echo "<tr>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Kullanıcı ID</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Ad</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Soyad</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Email</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Doğum Tarihi</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Üyelik Tarihi</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Ehliyet Türü</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'>Ehliyet Tarihi</th>
                    <th style='padding: 13px;background-color: #48BF91;text-align: center;color: white;'></th></tr>";

        //veritabanından gelen cevabı satır satır alıyoruz.
        while ($gelen = mysqli_fetch_array($cevap)) {
            // veritabanından gelen değerlerle tablo satırları oluşturalım
            echo "<tr><td style='text-align: center;padding: 13px;'>" . $gelen['id'] . "</td>";
            echo "<td style='text-align: center;padding: 13px;'>" . $gelen['ad'] . "</td>";
            echo "<td style='text-align: center;padding: 13px;'>" . $gelen['soyad'] . "</td>";
            echo "<td style='text-align: center;padding: 13px;'>" . $gelen['email'] . "</td>";
            echo "<td style='text-align: center;padding: 13px;'>" . $gelen['dogum_tarihi'] . "</td>";
            echo "<td style='text-align: center;padding: 13px;'>" . $gelen['uyelik_tarihi'] . "</td>";
            echo "<td style='text-align: center;padding: 13px;'>" . $gelen['ehliyet_turu'] . "</td>";
            echo "<td style='text-align: center;padding: 13px;'>" . $gelen['ehliyet_tarihi'] . "</td>";
            echo "<td style='text-align: center;padding: 13px;'><a style='background-color: #f44336; color: white; padding: 10px 15px; text-decoration: none; border-radius:10px' href=uye-sil.php?id=" . $gelen['id'] . ">X</a></td></tr>";
        }
        // tablo kodunu bitirelim.
        echo "</table>";

        //veritabani baglantisini kapatiyoruz.
        mysqli_close($baglanti);
        ?>
    </div>
    <br>
</div>
<br>
<hr><br></div>

<?php

include 'footer.php';

?>