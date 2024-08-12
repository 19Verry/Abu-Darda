<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Ma'had Abu Ad Darda'</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">SMP</a></li>
              <li><a href="#">SMA</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Bidang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Kurikulum</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">SMP</a></li>
                   <li><a href="#">SMA</a></li>
                </ul>
              </li>
              <li><a href="#">Tahfidz</a></li>
              <li><a href="#">Kesantrian</a></li>
              <li><a href="#">Akhlak</a></li>
              <li><a href="#">Bahasa</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/') }}?tab=#fasilitas">Fasilitas</a></li>
          <li><a href="{{ url('/') }}?tab=kegiatan">Kegiatan</a></li>
          <li><a href="#team">Prestasi</a></li>
          <li><a href="{{ url('pendaftaran/loginPendaftaran') }}">Penerimaan Santri Baru</a></li>
          <li><a href="{{ url('loginkantin') }}">Kantin</a></li>
          <li><a href="#" class="btn btn-outline-primary login px-3">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>