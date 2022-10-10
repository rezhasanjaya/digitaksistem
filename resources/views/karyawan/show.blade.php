@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success fade show card" role="alert">
                <span class="alert-text"><strong>{{ $message }}!</strong>
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button></span>
            </div>
             @endif
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div>
                            <h5 class="mb-0">Detail Karyawan</h5>
                        </div>
                        
                    </div>
                    <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">Hapus</a>
                    <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">Edit</a>
                </div>
                <div class="card-body pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-3">
                          <tbody>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">NIK</th>
                            <td class="text-xs font-weight-bold">312321321321</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama</th>
                            <td class="text-xs font-weight-bold">Dafa Sanjaya Dinata</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jenis kelamin</th>
                            <td class="text-xs font-weight-bold">Laki-laki</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Unit</th>
                            <td class="text-xs font-weight-bold">HRD</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tanggal Masuk</th>
                            <td class="text-xs font-weight-bold">2022-10-10</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Alamat</th>
                            <td class="text-xs font-weight-bold">Bandung</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tempat Lahir</th>
                            <td class="text-xs font-weight-bold">Bandung</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tanggal Lahir</th>
                            <td class="text-xs font-weight-bold">1995-10-10</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jabatan</th>
                            <td class="text-xs font-weight-bold">Manajer</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Agama</th>
                            <td class="text-xs font-weight-bold">Islam</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status Kawin</th>
                            <td class="text-xs font-weight-bold">Belum Menikah</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Golongan Darah</th>
                            <td class="text-xs font-weight-bold">B-</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No Telepon</th>
                            <td class="text-xs font-weight-bold">08123456789</td>
                            </tr>
                            <tr></tr>
                        </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection