<!-- 
        - #HERO
      -->
<?=$this->extend('template/default.php');?>
<?=$this->section('content');?>
<section class="section hero" id="home" style="background-image: url(<?= base_url('/assets/images/car/bg1.JPG'); ?>);">
  <div class="container">

    <h1 class="h1 hero-title">Kamandaka Premium Car</h1>
    <div class="hero-content">
      <p class="hero-text">
        Rental Mobil Premium Termurah, Cepat dan Terpercaya
      </p>
    </div>

    <form action="" class="hero-form">

      <div class="input-wrapper">
        <label for="input-1" class="input-label">Pesan Mobil</label>

        <input type="text" name="car-model" id="input-1" class="input-field" placeholder="Masukkan Tipe Mobil">
      </div>

      <div class="input-wrapper">
        <label for="input-2" class="input-label">Jumlah Hari</label>

        <input type="text" name="monthly-pay" id="input-2" class="input-field" placeholder="Masukkan Jumlah Hari">
      </div>

      <div class="input-wrapper">
        <label for="input-3" class="input-label">Pakai Sopir?</label>

        <input type="text" name="year" id="input-3" class="input-field" placeholder="Ya/Tidak">
      </div>

      <button type="button" class="btn" id="pesan">Pesan Ke Admin</button>

    </form>

  </div>
</section>




<!-- Hero Contact -->
<div class="container">

  <div class="hero-contact">
    <div class="row">

      <div class="col-12">
        <h2 class="p-hero">Kamandaka Premium Car</h2>
        <p class="p-hero-up">Kamandaka Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Premium Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata Di Jabodetabek Dan Sekitarnya.</p>
      </div>
    </div>
    <hr class="hr">
    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="<?= base_url('/assets/images/rent.png'); ?>" height="70px" width="70px" alt="" srcset="">
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="<?= base_url('/img/plane.png'); ?>" height="60px" width="60px" alt="" srcset="">


      </div>
    </div>
    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">
        Rental Mobil
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center">
        Paket Wisata
      </div>
    </div>
    <div class="row" style="margin-top: 20px;">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <h2>Office:</h2>
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center">
        <h2>Hotline:</h2>
      </div>
    </div>
    <div class="row" style="margin-top: 10px; margin-bottom: 20px;">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <p class="p-hero"><a href="https://goo.gl/maps/vuHexjVkSg6RKQuf9" class="a-href">Jalan Wibawa Mukti II, Kp.Cakung, Gg.Mandor, Jatisari, Jatiasih, Kota Bekasi</a></p>
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center flex-column">
        <p><a href="https://api.whatsapp.com/send?phone=62811905053&text=Halo Admin Kamandaka Premium Car%0D%0ASaya Mau Infomasi Rental Mobil" class="a-href">+62811905053</a></p>
        <br>
        <p><a href="https://api.whatsapp.com/send?phone=628111895053&text=Halo Admin Kamandaka Premium Car%0D%0ASaya Mau Infomasi Rental Mobil" class="a-href">+628111895053</a></p>
        <br>
        <p><a href="https://api.whatsapp.com/send?phone=6285883260823&text=Halo Admin Kamandaka Premium Car%0D%0ASaya Mau Infomasi Rental Mobil" class="a-href">+6285883260823</a></p>
      </div>
    </div>
  </div>
</div>
<!-- End Hero Contact -->

<section class="section get-start">
  <div class="container">

    <h2 class="h2 section-title">Kenapa Harus Kami?</h2>
    <div class="row">
      <div class="col-md-4" style="margin-bottom: 10px;">
        <div class="get-start-card">

          <div class="card-icon icon-1">
            <!-- <ion-icon name="person-add-outline"></ion-icon> -->
            <img src="<?= base_url('/assets/images/png/1.png'); ?>" height="70px" width="70px" alt="" srcset="">
          </div>

          <h3 class="card-title">Proses Cepat</h3>

          <p class="card-text">
            Layanan booking rental mobil sangat mudah cepat dan harga murah.
          </p>

        </div>
      </div>
      <div class="col-md-4" style="margin-bottom: 10px;">
        <div class="get-start-card">

          <div class="card-icon icon-2">
            <!-- <ion-icon name="car-outline"></ion-icon> -->
            <img src="<?= base_url('/assets/images/png/2.png'); ?>" height="60px" width="60px" alt="" srcset="">
          </div>

          <h3 class="card-title">Berkualitas</h3>

          <p class="card-text">
            Mobil yang terawat dan berkualitas perjalanan dijamin nyaman.
          </p>

        </div>
      </div>
      <div class="col-md-4">
        <div class="get-start-card">

          <div class="card-icon icon-3">
            <!-- <ion-icon name="person-outline"></ion-icon> -->
            <img src="<?= base_url('/assets/images/png/3.png'); ?>" height="60px" width="60px" alt="" srcset="">
          </div>

          <h3 class="card-title">Terpercaya</h3>

          <p class="card-text">
            Kamandaka sudah di percaya bertahun-tahun di dunia rental mobil.​
          </p>

        </div>
      </div>
    </div>

  </div>
</section>

<section class="section featured-car" id="featured-car">
  <div class="container ">
    <h2 class="h2 section-title">Sekilas Mobil</h2>
    <div class="owl-carousel">

      <div class="blog-list has-scrollbar">
        <div class="blog-card">

          <figure class="card-banner">

            <a href="<?=base_url("/rental/{$daftarRental[0]['idMobil']}");?>">
              <img src="<?= base_url('/assets/images/car/' . $daftarRental[0]['img']); ?>" style="height: 300px; width: auto;" alt="<?= $daftarRental[0]['merk']; ?>" loading="lazy" class="w-100">
            </a>

            <a href="<?=base_url("/rental/{$daftarRental[0]['idMobil']}");?>" class="btn card-badge">Pilih</a>

          </figure>

          <div class="card-content">

            <h3 class="h3 card-title">
              <a href="#"><?= $daftarRental[0]['merk'] . " " . $daftarRental[0]['tahun']; ?></a>
            </h3>

            <div class="card-meta">

              <div class="publish-date">
                <ion-icon name="cash-outline"></ion-icon>
                <p><?= $daftarRental[0]['hargaOne']; ?> /All In</p>
              </div>

              <div class="comments">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                <data value="114">114</data>
              </div>

            </div>

          </div>

        </div>
      </div>
      <div class="blog-list has-scrollbar">
        <div class="blog-card">

          <figure class="card-banner">

            <a href="<?=base_url("/rental/{$daftarRental[3]['idMobil']}");?>">
              <img src="<?= base_url('/assets/images/car/' . $daftarRental[3]['img']); ?>" style="height: 300px; width: auto;" alt="<?= $daftarRental[3]['merk']; ?>" loading="lazy" class="w-100">
            </a>

            <a href="<?=base_url("/rental/{$daftarRental[3]['idMobil']}");?>" class="btn card-badge">Pilih</a>

          </figure>

          <div class="card-content">

            <h3 class="h3 card-title">
              <a href="#"><?= $daftarRental[3]['merk'] . " " . $daftarRental[3]['tahun']; ?></a>
            </h3>

            <div class="card-meta">

              <div class="publish-date">
                <ion-icon name="cash-outline"></ion-icon>
                <p><?= $daftarRental[3]['hargaOne']; ?> /All In</p>
              </div>

              <div class="comments">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                <data value="114">114</data>
              </div>

            </div>

          </div>

        </div>
      </div>
      <div class="blog-list has-scrollbar">
        <div class="blog-card">

          <figure class="card-banner">

            <a href="<?=base_url("/rental/{$daftarRental[4]['idMobil']}");?>">
              <img src="<?= base_url('/assets/images/car/' . $daftarRental[4]['img']); ?>" style="height: 270px; width: auto;" alt="<?= $daftarRental[4]['merk']; ?>" loading="lazy" class="w-100">
            </a>

            <a href="<?=base_url("/rental/{$daftarRental[4]['idMobil']}");?>" class="btn card-badge">Pilih</a>

          </figure>

          <div class="card-content">

            <h3 class="h3 card-title">
              <a href="#"><?= $daftarRental[4]['merk'] . " " . $daftarRental[4]['tahun']; ?></a>
            </h3>

            <div class="card-meta">

              <div class="publish-date">
                <ion-icon name="cash-outline"></ion-icon>
                <p><?= $daftarRental[4]['hargaOne']; ?> /All In</p>
              </div>

              <div class="comments">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                <data value="114">114</data>
              </div>

            </div>

          </div>

        </div>
      </div>
      <div class="blog-list has-scrollbar">
        <div class="blog-card">

          <figure class="card-banner">

            <a href="<?=base_url("/rental/{$daftarRental[6]['idMobil']}");?>">
              <img src="<?= base_url('/assets/images/car/' . $daftarRental[6]['img']); ?>" style="height: 270px; width: auto;" alt="<?= $daftarRental[6]['merk']; ?>" loading="lazy" class="w-100">
            </a>

            <a href="<?=base_url("/rental/{$daftarRental[6]['idMobil']}");?>" class="btn card-badge">Pilih</a>

          </figure>

          <div class="card-content">

            <h3 class="h3 card-title">
              <a href="#"><?= $daftarRental[6]['merk'] . " " . $daftarRental[6]['tahun']; ?></a>
            </h3>

            <div class="card-meta">

              <div class="publish-date">
                <ion-icon name="cash-outline"></ion-icon>
                <p><?= $daftarRental[6]['hargaOne']; ?> /All In</p>
              </div>

              <div class="comments">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                <data value="114">114</data>
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>
    <a href="<?=base_url('/rental');?>" class="btn">Lihat Lainnya</a>
  </div>
</section>
<!-- 
        - #FEATURED CAR
      -->
<div class="container" id="about-we">
  <h2 class="h2 section-title">Tentang Kami</h2>
  <div class="hero-contact">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <img src="<?= base_url('/assets/images/Logotype.webp'); ?>" height="200px" style="border-radius: 20px; margin-top:20px;" alt="Kamandaka Logo">
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h2 class="p-hero">Kamandaka Premium Car</h2>
        <p class="p-hero-up">Kamandaka Premium Car adalah Penyedia jasa yang bergerak di bidang pelayanan Sewa / Rental Mobil di Jabodetabek dan juga Melayani Antar Jemput ke Tempat Wisata di Jabodetabek dan sekitar. Kami Menyewakan Mobil Premium Seperti Alphard, Camry, BMW, CRV, Royal Crown, Fortuner, Pajero Sport,
          Namun tetap menyediakan mobil yang pada umumnya seperti Xenia, Avanza, Innova, Isuzu Elf, Hi-Ace, APV, Ertiga, dan jenis lain yang tidak masuk dalam list tetapi dapat Anda pesan.
          <br><br>
          Kamandaka Premium Car menjadi pilihan Persewaan Mobil di Jabodetabek, pilihan tepat bagi yang ingin Rental Mobil bagi warga kota Jabodetabek. Apa saja jenis perjalanan Anda apakah untuk bisnis atau wisata, hubungi kami untuk merasakan pengalaman pelayanan sewa mobil.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="container" id="contact-we">
  <h2 class="h2 section-title">Kontak Kami</h2>
  <div class="hero-contactwe">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <img src="<?= base_url('/assets/images/Logotype.webp'); ?>" height="200px" style="border-radius: 20px; margin-top:20px;" alt="Kamandaka Logo">
      </div>
    </div>
    <div class="row" style="margin-top: 20px;">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <h2>Office:</h2>
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center">
        <h2>Hotline:</h2>
      </div>
    </div>
    <div class="row" style=" margin-bottom: 20px;">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <p class="p-hero">
          <a href="https://goo.gl/maps/vuHexjVkSg6RKQuf9" class="a-href-contact">Jalan Wibawa Mukti II, Kp.Cakung, Gg.Mandor, Jatisari, Jatiasih, Kota Bekasi</a>

        </p>
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center flex-column">
        <p><a href="https://api.whatsapp.com/send?phone=62811905053&text=Halo Admin Kamandaka Premium Car%0D%0ASaya Mau Infomasi Rental Mobil" class="a-href-contact">+62811905053</a></p>
        <br>
        <p><a href="https://api.whatsapp.com/send?phone=628111895053&text=Halo Admin Kamandaka Premium Car%0D%0ASaya Mau Infomasi Rental Mobil" class="a-href-contact">+628111895053</a></p>
        <br>
        <p><a href="https://api.whatsapp.com/send?phone=6285883260823&text=Halo Admin Kamandaka Premium Car%0D%0ASaya Mau Infomasi Rental Mobil" class="a-href-contact">+6285883260823</a></p>
      </div>
    </div>
  </div>
</div>
</div>

<?=$this->endSection();?>