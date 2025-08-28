-- Converted from MySQL to PostgreSQL
-- Original phpMyAdmin SQL Dump converted for PostgreSQL
-- Database: ptkemas

-- --------------------------------------------------------

--
-- Table structure for table "careers"
--

CREATE TABLE "careers" (
  "id" BIGSERIAL PRIMARY KEY,
  "title" VARCHAR(255) NOT NULL,
  "description" TEXT NOT NULL,
  "requirements" TEXT NOT NULL,
  "deadline" DATE NOT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table "categories"
--

CREATE TABLE "categories" (
  "id" BIGSERIAL PRIMARY KEY,
  "name" VARCHAR(255) NOT NULL,
  "slug" VARCHAR(255) DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

--
-- Dumping data for table "categories"
--

INSERT INTO "categories" ("id", "name", "slug", "created_at", "updated_at") VALUES
(1, 'CSR', 'csr', '2025-07-21 20:44:06', '2025-07-21 20:44:06'),
(2, 'Acara Kepegawaian', 'acara-kepegawaian', '2025-07-21 20:44:06', '2025-07-21 20:44:06'),
(3, 'Pengumuman', 'pengumuman', '2025-07-21 20:44:06', '2025-07-21 20:44:06');

-- Reset sequence to match inserted data
SELECT setval('categories_id_seq', (SELECT MAX("id") FROM "categories"));

-- --------------------------------------------------------

--
-- Table structure for table "companies"
--

CREATE TABLE "companies" (
  "id" BIGSERIAL PRIMARY KEY,
  "name" VARCHAR(255) NOT NULL,
  "description" TEXT DEFAULT NULL,
  "vision" TEXT DEFAULT NULL,
  "mission" TEXT DEFAULT NULL,
  "address" TEXT DEFAULT NULL,
  "phone" VARCHAR(255) DEFAULT NULL,
  "email" VARCHAR(255) DEFAULT NULL,
  "logo" VARCHAR(255) DEFAULT NULL,
  "image" VARCHAR(255) DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

--
-- Dumping data for table "companies"
--

INSERT INTO "companies" ("id", "name", "description", "vision", "mission", "address", "phone", "email", "logo", "image", "created_at", "updated_at") VALUES
(1, 'PT KEMAS DELI INDO', 'CORRUGATED PACKAGING INDUSTRY', 'Menjadi perusahaan distribusi terdepan di Indonesia.', 'Memberikan layanan terbaik dengan integritas dan profesionalisme.', 'Jl. Contoh No.123, Sumedang', '021-12345678', 'info@ptkemas.co.id', 'logo.png', 'companys/h1.jpg', '2025-07-21 20:44:05', '2025-07-21 20:44:05');

-- Reset sequence to match inserted data
SELECT setval('companies_id_seq', (SELECT MAX("id") FROM "companies"));

-- --------------------------------------------------------

--
-- Table structure for table "contacts"
--

CREATE TABLE "contacts" (
  "id" BIGSERIAL PRIMARY KEY,
  "name" VARCHAR(255) NOT NULL,
  "email" VARCHAR(255) NOT NULL,
  "subject" VARCHAR(255) DEFAULT NULL,
  "message" TEXT NOT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table "failed_jobs"
--

CREATE TABLE "failed_jobs" (
  "id" BIGSERIAL PRIMARY KEY,
  "uuid" VARCHAR(255) NOT NULL UNIQUE,
  "connection" TEXT NOT NULL,
  "queue" TEXT NOT NULL,
  "payload" TEXT NOT NULL,
  "exception" TEXT NOT NULL,
  "failed_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

--
-- Table structure for table "galleries"
--

CREATE TABLE "galleries" (
  "id" BIGSERIAL PRIMARY KEY,
  "title" VARCHAR(255) DEFAULT NULL,
  "image" VARCHAR(255) NOT NULL,
  "category" VARCHAR(255) DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

--
-- Dumping data for table "galleries"
--

INSERT INTO "galleries" ("id", "title", "image", "category", "created_at", "updated_at") VALUES
(1, 'Kegiatan Ekspor', 'ekspor1.jpg', NULL, '2025-07-21 20:44:05', '2025-07-21 20:44:05'),
(2, 'Kunjungan Mitra', 'mitra1.jpg', NULL, '2025-07-21 20:44:05', '2025-07-21 20:44:05');

-- Reset sequence to match inserted data
SELECT setval('galleries_id_seq', (SELECT MAX("id") FROM "galleries"));

-- --------------------------------------------------------

--
-- Table structure for table "migrations"
--

CREATE TABLE "migrations" (
  "id" SERIAL PRIMARY KEY,
  "migration" VARCHAR(255) NOT NULL,
  "batch" INTEGER NOT NULL
);

--
-- Dumping data for table "migrations"
--

INSERT INTO "migrations" ("id", "migration", "batch") VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_06_20_045517_create_companies_table', 1),
(6, '2025_06_20_045606_create_services_table', 1),
(7, '2025_06_20_050548_create_posts_table', 1),
(8, '2025_06_20_063106_create_galleries_table', 1),
(9, '2025_06_20_064119_create_careers_table', 1),
(10, '2025_06_20_064146_create_contants_table', 1),
(11, '2025_06_21_035735_create_teams_table', 1),
(12, '2025_06_30_030738_create_categories_table', 1),
(13, '2025_06_30_031108_add_category_id_to_posts_table', 1),
(14, '2025_07_04_024430_add_slug_to_categories_table', 1),
(15, '2025_07_11_023902_create_product_categories_table', 1),
(16, '2025_07_11_025934_create_products_table', 1),
(17, '2025_07_18_041525_add_details_to_products_table', 1),
(18, '2025_07_22_020749_add_category_id_to_posts_table', 1),
(19, '2025_07_22_031323_add_slug_to_posts_table', 1),
(20, '2025_07_22_071449_create_post_images_table', 2),
(21, '2025_07_30_070454_add_banner_image_to_companies_table', 3);

-- Reset sequence to match inserted data
SELECT setval('migrations_id_seq', (SELECT MAX("id") FROM "migrations"));

-- --------------------------------------------------------

--
-- Table structure for table "password_resets"
--

CREATE TABLE "password_resets" (
  "email" VARCHAR(255) PRIMARY KEY,
  "token" VARCHAR(255) NOT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table "personal_access_tokens"
--

CREATE TABLE "personal_access_tokens" (
  "id" BIGSERIAL PRIMARY KEY,
  "tokenable_type" VARCHAR(255) NOT NULL,
  "tokenable_id" BIGINT NOT NULL,
  "name" VARCHAR(255) NOT NULL,
  "token" VARCHAR(64) NOT NULL UNIQUE,
  "abilities" TEXT DEFAULT NULL,
  "last_used_at" TIMESTAMP NULL DEFAULT NULL,
  "expires_at" TIMESTAMP NULL DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

-- Create index for tokenable
CREATE INDEX "personal_access_tokens_tokenable_type_tokenable_id_index" ON "personal_access_tokens" ("tokenable_type", "tokenable_id");

-- --------------------------------------------------------

--
-- Table structure for table "product_categories"
--

CREATE TABLE "product_categories" (
  "id" BIGSERIAL PRIMARY KEY,
  "name" VARCHAR(255) NOT NULL,
  "slug" VARCHAR(255) NOT NULL UNIQUE,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

--
-- Dumping data for table "product_categories"
--

INSERT INTO "product_categories" ("id", "name", "slug", "created_at", "updated_at") VALUES
(1, 'Corrugated Sheet', 'corrugated-sheet', '2025-07-21 20:44:06', '2025-07-21 20:44:06'),
(2, 'Corrugated Box', 'corrugated-box', '2025-07-21 20:44:06', '2025-07-21 20:44:06'),
(3, 'Laminated Paper', 'laminated-paper', '2025-07-21 20:44:06', '2025-07-21 20:44:06'),
(4, 'Pra-Cetak Corrugated Box', 'pra-cetak-corrugated-box', '2025-07-21 20:44:06', '2025-07-21 20:44:06'),
(5, 'Our Corrugators & Flexo Printing Machine', 'our-corrugators-flexo-printing-machine', '2025-07-21 20:44:06', '2025-07-21 20:44:06');

-- Reset sequence to match inserted data
SELECT setval('product_categories_id_seq', (SELECT MAX("id") FROM "product_categories"));

-- --------------------------------------------------------

--
-- Table structure for table "posts"
--

CREATE TABLE "posts" (
  "id" BIGSERIAL PRIMARY KEY,
  "title" VARCHAR(255) NOT NULL,
  "slug" VARCHAR(255) DEFAULT NULL,
  "content" TEXT NOT NULL,
  "image" VARCHAR(255) DEFAULT NULL,
  "published_at" TIMESTAMP NULL DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL,
  "category_id" BIGINT DEFAULT NULL
);

--
-- Dumping data for table "posts"
--

INSERT INTO "posts" ("id", "title", "slug", "content", "image", "published_at", "created_at", "updated_at", "category_id") VALUES
(1, 'test', 'test', '219312232321392308239283201308230', 'posts/berita.jpg', '2025-07-22 04:07:32', '2025-07-22 04:07:32', NULL, 1),
(2, 'PT. Sumatera Kemasindo Memberikan Bantuan Pembangunan Mesjid Nurul Iman', 'PT. Sumatera Kemasindo Memberikan Bantuan Pembangunan Mesjid Nurul Iman', 'PT. Sumatera Kemasindo, Pabrik Karton Terbaik di Sumatera – PT. Sumatera Kemasindo, sebuah perusahaan di Pekanbaru, Riau, memberikan bantuan dalam pembangunan mesjid Nurul Iman pada Bantuan ini diberikan sebagai bentuk kepedulian perusahaan terhadap kegiatan keagamaan dan sosial di lingkungan sekitar perusahaan. Mesjid Nurul Iman merupakan tempat ibadah yang sangat dibutuhkan oleh masyarakat setempat, dan diharapkan bantuan ini dapat mempercepat proses pembangunan dan memberikan manfaat bagi jamaah yang akan menggunakan fasilitas ibadah tersebut.

Sabtu, 17 Desember 2022, dengan Memberikan bantuan dalam pembangunan Mesjid Nurul Iman, PT. Sumatera Kemasindo juga diharapkan dapat mempererat hubungan antara perusahaan dengan masyarakat setempat. Bantuan ini menjadi contoh bagi perusahaan lain untuk berkontribusi dalam pembangunan sosial di lingkungan sekitarnya dan menunjukkan komitmen perusahaan dalam mendukung kegiatan keagamaan dan sosial dalam masyarakat. Diharapkan, mesjid Nurul Iman dapat segera difungsikan dengan normal dan memberikan manfaat bagi masyarakat setempat.', 'posts/mesjid.jpg', '2025-07-01 06:59:58', '2025-07-01 06:59:58', NULL, 1),
(3, 'Penyerahan Bantuan dan Santunan Anak Yatim dan Yatim Piatu', 'Penyerahan Bantuan dan Santunan Anak Yatim dan Yatim Piatu', 'PT. Sumatera Kemasindo, Pabrik Karton Terbaik di Sumatera – Dalam rangka memperingati Hari Raya Idul Adha 1440 H (Tahun 2019), manajemen PT. Sumatera Kemasindo mengadakan kegiatan Corporate Social Responsibility (CSR) yang bertujuan untuk membantu meringankan beban anak yatim dan anak yatim piatu di lingkungan perusahaan.

Doa anak yatim merupakan doa yang mudah diterima oleh Tuhan Yang Maha Esa, maka perusahaan memberikan bantuan untuk keperluan-keperluan sekolah, kebutuhan sehari-hari, dan lain-lain. Anak-anak ini merupakan warga yang bertempat tinggal di lingkungan sekitar perusahaan (RW 04). (Baca Juga : Penyerahan Bantuan Langsung Kebutuhan Orang Tua Jompo dari PT. Sumatera Kemasindo)

Jumat, 9 Agustus 2019, penyerahan bantuan untuk anak yatim dilaksanakan di Masjid Al-Hidayah lingkungan RW 04. Acara penyerahan santunan untuk anak yatim dihadiri oleh tokoh-tokoh masyarakat lingkungan Kel. Sialang Rampai dan Kel. Kulim.', 'posts/beras.jpg', '2025-07-21 06:02:12', '2025-07-21 06:02:12', NULL, 1),
(4, 'nananananann', 'naanannannnaa', 'nananananannaa', 'posts/beranda.jpg', '2025-07-30 08:21:49', '2025-07-30 08:21:49', NULL, 3);

-- Reset sequence to match inserted data
SELECT setval('posts_id_seq', (SELECT MAX("id") FROM "posts"));

-- --------------------------------------------------------

--
-- Table structure for table "post_images"
--

CREATE TABLE "post_images" (
  "id" BIGSERIAL PRIMARY KEY,
  "post_id" BIGINT NOT NULL,
  "image" VARCHAR(255) NOT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

--
-- Dumping data for table "post_images"
--

INSERT INTO "post_images" ("id", "post_id", "image", "created_at", "updated_at") VALUES
(1, 2, 'posts/gambar1.jpg', '2025-07-22 07:30:14', NULL),
(2, 2, 'posts/gambar2.jpg', '2025-07-22 07:31:09', NULL);

-- Reset sequence to match inserted data
SELECT setval('post_images_id_seq', (SELECT MAX("id") FROM "post_images"));

-- --------------------------------------------------------

--
-- Table structure for table "products"
--

CREATE TABLE "products" (
  "id" BIGSERIAL PRIMARY KEY,
  "product_category_id" BIGINT NOT NULL,
  "name" VARCHAR(255) NOT NULL,
  "slug" VARCHAR(255) NOT NULL UNIQUE,
  "description" TEXT DEFAULT NULL,
  "image" VARCHAR(255) DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL,
  "specs" TEXT DEFAULT NULL,
  "advantages" TEXT DEFAULT NULL
);

--
-- Dumping data for table "products"
--

INSERT INTO "products" ("id", "product_category_id", "name", "slug", "description", "image", "created_at", "updated_at", "specs", "advantages") VALUES
(1, 1, 'Corrugated Sheet Premium', 'corrugated-sheet-premium', 'PT. Kemas Deli Indo adalah produsen yang juga menghasilkan corrugated sheet berbahan karton. Corrugated sheet karton yang diproduksi digunakan sebagai bahan kemasan, pembungkus, atau box untuk pengiriman barang. Keuntungan dari corrugated sheet karton produksi PT. Kemas Deli Indo meliputi ringan, mudah diproses, ramah lingkungan karena dapat didaur ulang, dan dapat dicetak dengan desain atau label khusus sesuai kebutuhan.', 'products/corrugated-sheet.jpg', '2025-07-21 20:44:06', '2025-07-21 20:44:06', NULL, NULL),
(2, 1, 'Single Wall / Single Face', 'single-wall-single-face', 'Single wall corrugated sheet memiliki satu lapisan karton bergelombang di antara dua lapisan karton datar, dengan tipe flute B, C, atau E. Keuntungan dari single wall corrugated sheet termasuk biaya produksi rendah, kemudahan pemrosesan, fleksibilitas dalam penggunaan sebagai bahan kemasan, dan kemampuan untuk dicetak dengan label atau desain khusus sesuai kebutuhan pelanggan. Kami dapat memproduksi single wall corrugated sheet dengan spesifikasi yang disesuaikan, termasuk ukuran, tipe flute, dan desain, untuk memenuhi kebutuhan pelanggan.', 'products/single-wall.jpg', '2025-07-21 20:44:06', '2025-07-21 20:44:06', NULL, NULL),
(3, 1, 'Double Wall', 'double-wall', 'Double wall corrugated sheet terdiri dari dua lapisan fluting yang dipisahkan oleh tiga lapisan liner. Struktur ini memberikan ketahanan tambahan terhadap tekanan dan benturan, menjadikannya ideal untuk kemasan produk berat atau yang membutuhkan perlindungan ekstra. Kami menyediakan double wall corrugated sheet dalam berbagai kombinasi flute seperti BC, BE, atau AC untuk kebutuhan pengemasan yang berbeda.', 'products/double-wall.jpg', '2025-07-21 20:44:06', '2025-07-21 20:44:06', NULL, NULL),
(4, 2, 'Laminated Box HD', 'laminated-box-hd', 'Box dengan kekuatan tambahan dan lapisan laminasi.', 'products/laminated-box.jpg', '2025-07-21 20:44:06', '2025-07-21 20:44:06', NULL, NULL),
(5, 4, 'Pra-Cetak Box', 'pra-cetak-box', 'Box pra-cetak dengan desain khusus.', 'products/pre-printed-box.jpg', '2025-07-21 20:44:06', '2025-07-21 20:44:06', NULL, NULL),
(6, 5, 'Flexo Printing Machine', 'flexo-printing-machine', 'Mesin cetak flexo untuk produksi karton berkualitas.', 'products/flexo-printing-machine.jpg', '2025-07-21 20:44:06', '2025-07-21 20:44:06', NULL, NULL);

-- Reset sequence to match inserted data
SELECT setval('products_id_seq', (SELECT MAX("id") FROM "products"));

-- --------------------------------------------------------

--
-- Table structure for table "services"
--

CREATE TABLE "services" (
  "id" BIGSERIAL PRIMARY KEY,
  "title" VARCHAR(255) NOT NULL,
  "Description" TEXT DEFAULT NULL,
  "icon" VARCHAR(255) DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

--
-- Dumping data for table "services"
--

INSERT INTO "services" ("id", "title", "Description", "icon", "created_at", "updated_at") VALUES
(1, 'Distribusi Barang', 'Layanan distribusi barang cepat dan aman ke seluruh Indonesia.', NULL, '2025-07-21 20:44:05', '2025-07-21 20:44:05');

-- Reset sequence to match inserted data
SELECT setval('services_id_seq', (SELECT MAX("id") FROM "services"));

-- --------------------------------------------------------

--
-- Table structure for table "teams"
--

CREATE TABLE "teams" (
  "id" BIGSERIAL PRIMARY KEY,
  "name" VARCHAR(255) NOT NULL,
  "position" VARCHAR(255) NOT NULL,
  "photo" VARCHAR(255) DEFAULT NULL,
  "bio" TEXT DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

--
-- Dumping data for table "teams"
--

INSERT INTO "teams" ("id", "name", "position", "photo", "bio", "created_at", "updated_at") VALUES
(1, 'nama direktur', 'Direktur', 'teams/namadirektur.jpg', 'Memimpin PT KEMAS Sejak tahun 2024 dan berpengalaman', '2025-07-21 20:44:06', '2025-07-21 20:44:06'),
(2, 'nama IT Support', 'IT Support', 'teams/namait.jpg', 'Bertanggung jawab atas pengelolaan sistem dan infrastruktur IT.', '2025-07-21 20:44:06', '2025-07-21 20:44:06');

-- Reset sequence to match inserted data
SELECT setval('teams_id_seq', (SELECT MAX("id") FROM "teams"));

-- --------------------------------------------------------

--
-- Table structure for table "users"
--

CREATE TABLE "users" (
  "id" BIGSERIAL PRIMARY KEY,
  "name" VARCHAR(255) NOT NULL,
  "email" VARCHAR(255) NOT NULL UNIQUE,
  "email_verified_at" TIMESTAMP NULL DEFAULT NULL,
  "password" VARCHAR(255) NOT NULL,
  "remember_token" VARCHAR(100) DEFAULT NULL,
  "created_at" TIMESTAMP NULL DEFAULT NULL,
  "updated_at" TIMESTAMP NULL DEFAULT NULL
);

-- --------------------------------------------------------

-- Add Foreign Key Constraints
--

--
-- Constraints for table "posts"
--
ALTER TABLE "posts"
  ADD CONSTRAINT "posts_category_id_foreign" FOREIGN KEY ("category_id") REFERENCES "categories" ("id") ON DELETE CASCADE;

--
-- Constraints for table "post_images"
--
ALTER TABLE "post_images"
  ADD CONSTRAINT "post_images_post_id_foreign" FOREIGN KEY ("post_id") REFERENCES "posts" ("id") ON DELETE CASCADE;

--
-- Constraints for table "products"
--
ALTER TABLE "products"
  ADD CONSTRAINT "products_product_category_id_foreign" FOREIGN KEY ("product_category_id") REFERENCES "product_categories" ("id") ON DELETE CASCADE;