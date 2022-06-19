# Araç Kiralama Sistemi

Araç kiralama sistemi projesinde kullanıcıların internet üzerinden istedikleri araçları rezervasyon yapmaları hedeflenmiştir. Bu projede HTML, CSS, Bootstrap, PHP ve MySQL teknolojileri kullanılmıştır.


#### Demo Link: http://rentacar.rf.gd/


## Site İçeriği:

Araç kiralama sisteminde admin ve kullanıcı şeklinde iki tür üyelik bulunmaktadır. Kullanıcı sisteme giriş yaparak araç rezervasyonu, oluşturmuş olduğu rezervasyonları görüntüleme, güncelleme ve iptal etme işlemlerini yapabilmektedir.

Admin ise sisteme kayıtlı tüm rezervasyonları ve tüm kullanıcı bilgilerini görüntüleme bunun yanında kullanıcı silme işlemlerini de yapabilmektedir.
Kullanıcılar öncelikle sisteme üye olup ardından listedeki araçlardan rezervasyon yapabilmektedirler. 

### Ana Sayfa

![website](https://user-images.githubusercontent.com/58481075/174475190-1ff7c840-42db-4d05-b492-5e961aca0f19.jpg)



### Araçlar

![arac](https://user-images.githubusercontent.com/58481075/174477777-e147b646-426c-4cad-8702-d290b2cc57c2.jpg)



### Kullanıcı Rezervasyonları

![rezervasyonlarim](https://user-images.githubusercontent.com/58481075/174475658-45761fb5-4596-455e-ade8-0c4b352bc046.jpg)



### Admin Paneli Üyeler

![uyeler](https://user-images.githubusercontent.com/58481075/174475814-cb383795-87bf-4bbf-b42e-865207d4b8ea.jpg)


### Uygulamayı Test Etmek İçin

Bu uygulamayı kendi bilgisayarınızda çalıştırmak için bir apache sunucusuna ve bir MySQL sunucusuna ihtiyacınız var. Tüm bunları sizin için sağlayan xampp aracını kullanabilirsiniz. Programı bu linkten indirip kurabilirsiniz: https://www.apachefriends.org/download.html


### Kurulum
Uygulamayı test etmek için öncelikle xampp üzerinde apache ve MySQL sunucularının sorunsuz çalıştığından emin olun.

![xampp](https://user-images.githubusercontent.com/77548038/174430805-8d2922b1-23a9-4e4d-9951-76b097857905.png)   

1- Apache ve MySQL sunucularını xampp üzerinden çalıştırın. 
  
2- Tarayıcınızda phpMyAdmin'i açın. Bunun için tarayıcınızın adres çubuğuna http://localhost/phpmyadmin/ yazmanız gerekmektedir.
  
3- Üst menülerden içe aktara girip dosya seçe tıklayarak github projesinde ana dizindeki "rent_car.sql" dosyasını seçip git e tıklayınca veritabanı ve tablolar oluşturulur.

![phpmyadmin](https://user-images.githubusercontent.com/58481075/174477559-8b00d046-fbde-4826-b22a-af66bce1f9da.jpg)
  
4- XAMPP programının bulunduğu dizine gidin ve bu dizinde htdocs klasörünü bulun.
  
5- Github üzerindeki php, css dosyalarını ve img isimli klasörü  htdocs dizinine taşıyın.
    
6- Araç Kiralama sisteminin ana sayfayasına ulaşmak için http://localhost/index.php adresi kullanabilirsiniz.

