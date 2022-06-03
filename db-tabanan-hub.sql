/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - db_tabanan_hub
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_tabanan_hub` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_tabanan_hub`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`title`,`name`,`created_at`,`updated_at`) values 
(1,'Barang','barang','2022-05-05 21:51:22','2022-05-05 21:51:22'),
(2,'Jasa','jasa','2022-05-05 21:51:23','2022-05-05 21:51:23'),
(3,'Pariwisata','pariwisata','2022-05-05 21:51:23','2022-05-05 21:51:23');

/*Table structure for table `districts` */

DROP TABLE IF EXISTS `districts`;

CREATE TABLE `districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `districts` */

insert  into `districts`(`id`,`name`,`title`,`content`,`created_at`,`updated_at`) values 
(1,'baturiti','Baturiti',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(2,'kediri','Kediri',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(3,'kerambitan','Kerambitan',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(4,'marga','Marga',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(5,'penebel','Penebel',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(6,'pupuan','Pupuan',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(7,'selemadeg','Selemadeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(8,'selemadeg-timur','Selemadeg Timur',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(9,'selemadeg-barat','Selemadeg Barat',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(10,'tabanan','Tabanan',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2020_11_01_123409_create_villages_table',1),
(5,'2020_11_01_123420_create_village_images_table',1),
(6,'2020_11_01_123422_create_village_activities_table',1),
(7,'2020_11_01_123522_create_districts_table',1),
(8,'2020_11_02_050622_create_categories_table',1),
(9,'2020_11_02_050637_create_products_table',1),
(10,'2020_11_02_052322_create_product_images_table',1),
(11,'2020_11_04_190921_create_user_roles_table',1),
(12,'2020_11_04_200402_create_news_table',1);

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `news` */

insert  into `news`(`id`,`user_id`,`title`,`name`,`location`,`cover`,`thumbnail`,`content`,`created_at`,`updated_at`) values 
(1,2,'HIPMI Tabanan Gelar Talkshow Hipmi Tabanan Mekedekan','hipmi-tabanan-gelar-talkshow-hipmi-tabanan-mekedekan','Tabanan','frontend/assets/news/hipmi-tabanan-gelar-talkshow/hipmi.jpeg','frontend/assets/news/hipmi-tabanan-gelar-talkshow/thumbnails/hipmi.jpeg','<p>Dilaksanakan pada tanggal 24 Juli di Tegal Arum community, Desa Pandak Gede, Kec. Kediri, Hipmi Tabanan memprakarsai acara Talkshow “Hipmi Tabanan Mekedekan” Saat ini semua sektor pariwisata dan usaha terkena imbas pandemi Covid-19 ini. Acara ini digelar untuk melepas “stress” rekan-rekan pengusaha yang tengah berjuang untuk bertahan saat pandemi ini. Selain itu, acara ini diharapkan dilakukan untuk sekedar berbagi solusi bersama antara para pengusaha dalam upaya menghadapi krisis Covid-19 ini.</p><p>Acara ini dihadiri oleh beberapa ketua asosiasi antara lain: ketua HIPMI Bali, Kadin Tabanan, Ketua PHRI Tabanan, Ketua ICSB Tabanan, dan Komisaris Holding Bumdes. Acara ini digelar atas dukungan BRI Cabang Kediri. Acara talkshow berlangsung cukup meriah dan yang paling penting adalah seluruh peserta bisa tertawa (mekedekan) sejenak. Pada akhir acara sepakat menyatakan dan membuat sebuah jargon “Tabanan Optimis” Semua pelaku usaha di Tabanan diharapkan tetap optimis menatap ke depan di tengah situasi pandemi Covid-19 ini.</p><p>Jika semua asosiasi tetap bersatu dan aktif berbagi informasi yang ada untuk menghadapi krisis, itu akan membuat kita dapat melalui krisis yang berat ini dengan lebih optimis. Kolaborasi para pelaku usaha muda dan senior diharapkan seperti orang tua dan anak berjalan bersama. Pihak perbankan pun sangat menyambut antusias kegiatan ini dan turut berjanji untuk menjalin komunikasi dan kolaborasi ke depan. </p>','2020-07-24 00:00:00','2022-05-05 21:51:23'),
(2,2,'Tujuh Organisasi Sepakat Bersatu Membentuk Tabanan Hub','tujuh-organisasi-sepakat-bersatu-membentuk-tabanan-hub','Tabanan','frontend/assets/news/tujuh-organisasi-sepakat-membentuk-tabananhub/tabananhub.jpeg','frontend/assets/news/tujuh-organisasi-sepakat-membentuk-tabananhub/thumbnails/tabananhub.jpeg','<p>Berkat rahmat Tuhan Yang Maha Esa tujuh organisasi yang ada di Tabanan berkumpul dan menyatakan kesepakan bersama Bersatu dalam wadah Tabanan Hub. Hal tersebut dilakukan untuk bersama membangun Tabanan yang lebih Optimis dengan slogan bersama “Tabanan Optimis Pasti Bisa..!!! kita bangga jadi warga Tabanan” Masa pandemi ini adalah momen yang tepat untuk melangkah bersama dalam Tatanan Era Baru di Tabanan. Bersatu dan bersama kita mengenalkan Potensi yang dimiliki Tabanan. Bersama-sama membangun komunikasi serta kolaborasi dengan pemerintah daerah untuk kemajuan bersama.</p><p>Adapun tujuh organisasi yang sepakat bersama menyatukan visi dan misi dalam membangun Tabanan pada pertemuan tersebut adalah:</p><ol><li>Ketua HIPMI Tabanan, Kadek Surya Prasetya Wiguna</li><li>Ketua KADIN Tabanan, I Ketut Loka Antara</li><li>Ketua PHRI Tabanan, I Gusti Made Bagus Damara</li><li>KKetua ICSB Tabanan, Bagus Arya</li><li>Ketua BHAKTA Tabanan, I Nyoman Sender</li><li>Ketua JCI Tabanan, Agung Damar/ Perwakilannya</li><li>Ketua NCPI Tabanan, I Gusti Ngurah Raka Sumarjana</li></ol><p>Tujuh organisasi di atas sepakat untuk membentuk platform Digital bersama dengan konsep sosial enterprener yang menitikberatkan pada promosi Usaha Mikro Kecil dan Menengah (UMKM) dan dan pengenalan potensi seluruh desa yang ada di Kabupaten Tabanan.Kedepan diharapkan Tabanan Hub dapat menjadi bagian pembangunan Tabanan yang lebih sebagai pendamping dan menyediakan informasi yang dibutuhkan masyarakat dalam kemajuan dunia usaha antara lain seperti: penyaluran produk, pendampingan usaha, informasi perijinan, jembatan dengan pihak perbankan, dan berbagai konsultasi lainnya.</p><p>Dengan adanya sistem informasi UMKM dan potensi desa yang ada di Kabupaten Tabanan secara digital, diharapkan dapat mengajak generasi muda yang kreatif untuk terus berkarya dalam mengenalkan potensi Kabupaten Tabanan secara lebih luas.Tabanan Hub terbuka untuk siapa saja, setiap asosiasi, komunitas, serta seluruh pelaku usaha yang ada di Kabupaten Tabanan untuk memperkenalkan produk hasil karya nya. Langkah awal yang baik sudah terbentuk dan selanjutnya Tabanan Hub akan bergerak secara konsisten membangun komunikasi dan kolaborasi untuk satu tujuan yaitu “Tabanan Optimis...Pasti Bisa !!!”</p>','2020-09-03 00:00:00','2022-05-05 21:51:23'),
(3,2,'Tabanan Hub Gelar Lomba Foto Desa','tabanan-hub-gelar-lomba-foto-desa','Tabanan','frontend/assets/news/lomba-foto-desa/banner-lomba.jpeg','frontend/assets/news/lomba-foto-desa/thumbnails/banner-lomba.jpeg','<p>Tabanan Hub mengawali kegiatan pra launching mengadakan lomba photo desa. Tabanan Hub sendiri adalah kolaborasi asosiasi dan organisasi di sektor bisnis yang ada di Tabanan dengan visi bersama untuk membentuk jaringan bersama yang lebih kuat dengan tujuan mengenalkan potensi yang ada di Tabanan. Tujuan utama lomba foto ini adalah memperkenalkan potensi alam dan ekonomi setiap desa di Kabupaten Tabanan kepada dunia internasional.</p><p>Adapun syarat mengikuti lomba foto antara lain:</p><ol><li>Warga Tabanan ( Ber-KTP Tabanan )</li><li>Memiliki akun Instagram dan Facebook</li><li>Menyerahkan Foto Via WhatApp, Telegram, atau Email (Lampirkan KTP ) dengan melampirkan cerita tema foto</li></ol><p>Adapun ketentuan detail foto yaitu:</p><ol><li>Photo alam pedesaan atau object yang mewakili desa</li><li>Hasil photo bukan editan atau harus original</li><li>Tidak diperkenankan memakai <em>drone</em></li><li>Foto tidak boleh mengandung unsur Sara atau ujaran kebencian kepada orang/kelompok atau apapun</li><li>Setiap photo yang dilombakan harus diisi keterangan / narasi yang menceritakan tema photo yang diambil maksimal 200 karakter</li><li>Tidak diperkenankan memakai <em>drone</em></li></ol><p>Teknis detail lomba antara lain:</p><ol><li>Peserta mengirimkan foto yang dilombakan serta cerita singkat maksimal 200 karakter melalui email atau WhatsApp panitia</li><li>Follow Akun Instagram Tabanan Hub (@Tabananhub) dan Like Facebook Tabanan Hub</li><li>Peserta mengunggah foto desa melalui Instagram masing masing dan Tag @tabananhub dan 5 temannya</li><li>Upload dengan Caption keterangan cerita singkat, nama desanya serta ajakan untuk Follow Instagram @tabananhub sertakan hastag <em>#lombaphoto #Tabananoptimis #membangundesa #kamicintadesa #produktabanan #produkunggulantabanan</em></li><li>Setiap photo yang dilombakan harus diisi keterangan / narasi yang menceritakan tema photo yang diambil maksimal 200 karakter.</li><li>Tidak diperkenankan memakai <em>drone</em></li></ol><p>Waktu pelaksanaan lomba antara lain:</p><ol><li>Sosialisasi dan Promosi Kompetisi 1 – 10 Oktober 2020</li><li>Peserta Upload Photo 15- 29 Oktober 2020</li><li>Pengumuman Seleksi 8 November 2020</li></ol><p>Total hadiah yang diberikan adalah 10 juta rupiah kepada 3 pemenang utama dan satu pemenang favorit. Keputusan Juri mutlak tidak bisa diganggu gugat oleh pihak manapun 10 nominasi terbaik akan diundang dalam launching Tabanan Hub sekaligus pengumuman pemenang lomba Profil pemenang.akan ditampilkan di media Tabanan Hub dan media partner. Semua konten Photo peserta lomba sepenuhnya jadi MILIK PANITIA dan Tabanan Hub.Photo photo tersebut akan ditampilkan di media sosial dan Media Tabanan Hub secara periodik dan waktu yg tidak ditentukan.</p>','2020-10-07 00:00:00','2022-05-05 21:51:23'),
(4,2,'BPD Bali Menjadi Sponsor Utama Tabanan Hub','bpd-bali-menjadi-sponsor-utama-tabanan-hub','Tabanan','frontend/assets/news/sponsor-bpd-bali/bpd-bali.jpeg','frontend/assets/news/sponsor-bpd-bali/thumbnails/bpd-bali.jpeg','<p>Bertempat di Desa Coklat, Desa Tua, Kec. Marga, tim pengusul Tabanan Hub bersama para ketua Asosiasi pengusung Tabanan Hub menghadiri pertemuan dengan Bank Pembangunan Daerah (BPD) Bali Cabang Tabanan. Hal ini terkait dengan pembuatan nota kesepakatan kerja sama antara Tabanan Hub dan BPD Bali. Kedepan diharapkan program kerja Tabanan Hub di bidang sosial entrepreneur dapat bersinergi dengan program kewirausahaan BPD Bali khususnya di daerah Tabanan.</p><p>Dalam kesempatan tersebut, BPD Bali cabang Tabanan diwakili oleh Bapak Dewa dan menyatakan bahwa BPD Bali Cabang Tabanan akan berupaya untuk berkontribusi dan bersinergi pada program-program yang akan dikembangkan Tabanan Hub. Tim pengusul Tabanan Hub pun merasa sangat gembira atas kepercayaan yang diberikan oleh BPD Bali selaku Bank daerah yang memang fokus terhadap perkembangan ekonomi dan dunia usaha di Bali.</p>','2020-10-22 00:00:00','2022-05-05 21:51:23'),
(5,2,'Tabanan Hub Gali Potensi Desa dan Menghubungkan yang Tak Terhubung','tabanan-hub-gali-potensi-desa-dan-menghubungkan-yang-tak-terhubung','Tabanan','frontend/assets/news/tabanan-hub-gali-potensi-desa/potensi-desa.jpg','frontend/assets/news/tabanan-hub-gali-potensi-desa/thumbnails/potensi-desa.jpg','<p>Kondisi sulit akibat Pandemi Covid-19 membawa banyak hikmah bagi kita. Kegetiran yang ditimbulkannya, bila dilihat secara bijak, tentu ada sisi positifnya. Yakni mendorong lahirnya kreatifitas dan ide-ide baru sebagai solusi jalan keluarnya.</p><p>Salah satunya, lahirnya Tabanan Hub sebagai upaya mendorong kembali, khususnya ekonomi di sektor pariwisata Tabanan. Tabanan Hub lahir hasil kolaborasi generasi tua dan muda Tabanan yang tergabung dalam 7 asosiasi pengusaha di Tabanan.</p><p>Tujuh organisasi tersebut yakni; Himpunan Pengusaha Muda (HIPMI) Tabanan, Kamar Dagang dan Industri (KADIN) Tabanan, Persatuan Hotel dan Restaurant Indonesia (PHRI) Tabanan, Junior Chamber International (JCI) Tabanan, Bhakta Tabanan, International Council for Small Business (ICSB) Tabanan, Nawa Cita Pariwisata Indonesia (NCPI) Tabanan.</p><p>Kehadiran Tabanan Hub ini secara resmi ditandai dengan launching yang dilakukan di Dewi Sinta Hotel dan Restaurant, Minggu pagi, 29 November 2020.</p><p>Dalam launching tersebut, Ketua PHRI Tabanan sekaligus salah satu komite Tabanan Hub, Gusti Bagus Damara menjelaskan Tabanan Hub adalah bentuk kolaborasi komunikasi asosiasi dan organisasi di Sektor Bisnis yang ada di Tabanan.</p><p>“Visi kita bersama untuk membentuk dan membangun jaringan bersama yang lebih kuat dengan tujuan mengenalkan potensi yang ada di Tabanan serta mengembangkanya, sehingga memiliki dampak sosial maupun ekonomi,” ujarnya.</p><p>“Kita (Tabanan) memiliki banyak tokoh-tokoh besar. Mereka ini butuh media penyaluran ide-ide dan gagasannya. Harapannya Tabanan Hub ini bisa menjadi tempat menyalurkan ide pengalaman yang mereka miliki untuk kemajuan Tabanan,” paparnya.</p><p>Ketua Tabanan Hub, Wayan Way Suryagama mengatakan Tabanan Hub hadir sebagai bentuk optimisme menyongsong masa depan pasca Pandemi Covid-19. Harapan harus terus dijaga dan kreativitas harus terus ditumbuhkan.</p><p>“Semangat kita (Tabanan Hub) untuk menumbuhkan kreativitas sosial dan ekonomi di Tabanan, khususnya di kalangan anak muda. Sinergi menumbuhkan ekonomi dan kreatifitas anak muda,” ujarnya.</p><p>“Golnya semakin banyak anak muda Tabanan yang berkreativitas. Melalui website Tabanan Hub, kita buat untuk menampilkan potensi-potensi ekonomi yang ada di tiap-tiap desa. Sehingga potensi tiap desa yang ada dapat dipromosikan dan dimaksimalkan,” paparnya.</p><p>Lebih lanjut Way mengatakan, langkah kerja pertama yang dilakukan adalah pendataan, guna mendapatkan database UMKM (Usaha Kecil Mikro dan Menengah) dan potensi-potensi ekonomi yang ada di Tabanan.</p><p>Pendataan ini salah satunya dilakukan dengan mengadakan lomba foto bertajuk “One Village, One Foto”. Melalui lomba ini, anak-anak muda Tabanan diajak untuk menggali potensi yang ada di tiap sudut dari 133 desa yang ada di Tabanan.</p><p>Dalam acara launching ini juga diisi dengan pengumuman pemenang lomba foto. Sepuluh besar dan 3 pemenang utama dari 133 foto yang beradu dalam lomba ini diganjar dengan hadiah mulai dari voucher menginap, hingga deposito di BPD (Bank Pembangunan Daerah) Bali.</p><p>“Melalui lomba foto yang kita laksanakan kita sebenarnya ingin menggali potensi-potensi yang ada di tiap desa,” sebutnya.</p><p>Sementara ini, Romanica Anggela Intansari, anggota HIPMI Tabanan sekaligus Bendahara Tabanan Hub, pada kesempatan yang sama, mengatakan dorongan berkolaborasi untuk menemukan solusi kegetiran akibat Pandemi Covid-19 menjadi semangat yang melahirkan Tabanan Hub.</p><p>“Gara-gara Covid-19 ini kita diam aja. Pasca ini kita ingin membuat sesuatu yang baru, yang dapat memajukan daerah kita. Corona (Covid-19) ini menjadi satu hal yang menyatukan kita semua, dari management satu dan management yang lain bergabung di Tabanan Hub,” ungkapannya.</p><p>Tabanan Hub, terangnya lebih lanjut, menghubungkan yang tidak terhubung. Selama ini menurutnya, banyak orang-orang Tabanan berhasil yang berada di luar Tabanan. Perlu ada tempat agar mereka dapat berkontribusi, menyalurkan gagasan, ide dan pemikirannya untuk membangun Tabanan.</p><p>Di tahun 2021, katanya, pihaknya menargetkan terbentuk konektivitas dari seluruh desa di Tabanan. “Kita akan mengangkat CEO Desa. Yakni anak-anak muda yang dapat kita koordinir kepentingan-kepentingannya. Apa saja yang mereka butuhkan untuk pendampingan, apa saja di sana yang sudah tumbuh kembang,” tuturnya.</p><p>“Di Tabanan Hub ini kita banyak background, mungkin dengan itu dapat mengakomodir kebutuhan mereka. Seperti kebutuhan kreativitas, misalnya, ke depan ada BPD yang akan memfasilitasi dengan rumah kreatif,” tandas owner Wizzela Group, ini.</p><p>Turut hadir dalam acara launching tersebut, dari BPD Bali selaku sponsor utama Tabanan Hub hadir Kepala Cabang Tabanan BPD Bali I Gusti Ngurah Made Supardi bersama Kepala Divisi dan Jasa BPD Bali.</p><p>Kemudian hadir juga staf ahli Bupati Tabanan Bidang Hukum dan Pemerintahan Nyoman Sumartana bersama Kepala Dinas Pariwisata, Kepala Dinas Komunikasi dan Informasi Kab. Tabanan, dan perwakilan 7 organisasi inisiator lahirnya Tabanan Hub. <strong><em>(rl)</em></strong></p><p>Ref. <a href=\"https://letternews.net/2020/11/29/tabanan-hub-gali-potensi-desa-menghubungkan-yang-tak-terhubung/\" target=\"_blank\">https://letternews.net/2020/11/29/tabanan-hub-gali-potensi-desa-menghubungkan-yang-tak-terhubung/</a></p>','2020-11-29 00:00:00','2022-05-05 21:51:23'),
(6,2,'Tabanan Destination By Tabanan Hub, Refleksi Akhir Tahun 2020','tabanan-destination-by-tabanan-hub-refleksi-akhir-tahun-2020','Tabanan','frontend/assets/news/tabanan-destination-by-tabananhub/marga-and-beyond.jpg','frontend/assets/news/tabanan-destination-by-tabananhub/thumbnails/marga-and-beyond.jpg','<p>Pasca sukses menggelar Marga & Beyond yang merupakan acara lanjutan setelah pengumuman pemenang lomba foto one photo one village pada 29 november 2020 lalu, Tabanan Hub melakukan rapat evaluasi bertajuk ‘Refleksi Akhir Tahun 2020’ di Puri Taman Sari Resort, Tabanan, Jumat (25/12/2020).</p><p>Penasehat Tabanan Hub, I Putu Gde Kerta Dyana mengatakan, di Tabanan sangat banyak potensi, baik desa wisata, tempat wisata, hingga pelaku Usaha Mikro Kecil Menengah (UMKM). Untuk itu, Tabanan Hub berkomitmen dan bergerak untuk mengajak promosi bersama dengan menggaet pihak pemerintah, mempromosikan wisata yang ada di Tabanan.</p><p>“Langkah awal kami adalah membentuk suatu wadah yaitu Marga & Beyond yang diadakan tanggal 25 Desember 2020, yang mana persiapan hanya tiga hari sebelum acara. Dan acara ini sangat diapresiasi oleh pemerintah Provinsi Bali yang ditandai dengan hadirnya Kadis Pariwisata, Pimpinan BI Bali dan Ketua BTB Bali serta Rektor Sekolah Tinggi Pariwisata Bali,” ungkapnya.</p><p>Lanjutnya, setelah mendengar masukan dari Kepala Dinas Pariwisata Provinsi Bali, Ketua Bali Tourism Board (BTB), Kepala Perwakilan Bank Indonesia Bali, Rektor Sekolah Tinggi Pariwisata Bali, Tabanan Hub membuat keputusan untuk memperluas cakupan manfaat dari konsentrasi pangsa pasar wisatawan domestik yang akan digarap. “Dengan demikian, maka kami memutuskan nama Marga & Beyond dirubah menjadi Tabanan Destination by Tabanan Hub,” tuturnya.</p><p>Tak berhenti sampai disitu, pihaknya juga akan mengusulkan kepada Pemkab Tabanan agar segera membentuk Badan Promosi Pariwisata Daerah Tabanan (BPPD Tabanan). Mengingat saat ini hanya Tabanan yang belum mempunyai BPPD, sedangkan kabupaten/kota lain telah terbentuk. “Ini sebagai langkah nyata Pemda Tabanan dalam mendorong pertumbuhan pariwisata Tabanan,” ungkapnya.</p><p>Dia menambahkan, sebagai komitmen atas permintaan Kadis Pariwisata Bali, Tabanan Hub segera mengusulkan event pariwisata ke pemerintah pusat melalui Dinas Pariwisata Tabanan. “Saat ini, Tabanan Hub sedang merancang Festival Desa Wisata Touring and Amazing Race. Semoga Tabanan Hub dapat membangun Tabanan secara konsisten, berkelanjutan dan produktif. Dan ini adalah suatu langkah nyata dari gerakan Tabanan Hub untuk menutup Tahun 2020 dan menyongsong tahun 2021,” tandasnya.</p><p>Dijelaskannya, program kedepannya adalah menggali potensi-potensi yang ada di Tabanan. “Jadi Tabanan Hub ini menginisiasi bahwa objek-objek pariwisata yang ada di Tabanan ini kami hubungkan, dan kami memulai dari Marga & Beyond. Nantinya akan berubah menjadi Tabanan Destination,” jelasnya.</p><p>Sementara itu, IB Hendra selaku salah satu pembicara mengatakan, untuk memudahkan dalam melakukan promosi, maka langkah pertama yang harus dilakukan adalah mengumpulkan para pengusaha, sehingga promosi ini yang dilakukan menjadi lebih efektif.</p><p>“Kita harus melakukan secara bersama sama. Tetapi dari satu sisi, kita harapkan juga pemerintah untuk men-support dengan infrastruktur agar tidak terlalu heboh untuk mempromosikan, namun dari segi akses penunjang belum siap,” ujarnya.</p><p>Dalam acara ini, tampak dihadiri para pengelola desa wisata yang ada di Tabanan, seperti Desa wisata Pinge, TPB Management, Anggota DPRD Bali Gede Oka, Hotel Neo, Sekolah Pariwisata Lokal Bali Cak, Pengelola Alas Kedaton, WET, Pengelola Umasari Resort, Pengelola Puri Taman Sari Resort, Pengelola Banyan Tree, Sunflower Garden, serta undangan lainnya. (gd/jus/m/kb)</p><p>Ref. <a href=\"https://www.kilasbali.com/tabanan-destination-by-tabanan-hub-refleksi-akhir-tahun-2020/\" target=\"_blank\">https://www.kilasbali.com/tabanan-destination-by-tabanan-hub-refleksi-akhir-tahun-2020/</a></p>','2020-12-25 00:00:00','2022-05-05 21:51:23');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `product_images` */

DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `path` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_images` */

insert  into `product_images`(`id`,`product_id`,`path`,`title`,`created_at`,`updated_at`) values 
(1,1,'frontend/assets/products/barang/keripik-kelapa.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(2,2,'frontend/assets/products/barang/serundeng-anyar.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(3,3,'frontend/assets/products/barang/sambal-bawang-rosada.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(4,4,'frontend/assets/products/barang/lengis-tandusan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(5,5,'frontend/assets/products/barang/bali-black-garlic.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(6,6,'frontend/assets/products/barang/wizzela-soap.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(7,7,'frontend/assets/products/barang/1-36-creative.png',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(8,8,'frontend/assets/products/barang/2-ud-rahayu-shanti.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(9,9,'frontend/assets/products/barang/3-primadonut.JPG',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(10,10,'frontend/assets/products/barang/4-andari-collection-min.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(11,11,'frontend/assets/products/barang/5-mamasugi-min.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(12,12,'frontend/assets/products/barang/6-krisna-jatiluwih-min.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(13,13,'frontend/assets/products/barang/7-caucoklat.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(14,14,'frontend/assets/products/barang/8-merta-pudak-wangi-min.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(15,15,'frontend/assets/products/barang/9-akw-food-min.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(16,16,'frontend/assets/products/barang/10-padma-herbal-min.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(17,17,'frontend/assets/products/barang/11-herbali.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(18,18,'frontend/assets/products/barang/12-loveybali.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(19,19,'frontend/assets/products/barang/13-bumdes-buana-kerti.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(20,20,'frontend/assets/products/barang/14-mie-kelor-gud.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(21,21,'frontend/assets/products/barang/15-kopi-cipir.JPG',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(22,22,'frontend/assets/products/barang/16-kopinyasp.JPG',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(23,23,'frontend/assets/products/barang/17-amerta-manunggal.jpeg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(24,24,'frontend/assets/products/barang/18-barak-bali.jpeg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(25,25,'frontend/assets/products/barang/19-mozaik-hindu-bali.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(26,26,'frontend/assets/products/barang/20-beras-klc.JPG',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(27,27,'frontend/assets/products/barang/22-miracle(mahayubali).jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(28,28,'frontend/assets/products/barang/23-nityafood.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(29,29,'frontend/assets/products/barang/24-jamur-tabanan.png',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(30,30,'frontend/assets/products/barang/25-pandesdm.JPG',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(31,31,'frontend/assets/products/barang/26-ud-rama.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(32,32,'frontend/assets/products/barang/27-dua-rasa.JPG',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(33,33,'frontend/assets/products/barang/28-jineng-kebaya.JPG',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(34,34,'frontend/assets/products/barang/29-toya-arsa.JPG',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(35,35,'frontend/assets/products/jasa/guna-quipss.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(36,36,'frontend/assets/products/jasa/wizzela-food.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(37,37,'frontend/assets/products/jasa/21-wizella-management.jpeg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(38,38,'frontend/assets/products/pariwisata/desa-coklat.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(39,39,'frontend/assets/products/pariwisata/desa-tista.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(40,40,'frontend/assets/products/pariwisata/umadathu-resort.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(41,41,'frontend/assets/products/pariwisata/the-silas.jpg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(42,42,'frontend/assets/products/pariwisata/dewi-sinta.jpeg',NULL,'2022-05-05 21:51:23','2022-05-05 21:51:23');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `redirect` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`category_id`,`title`,`name`,`thumbnail`,`excerpt`,`content`,`redirect`,`contact`,`published`,`created_at`,`updated_at`) values 
(1,1,'Keripik Kelapa Narwastu','keripik-kelapa-narwastu','frontend/assets/products/barang/thumbnails/keripik-kelapa.jpeg','Produk UD Narwastu Desa Wanagiri Kauh',NULL,NULL,'628123956344',0,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(2,1,'Serundeng Anyar','serundeng-anyar','frontend/assets/products/barang/thumbnails/serundeng-anyar.jpeg','Produk Dapur Anyar Bija Desa Beringkit',NULL,NULL,'6281803003448',0,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(3,1,'Sambal Bawang Rosada','sambal-bawang-rosada','frontend/assets/products/barang/thumbnails/sambal-bawang-rosada.jpeg','Produk Desa Marga Dauh Puri',NULL,NULL,'6287766602320',0,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(4,1,'Lengis Tandusan','lengis-tandusan','frontend/assets/products/barang/thumbnails/lengis-tandusan.jpeg','Produk Desa Selanbawak',NULL,NULL,'628123761172',0,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(5,1,'Bali Black Garlic','bali-black-garlic','frontend/assets/products/barang/thumbnails/bali-black-garlic.jpeg','Produk Klinik Tani Dadia Desa Babahan Penebel',NULL,NULL,'6281339617674',0,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(6,1,'Wizzela Soap','wizzela-soap','frontend/assets/products/barang/thumbnails/wizzela-soap.jpeg','Produk sabun berkualitas dengan harga ramah di kantong',NULL,'https://www.facebook.com/WizZeLaOnlineShop/shop','6281808889029',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(7,1,'36 Creative','36-creative','frontend/assets/products/barang/thumbnails/1-36-creative.png','Aneka kerajinan keatif (masker, tas tangan, dan aksesoris lainnya) memanfaatkan limbah sisa kain Endek atau Batik dari penjahit',NULL,NULL,'6282145450960',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(8,1,'UD Rahayu Shanti','ud-rahayu-shanti','frontend/assets/products/barang/thumbnails/2-ud-rahayu-shanti.jpg','Aneka olahan snack di Tabanan',NULL,NULL,'6281999133681',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(9,1,'Prima Donat','prima-donat','frontend/assets/products/barang/thumbnails/3-primadonut.JPG','Produsen aneka kue seperti donat, bolu, caramel, dan bolen',NULL,NULL,'6281805672954',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(10,1,'Andari Collection','andari-collection','frontend/assets/products/barang/thumbnails/4-andari-collection-min.jpg','Handycraft anyaman bambu dan pandan aplikasi decoupage',NULL,NULL,'6285792707567',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(11,1,'Mamasugi Bali','mamasugi-bali','frontend/assets/products/barang/thumbnails/5-mamasugi-min.jpg','Produsen dan pemasaran premium cookies, aneka cemilan dan panganan tradisional Bali',NULL,'https://www.instagram.com/mamasugi_jc/','6285348805758',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(12,1,'Krisna Jatiluwih','krisna-jatiluwih','frontend/assets/products/barang/thumbnails/6-krisna-jatiluwih-min.jpg','Teh beras merah cendana',NULL,NULL,'6285237000678',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(13,1,'Cau Chocolate','cau-chocolate','frontend/assets/products/barang/thumbnails/7-caucoklat.jpg','Produsen coklat batang, coklat bubuk, biji coklat',NULL,'https://cauchocolatesbali.com/','6289619870970',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(14,1,'Merta Pudak Wangi','merta-pudak-wangi','frontend/assets/products/barang/thumbnails/8-merta-pudak-wangi-min.jpg','Produsen dupa herbal non-kimiawi berbahaya, selain dupa yadnya kami menyediakan parcel dupa, souvenir dupa, dan dupa aromateraphy.',NULL,'https://www.instagram.com/dupasukla.bali/','6285738128444',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(15,1,'AKW Food & Snack','akw-food-snack','frontend/assets/products/barang/thumbnails/9-akw-food-min.jpg','Produsen berbagai olahan makanan seperti siomay, batagor, dimsum, dan keripik kulit pangsit aneka rasa.',NULL,NULL,'6282237509059',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(16,1,'Padma Herbal','padma-herbal','frontend/assets/products/barang/thumbnails/10-padma-herbal-min.jpg','Produsen minuman dan makanan herbal serta healing oil.',NULL,'https://www.instagram.com/padmaherbalbali/','6285239328884',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(17,1,'PT Herbali Dewata Nusantara','pt-herbali-dewata-nusantara','frontend/assets/products/barang/thumbnails/11-herbali.jpg','Produsen Minuman Herbal',NULL,'https://www.tokopedia.com/herbaliproduct','6282297587878',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(18,1,'LoveyBali','loveybali','frontend/assets/products/barang/thumbnails/12-loveybali.jpg','Produsen kerajinan siluet kayu dan mainan anak berbahan dasar limbah kayu. Dikerjakan semi manual dengan scroll saw.',NULL,'https://www.instagram.com/loveybali/','6287861945060',1,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(19,1,'Bumdes Buana Kerti','bumdes-buana-kerti','frontend/assets/products/barang/thumbnails/13-bumdes-buana-kerti.jpg','Badan usaha milik desa yang bergerak di sektor pengolahan herbal dan pengolahan limbah sampah.',NULL,NULL,'6285792834362',1,'2022-05-05 21:51:22','2022-05-05 21:51:23'),
(20,1,'Mie Kelor Gud','mie-kelor-gud','frontend/assets/products/barang/thumbnails/14-mie-kelor-gud.jpg','Produsen mie berbahan dasar kelor.',NULL,NULL,'628127916130',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(21,1,'Kopi Cipir','kopi-cipir','frontend/assets/products/barang/thumbnails/15-kopi-cipir.JPG','Produsen kopi cipir (bukan kopi biasa). Inovasi kopi dari biji Kecipir (Botor) - Kelongkang',NULL,'https://shopee.co.id/KOPI-CIPIR-i.229491073.7757710488','6281353342567',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(22,1,'KopinyaSP','kopinyasp','frontend/assets/products/barang/thumbnails/16-kopinyasp.JPG','Produsen biji kopi sangrai dan kopi bubuk. Made to order.',NULL,NULL,'6281933034142',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(23,1,'Amertha Manunggal','amertha-manunggal','frontend/assets/products/barang/thumbnails/17-amerta-manunggal.jpeg','Produsen kerajinan dari limbah batok kelapa.',NULL,'https://www.kaubali.com/','6285303610038',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(24,1,'UD Barak Bali','ud-barak-bali','frontend/assets/products/barang/thumbnails/18-barak-bali.jpeg','Minuman alami teh beras merah, rujak tibah, laklak, dan klepon.',NULL,NULL,'628123968314',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(25,1,'Mozaik Hindu Bali','mozaik-hindu-bali','frontend/assets/products/barang/thumbnails/19-mozaik-hindu-bali.jpg','Produsen kerajinan mozaik dari kerang dan kaca denga kesan mewah dan berkualitas. ',NULL,'https://web.facebook.com/mozaikkerangbali/','6282247042725',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(26,1,'Beras KLC','beras-klc','frontend/assets/products/barang/thumbnails/20-beras-klc.JPG','Pemasaran Beras Merah Varietas Bali',NULL,'https://web.facebook.com/berastabanan/','6287772675666',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(27,1,'Miracle (Mahayu Bali)','miracle-mahayu-bali','frontend/assets/products/barang/thumbnails/22-miracle(mahayubali).jpg','Produsen virgin coconut oil (VCO) dan crude coconut oil (CCO)',NULL,'https://www.instagram.com/mahayubali/','6281246111549',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(28,1,'Nitya Food','nitya-food','frontend/assets/products/barang/thumbnails/23-nityafood.jpg','Produsen berbagai produk makanan. Bahan dasar premium, mengutamakan kualitas dan kebersihan yang terjamin. Tanpa bahan pengawet dan tanpa perasa makanan (pemanis buatan dan penyedap rasa).',NULL,NULL,'6285237148022',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(29,1,'Jamur Tabanan','jamur-tabanan','frontend/assets/products/barang/thumbnails/24-jamur-tabanan.png','Produsen jamur tiram dan olahannya  berupa pepes jamur, nuget jamur campur ayam, nuget jamur campur sayur, jamur crispy, dan aneka olahan jamur lainnya.',NULL,'https://web.facebook.com/jamur.tabanan','6285935283552',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(30,1,'Pande SDM','pande-sdm','frontend/assets/products/barang/thumbnails/25-pandesdm.JPG','Produsen berbagai macam produk alat pertanian dan peralatan dapur berbahan besi.',NULL,'https://www.instagram.com/pandesdm/','6287862480972',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(31,1,'UD Rama','ud-rama','frontend/assets/products/barang/thumbnails/26-ud-rama.jpg','Produsen aneka rempeyek',NULL,NULL,'6281936070184',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(32,1,'Dua Rasa','dua-rasa','frontend/assets/products/barang/thumbnails/27-dua-rasa.JPG','Produsen aneka kerupuk kulit ikan.',NULL,'https://www.tokopedia.com/wizzela/dua-rasa-kerupuk-kulit-ikan-patin','6281339711000',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(33,1,'Jineng Kebaya','jineng-kebaya','frontend/assets/products/barang/thumbnails/28-jineng-kebaya.JPG','Kain tenun Tabanan',NULL,'https://www.instagram.com/novijinengkebaya/','6287860171711',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(34,1,'Toyarsa','toyarsa','frontend/assets/products/barang/thumbnails/29-toya-arsa.JPG','Produsen kerajinan keramik di Tabanan',NULL,'https://www.instagram.com/ceramic_toyarsa/','6281296010560',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(35,2,'Guna Quipss','guna-quipss','frontend/assets/products/jasa/thumbnails/guna-quipss.jpg','Perusahaan general kontraktor dan penyewaan alat berat di Tabanan',NULL,'https://www.facebook.com/gunaquipss/','623618941466',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(36,2,'Wizzela Food','wizzela-food','frontend/assets/products/jasa/thumbnails/wizzela-food.jpg','Jasa catering dan pemesanan makanan',NULL,'https://www.instagram.com/wizzela_food/','62818252687',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(37,2,'Wizzela Management','wizzela-management','frontend/assets/products/jasa/thumbnails/21-wizella-management.jpeg','Management hospitality dan travel.',NULL,'https://web.facebook.com/WizZeLaOnlineShop/shop','6281339252687',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(38,3,'Desa Coklat','desa-coklat','frontend/assets/products/pariwisata/thumbnails/desa-coklat.jpg','Nikmati wisata coklat dan pengolahan coklat organik di Tabanan',NULL,'https://www.facebook.com/desacoklatbali/','6283117501343',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(39,3,'Desa Wisata Tista','desa-wisata-tista','frontend/assets/products/pariwisata/thumbnails/desa-tista.jpg','Nikmati paket trekking, spiritual yoga, dan andir dance di Desa Wisata Tista',NULL,'http://desawisatatista.com/en/home/','62818975035',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(40,3,'Umadathu Resort','umadathu-resort','frontend/assets/products/pariwisata/thumbnails/umadathu-resort.jpg','Sebuah resort dengan suasana khas pedesaan bali',NULL,'https://www.umadhaturesorts.com/','623618311655',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(41,3,'The Sila\'s Agrotourism','the-silas-agrotourism','frontend/assets/products/pariwisata/thumbnails/the-silas.jpg','Area rekreasi outdor dengan camping, paintball, menunggang kuda, memetik buah, dan area bermain anak-anak.',NULL,'http://www.thesilasagrotourism.com/','6285737102000',1,'2022-05-05 21:51:23','2022-05-05 21:51:23'),
(42,3,'Dewi Sinta Hotel','dewi-sinta-hotel','frontend/assets/products/pariwisata/thumbnails/dewi-sinta.jpeg','Hotel dan restoran di sisi wisata Tanah Lot',NULL,'https://www.traveloka.com/id-id/hotel/indonesia/dewi-sinta-hotel-and-restaurant-3000010002231','62361812933',1,'2022-05-05 21:51:23','2022-05-05 21:51:23');

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_roles` */

insert  into `user_roles`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'superadmin','2022-05-05 21:51:21','2022-05-05 21:51:21'),
(2,'admin','2022-05-05 21:51:21','2022-05-05 21:51:21'),
(3,'editor','2022-05-05 21:51:21','2022-05-05 21:51:21');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`role_id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,1,'Super Admin','superadmin@tabananhub.com',NULL,'$2y$10$RigaYERXWY5nQ2pZ8qnTku6eO06R83LlFDhv6J/4EKPk3zG8fOsvO',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(2,2,'Admin','admin@tabananhub.com',NULL,'$2y$10$MP5gyzrcDevhF1Q8TFoa9eq/a5d.8cG6kShgQyQ7yn7FQs/56mSwu',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(3,3,'Editor','editor@tabananhub.com',NULL,'$2y$10$A.m.ho3.cXUA7Y9zIZVHX..rCYJzjHsjeyus6fAWUGXUFOXejZo6a',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21');

/*Table structure for table `village_activities` */

DROP TABLE IF EXISTS `village_activities`;

CREATE TABLE `village_activities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `village_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `village_activities` */

insert  into `village_activities`(`id`,`village_id`,`title`,`description`,`redirect`,`image`,`thumbnail`,`source`,`type`,`created_at`,`updated_at`) values 
(1,42,'Video Profil Singkat Desa',NULL,NULL,'frontend/assets/activities/kerambitan/tista/profil-desa.jpg','frontend/assets/activities/kerambitan/tista/thumbnails/profil-desa.jpg','<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/Vw-_XA6lLo0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','video','2022-05-05 21:51:21','2022-05-05 21:51:21'),
(2,42,'Tista Fun Bike Adventure 2018',NULL,NULL,'frontend/assets/activities/kerambitan/tista/fun-bike-2018.jpg','frontend/assets/activities/kerambitan/tista/thumbnails/fun-bike-2018.jpg','<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/AhUPOO2-D7s\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','video','2022-05-05 21:51:21','2022-05-05 21:51:21');

/*Table structure for table `village_images` */

DROP TABLE IF EXISTS `village_images`;

CREATE TABLE `village_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `village_id` bigint(20) unsigned DEFAULT NULL,
  `path` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `village_images` */

insert  into `village_images`(`id`,`village_id`,`path`,`title`,`created_at`,`updated_at`) values 
(1,1,'frontend/assets/villages/baturiti/desa-angseri.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(2,2,'frontend/assets/villages/baturiti/desa-antapan.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(3,3,'frontend/assets/villages/baturiti/desa-apuan.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(4,4,'frontend/assets/villages/baturiti/desa-bangli.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(5,5,'frontend/assets/villages/baturiti/desa-batunya.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(6,6,'frontend/assets/villages/baturiti/desa-baturiti.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(7,7,'frontend/assets/villages/baturiti/desa-candikuning.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(8,8,'frontend/assets/villages/baturiti/desa-luwus.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(9,9,'frontend/assets/villages/baturiti/desa-mekarsari.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(10,10,'frontend/assets/villages/baturiti/desa-perean.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(11,11,'frontend/assets/villages/baturiti/desa-perean-kangin.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(12,12,'frontend/assets/villages/baturiti/desa-perean-tengah.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(13,13,'frontend/assets/villages/kediri/desa-abian-tuwung.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(14,14,'frontend/assets/villages/kediri/desa-banjar-anyar.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(15,15,'frontend/assets/villages/kediri/desa-belalang.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(16,16,'frontend/assets/villages/kediri/desa-bengkel.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(17,17,'frontend/assets/villages/kediri/desa-beraban.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(18,18,'frontend/assets/villages/kediri/desa-buwit.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(19,19,'frontend/assets/villages/kediri/desa-cepaka.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(20,20,'frontend/assets/villages/kediri/desa-kaba-kaba.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(21,21,'frontend/assets/villages/kediri/desa-kediri.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(22,22,'frontend/assets/villages/kediri/desa-nyambu.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(23,23,'frontend/assets/villages/kediri/desa-nyitdah.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(24,24,'frontend/assets/villages/kediri/desa-pandak-bandung.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(25,25,'frontend/assets/villages/kediri/desa-pandak-gede.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(26,26,'frontend/assets/villages/kediri/desa-pangkung-tibah.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(27,27,'frontend/assets/villages/kediri/desa-pejaten.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(28,28,'frontend/assets/villages/kerambitan/desa-batuaji.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(29,29,'frontend/assets/villages/kerambitan/desa-baturiti.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(30,30,'frontend/assets/villages/kerambitan/desa-belumbang.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(31,31,'frontend/assets/villages/kerambitan/desa-kelating.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(32,32,'frontend/assets/villages/kerambitan/desa-kerambitan.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(33,33,'frontend/assets/villages/kerambitan/desa-kesiut.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(34,34,'frontend/assets/villages/kerambitan/desa-kukuh.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(35,35,'frontend/assets/villages/kerambitan/desa-meliling.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(36,36,'frontend/assets/villages/kerambitan/desa-pangkung-karung.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(37,37,'frontend/assets/villages/kerambitan/desa-penarukan.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(38,38,'frontend/assets/villages/kerambitan/desa-samsam.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(39,39,'frontend/assets/villages/kerambitan/desa-sembung-gede.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(40,40,'frontend/assets/villages/kerambitan/desa-tibubiu.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(41,41,'frontend/assets/villages/kerambitan/desa-timpang.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(42,42,'frontend/assets/villages/kerambitan/desa-tista.jpg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(43,43,'frontend/assets/villages/marga/desa-baru.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(44,44,'frontend/assets/villages/marga/desa-batanyuh.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(45,45,'frontend/assets/villages/marga/desa-beringkit.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(46,46,'frontend/assets/villages/marga/desa-cau-belayu.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(47,47,'frontend/assets/villages/marga/desa-geluntung.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(48,48,'frontend/assets/villages/marga/desa-kukuh.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(49,49,'frontend/assets/villages/marga/desa-kuwum.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(50,50,'frontend/assets/villages/marga/desa-marga.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(51,51,'frontend/assets/villages/marga/desa-marga-dajan-puri.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(52,52,'frontend/assets/villages/marga/desa-marga-dauh-puri.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(53,53,'frontend/assets/villages/marga/desa-payangan.jpeg',NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(54,54,'frontend/assets/villages/marga/desa-peken.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(55,55,'frontend/assets/villages/marga/desa-petiga.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(56,56,'frontend/assets/villages/marga/desa-selanbawak.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(57,57,'frontend/assets/villages/marga/desa-tegaljadi.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(58,58,'frontend/assets/villages/marga/desa-tua.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(59,59,'frontend/assets/villages/penebel/desa-babahan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(60,60,'frontend/assets/villages/penebel/desa-biaung.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(61,61,'frontend/assets/villages/penebel/desa-buruan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(62,62,'frontend/assets/villages/penebel/desa-jatiluwih.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(63,63,'frontend/assets/villages/penebel/desa-jegu.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(64,64,'frontend/assets/villages/penebel/desa-mengeste.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(65,65,'frontend/assets/villages/penebel/desa-penatahan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(66,66,'frontend/assets/villages/penebel/desa-penebel.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(67,67,'frontend/assets/villages/penebel/desa-pesagi.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(68,68,'frontend/assets/villages/penebel/desa-pitra.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(69,69,'frontend/assets/villages/penebel/desa-rejasa.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(70,70,'frontend/assets/villages/penebel/desa-rianggede.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(71,71,'frontend/assets/villages/penebel/desa-sangketan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(72,72,'frontend/assets/villages/penebel/desa-senganan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(73,73,'frontend/assets/villages/penebel/desa-tajen.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(74,74,'frontend/assets/villages/penebel/desa-tegalinggah.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(75,75,'frontend/assets/villages/penebel/desa-tengkudak.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(76,76,'frontend/assets/villages/penebel/desa-wongayagede.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(77,77,'frontend/assets/villages/pupuan/desa-bantiran.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(78,78,'frontend/assets/villages/pupuan/desa-batungsel.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(79,79,'frontend/assets/villages/pupuan/desa-belatungan.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(80,80,'frontend/assets/villages/pupuan/desa-belimbing.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(81,81,'frontend/assets/villages/pupuan/desa-jelijih-punggang.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(82,82,'frontend/assets/villages/pupuan/desa-karya-sari.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(83,83,'frontend/assets/villages/pupuan/desa-kebon-padangan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(84,84,'frontend/assets/villages/pupuan/desa-munduk-temu.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(85,85,'frontend/assets/villages/pupuan/desa-padangan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(86,86,'frontend/assets/villages/pupuan/desa-pajahan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(87,87,'frontend/assets/villages/pupuan/desa-pujungan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(88,88,'frontend/assets/villages/pupuan/desa-pupuan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(89,89,'frontend/assets/villages/pupuan/desa-sai.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(90,90,'frontend/assets/villages/pupuan/desa-sanda.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(91,91,'frontend/assets/villages/selemadeg/desa-antap.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(92,92,'frontend/assets/villages/selemadeg/desa-bajera.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(93,93,'frontend/assets/villages/selemadeg/desa-bajera-utara.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(94,94,'frontend/assets/villages/selemadeg/desa-berembeng.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(95,95,'frontend/assets/villages/selemadeg/desa-manikyang.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(96,96,'frontend/assets/villages/selemadeg/desa-pupuan-sawah.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(97,97,'frontend/assets/villages/selemadeg/desa-selemadeg.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(98,98,'frontend/assets/villages/selemadeg/desa-serampingan.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(99,99,'frontend/assets/villages/selemadeg/desa-wanagiri.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(100,100,'frontend/assets/villages/selemadeg/desa-wanagiri-kauh.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(101,101,'frontend/assets/villages/selemadeg-timur/desa-bantas.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(102,102,'frontend/assets/villages/selemadeg-timur/desa-beraban.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(103,103,'frontend/assets/villages/selemadeg-timur/desa-dalang.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(104,104,'frontend/assets/villages/selemadeg-timur/desa-gadung-sari.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(105,105,'frontend/assets/villages/selemadeg-timur/desa-gadungan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(106,106,'frontend/assets/villages/selemadeg-timur/desa-gunung-salak.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(107,107,'frontend/assets/villages/selemadeg-timur/desa-mambang.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(108,108,'frontend/assets/villages/selemadeg-timur/desa-megati-kelod.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(109,109,'frontend/assets/villages/selemadeg-timur/desa-tangguntiti.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(110,110,'frontend/assets/villages/selemadeg-timur/desa-tegal-mengkeb.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(111,111,'frontend/assets/villages/selemadeg-barat/desa-angkah.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(112,112,'frontend/assets/villages/selemadeg-barat/desa-antosari.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(113,113,'frontend/assets/villages/selemadeg-barat/desa-bengkel-sari.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(114,114,'frontend/assets/villages/selemadeg-barat/desa-lalang-linggah.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(115,115,'frontend/assets/villages/selemadeg-barat/desa-lumbung.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(116,116,'frontend/assets/villages/selemadeg-barat/desa-lumbung-kauh.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(117,117,'frontend/assets/villages/selemadeg-barat/desa-mundeh.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(118,118,'frontend/assets/villages/selemadeg-barat/desa-mundeh-kangin.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(119,119,'frontend/assets/villages/selemadeg-barat/desa-mundeh-kauh.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(120,120,'frontend/assets/villages/selemadeg-barat/desa-selabih.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(121,121,'frontend/assets/villages/selemadeg-barat/desa-tiying-gading.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(122,122,'frontend/assets/villages/tabanan/desa-boongan.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(123,123,'frontend/assets/villages/tabanan/desa-buahan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(124,124,'frontend/assets/villages/tabanan/desa-dauh-peken.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(125,125,'frontend/assets/villages/tabanan/desa-dajan-peken.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(126,126,'frontend/assets/villages/tabanan/desa-delod-peken.jpg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(127,127,'frontend/assets/villages/tabanan/desa-denbantas.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(128,128,'frontend/assets/villages/tabanan/desa-gubug.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(129,129,'frontend/assets/villages/tabanan/desa-sesandan.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(130,130,'frontend/assets/villages/tabanan/desa-subamia.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(131,131,'frontend/assets/villages/tabanan/desa-sudimara.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(132,132,'frontend/assets/villages/tabanan/desa-tunjuk.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(133,133,'frontend/assets/villages/tabanan/desa-wanasari.jpeg',NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22');

/*Table structure for table `villages` */

DROP TABLE IF EXISTS `villages`;

CREATE TABLE `villages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `district_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `redirect` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` decimal(12,8) DEFAULT NULL,
  `longitude` decimal(12,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `villages` */

insert  into `villages`(`id`,`district_id`,`name`,`title`,`thumbnail`,`content`,`redirect`,`latitude`,`longitude`,`created_at`,`updated_at`) values 
(1,1,'angseri','Angseri','frontend/assets/villages/baturiti/thumbnails/desa-angseri.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(2,1,'antapan','Antapan','frontend/assets/villages/baturiti/thumbnails/desa-antapan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(3,1,'apuan','Apuan','frontend/assets/villages/baturiti/thumbnails/desa-apuan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(4,1,'bangli','Bangli','frontend/assets/villages/baturiti/thumbnails/desa-bangli.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(5,1,'batunya','Batunya','frontend/assets/villages/baturiti/thumbnails/desa-batunya.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(6,1,'baturiti','Baturiti','frontend/assets/villages/baturiti/thumbnails/desa-baturiti.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(7,1,'candikunging','Candikunging','frontend/assets/villages/baturiti/thumbnails/desa-candikuning.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(8,1,'luwus','Luwus','frontend/assets/villages/baturiti/thumbnails/desa-luwus.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(9,1,'mekasari','Mekasari','frontend/assets/villages/baturiti/thumbnails/desa-mekarsari.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(10,1,'perean','Perean','frontend/assets/villages/baturiti/thumbnails/desa-perean.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(11,1,'perean-kangin','Perean Kangin','frontend/assets/villages/baturiti/thumbnails/desa-perean-kangin.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(12,1,'perean-tengah','Perean Tengah','frontend/assets/villages/baturiti/thumbnails/desa-perean-tengah.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(13,2,'abian-tuwung','Abian Tuwung','frontend/assets/villages/kediri/thumbnails/desa-abian-tuwung.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(14,2,'banjar-anyar','Banjar Anyar','frontend/assets/villages/kediri/thumbnails/desa-banjar-anyar.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(15,2,'belalang','Belalang','frontend/assets/villages/kediri/thumbnails/desa-belalang.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(16,2,'bengkel','Bengkel','frontend/assets/villages/kediri/thumbnails/desa-bengkel.jpeg',NULL,'https://sid.desabengkel.id/first',NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(17,2,'beraban','Beraban','frontend/assets/villages/kediri/thumbnails/desa-beraban.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(18,2,'buwit','Buwit','frontend/assets/villages/kediri/thumbnails/desa-buwit.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(19,2,'cepaka','Cepaka','frontend/assets/villages/kediri/thumbnails/desa-cepaka.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(20,2,'kaba-kaba','Kaba-Kaba','frontend/assets/villages/kediri/thumbnails/desa-kaba-kaba.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(21,2,'kediri','Kediri','frontend/assets/villages/kediri/thumbnails/desa-kediri.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(22,2,'nyambu','Nyambu','frontend/assets/villages/kediri/thumbnails/desa-nyambu.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(23,2,'nyitdah','Nyitdah','frontend/assets/villages/kediri/thumbnails/desa-nyitdah.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(24,2,'pandak-bandung','Pandak Bandung','frontend/assets/villages/kediri/thumbnails/desa-pandak-bandung.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(25,2,'pandak-gede','Pandak Gede','frontend/assets/villages/kediri/thumbnails/desa-pandak-gede.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(26,2,'pangkung-tibah','Pangkung Tibah','frontend/assets/villages/kediri/thumbnails/desa-pangkung-tibah.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(27,2,'pejaten','Pejaten','frontend/assets/villages/kediri/thumbnails/desa-pejaten.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(28,3,'batuaji','Batuaji','frontend/assets/villages/kerambitan/thumbnails/desa-batuaji.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(29,3,'baturiti','Baturiti','frontend/assets/villages/kerambitan/thumbnails/desa-baturiti.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(30,3,'belumbang','Belumbang','frontend/assets/villages/kerambitan/thumbnails/desa-belumbang.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(31,3,'kelating','Kelating','frontend/assets/villages/kerambitan/thumbnails/desa-kelating.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(32,3,'kerambitan','Kerambitan','frontend/assets/villages/kerambitan/thumbnails/desa-kerambitan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(33,3,'kesiut','Kesiut','frontend/assets/villages/kerambitan/thumbnails/desa-kesiut.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(34,3,'kukuh','Kukuh','frontend/assets/villages/kerambitan/thumbnails/desa-kukuh.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(35,3,'meliling','Meliling','frontend/assets/villages/kerambitan/thumbnails/desa-meliling.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(36,3,'pangkung-karung','Pangkung Karung','frontend/assets/villages/kerambitan/thumbnails/desa-pangkung-karung.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(37,3,'penarukan','Penarukan','frontend/assets/villages/kerambitan/thumbnails/desa-penarukan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(38,3,'samsam','Samsam','frontend/assets/villages/kerambitan/thumbnails/desa-samsam.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(39,3,'sembung-gede','Sembung Gede','frontend/assets/villages/kerambitan/thumbnails/desa-sembung-gede.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(40,3,'tibubiyu','Tibubiyu','frontend/assets/villages/kerambitan/thumbnails/desa-tibubiu.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(41,3,'timpang','Timpang','frontend/assets/villages/kerambitan/thumbnails/desa-timpang.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(42,3,'tista','Tista','frontend/assets/villages/kerambitan/thumbnails/desa-tista.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(43,4,'baru','Baru','frontend/assets/villages/marga/thumbnails/desa-baru.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(44,4,'batannyuh','Batannyuh','frontend/assets/villages/marga/thumbnails/desa-batanyuh.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(45,4,'beringkit','Beringkit','frontend/assets/villages/marga/thumbnails/desa-beringkit.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(46,4,'caubelayu','Caubelayu','frontend/assets/villages/marga/thumbnails/desa-cau-belayu.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(47,4,'geluntung','Geluntung','frontend/assets/villages/marga/thumbnails/desa-geluntung.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(48,4,'kukuh','Kukuh','frontend/assets/villages/marga/thumbnails/desa-kukuh.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(49,4,'kuwum','Kuwum','frontend/assets/villages/marga/thumbnails/desa-kuwum.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(50,4,'marga','Marga','frontend/assets/villages/marga/thumbnails/desa-marga.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(51,4,'marga-dajan-puri','Marga Dajan Puri','frontend/assets/villages/marga/thumbnails/desa-marga-dajan-puri.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(52,4,'marga-dauh-puri','Marga Dauh Puri','frontend/assets/villages/marga/thumbnails/desa-marga-dauh-puri.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(53,4,'payangan','Payangan','frontend/assets/villages/marga/thumbnails/desa-payangan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:21','2022-05-05 21:51:21'),
(54,4,'peken','Peken','frontend/assets/villages/marga/thumbnails/desa-peken.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(55,4,'petiga','Petiga','frontend/assets/villages/marga/thumbnails/desa-petiga.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(56,4,'selanbawak','Selanbawak','frontend/assets/villages/marga/thumbnails/desa-selanbawak.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(57,4,'tegaljadi','Tegaljadi','frontend/assets/villages/marga/thumbnails/desa-tegaljadi.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(58,4,'tua','Tua','frontend/assets/villages/marga/thumbnails/desa-tua.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(59,5,'babahan','Babahan','frontend/assets/villages/penebel/thumbnails/desa-babahan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(60,5,'biaung','Biaung','frontend/assets/villages/penebel/thumbnails/desa-biaung.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(61,5,'buruan','Buruan','frontend/assets/villages/penebel/thumbnails/desa-buruan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(62,5,'jatiluwih','Jatiluwih','frontend/assets/villages/penebel/thumbnails/desa-jatiluwih.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(63,5,'jegu','Jegu','frontend/assets/villages/penebel/thumbnails/desa-jegu.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(64,5,'mengeste','Mengeste','frontend/assets/villages/penebel/thumbnails/desa-mengeste.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(65,5,'penatahan','Penatahan','frontend/assets/villages/penebel/thumbnails/desa-penatahan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(66,5,'penebel','Penebel','frontend/assets/villages/penebel/thumbnails/desa-penebel.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(67,5,'pesagi','Pesagi','frontend/assets/villages/penebel/thumbnails/desa-pesagi.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(68,5,'pitra','Pitra','frontend/assets/villages/penebel/thumbnails/desa-pitra.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(69,5,'rejasa','Rejasa','frontend/assets/villages/penebel/thumbnails/desa-rejasa.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(70,5,'riang-gede','Riang Gede','frontend/assets/villages/penebel/thumbnails/desa-rianggede.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(71,5,'sangketan','Sangketan','frontend/assets/villages/penebel/thumbnails/desa-sangketan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(72,5,'senganan','Senganan','frontend/assets/villages/penebel/thumbnails/desa-senganan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(73,5,'tajen','Tajen','frontend/assets/villages/penebel/thumbnails/desa-tajen.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(74,5,'tegalinggah','Tegalinggah','frontend/assets/villages/penebel/thumbnails/desa-tegalinggah.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(75,5,'tengkudak','Tengkudak','frontend/assets/villages/penebel/thumbnails/desa-tengkudak.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(76,5,'wongaya-gede','Wongaya Gede','frontend/assets/villages/penebel/thumbnails/desa-wongayagede.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(77,6,'bantiran','Bantiran','frontend/assets/villages/pupuan/thumbnails/desa-bantiran.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(78,6,'batungsel','Batungsel','frontend/assets/villages/pupuan/thumbnails/desa-batungsel.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(79,6,'belatungan','Belatungan','frontend/assets/villages/pupuan/thumbnails/desa-belatungan.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(80,6,'belimbing','Belimbing','frontend/assets/villages/pupuan/thumbnails/desa-belimbing.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(81,6,'jelijih-punggang','Jelijih Punggang','frontend/assets/villages/pupuan/thumbnails/desa-jelijih-punggang.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(82,6,'karya-sari','Karya Sari','frontend/assets/villages/pupuan/thumbnails/desa-karya-sari.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(83,6,'kebon-padangan','Kebon Padangan','frontend/assets/villages/pupuan/thumbnails/desa-kebon-padangan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(84,6,'munduk-temu','Munduk Temu','frontend/assets/villages/pupuan/thumbnails/desa-munduk-temu.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(85,6,'padangan','Padangan','frontend/assets/villages/pupuan/thumbnails/desa-padangan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(86,6,'pajahan','Pajahan','frontend/assets/villages/pupuan/thumbnails/desa-pajahan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(87,6,'pujungan','Pujungan','frontend/assets/villages/pupuan/thumbnails/desa-pujungan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(88,6,'pupuan','Pupuan','frontend/assets/villages/pupuan/thumbnails/desa-pupuan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(89,6,'sai','Sai','frontend/assets/villages/pupuan/thumbnails/desa-sai.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(90,6,'sanda','Sanda','frontend/assets/villages/pupuan/thumbnails/desa-sanda.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(91,7,'antap','Antap','frontend/assets/villages/selemadeg/thumbnails/desa-antap.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(92,7,'bajera','Bajera','frontend/assets/villages/selemadeg/thumbnails/desa-bajera.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(93,7,'bajera-utara','Bajera Utara','frontend/assets/villages/selemadeg/thumbnails/desa-bajera-utara.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(94,7,'berembeng','Berembeng','frontend/assets/villages/selemadeg/thumbnails/desa-berembeng.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(95,7,'manikyang','Manikyang','frontend/assets/villages/selemadeg/thumbnails/desa-manikyang.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(96,7,'pupuan-sawah','Pupuan Sawah','frontend/assets/villages/selemadeg/thumbnails/desa-pupuan-sawah.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(97,7,'selemadeg','Selemadeg','frontend/assets/villages/selemadeg/thumbnails/desa-selemadeg.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(98,7,'serampingan','Serampingan','frontend/assets/villages/selemadeg/thumbnails/desa-serampingan.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(99,7,'wanagiri','Wanagiri','frontend/assets/villages/selemadeg/thumbnails/desa-wanagiri.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(100,7,'wanagiri-kauh','Wanagiri Kauh','frontend/assets/villages/selemadeg/thumbnails/desa-wanagiri-kauh.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(101,8,'bantas','Bantas','frontend/assets/villages/selemadeg-timur/thumbnails/desa-bantas.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(102,8,'beraban','Beraban','frontend/assets/villages/selemadeg-timur/thumbnails/desa-beraban.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(103,8,'dalang','Dalang','frontend/assets/villages/selemadeg-timur/thumbnails/desa-dalang.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(104,8,'gadung-sari','Gadung Sari','frontend/assets/villages/selemadeg-timur/thumbnails/desa-gadung-sari.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(105,8,'gadungan','Gadungan','frontend/assets/villages/selemadeg-timur/thumbnails/desa-gadungan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(106,8,'gunung-salak','Gunung Salak','frontend/assets/villages/selemadeg-timur/thumbnails/desa-gunung-salak.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(107,8,'mambang','Mambang','frontend/assets/villages/selemadeg-timur/thumbnails/desa-mambang.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(108,8,'megati','Megati','frontend/assets/villages/selemadeg-timur/thumbnails/desa-megati-kelod.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(109,8,'tangguntiti','Tangguntiti','frontend/assets/villages/selemadeg-timur/thumbnails/desa-tangguntiti.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(110,8,'tegal-mengkeb','Tegal Mengkeb','frontend/assets/villages/selemadeg-timur/thumbnails/desa-tegal-mengkeb.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(111,9,'angkah','Angkah','frontend/assets/villages/selemadeg-barat/thumbnails/desa-angkah.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(112,9,'antosari','Antosari','frontend/assets/villages/selemadeg-barat/thumbnails/desa-antosari.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(113,9,'bengkel-sari','Bengkel Sari','frontend/assets/villages/selemadeg-barat/thumbnails/desa-bengkel-sari.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(114,9,'lalang-linggah','Lalang Linggah','frontend/assets/villages/selemadeg-barat/thumbnails/desa-lalang-linggah.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(115,9,'lumbung','Lumbung','frontend/assets/villages/selemadeg-barat/thumbnails/desa-lumbung.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(116,9,'lumbung-kauh','Lumbung Kauh','frontend/assets/villages/selemadeg-barat/thumbnails/desa-lumbung-kauh.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(117,9,'mundeh','Mundeh','frontend/assets/villages/selemadeg-barat/thumbnails/desa-mundeh.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(118,9,'mundeh-kangin','Mundeh Kangin','frontend/assets/villages/selemadeg-barat/thumbnails/desa-mundeh-kangin.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(119,9,'mundeh-kauh','Mundeh Kauh','frontend/assets/villages/selemadeg-barat/thumbnails/desa-mundeh-kauh.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(120,9,'selabih','Selabih','frontend/assets/villages/selemadeg-barat/thumbnails/desa-selabih.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(121,9,'tiying-gading','Tiying Gading','frontend/assets/villages/selemadeg-barat/thumbnails/desa-tiying-gading.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(122,10,'boongan','Boongan','frontend/assets/villages/tabanan/thumbnails/desa-boongan.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(123,10,'buahan','Buahan','frontend/assets/villages/tabanan/thumbnails/desa-buahan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(124,10,'dauh-peken','Dauh Peken','frontend/assets/villages/tabanan/thumbnails/desa-dauh-peken.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(125,10,'dajan-peken','Dajan Peken','frontend/assets/villages/tabanan/thumbnails/desa-dajan-peken.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(126,10,'delod-peken','Delod Peken','frontend/assets/villages/tabanan/thumbnails/desa-delod-peken.jpg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(127,10,'denbantas','Denbantas','frontend/assets/villages/tabanan/thumbnails/desa-denbantas.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(128,10,'gubug','Gubug','frontend/assets/villages/tabanan/thumbnails/desa-gubug.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(129,10,'sesandan','Sesandan','frontend/assets/villages/tabanan/thumbnails/desa-sesandan.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(130,10,'subamia','Subamia','frontend/assets/villages/tabanan/thumbnails/desa-subamia.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(131,10,'sudimara','Sudimara','frontend/assets/villages/tabanan/thumbnails/desa-sudimara.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(132,10,'tunjuk','Tunjuk','frontend/assets/villages/tabanan/thumbnails/desa-tunjuk.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22'),
(133,10,'wanasari','Wanasari','frontend/assets/villages/tabanan/thumbnails/desa-wanasari.jpeg',NULL,NULL,NULL,NULL,'2022-05-05 21:51:22','2022-05-05 21:51:22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
