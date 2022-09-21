@extends('layouts.user_type.auth')

@section('content')

<div class="row">
  <div class="col-md-9">
    <div class="row mx-4 mb-4">
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">KARYAWAN</p>
                  <h5 class="font-weight-bolder mb-0">
                    13                  
                  </h5>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Data</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
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
                    11
                  </h5>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Data</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
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
                    11
                  </h5>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Data</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card mb-4 mx-4">
          <div class="card-header pb-0">
              <div class="d-flex flex-row justify-content-between">
                  <div>
                      <h5 class="mb-0">Pengingat Kontrak Bulan Ini</h5>
                  </div>
              </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                      <thead>
                          <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  NO
                              </th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                  NIK
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  NAMA
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  STATUS
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  TGL MULAI KERJA
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  LAMA KERJA
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  TGL SELESAI KERJA
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                                                  
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  </div>
  <div class="col-md-3">
		<div class="profile-container">
			<h5><span class="label label-inverse"> # Persentase </span></h5>
			<div class="panel-body">
				<div id="container-pie" class="height-sm"></div>
			</div>
		</div>
	</div>
</div>
@endsection

