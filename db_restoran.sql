-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 02:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_menu`
--

CREATE TABLE `t_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_menu`
--

INSERT INTO `t_menu` (`id_menu`, `nama_menu`, `harga`, `deskripsi`, `foto`) VALUES
(1, 'Nasi Goreng', 25000, 'Nasi yang digoreng dengan bumbu rempah dan dilengkapi dengan telur, ayam, dan sayuran', 'nasgor.png'),
(2, 'Sate Ayam', 20000, 'Potongan daging ayam yang ditusuk pada tusuk sate dan dipanggang dengan bumbu kacang', 'sate.png'),
(3, 'Gado-gado', 15000, 'Campuran sayuran segar seperti kacang panjang, tauge, dan mentimun yang dilengkapi dengan saus kacang', 'gado gado.png'),
(4, 'Soto Ayam', 18000, 'Sup ayam yang gurih dengan tambahan mie, telur, dan rempah-rempah khas', 'soto ayam.jpg'),
(5, 'Rendang', 30000, 'Daging sapi yang dimasak dalam santan dan rempah-rempah, dengan rasa pedas dan gurih', 'rendang.png'),
(6, 'Bakso', 12000, 'Bakso adalah hidangan khas Indonesia yang terdiri dari bola-bola daging yang terbuat dari campuran daging sapi giling dan bumbu-bumbu yang khas. Bakso sering disajikan dalam kuah kaldu yang gurih dan ditambahi dengan mie, tahu, sayuran, dan bumbu pelengkap lainnya. Rasanya yang lezat dan teksturnya yang kenyal membuat bakso menjadi makanan favorit banyak orang. Bakso bisa disantap sebagai hidangan utama atau sebagai camilan yang mengenyangkan.', 'bakso.png'),
(7, 'Mie Ayam', 15000, 'Mie ayam adalah hidangan populer dalam masakan Tionghoa-Indonesia. Hidangan ini terdiri dari mi kuning yang dimasak dengan rebusan ayam, disajikan dengan potongan daging ayam yang lezat, sayuran seperti sawi, daun bawang, dan irisan bakso. Mie ayam biasanya dilengkapi dengan kuah kaldu yang kaya rasa, dan ditaburi dengan bawang goreng dan sejumput kecap manis. Rasanya yang gurih dan teksturnya yang lembut membuat mie ayam menjadi pilihan yang sangat nikmat untuk dinikmati di siang atau malam hari.', 'mie ayam.png'),
(8, 'Ayam Goreng', 10000, 'Ayam goreng adalah hidangan yang terdiri dari potongan ayam yang digoreng hingga kulitnya menjadi renyah dan berwarna keemasan. Proses penggorengan ini memberikan cita rasa khas yang gurih dan tekstur yang lezat pada daging ayam. Ayam goreng biasanya disajikan dengan nasi putih hangat dan sambal sebagai bumbu pelengkapnya. Hidangan ini sering menjadi favorit di banyak negara dan dapat disantap sebagai hidangan utama dalam berbagai kesempatan.', 'ayam.png'),
(9, 'Ikan Bakar', 30000, 'Ikan bakar adalah hidangan laut yang terdiri dari ikan segar yang dipanggang atau dibakar di atas bara api. Ikan yang digunakan biasanya adalah jenis ikan yang memiliki daging yang lezat dan mudah disantap seperti ikan kakap, ikan nila, atau ikan tongkol. Ikan bakar diberi bumbu khusus sebelum dipanggang, seperti bumbu rempah-rempah, jeruk nipis, dan cabai. Hasilnya adalah ikan dengan kulit yang renyah dan daging yang juicy. Ikan bakar biasanya disajikan dengan nasi hangat, lalapan segar, dan sambal pedas. Hidangan ini menghadirkan perpaduan rasa yang kaya dan tekstur yang menggugah selera.', 'ikan.png'),
(10, 'Martabak Manis', 40000, 'Martabak manis adalah makanan penutup yang populer di Indonesia. Terbuat dari adonan tepung terigu, telur, ragi, gula, dan susu, martabak manis memiliki tekstur yang lembut dan rasa yang manis. Biasanya, martabak manis diisi dengan berbagai pilihan selai seperti cokelat, keju, kacang, atau pisang. Setelah diisi, martabak manis digulung dan dipanggang hingga matang. Martabak manis sering ditaburi dengan topping seperti keju parut atau meses, dan bisa disajikan dengan siraman madu atau kental manis. Rasanya yang lezat dan kombinasi berbagai bahan isian membuat martabak manis menjadi makanan penutup yang menggugah selera.', 'martabak.png'),
(11, 'Bika Ambon', 50000, 'Bika Ambon adalah kue tradisional Indonesia yang berasal dari Kota Medan, Sumatera Utara. Kue ini memiliki tekstur yang lembut dan berpori-pori, dengan rasa yang manis dan aroma pandan yang khas. Bika Ambon terbuat dari adonan tepung terigu, santan, telur, ragi, dan gula. Proses pembuatannya melibatkan fermentasi adonan sehingga menghasilkan tekstur yang kenyal dan berongga. Kue ini biasanya berwarna kuning cerah dan memiliki aroma yang menggoda. Bika Ambon bisa dinikmati sebagai camilan atau makanan penutup yang lezat.', 'bika.png'),
(12, 'Kue Pukis', 15000, 'Kue Pukis adalah makanan tradisional Indonesia yang terbuat dari adonan tepung terigu, telur, susu, gula, dan santan. Kue ini dipanggang dalam cetakan khusus yang memberikan bentuk bulat dengan lubang di tengahnya. Setelah dipanggang, kue pukis memiliki tekstur yang lembut di bagian dalam dan renyah di bagian luar. Biasanya, kue pukis memiliki aroma vanila yang harum. Rasanya manis dengan sedikit rasa gurih dari santan. Kue pukis dapat dinikmati sebagai camilan atau hidangan penutup yang cocok disajikan bersama secangkir teh atau kopi.', 'pukis.png'),
(13, 'Es Teh Manis', 8000, 'Es Teh Manis adalah minuman yang terdiri dari teh hitam atau teh hijau yang diseduh dan kemudian ditambahkan dengan gula dan es batu. Minuman ini populer di banyak negara, termasuk Indonesia. Es Teh Manis memiliki rasa yang segar dan manis, dengan aroma teh yang khas. Minuman ini sering disajikan dalam gelas besar atau cangkir dengan tambahan irisan jeruk atau daun mint untuk memberikan sentuhan segar. Es Teh Manis merupakan minuman yang sangat populer dan sering menjadi teman yang menyegarkan di siang hari.', 'es teh.png'),
(14, 'Air Mineral', 5000, 'Air mineral adalah minuman yang terdiri dari air yang telah diolah dan dibotolkan untuk dikonsumsi. Air mineral umumnya tidak mengandung rasa atau tambahan lainnya, sehingga rasanya netral dan segar. Minuman ini digunakan untuk menghilangkan dahaga dan memenuhi kebutuhan hidrasi tubuh. Air mineral juga sering dijadikan sebagai minuman pelengkap dalam makanan atau digunakan sebagai bahan dasar dalam minuman lainnya seperti jus atau koktail. Rasanya yang murni dan kemampuannya untuk menyegarkan membuat air mineral menjadi pilihan yang sederhana namun penting dalam menjaga kesehatan tubuh.', 'air.png'),
(15, 'Es Jeruk', 12000, 'Es Jeruk adalah minuman segar yang terbuat dari air jeruk yang dicampur dengan es batu dan gula. Minuman ini memiliki rasa yang manis dan asam segar, dengan aroma jeruk yang menyegarkan. Es Jeruk biasanya disajikan dalam gelas besar atau cangkir dengan tambahan irisan jeruk di atasnya. Minuman ini populer di musim panas atau saat cuaca sedang panas karena memberikan sensasi kesegaran dan menghilangkan dahaga. Es Jeruk juga bisa dinikmati dengan tambahan daun mint atau serutan es untuk menambah sensasi segarnya.', 'jeruk.png'),
(16, 'Jus Mangga', 15000, 'Jus Mangga adalah minuman yang terbuat dari buah mangga yang di-blender hingga menjadi tekstur yang halus dan lembut. Jus mangga memiliki rasa yang manis dan lezat dengan aroma mangga yang khas. Minuman ini sangat populer di banyak negara tropis di dunia, terutama saat musim buah mangga tiba. Jus mangga biasanya disajikan dingin dengan tambahan es batu untuk memberikan sensasi segar. Jus mangga juga dapat diolah dengan tambahan susu atau yogurt untuk mendapatkan variasi rasa yang lebih kaya.', 'mangga.png'),
(17, 'Es Campur', 13000, 'Es Campur adalah minuman yang terdiri dari campuran berbagai bahan seperti es batu, sirup atau saus manis, potongan buah-buahan segar, biji selasih, dan serutan kelapa. Minuman ini memiliki rasa manis, segar, dan sedikit kenyal dari campuran bahan-bahannya. Es Campur seringkali dijadikan hidangan penutup yang menyegarkan, terutama saat cuaca panas. Kombinasi beragam bahan dalam Es Campur memberikan variasi rasa dan tekstur yang menarik, sehingga dapat disesuaikan dengan selera masing-masing.', 'es campur.png'),
(18, 'Ice Cream', 30000, 'Ice cream adalah makanan penutup beku yang terbuat dari campuran susu, gula, dan berbagai bahan tambahan seperti buah-buahan, cokelat, kacang, atau perasa lainnya. Ice cream memiliki tekstur yang lembut, krimi, dan lezat. Makanan penutup ini biasanya disajikan dalam berbagai rasa dan bentuk seperti cone atau cup. Ice cream seringkali menjadi pilihan favorit untuk mengakhiri hidangan, terutama saat cuaca sedang panas. Kelezatan dan sensasi dingin dari ice cream membuatnya menjadi makanan penutup yang disukai oleh banyak orang di berbagai usia.', 'es.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_metode_pembayaran`
--

CREATE TABLE `t_metode_pembayaran` (
  `id_metode_pembayaran` int(11) NOT NULL,
  `nama_metode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_metode_pembayaran`
--

INSERT INTO `t_metode_pembayaran` (`id_metode_pembayaran`, `nama_metode`) VALUES
(1, 'Cash on Delivery'),
(2, 'ATM'),
(3, 'Dana'),
(4, 'ShopeePay');

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE `t_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `harga_total` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_metode_pembayaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_order`
--

INSERT INTO `t_order` (`id_order`, `id_user`, `id_menu`, `jumlah`, `harga_total`, `tanggal`, `id_metode_pembayaran`) VALUES
(1, 2, 1, 2, 50000, '2023-06-12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `nama`, `email`, `no_telp`, `alamat`) VALUES
(1, 'alifiaisti', '123', 'alifia', 'alifia@gmail.com', '08123456789', 'Bandung'),
(2, 'meutiajs', '456', 'meutia', 'meutia@gmail.com', '081984672130', 'Depok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `t_metode_pembayaran`
--
ALTER TABLE `t_metode_pembayaran`
  ADD PRIMARY KEY (`id_metode_pembayaran`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_metodePembayaran` (`id_metode_pembayaran`),
  ADD KEY `fk_menu` (`id_menu`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_metode_pembayaran`
--
ALTER TABLE `t_metode_pembayaran`
  MODIFY `id_metode_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_order`
--
ALTER TABLE `t_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_order`
--
ALTER TABLE `t_order`
  ADD CONSTRAINT `fk_menu` FOREIGN KEY (`id_menu`) REFERENCES `t_menu` (`id_menu`),
  ADD CONSTRAINT `fk_metodePembayaran` FOREIGN KEY (`id_metode_pembayaran`) REFERENCES `t_metode_pembayaran` (`id_metode_pembayaran`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
