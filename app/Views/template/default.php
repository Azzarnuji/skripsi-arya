<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PB4W2XP');</script>
<!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $dataMeta['title']; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php foreach ($dataMeta['meta'] as $m) : ?>
    <meta name="<?= $m['name']; ?>" content="<?= $m['content']; ?>">
  <?php endforeach; ?>
  <?php foreach ($dataMeta['metaProperty'] as $mp) : ?>
    <meta property="<?= $mp['value']; ?>" content="<?= $mp['content']; ?>">
  <?php endforeach; ?>
  <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('/assets/favicon/apple-icon-57x57.png') ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('/assets/favicon/apple-icon-60x60.png') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('/assets/favicon/apple-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/favicon/apple-icon-76x76.png') ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('/assets/favicon/apple-icon-114x114.png') ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('/assets/favicon/apple-icon-120x120.png') ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('/assets/favicon/apple-icon-144x144.png') ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('/assets/favicon/apple-icon-152x152.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/assets/favicon/apple-icon-180x180.png') ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('/assets/favicon/android-icon-192x192.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('/assets/favicon/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('/assets/favicon/favicon-96x96.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('/assets/favicon/favicon-16x16.png') ?>">
  <link rel="icon" type="image/x-icon" href="<?= base_url('/assets/favicon/favicon.ico') ?>">
  <link rel="manifest" href="<?= base_url('/assets/favicon/manifest.json') ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= base_url('/assets/favicon/ms-icon-144x144.png') ?>">
  <meta name="theme-color" content="#ffffff">

  <!-- 
    - favicon
  -->

  <!-- 
    - custom css link
  -->
  <link rel="preload" as="script" href="<?= base_url('/assets/js/jquery.min.js');?>">
  
  <link rel="preload" as="image" href="<?= base_url('/assets/images/Logotype.webp'); ?>">
  <link rel="preload" as="style" href="<?= base_url('/assets/css/bootstrap-grid.css'); ?>">
  <link rel="preload" as="style" href="<?= base_url('/assets/css/owl.carousel.min.css'); ?>">
  <link rel="preload" as="style" href="<?= base_url('/assets/css/owl.theme.default.min.css'); ?>">
  <link rel="preload" as="style" href="<?= base_url('/assets/css/styletwo.css'); ?>">
  
  
  <link rel="stylesheet" href="<?= base_url('/assets/css/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/css/owl.theme.default.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/css/styletwo.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap-grid.css'); ?>">
  
  
  <link rel="preload" as="script" href="<?= base_url('/assets/js/owl.carousel.min.js');?>">
  <link rel="preload" as="script" href="<?= base_url('/assets/js/scripttwo.js'); ?>">
  
  
  
  <script src="<?= base_url('/assets/js/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/owl.carousel.min.js'); ?>"></script>
  <!-- 
    - google font link
  -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Kamandaka Premium Car",
  "image": "https://kamandakapremiumcar.com/assets/images/Logotype.webp",
  "@id": "https://kamandakapremiumcar.com",
  "url": "https://kamandakapremiumcar.com/",
  "telephone": "+62811905053",
  "priceRange": "Rp1.200.000 - Rp3.000.000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Kp.cakung",
    "addressLocality": "Bekasi",
    "postalCode": "17456",
    "addressCountry": "ID"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -6.338749,
    "longitude": 106.944149
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": "https://kamandakapremiumcar.com/" 
}
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YESJLJWNKX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YESJLJWNKX');
</script>
<!-- Google tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-237394596-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-237394596-1');
</script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PB4W2XP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="<?=base_url('/');?>" class="logo">
        <img src="<?= base_url('/assets/images/Logotype.webp'); ?>" class="logo-header" alt="Kamandaka Logo">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="<?=base_url('/');?>" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="<?=base_url('/rental');?>" class="navbar-link" data-nav-link>Daftar Harga</a>
          </li>

          <li>
            <a href="javascript:void(0)" class="navbar-link" data-nav-link onclick="updatePage('#about-we')" id="about-we-link">Tentang Kami</a>
          </li>

          <li>
            <a href="javascript:void(0)" class="navbar-link" data-nav-link onclick="updatePage('#contact-we')" id="contact-we-link">Kontak Kami</a>
          </li>

        </ul>
      </nav>

      <div class="header-actions">

        <div class="header-contact">
          <a href="https://api.whatsapp.com/send?phone=62811905053&text=Halo Admin Kamandaka Premium Car%0D%0ASaya Mau Infomasi Rental Mobil" class="contact-link">+62811905053</a>

          <span class="contact-time">Senin-Minggu</span>
        </div>

        <a href="<?=base_url('/rental');?>" class="btn" aria-labelledby="aria-label-txt">
          <ion-icon name="car-outline"></ion-icon>

          <span id="aria-label-txt">Daftar Harga</span>
        </a>

        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </div>

    </div>
  </header>





  <main>
    <article>

      <?= $this->renderSection('content'); ?>

    </article>
  </main>
  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="<?=base_url("/assets/images/Logotype.webp");?>" height="70" width="80" style="border-radius: 10px;" alt="Kamandaka Premium Car">
          </a>

          <p class="footer-text">
          Kamandaka Premium Car menjadi pilihan Persewaan Mobil di Jabodetabek, pilihan tepat bagi yang ingin Rental Mobil bagi warga kota Jabodetabek. <br>Apa saja jenis perjalanan Anda apakah untuk bisnis atau wisata, hubungi kami untuk merasakan pengalaman pelayanan sewa mobil
          </p>
        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Perusahaan</p>
          </li>

          <li>
            <a href="<?=base_url('/');?>" class="footer-link">Home</a>
          </li>

          <li>
            <a href="<?=base_url('/rental');?>" class="footer-link">Daftar Harga</a>
          </li>

          <li>
            <a href="javascript:void(0)" class="footer-link" onclick="updatePage('#about-we')">Tentang Kami</a>
          </li>

          <li>
            <a href="javascript:void(0)" class="footer-link" onclick="updatePage('#contact-we')">Kontak Kami</a>
          </li>


        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Bantuan</p>
          </li>

          <li>
            <a href="#" class="footer-link">Pusat Bantuan</a>
          </li>

          <li>
            <a href="https://api.whatsapp.com/send?phone=62811905053&text=Halo%20Admin%20Kamandaka%20Premium%20Car%0ASaya%20MauTanya" class="footer-link">Mempunyai Pertanyaan?</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Rental Mobil Di</p>
          </li>

          <li>
            <a href="#" class="footer-link">Bekasi</a>
          </li>

          <li>
            <a href="#" class="footer-link">Jakarta</a>
          </li>

          <li>
            <a href="#" class="footer-link">Depok</a>
          </li>

          <li>
            <a href="#" class="footer-link">Bogor</a>
          </li>

          <li>
            <a href="#" class="footer-link">Tanggerang</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-skype"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

        </ul>

        <p class="copyright">
          &copy; 2022 <a href="#">Kamandaka Premium Car</a>. All Rights Reserved
        </p>

      </div>

    </div>
  </footer>
  <!-- 
    - custom js link
  -->
  <script src="<?= base_url('/assets/js/scripttwo.js'); ?>"></script>

  <!-- 
  - ionicon link
-->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>