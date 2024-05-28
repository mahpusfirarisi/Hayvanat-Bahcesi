Hayvanat Bahçesi Kayıt Platformu
--------------------------------
Proje Açıklaması
----------------
Hayvanat Bahçesi Kayıt Platformu, hayvanların kaydını tutmak ve yönetmek için geliştirilmiş bir web uygulamasıdır. Bu platform, hayvanat bahçesi personelinin hayvan eklemesine, listelemesine ve yönetmesine olanak tanır. Kullanıcı dostu arayüzü sayesinde hayvanların bilgilerini kolayca güncelleyebilir ve takip edebilirsiniz.

### Projeyi XAMPP ile Çalıştırma Kılavuzu

1. **XAMPP Kurulumu:**
   - Eğer bilgisayarınızda XAMPP yüklü değilse, [XAMPP web sitesinden](https://www.apachefriends.org/index.html) XAMPP'ı indirin ve kurun.

2. **XAMPP'i Başlatma:**
   - XAMPP kontrol panelini açın ve Apache ve MySQL modüllerini başlatın.

3. **Projeyi İndirme ve Dizin Oluşturma:**
   - Projeyi GitHub'dan indirin veya klonlayın:
     ```
     git clone https://github.com/kullanici_adi/hayvanat_bahcesi_projesi.git
     ```
   - İndirdiğiniz projeyi `xampp\htdocs` dizinine taşıyın veya klonladığınız dizine gidin:
     ```
     cd xampp\htdocs\hayvanat_bahcesi_projesi
     ```

4. **Veritabanı Yapılandırması:**
   - Bir tarayıcı açın ve `http://localhost/phpmyadmin` adresine gidin.
   - Sol taraftaki menüden "Yeni"ye tıklayarak yeni bir veritabanı oluşturun, örneğin `hayvanat_bahcesi`.
   - Oluşturulan veritabanını seçin ve SQL sekmesine geçin.
   - `hayvanat_bahcesi.sql` dosyasını açın ve içeriğini kopyalayarak SQL sekmesine yapıştırın.
   - SQL sorgusunu çalıştırarak tabloları oluşturun.

5. **Veritabanı Bağlantı Ayarlarını Tanımlama:**
   - `config.php` adında bir dosya oluşturun ve aşağıdaki içeriği güncelleyin..
     ```php
     <?php
     $host = 'localhost';
     $db = 'hayvanat_bahcesi';
     $user = 'root'; // MySQL kullanıcı adınız
     $pass = ''; // MySQL şifreniz (varsayılan olarak boş)
     $charset = 'utf8mb4';

     $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
     $options = [
         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
         PDO::ATTR_EMULATE_PREPARES   => false,
     ];

     try {
         $pdo = new PDO($dsn, $user, $pass, $options);
     } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
     }
     ?>
     ```
   - Veritabanı bağlantı bilgilerini kendi XAMPP ayarlarınıza göre düzenleyin.

6. **Tarayıcıda Projeyi Açma:**
   - Bir tarayıcı açın ve `http://localhost/hayvanat_bahcesi_projesi` adresine gidin.


Özellikler
-----------
Kullanıcı Girişi: Yetkisiz erişimi engellemek için oturum yönetimi.

Hayvan Ekleme: Yeni hayvan bilgilerini sisteme ekleme.

Hayvanları Listeleme: Kayıtlı tüm hayvanları listeleme ve görüntüleme.

Kayıt Güncelleme ve Silme: Mevcut kayıtları güncelleme veya silme.

Çıkış Yapma: Güvenli bir şekilde sistemden çıkış yapma.

Gereksinimler
-------------
Web Sunucusu: Apache, Nginx vb.
PHP: Sürüm 7.2 veya üzeri.
Veritabanı: MySQL veya benzeri bir veritabanı yönetim sistemi.
Bootstrap: CSS stil kütüphanesi (versiyon 4.5.2)

Kullanım
--------
Giriş Yapın: Sisteme giriş yapmak için kullanıcı adı ve şifrenizi kullanın.

Hayvan Ekleyin: "Hayvan Ekle" sayfasından yeni hayvan bilgilerini girin.

Hayvanları Listeleyin: "Hayvanları Listele" sayfasından kayıtlı tüm hayvanları görüntüleyin.

Kayıtları Yönetin: İlgili hayvan kaydını güncelleyin veya silin.

Çıkış Yapın: İşlemleriniz tamamlandığında güvenli bir şekilde sistemden çıkış yapın.

İletişim
--------
Herhangi bir sorunuz veya öneriniz için bizimle iletişime geçmekten çekinmeyin:

E-posta: enesmalik@outlook.com

GitHub: mahpusfirarisi

Teşekkürler!

Bu README dosyası, projenizin temel bilgilerini ve nasıl kullanılacağını açık bir şekilde ifade eder. Kod içermemekte ve kullanıcıların projeyi anlamalarına yardımcı olacak gerekli bilgileri sağlamaktadır.
