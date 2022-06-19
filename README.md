# Araç Kiralama Sistemi

Araç kiralama sistemi projesinde kullanıcıların internet üzerinden istedikleri araçları rezervasyon yapmaları hedeflenmiştir. Bu projede HTML, CSS, Bootstrap, PHP ve MySQL teknolojileri kullanılmıştır.


#### Demo Link: http://rentacar.rf.gd/


## Site İçeriği:

Araç kiralama sisteminde admin ve kullanıcı şeklinde iki tür üyelik bulunmaktadır. Kullanıcı sisteme giriş yaparak araç rezervasyonu, oluşturmuş olduğu rezervasyonları görüntüleme, güncelleme ve iptal etme işlemlerini yapabilmektedir.

Admin ise sisteme kayıtlı tüm rezervasyonları ve tüm kullanıcı bilgilerini görüntüleme bunun yanında kullanıcı silme işlemlerini de yapabilmektedir.
Kullanıcılar öncelikle sisteme üye olup ardından listedeki araçlardan rezervasyon yapabilmektedirler. 

#### Ana Sayfa

![website](https://user-images.githubusercontent.com/58481075/174475190-1ff7c840-42db-4d05-b492-5e961aca0f19.jpg)


#### Üye Girişi
![giris](https://user-images.githubusercontent.com/58481075/174475403-15d6c236-7aca-4803-b538-2400440b5aa4.jpg)


#### Kullanıcı Rezervasyonları
![rezervasyonlarim](https://user-images.githubusercontent.com/58481075/174475658-45761fb5-4596-455e-ade8-0c4b352bc046.jpg)


#### Admin Paneli Üyeler
![uyeler](https://user-images.githubusercontent.com/58481075/174475814-cb383795-87bf-4bbf-b42e-865207d4b8ea.jpg)


### Uygulamayı Test Etmek İçin

Bu uygulamayı kendi bilgisayarınızda çalıştırmak için bir apache sunucusuna ve bir MySQL sunucusuna ihtiyacınız var. Tüm bunları sizin için sağlayan xampp aracını kullanabilirsiniz. Programı bu linkten indirip kurabilirsiniz: https://www.apachefriends.org/download.html


### Kurulum
Uygulamayı test etmek için öncelikle xampp üzerinde apache ve MySQL sunucularının sorunsuz çalıştığından emin olun.

![xampp](https://user-images.githubusercontent.com/77548038/174430805-8d2922b1-23a9-4e4d-9951-76b097857905.png)   

1- Apache ve MySQL sunucularını xampp üzerinden çalıştırın. 
  
2- Tarayıcınızda phpMyAdmin'i açın. Bunun için tarayıcınızın adres çubuğuna http://localhost/phpmyadmin/ yazmanız gerekmektedir.
  
3- rent_car adında yeni bir veritabanı oluşturun.  

![phpmyadmin](https://user-images.githubusercontent.com/58481075/174475909-a77f4c8e-387e-4739-b022-31c271af5058.jpg)
    
4- Github ta bulunan rent_car.sql içindeki kodları kopyalayıp çalıştırın. Bu işlem ile veritabanınız hazır olacaktır.
    
![sql](https://user-images.githubusercontent.com/58481075/174475987-2da8ec5d-6d1b-468e-bc3a-a8d48257735d.jpg)
  
5- XAMPP programının bulunduğu dizine gidin ve bu dizinde htdocs klasörünü bulun.
  
6- Github üzerindeki .php dosyalarını ve img isimli klasörü  htdocs dizinine taşıyın.
    
7- Araç Kiralama sisteminin ana sayfayasına ulaşmak için http://localhost/index.php adresi kullanabilirsiniz.

