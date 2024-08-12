<x-layout>
  <div class="pagetitle">
    <h1>History Penarikan Saldo</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-10 mt-3">

        <div class="card">
          <div class="card-body position-relative">
            <h5 class="card-title"> </h5>
            <div class="row align-items-center">
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
                    <th scope="col" class="text-center">Tanggal Penarikan</th>
                    <th scope="col" class="text-center">Nominal Penarikan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>09/08/2024</td>
                    <td class="text-danger">Rp.50.000,00</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>19/08/2024</td>
                    <td class="text-danger">Rp.100.000,00</td>
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