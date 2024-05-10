-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2024 at 02:43 PM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kame1982_kamandaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id` int(11) NOT NULL,
  `idMobil` varchar(32) NOT NULL,
  `merk` varchar(21) NOT NULL,
  `pabrikan` varchar(32) NOT NULL,
  `tahun` int(4) DEFAULT NULL,
  `hargaOne` varchar(32) NOT NULL,
  `hargaTwo` varchar(32) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `idMobil`, `merk`, `pabrikan`, `tahun`, `hargaOne`, `hargaTwo`, `description`, `img`, `status`) VALUES
(1, 'hiace', 'Hiace Premio Luxury', 'Toyota', 2022, 'Rp2.500.000', '-', 'HIACE PREMIO LUXURY, spacious,luxury cabin & comfortable', 'hiace-luxury.webp', 'highlight'),
(2, 'alphard', 'Alphard', 'Toyota', 2022, 'Rp2.800.000', 'Rp2.300.000', 'Toyota Alphard 2022 adalah 7 Seater MPV yang tersedia dalam daftar harga Rp 1,17 - 1,61 Milyar di Indonesia. Ini tersedia dalam 3 warna, 3 varian, 2 pilihan mesin, dan 2 opsi transmisi: CVT dan Otomatis di Indonesia. Mobil ini memiliki ground clearance 160 mm dengan dimensi sebagai berikut: 4945 mm L x 1850 mm W x 1895 mm H. Lebih dari 24 pengguna telah memberikan penilaian untuk Alphard berdasarkan fitur, jarak tempuh, kenyamanan tempat duduk dan kinerja mesin. Cicilan bulanan terendah dimulai dari Rp 199,8 Million (selama 60 bulan). Pesaing terdekat Toyota Alphard adalah Vellfire dan Staria.\r\nBagian dalam dari mobil toyota satu ini memang dibuat untuk memberikan kenyamanan ekstra bagi para penumpangnya, buka hanya penumpang namun pengemudi pun diberikan berbagai fitur-fitur yang akan memudahkan ketika mengendarai mobil ini.\r\n\r\n\r\nSalah yang menjadi daya tarik tentunya desain interior mobil ini, didesain dengan konsep yang luxury dan modern. Pada bagian dalam ini terdapat 2 pilihan konsep warna yaitu warna hitam dan juga warna cream tergantung dari pilihan tipe yang dipilih.\r\n\r\n\r\nPenumpang juga akan semakin dimanjakan dengan hadirnya rear seat entertainment, dengan fitur multimedia ini tentu akan membuat perjalanan menggunakan mobil alphard semakin menyenangkan dan bebas dari kebosanan. Tidak lupa dibagian tengah kursi penumpang tersedia foldable center table yang berguna untuk menyimpan makanan ataupun barang.', 'alphard.webp', 'non'),
(3, 'camry', 'Camry', 'Toyota', 2019, 'Rp2.000.000', 'Rp1.600.000', 'Toyota Camry adalah 5 Seater Sedan yang tersedia dengan harga Rp 711,2 Juta di Indonesia. Ini tersedia dalam 7 warna, 1 varian, 1 pilihan mesin, dan 1 opsi transmisi: Otomatis di Indonesia. Dimensi Camry adalah 4885 mm L x 1840 mm W x 1445 mm H. Lebih dari 10 pengguna telah memberikan penilaian untuk Camry berdasarkan fitur, jarak tempuh, kenyamanan tempat duduk dan kinerja mesin. Cicilan bulanan terendah dimulai dari Rp 33,49 Million (selama 60 bulan). Pesaing terdekat Toyota Camry adalah Accord, Camry Hybrid, 6 dan C-Class Sedan.', 'camry.webp', 'non'),
(4, 'crv', 'CRV', 'Honda', NULL, 'Rp1.900.000', 'Rp1.500.000', 'Honda CRV adalah 5 dan 7 Seater Crossover yang tersedia dalam daftar harga Rp 515,9 - 668,4 Juta di Indonesia. Ini tersedia dalam 4 warna, 4 varian, 2 pilihan mesin, dan 1 opsi transmisi: CVT di Indonesia. Dimensi CRV adalah 4623 mm L x 1855 mm W x 1657 mm H. Lebih dari 65 pengguna telah memberikan penilaian untuk CRV berdasarkan fitur, jarak tempuh, kenyamanan tempat duduk dan kinerja mesin. Cicilan bulanan terendah dimulai dari Rp 57,39 Million (selama 60 bulan). Pesaing terdekat Honda CRV adalah HRV, Kijang Innova, Fortuner dan Pajero Sport.', 'crv.webp', 'non'),
(5, 'pajero', 'Pajero Sport ', 'Mitsubishi', 2022, 'Rp1.800.000', 'Rp1.300.000', 'SUV tumpuan Mitsubishi ini terbagi menjadi enam varian. Termahal Dakar AT berpenggerak 4×4 ekuivalen Rp 692 juta (OTR Jakarta). Berada di bawahnya Dakar Ultimate (4×2) AT senilai Rp 583,5 juta dan Dakar (4×2) AT (Rp 539,5 juta). Model di bawah Rp 500 jutaan Ada Exceed (4×2) AT (Rp 496,5 juta) dan Exceed (4×2) MT (Rp 481,5 juta). Opsi penggerak 4×4 dengan transmisi manual turut disediakan, yaitu GLX yang dibanderol Rp 538,5 juta.<br>Jantung mekanis yang digondol ada dua tipe. Bagi Dakar menggunakan mesin baru 4N15 2,4 liter MIVEC Turbocharged dan Intercooled. Outputnya 181 PS dan 430 Nm. Sedangkan Exceed dan GLX gunakan mesin lama, 4D56 2,5 liter Turbocharged dan Intercooled. Keluaran dayanya 136 PS dan 324 Nm. Ini dipadukan tiga opsi transmisi. Bagi Dakkar menggunakan otomatis konvensional 8-speed. Sedangkan Exceed yang otomatis melulu 5-speed. Jumlahnya gear-nya sama dengan manual yang diselipkan pada Exceed dan GLX. Menariknya, guna 4×4 diserahkan pengatur transfer case dengan model kenop, bukan tuas. Dan ada pun paddle shift untuk menyerahkan sensasi berkendara yang lebih seru.<br>Sewa Mobil Pajero Sport<br>Urusan kenyamanan, SUV 7 penumpang ini mumpuni. Semua varian punya head unit layar sentuh dengan pelbagai konektivitas. Penumpang di belakang juga dapat menikmati hiburan dengan maksimal berkat adanya layar 9 inci yang menempel di atap. Pengaturan pendingin kabin pun digital dengan fitur dual zone, sehingga mempermudah pemakai. Tak ketinggalan, kian gaya dengan adanya sunroof dan pengatur jok elektrik. Akses ke mobil maupun menyalakan-mematikan mesin lebih praktis berkat sistem keyless dan tombol start-stop<br>Fitur keselamatan dan ketenteraman yang menolong pengendalian lengkap. Anti-lock Braking System (ABS) dan Electronic Brake Distribution (EBD) sudah tentu tersedia. Ini ditambahkan Active Stability dan Traction Control, Blind Spot Warning, Forward Collision Mitigation, Hill Descent Control, Hill Start Assist, Active Cruise Control dan sensor stop otomatis. Parkir menjadi lebih gampang karena dicantumkan Multi Around View Camera dan Electric Parking Brake.', 'pajero-sport.webp', 'non'),
(6, 'fortuner', 'Fortuner', 'Toyota', 2022, 'Rp1.800.000', 'Rp1.300.000', 'Pertama kali diluncurkan pada 2005, Toyota Fortuner langsung terdaftar di hati masyarakat Indonesia. Fortuner menjadi pilihan SUV untuk mereka yang perlu mobil berdaya angkut banyak. Dengan tawaran jumlah kursi hingga tujuh dan performa yang dapat diandalkan. Itu kemudian menjadikan Fortuner sebagai opsi yang lebih mewah dan bertolak belakang dari Kijang Innova. Wajar, sebab memang diposisikan begitu.<br>Dalam perkembangannya, generasi kedua Fortuner lahir mula 2016 dan pulang diminati. Apalagi, reputasinya yang lebih dari 10 tahun, menciptakan orang percaya guna memilih Fortuner. Sebagai strategi pemasaran, Toyota sekarang menawarkan 8 tipe varian berbeda. Pilihan utama dari mesin: bensin dan diesel, serta tidak banyak pembeda transmisi. Ada pun pembeda tipe penggerak roda 4×2 dan 4×4.<br>Nomenklatur SRZ, penanda menggunakan mesin bensin. Kode mesin 2TR-FE, 4-silinder 2,7 liter dual VVT-i. Sedang VRZ, jadi varian lebih tinggi dengan menggendong mesin turbodiesel 2,4 liter VNT berkode 2GD-FTV. Jantung mekanis anyar itu, punya performa yang andal dan lebih bertenaga dari mesin sebelumnya. Tambahkan dengan banyaknya fitur dan teknologi yang dibenamkan. Mulai dari lampu LED hingga pintu bagasi elektrik. Fortuner punya penawaran paket yang menggiurkan di segmennya.Boleh dibilang, Fortuner jadi tulang punggung penjualan Toyota guna segmen SUV. Pasalnya, mobil yang diproduksi di domestik ini pun jadi model yang diekspor oleh manufaktur ke tidak sedikit negara. 2019 ini, Fortuner dirapikan khususnya versi TRD Sportivo. Perubahan minor tampak di unsur aerokit yang diusung. Tidak tidak sedikit perubahannya.', 'fortuner.webp', 'non'),
(7, 'hiace-premio', 'Hiace Premio', 'Toyota', 2020, 'Rp1.800.000', 'Rp1.200.000', 'Eksterior Toyota HiAce Premio tampil lebih menarik, tersebut tercermin dari lekukan tubuh unsur samping, dan mempunyai bonnet lebih panjang.“Desain memang bertolak belakang dari tipe di bawahnya. Siluet pada bodi samping bertolak belakang lebih canggih dan berkelas,” ungkap Anton.Masuk ke unsur kabin depan, sekarang lebih nyaman berkat tuas transmisi yang gampang diraih oleh pengemudi, dan pandangan menyaksikan jalan atau terbit lebih luas. Pintu samping eksklusif penumpang sekarang lebih lebar sehingga mempermudah penumpang masuk dan turun. Sedangkan lokasi kabin lebih panjang dan luas dibanding tipe satunya. Mobil ini panjangnya 5.915 mm dikomparasikan tipe Commuter yang melulu 5.380 mm. Lebarnya pun menjangkau 1.950 mm, lebih lebar dibanding tipe Commuter yang melulu 1.880 mm. Tinggi tidak banyak berkurang menjadi 2.280 mm dibanding Commuter sampai-sampai menjadi 2.285 mm. Dengan jarak sumbu roda (wheelbase) 3.860 mm, HiAce Premio dianggap jadi lebih stabil.', 'hiace-premio.webp', 'non'),
(12, 'innova', 'Innova', 'Toyota', 2022, 'Rp1.300.000', 'Rp750.000', 'Nama Kijang telah familiar didengar guna keluarga Indonesia. MPV 7-seater ini, tak asing dengan kabin lapang nan nyaman. Dari generasi ke generasi, ia tampil semakin mewah dan lengkap.Trim terbagi menjadi tiga: G, Q, dan V. Semuanya mengejar fitur keselamatan standar Dual SRS Airbag, knee airbag, serta ABS+EBD. Sensasi kemewahan hadir di tipe Q dan V. Aura ini diperkuat dengan pemakaian premium illumination kabin serta panel AC digital. Di balik bangku depan terdapat sebuah meja kecil yang terlipat, bak berada di kabin pesawat. Tipe Q menggunakan bangku captain seat.Toyota tawarkan dua opsi mesin, bensin dan diesel. Untuk generasi teranyar, Innova mengusung mesin diesel yang baru berkode 2GD-FTV. Kapasitasnya sebesar 2.400 cc, dilengkapi dengan VNT Intercooler. Dorongan turbo membuatnya dapat mengail tenaga 149 ps di 3.400 rpm dengan torsi mencapai 360 Nm. Opsi ini hanya tersedia di Tipe G dan Tipe Q.Pilihan mesin bensin masih mengandalkan unit yang sama dengan generasi sebelumnya. Unit 1TR-FE berkapasitas 2.000 cc dilengkapi Dual VVT-i. Semburan tenaga maksimumnya 139 ps di 5.600 rpm dengan torsi puncak 182 Nm di 4.000 rpm.Kijang Innova diproduksi langsung oleh TMMIN (Toyota Motor Manufacturing Indonesia) di Karawang. Namun mobil ini tak hanya dinikmati pasar domestik, ia juga diekspor ke sebanyak negara di Asia, Timur Tengah dan Afrika.', 'innova.webp', 'non');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `thumbnail` text NOT NULL,
  `rating` text NOT NULL,
  `snippets` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `thumbnail`, `rating`, `snippets`) VALUES
(1, 'Sanri Junara', 'https://lh3.googleusercontent.com/a-/AOh14Ghz-El7ierRKs2hZ0e3YpPtz8alIS-noOuOC8ZCLQ=s40-c-c0x00000000-cc-rp-mo-br100', '3', 'Trima kasih banyak buat kamandaka semoga makin sukses slalu, buat drivern ya baik&ramah dalam perjalanan saya selama 1minggu, sangat memuaskan, besok semoga jdi langganan.'),
(3, 'Rudi Thomas', 'https://lh3.googleusercontent.com/a/AATXAJwlyAT-F4NF7XLHdM1V1nay5_ABVNUw4Mr8XTzc=s40-c-c0x00000000-cc-rp-mo-br100', '5', 'Terima kasih buat kamandaka semoga tetap menjadi yg terbaik dan menjunjung tinggi profesionalitas pelayanan mantab'),
(4, 'Handi Nazgie', 'https://lh3.googleusercontent.com/a/AATXAJykPDMaMs9tc5Dfk4xGUaIsjzMW3VgbD6bzZASg=s40-c-c0x00000000-cc-rp-mo-br100', '5', 'mantap mobil nya baru semua ramah driver nya sopan sopan dan rapih'),
(5, 'Ibnu Octa', 'https://lh3.googleusercontent.com/a/AATXAJyf4a5jkf8wbV06Kl6XuVhJWsNlOrrZt-G1ehe6=s40-c-c0x00000000-cc-rp-mo-br100', '5', 'tempat rental mobil mewah di bekasi dan jakarta. mantap. lengkap. harga murah'),
(6, 'wahyu budi', 'https://lh3.googleusercontent.com/a/AATXAJxPL34c8iaQiGpSKqQo86g1tUSYU51nti6TDzOX=s40-c-c0x00000000-cc-rp-mo-br100', '5', 'Rental terbaik..pelayanan yg memuaskan.drivernya ramah dan sopan.'),
(7, 'Yuka Wandi', 'https://lh3.googleusercontent.com/a/AATXAJwg44oY837nIDHMYZQYvipG9HKH5UA5CvPjAEQ=s40-c-c0x00000000-cc-rp-mo-br100', '5', 'rental mbil kamandaka sangat rekomondit'),
(8, 'Budi Santoso', 'https://lh3.googleusercontent.com/a-/AOh14GiKuUuUwvGX0DPiSHyb3Bj8AXJrYsQsvdqMn661Rw=s40-c-c0x00000000-cc-rp-mo-ba2-br100', '5', 'Rekomended ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
