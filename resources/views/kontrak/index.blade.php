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
                        <a href="{{ url('karyawan/tambah') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah Kontrak</a>
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
                                    <a class="btn btn-link text-warning px-2 mb-0" data-bs-toggle="modal" data-bs-target="#Upload1"><i class="fas fa-upload text-warning me-2" aria-hidden="true"></i>Upload</a>
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
<div class="modal fade" id="Upload1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Upload Dokumen Kontrak</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="" role="form text-left">
        <label>Pilih file</label>
        <div class="input-group mb-3">
        <input type="file" class="form-control" aria-label="File" aria-describedby="email-addon">
        </div>
        <label>* PDF. Max size 500 KB</label>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-primary">Upload</button>
        <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Batal</button>                                        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->

@endsection