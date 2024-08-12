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
                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                    <p class="text-center small">Sistem Penerimaan Siswa Abu Darda</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <input type="text" name="username" class="form-control" id="yourUsername" placeholder="Username" required>
                      <div class="invalid-feedback">Masukkan username</div>
                    </div>

                    <div class="col-12">
                      <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                      <div class="invalid-feedback">Masukkan password</div>
                    </div>

                    <div class="col-12 text-center">
                      <a href="#" class="forgot-password">Lupa password</a>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-login w-100" type="submit">Login</button>
                    </div>

                  </form>

                  <div class="register-link">
                    <p>Belum punya akun? <a href="{{ url('pendaftaran/registerPendaftaran') }}">Register</a></p>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section2>

  </main><!-- End #main -->

  </x-layoutLogin>