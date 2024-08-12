<x-layout>
  <div class="pagetitle">
    <h1>Dashboard Kantin</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

  <div class="row">
    <!-- Sales Card -->
    <div class="col-12 col-md-6">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Profile <span>| Santri</span></h5>
          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-person"></i>
            </div>
            <div class="ps-3">
              <h6 class="mb-1">Budiyono</h6>
              <h7>2135352523</h7>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Sales Card -->
   
    <!-- Sales Card -->
    <div class="col-12 col-md-6">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Saldo <span>| Santri</span></h5>
          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-wallet2"></i>
            </div>
            <div class="ps-3">
              <h6>Rp.550.000,00</h6>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Sales Card -->

    <!-- Reports -->
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title top-up">History Saldo Terbaru</h5>
          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Transaksi</th>
                <th scope="col">Saldo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center">1</th>
                <td class="text-success">Rp.100.000,00</td>
                <td>Rp.550.000,00</td>
              </tr>
              <tr>
                <th scope="row" class="text-center">2</th>
                <td class="text-danger">Rp.1.000,00</td>
                <td>Rp.450.000,00</td>
              </tr>
              <tr>
                <th scope="row" class="text-center">3</th>
                <td class="text-success">Rp.50.000,00</td>
                <td>Rp.460.000,00</td>
              </tr>
              <tr>
                <th scope="row" class="text-center">4</th>
                <td class="text-success">Rp.10.000,00</td>
                <td>Rp.410.000,00</td>
              </tr>
              <tr>
                <th scope="row" class="text-center">5</th>
                <td class="text-danger">Rp.60.000,00</td>
                <td>Rp.400.000,00</td>
              </tr>
              <tr>
                <th scope="row" class="text-center">6</th>
                <td class="text-danger">Rp.40.000,00</td>
                <td>Rp.460.000,00</td>
              </tr>
              <tr>
                <th scope="row" class="text-center">7</th>
                <td class="text-success">Rp.500.000,00</td>
                <td>Rp.500.000,00</td>
              </tr>

             
            </tbody>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>
    </div><!-- End Reports -->

     <!-- Reports -->
     <div class="col-12 col-md-6">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">Laporan <span>Bulanan</span></h5>

          <!-- Line Chart -->
          <div id="reportsChart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              new ApexCharts(document.querySelector("#reportsChart"), {
                series: [{
                  name: 'Top up',
                  data: [16, 32, 45, 32, 34, 52, 41]
                }, {
                  name: 'Tarik',
                  data: [11, 11, 32, 48, 9, 24, 43 ]
                }],
                chart: {
                  height: 350,
                  type: 'area',
                  toolbar: {
                    show: false
                  },
                },
                markers: {
                  size: 4
                },
                colors: ['#2eca6a','#ff771d'],
                fill: {
                  type: "gradient",
                  gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.3,
                    opacityTo: 0.4,
                    stops: [0, 90, 100]
                  }
                },
                dataLabels: {
                  enabled: false
                },
                stroke: {
                  curve: 'smooth',
                  width: 2
                },
                xaxis: {
                  type: 'datetime',
                  categories: [
                    "2024-01-01", "2024-02-01", "2024-03-01", "2024-04-01", 
                    "2024-05-01", "2024-06-01", "2024-07-01"
                  ]
                },
                tooltip: {
                  x: {
                    format: 'MMM yyyy'
                  },
                }
              }).render();
            });
          </script>
          <!-- End Line Chart -->

        </div>

      </div>
    </div><!-- End Reports -->
    
  </div><!-- End Row -->
  </section>
</x-layout>