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
                            <h5 class="mb-0">Data Kontrak Kerja</h5>
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
                                        no
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        karyawan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        tgl mulai
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        lama kontrak
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        tgl selesai
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        dokumen
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                              {{-- <?php 
                              $i = 1;
                             
                              foreach ($data as $kontrak) : ?>
                                <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{ $i++ }}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $kontrak->nama }}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $kontrak->status }}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $kontrak->tgl_mulai }}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $kontrak->durasi_kontrak }} Bulan</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $kontrak->tgl_selesai->toDateString() }}</p>
                                  </td>
                                  <td class="text-center">
                                      <a href="{{ url('/assets/file/Dijual-Kios.pdf') }}" target="_blank" data-bs-toggle="tooltip" data-bs-original-title="Lihat File" class="text-secondary"><i class="fas fa-file">
                                  </td>
                                  <td class="text-center">
                                    <a class="btn btn-link text-dark px-2 mb-0" href="#"><i class="fas fa-pencil-alt text-dark me-2" ></i>Edit</a>
                                    <a class="btn btn-link text-success px-2 mb-0" href="#"><i class="fas fa-folder text-success me-2" ></i>Lihat</a>
                                  </td>
                                </tr>   
                                <?php endforeach; ?> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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
              <label for="karyawan_id" class="form-control-label">Karyawan</label>
            </div>
            <div class="col-md-9 ms-auto">
              {{-- <select class="form-control" id="karyawan_id" name="karyawan_id">
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
              <label for="status" class="form-control-label">Status</label>
            </div>
            <div class="col-md-9 ms-auto">
              <select class="form-control" id="status" name="status">
                <option selected>Pilih Status Kerja</option>
                <option value="Tetap"
                  {{ old('status') == 'Tetap' ? 'selected=selected' : '' }}>Tetap
                </option>
                <option value="Kontrak"
                  {{ old('status') == 'Kontrak' ? 'selected=selected' : '' }}>Kontrak
                </option>
                <option value="Magang"
                  {{ old('status') == 'Magang' ? 'selected=selected' : '' }}>Magang
                </option>      
              </select>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 mt-2">
              <label class="form-control-label">Tanggal Mulai</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" type="date" id="tgl_mulai" name="tgl_mulai" value="{{ old('tgl_mulai') }}">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 mt-1">
              <label class="form-control-label">Lama Kontrak (Bulan)</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" type="number" id="durasi_kontrak" name="durasi_kontrak" value="{{ old('durasi_kontrak') }}">
            </div>
          </div>
          <div class="form-group mt-3">
            <label class="form-control-label">Upload File Kontrak</label>
            <input class="form-control" type="file" id="dokumen" name="dokumen">
          </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn bg-gradient-warning">Tambah</button>
          <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Batal</button>
        </form>
      </div>        
    </div>
  </div>
</div>
<!-- End Modal -->

@endsection