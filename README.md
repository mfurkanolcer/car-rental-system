# Araç Kiralama Sistemi

Araç kiralama sistemi projesinde kullanıcıların internet üzerinden istedikleri araçları rezervasyon yapmaları hedeflenmiştir. Bu projede HTML, CSS, Bootstrap, PHP ve MySQL teknolojileri kullanılmıştır.

#### Demo Link: http://rentacar.rf.gd/

## Site İçeriği

Araç kiralama sisteminde admin ve kullanıcı şeklinde iki tür üyelik bulunmaktadır. Kullanıcı sisteme giriş yaparak araç rezervasyonu, oluşturmuş olduğu rezervasyonları görüntüleme, güncelleme ve iptal etme işlemşerini yapabilmektedir.

Admin ise sisteme kayıtlı tüm rezervasyonları ve tüm kullanıcı bilgilerini görüntüleme bunun yanında kullanıcı silme işlemlerini de yapabilmektedir.
Kullanıcılar öncelikle sisteme üye olup ardından listedeki araçlardan rezervasyon yapabilmektedirler. 

![website](https://user-images.githubusercontent.com/77548038/174429888-13a16a20-fa37-4494-8529-60b46e655aba.png)
Ana Sayfa

![profile](https://user-images.githubusercontent.com/77548038/174430294-a1676f74-0c57-43ab-a40f-3c54a0fdf354.png)


![panel](https://user-images.githubusercontent.com/77548038/174430337-b96b6216-355f-404b-a87e-3c967e2e2264.PNG)
Admin Panel


### Uygulamayı Test Etmek İçin

Bu uygulamayı kendi bilgisayarınızda çalıştırmak için bir apache sunucusuna ve bir MySQL sunucusuna ihtiyacınız var. Tüm bunları sizin için sağlayan xampp aracını kullanabilirsiniz. Programı bu linkten indirip kurabilirsiniz: https://www.apachefriends.org/download.html


### Kurulum
Uygulamayı test etmek için öncelikle xampp üzerinde apache ve MySQL sunucularının sorunsuz çalıştığından emin olun.

![xampp](https://user-images.githubusercontent.com/77548038/174430805-8d2922b1-23a9-4e4d-9951-76b097857905.png)   

1- Apache ve MySQL sunucularını xampp üzerinden çalıştırın. 
  
2- Tarayıcınızda phpMyAdmin'i açın. Bunun için tarayıcınızın adres çubuğuna http://localhost/phpmyadmin/ yazmanız gerekmektedir.
  
3- rent_car adında yeni bir veritabanı oluşturun.  

![phpadmin](https://user-images.githubusercontent.com/77548038/174431056-d84fd084-2865-40ef-9e99-223dfb928452.png)
    
4- Github ta bulunan rent_car.sqliçindeki kodları kopyalayıp çalıştırın. Bu işlem ile veritabanınız hazır olacaktır.
    
![sql](https://user-images.githubusercontent.com/77548038/174431166-cfc8b3a4-9fbe-46fb-a17f-fe54e8828008.png)
  
5- XAMPP programının bulunduğu dizine gidin ve bu dizinde htdocs klasörünü bulun.
  
6- Github üzerindeki .php dosyalarını ve img isimli klasörü  htdocs dizinine taşıyın.
    
7- Araç Kirlama sisteminin ana sayfayasına ulaşmak için http://localhost/index.php adresi kullanabilirsiniz.

