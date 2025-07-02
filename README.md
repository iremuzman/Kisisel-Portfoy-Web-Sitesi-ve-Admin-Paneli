  #  Kişisel Web Sitesi ve Yönetim Paneli Uygulaması

Bu çalışma, yazılım mühendisliği öğrencisi olarak bireysel niteliklerimi tanıttığım, gerçekleştirdiğim projeleri sunduğum ve ziyaretçilerden mesaj alabileceğim işlevsel bir web uygulamasıdır. Aynı zamanda yönetim paneli üzerinden içerik girişi yapılabiliyormuş gibi simülasyon oluşturulmuştur. Uygulama, temel web teknolojileri olan HTML, CSS ve PHP ile geliştirilmiştir.

---

##  Projenin Hedefleri

- Kendi hakkımda bilgileri sunabileceğim bir tanıtım alanı hazırlamak  
- Önceden geliştirdiğim projeleri görsellerle destekleyerek listelemek  
- Ziyaretçilerden mesaj alabileceğim bir form yapısı kurmak  
- PHP kullanarak formdan gelen verileri sunucuda işleyip kaydetmek  
- Yönetici paneli ile yeni proje ekleyebilme deneyimini yansıtmak  
- Kullanıcıdan gelen verileri doğrulamak ve güvenlik sağlamak  
- Otomatik gönderimleri engellemek için basit bir matematik sorusu eklemek  

---

##  Proje İçeriği ve Dosya Açıklamaları

- index.html  
  - Uygulamanın ana giriş sayfasıdır. Kullanıcıyı karşılayıp diğer bölümlere yönlendirir.

- hakkimda.html  
  - Geliştiriciye dair bilgiler ve profil görseli içerir. Doğum tarihi, okul ve bölüm bilgileri yer alır.

- projelerim.html  
  - Gerçekleştirilen projelerin başlık, açıklama ve görsel ile birlikte listelendiği bölümdür.

- admin2.html  
  - Kullanıcı adı ve parola alanları ile oluşturulmuş statik bir yönetici girişi arayüzü içerir. Giriş sonrası proje ekleme formu görünür.

- kontrol.php  
  - Yönetici bilgilerinin doğruluğunu kontrol eden sunucu taraflı dosyadır.

- iletisim.html  
  - Ziyaretçilerin isim, e-posta ve mesaj bilgilerini girdiği formdur. Botlardan korunmak için “5 + 3 = ?” sorusu sorulur.

- iletisim_kaydet.php  
  - Form üzerinden gelen verileri PHP ile işler, gerekli doğrulamalar geçildiyse bilgileri bir .txt dosyasına yazar.

- mesajlar.txt  
  - Ziyaretçilerden gelen mesajların tarih ve içerik bilgileriyle saklandığı düz metin dosyasıdır.

- profil.jpg  
  - Tanıtım sayfasında gösterilen görsel dosyasıdır.

- style.css  
  - Sayfaların genel görünümünü ve düzenini sağlayan stil dosyasıdır. Navigasyon menüsü, proje kartları ve formlar bu dosya ile biçimlendirilmiştir.

- README.md  
  - Bu doküman, projenin içeriğini, amacını ve nasıl çalıştırılacağını açıklamak için oluşturulmuştur.

---

##  Edinilen Bilgiler ve Geliştirilen Yetenekler

- HTML ve CSS ile sayfa iskeleti ve görünüm tasarlama  
- PHP ile form verilerinin sunucuda işlenmesi ve kaydedilmesi  
- Temel güvenlik mantığı (doğrulama, spam koruması) geliştirme  
- Proje dosyalarının düzenli biçimde yapılandırılması  
- Yazılı içeriği belgeleyerek dış kullanıcılara sunma becerisi  
- XAMPP ile yerel sunucu ortamı kullanma deneyimi kazanma  

---

##  Projeyi Çalıştırmak İçin Gerekli Adımlar

1. XAMPP programı indirilmeli ve kurulmalıdır.  
2. Bu proje klasörü C:\xampp\htdocs\portfoy dizinine taşınmalıdır.  
3. XAMPP kontrol panelinde Apache servisi başlatılmalıdır.  
4. Web tarayıcısına şu adres girilerek çalıştırılmalıdır
5. http://localhost/portfoy/index.html

   
