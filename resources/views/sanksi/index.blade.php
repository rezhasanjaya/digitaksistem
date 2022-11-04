@extends('layouts.main')

@section('content')
{{-- INI BUAT HALAMAN KONTAK KERJA --}}
<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Sanksi Karyawan</h5>
                        </div>                        
                        <a data-bs-toggle="modal" data-bs-target="#Tambah" class="btn bg-gradient-warning btn-sm mb-0" type="button"><i class="fas fa-plus me-2 fa-center" ></i>Tambah Sanksi</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    #
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal ke HRD
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Perihal
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Pelanggaran
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal selesai
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Berkas
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Action
                              </th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                            <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">{{ $i++ }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Barjo</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">02-03-2020</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Teguran</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">10-02-2020</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">02-06-2020</span>
                                </td>
                                <td class="text-center">
                                  <a href="{{ url('/assets/file/Dijual-Kios.pdf') }}" target="_blank" data-bs-toggle="tooltip" data-bs-original-title="Lihat File" class="text-secondary"><i class="fas fa-file">
                                </td>
                                <td class="text-center">
                                  <a class="btn btn-link text-dark px-2 mb-0" href=""><i class="fas fa-pencil-alt text-dark me-2" ></i>Edit</a>
                                  <a class="btn btn-link text-success px-2 mb-0" title="Detail Karyawan" href="{{ route('karyawan.show',1) }}"><i class="fas fa-folder text-success me-2" ></i>Lihat</a>
                                  </td>
                              </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  input:required:invalid {
    color: #adb5bd;
  }
  select:required:invalid {
    color: #adb5bd;
  }
  option[value=""][disabled] {
    display: none;
  }
  option {
    color: #000000;
  }
  .fa-center {
  line-height: inherit!important; vertical-align: middle;
  }
</style>

<!-- Modal -->
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Kontrak Kerja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('kontrak.store') }}" method="POST">
          @csrf

          <div class="row mt-1">
            <div class="col-md-3 mt-2">
              <label for="karyawan_id" class="form-label">Karyawan</label>
            </div>
            <div class="col-md-9 ms-auto">
              {{-- <select class="form-select" id="karyawan_id" name="karyawan_id" required>
                <option selected>Pilih Karyawan</option>
                @foreach ($karyawan as $kyw)
                @if(old ('karyawan_id')== $kyw->id)
                <option value="{{ $kyw->id }}" selected>{{ $kyw->nama }}</option> 
                @else
                <option value="{{ $kyw->id }}">{{ $kyw->nama }}</option> 
                @endif 
                @endforeach       
              </select> --}}
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 mt-2">
              <label class="form-label">Tanggal Ke HRD</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" type="date" id="tgl_ke_hrd" name="tgl_ke_hrd" value="{{ old('tgl_ke_hrd') }}" required>
            </div>
          </div>

          <script>
            function changeInput() {
              if ($('#perihal').val() == "Skorsing") {
                $("#masa_skorsing").attr("disabled", false);
              } else {
                $("#masa_skorsing").attr("disabled", true);
              }
            }
          </script>

          <div class="row mt-3">
            <div class="col-md-3 mt-2">
              <label for="perihal" class="form-label">Jenis Sangksi</label>
            </div>
            <div class="col-md-9 ms-auto">
              <select class="form-select" id="perihal" name="perihal" onchange="changeInput()" required>
                <option value="" selected disabled>Pilih Jenis Sanksi</option>
                <option value="Teguran">Teguran</option>
                <option value="Peringatan I">Peringatan I</option>
                <option value="Peringatan II">Peringatan II</option>
                <option value="Peringatan III">Peringatan III</option>
                <option value="Skorsing">Skorsing</option>
              </select>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 mt-2">
              <label class="form-label">Tanggal Pelanggaran</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" type="date" id="tgl_pelanggaran" name="tgl_pelanggaran" value="{{ old('tgl_pelanggaran') }}" required>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3">
              <label class="form-label">Deskripsi Pelanggaran</label>                            
            </div>
            <div class="col-md-9 ms-auto">
              <textarea class="form-control" maxlength="255" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" value="{{ old('durasi_kontrak') }}" required></textarea>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3">
              <label class="form-label">Masa Skorsing (Bulan)</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" type="number" min="1" id="masa_skorsing" name="masa_skorsing" value="{{ old('masa_skorsing') }}" disabled>
            </div>
          </div>

          <div class="modal-footer">            
          <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn bg-gradient-warning">Tambah</button>
        </form>
      </div>        
    </div>
  </div>
</div>
<!-- End Modal -->

@endsection