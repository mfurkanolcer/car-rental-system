<?php 
   
    session_start();  

    if( isset($_SESSION['username']) ) { 
        include 'user-header.php';
    }
    else{

        include 'header.php';
    }    
   
?>

<div class="container">
        <h3><b>KAMPANYALAR</b></h3>
        <p>Rent A Car müşterilerine sunulan çeşitli kampanyalar.</p><hr>
        <br>
        
        <div class="jumbotron">
        <img src="img/slide1.jpg" alt="Image">
         </div>

         <div class="jumbotron">
        <img src="img/slide2.jpg" alt="Image">
         </div>

         <div class="jumbotron">
        <img src="img/slide3.jpg" alt="Image">
         </div>
         
    </div>
    
<?php
    include 'footer.php'
?>