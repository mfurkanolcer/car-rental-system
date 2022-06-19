<?php
include 'user-header.php'
?>

<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");

$sql = "SELECT * FROM rezervasyonlar WHERE id=".$_GET['id'];

$cevap = mysqli_query($baglanti, $sql);

if (!$cevap) {
    echo '<br>Hata:' . mysqli_error($baglanti);
}

$gelen = mysqli_fetch_array($cevap);

?>

<?php
if (isset($_POST['submit'])) {

    header("Location: guncelkaydet.php");
}

if (isset($_POST['vazgec'])) {

    header("Location: rezervasyonlarim.php");
}

?>


<div class="container">
    <h3><b>REZERVASYON GÜNCELLE</b></h3>
    <p>Seçtiğiniz rezervasyonun tarihini değiştirebilirsiniz.</p>
    <hr>
    <br>

    <form class="form-horizontal" action="guncelkaydet.php?id=<?php echo $_GET['id'] ?>" method="POST">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group text-center">
                    <label class="col-sm-4" for="alma_tarihi">Başlangıç Tarihi:</label>
                    <div class="col-sm-8">
                        <input name="alma_tarihi" type="date" class="form-control" value="<?php echo $gelen['alma_tarihi'] ?>" required />
                    </div>
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group text-center">
                    <label class="col-sm-4" for="teslim_tarihi">Teslim Tarihi:</label>
                    <div class="col-sm-8">
                        <input name="teslim_tarihi" type="date" class="form-control" value="<?php echo $gelen['teslim_tarihi'] ?>" required />
                    </div>
                </div>
            </div>
        </div>
        <hr><br><br><br>

        <div class="form-group text-left">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-danger" name="vazgec">Vazgeç</button>
            </div>
            <div class="form-group text-right">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success" name="submit">Rezervasyonu Kaydet</button>
                </div>
            </div>
        </div>
        <br><br>

    </form>
    <hr>

</div>

<?php

include 'footer.php';

?>