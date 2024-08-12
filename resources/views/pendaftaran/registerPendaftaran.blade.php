<x-layoutLogin>
  <main>

    <section2 class="section2 register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3">

              <div class="card-body">

                <div class="d-flex justify-content-center py-4">
                  <a class="logo d-flex align-items-center w-auto">
                    <img src="{{asset('assets/img/logo.jpg')}}" alt="">
                  </a>
                </div><!-- End Logo -->

                <div class="text-center">
                  <h5 class="card-title text-center pb-0 fs-4">Register</h5>
                  <p class="text-center small">Sistem Penerimaan Siswa Abu Darda</p>
                </div>

                <form class="row g-3 needs-validation" novalidate>

                  <div class="col-12">
                    <input type="text" name="nama" class="form-control" id="yourName" placeholder="Nama Lengkap" required>
                    <div class="invalid-feedback">Masukkan nama lengkap Anda</div>
                  </div>

                  <div class="col-12">
                    <input type="text" name="no_hp" class="form-control" id="yourPhone" placeholder="Nomor HP" required>
                    <div class="invalid-feedback">Masukkan nomor HP</div>
                  </div>

                  <div class="col-12">
                    <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Email" required>
                    <div class="invalid-feedback">Masukkan email yang valid</div>
                  </div>

                  <div class="col-12">
                    <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                    <div class="invalid-feedback">Masukkan password</div>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-register w-100" type="submit">Register</button>
                  </div>

                </form>

                <div class="login-link">
                  <p>Sudah punya akun? <a href="{{ url('pendaftaran/loginPendaftaran') }}">Login</a></p>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section2>


  </main><!-- End #main -->
</x-layoutLogin>