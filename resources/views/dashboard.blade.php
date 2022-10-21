@extends('layouts.main')

@section('content')

<div class="row">
  <div class="col-md-9">
    <div class="row mb-3">
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">KARYAWAN</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ DB::table('karyawan')->count() }}                  
                  </h5>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Data</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">UNIT / BAGIAN</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ DB::table('department')->count() }}
                  </h5>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Data</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">ST / SP</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ DB::table('sanksi')->count() }}
                  </h5>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Data</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <div class="d-flex flex-row justify-content-between">
            <div>
              <h5 class="mb-3">Pengingat Kontrak Bulan Ini</h5>
            </div>
          </div>
        </div>      
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">NO</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">NAMA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">STATUS</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">TGL MULAI KERJA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">LAMA KERJA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">TGL SELESAI KERJA</th>
                </tr>
              </thead>
              <tbody>
                <td class="text-center">
                  <p class="text-xs font-weight-bold mb-0">1</p>
                </td>
                <td class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Dafa Sanjaya Dinata</p>
                </td>
                <td class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Kontrak 1</p>
                </td>
                <td class="text-center">
                  <p class="text-xs font-weight-bold mb-0">21/09/2021</p>
                </td>
                <td class="text-center">
                  <p class="text-xs font-weight-bold mb-0">12 Bulan</p>
                </td>
                <td class="text-center">
                  <p class="text-xs font-weight-bold mb-0">21/09/2022</p>
                </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body p-3">
        <h5 class="mb-3">Statistik Unit / Department</h5>
        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">          
          <div class="chart">            
            <canvas id="chart-bars" class="chart-canvas" height="170px"></canvas>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <div class="col-md-3">
		<div class="card mb-4">
      <div class="card-body p-3">
        <h5 class="mb-3">Statistik Status Karyawan</h5>
        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">          
          <div class="chart">            
            <canvas id="pie-chart" class="chart-canvas" height="170px"></canvas>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>
@endsection

@push('dashboard')
  <script>
    window.onload = function() {
      var ctx = document.getElementById("chart-bars").getContext("2d");
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["FAT", "GA", "ENG", "PRO", "LOG", "PLA", "CS"],
          datasets: [{
            label: " Total",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [14, 12, 11, 13, 15, 17, 16],
            maxBarThickness: 10
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 15,
                font: {
                  size: 14,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: true
              },
              ticks: {
                display: true
              },
            },
          },
        },
      });    
      
      var ctx2 = document.getElementById("pie-chart").getContext("2d");
      new Chart(ctx2, {
        type: "pie",
        data: {
          labels: ["Tetap", "Kontrak"],
          datasets: [{
            label: " Total",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: [
              '#ff7100',
              '#008eff'
            ],
            data: [14, 12],
            maxBarThickness: 10,
            hoverOffset: 4
          }, ],
        },
        
      });
    }
  </script>
@endpush
