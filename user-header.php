<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Rent A Car</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <a href="index.php"><img src="img/logo.png" alt="Rent a Car"></a>
        
        <nav class="navbar navbar-custom navbar-static-top">
        <div class="container-fluid">
              <ul class="nav navbar-nav">
                <li class="nav-item"><a href="rezervasyon.php">REZERVASYON YAP</a></li>
                <li class="nav-item"><a href="rezervasyonlarim.php">REZERVASYONLARIM</a></li>
                <li class="nav-item"><a href="kampanyalar.php">KAMPANYALAR</a></li>
                <li class="nav-item"><a href="ofisler.php">OFİSLER</a></li>
                <li class="nav-item"><a href="iletisim.php">İLETİŞİM</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-user"></span>
                <?php
                 if(session_id() == '') {
                      session_start();
                  }echo '&nbsp;&nbsp;'.$_SESSION['username']; 
                  ?>
                  </a></li>
                <li><a href="cikis.php"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;ÇIKIŞ YAP</a></li>
              </ul>
            </div>
          </nav><br>