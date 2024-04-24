    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div
          class="container d-flex justify-content-center justify-content-md-between"
        >
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-phone d-flex align-items-center"
              ><span>+1 5589 55488 55</span></i
            >
            <i class="bi bi-clock d-flex align-items-center ms-4"
              ><span> Mon-Sat: 11AM - 23PM</span></i
            >
          </div>
  
          <div class="languages d-none d-md-flex align-items-center">
            <ul>
              <li>En</li>
              <li><a href="#">De</a></li>
            </ul>
          </div>
        </div>
      </div>
  
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-cente">
        <div
          class="container-fluid container-xl d-flex align-items-center justify-content-lg-between"
        >
          <h1 class="logo me-auto me-lg-0">
            <img src="frontend/assets/img/logo.png" alt="" />
            <a href="{{ route('frontend.index') }}">Han`s Restaurant</a>
          </h1>

<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a class="nav-link scrollto active" href="{{ route('frontend.index') }}">Home</a></li>
      <li><a class="nav-link scrollto" href="{{ route('frontend.abouts') }}">Abouts</a></li>
      <li><a class="nav-link scrollto" href="{{ route('frontend.menu') }}">Menu</a></li>
      <li><a class="nav-link scrollto" href="{{ route('frontend.special') }}">Specials</a></li>
      <li><a class="nav-link scrollto" href="{{ route('frontend.event') }}">Events</a></li>
      <li><a class="nav-link scrollto" href="{{ route('frontend.galery') }}">Gallery</a></li>
      <li><a class="nav-link scrollto" href="{{ route('frontend.galery') }}">testimonial</a></li>
      <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
      <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- .navbar -->
  <?php
  // Mendapatkan waktu saat ini
  $currentHour = date('H');
  
  // Menentukan apakah sudah lewat jam 22:00 (10 malam) atau belum
  if ($currentHour >= 00 || $currentHour < 10) {
      // Jika sudah lewat jam 22:00 atau sebelum jam 10:00 (10 pagi)
      // Membuat tombol tidak dapat di klik
      $buttonClass = 'book-a-table-btn scrollto d-none d-lg-flex nonaktif';
      $buttonHref = 'javascript:void(0)'; // Tidak mengarahkan ke halaman reservasi
      $buttonText = 'Toko sudah tutup, silakan kembali pada jam buka.';
  } else {
      // Jika belum lewat jam 22:00 dan setelah jam 10:00
      // Membuat tombol dapat di klik
      $buttonClass = 'book-a-table-btn scrollto d-none d-lg-flex';
      $buttonHref = route('layouts.reservasi'); // Mengarahkan ke halaman reservasi
      $buttonText = 'Reservation';
  }
  ?>
  <a id="tomboll" href="<?= $buttonHref ?>" class="<?= $buttonClass ?>"><?= $buttonText ?></a>
</div>
</header>
<!-- End Header -->