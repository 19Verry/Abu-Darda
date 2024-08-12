<x-layout>
  <div class="pagetitle">
    <h1>History Topup Saldo</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-10 mt-3">

        <div class="card">
            <div class="card-body position-relative">
              <div class="row mt-5">
                <div class="col-lg-2 print ms-auto text-end">
                  <!-- Tombol Print -->
                  <button class="btn btn-warning px-4 mb-2">
                    <i class="bi bi-printer"></i> Print
                  </button>
                </div>
              </div>
              <!-- Table with stripped rows -->
              <div class="table-responsive">
                <table class="table datatable text-center table-hover">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">No</th>
                      <th scope="col" class="text-center">Tanggal Topup</th>
                      <th scope="col" class="text-center">Nominal Topup</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>09/08/2024</td>
                      <td class="text-success">Rp.100.000,00</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>11/08/2024</td>
                      <td class="text-success">Rp.300.000,00</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>20/08/2024</td>
                      <td class="text-success">Rp.200.000,00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>