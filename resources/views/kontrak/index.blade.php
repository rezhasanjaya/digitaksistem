@extends('layouts.user_type.auth')

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
                        <a data-bs-toggle="modal" data-bs-target="#Tambah" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah Kontrak</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                <tr>
                                  <td class="ps-4">
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
                                  <td class="text-center">
                                      <a href="../../public/assets/file/Dijual-Kios.pdf" target="_blank" data-bs-toggle="tooltip" data-bs-original-title="Lihat File" class="text-primary"><i class="fas fa-file">
                                  </td>
                                  <td class="text-center">
                                    <a class="btn btn-link text-dark px-2 mb-0" href="#"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    <a class="btn btn-link text-success px-2 mb-0" href="#"><i class="fas fa-folder text-success me-2" aria-hidden="true"></i>Lihat</a>
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

<!-- Modal -->
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Kontrak Kerja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          @csrf
          <div class="row mt-1">
            <div class="col-md-3 mt-2"><label for="nama" class="form-control-label">Karyawan</label></div>
            <div class="col-md-9 ms-auto">
              <select class="form-control" id="nama" name="nama">
                <option selected>Pilih Karyawan</option> 
                <option value="Laki - Laki">Dafa</option>
                <option value="Perempuan">Fahmi</option>        
              </select>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-3 mt-2">
              <label for="status_kerja" class="form-control-label">Status</label>
            </div>
            <div class="col-md-9 ms-auto">
              <select class="form-control" id="status_kerja" name="status_kerja">
                <option selected>Pilih Status Kerja</option> 
                <option value="Tetap">Tetap</option>
                <option value="Kontrak">Kontrak</option>        
                <option value="Magang">Magang</option>        
              </select>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 mt-2">
              <label class="form-control-label">Tanggal Mulai</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" type="date" id="tanggal_mulai" name="tanggal_mulai" value="2022-01-01">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 mt-1">
              <label class="form-control-label">Lama Kontrak (Bulan)</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" type="number" id="lama_kerja" name="lama_kerja" value="0">
            </div>
          </div>
          <div class="form-group mt-3">
            <label class="form-control-label">Upload File Kontrak</label>
            <input class="form-control" type="file" id="dok_kontrak" name="dok_kontrak">
          </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn bg-gradient-primary">Tambah</button>
          <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Batal</button>
        </form>
      </div>        
    </div>
  </div>
</div>
<!-- End Modal -->

@endsection