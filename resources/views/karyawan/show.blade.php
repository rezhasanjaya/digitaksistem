@extends('layouts.main')

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
                    <div class="d-flex flex-row justify-content-between mb-2">
                        <div>
                            <h5 class="mb-0">Detail Karyawan</h5>
                        </div>                       
                    </div>
                    <form action="{{ route('karyawan.destroy',$karyawan->id) }}" method="POST">                                                
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah kamu yakin?')" class="badge bg-gradient-danger border-0 mb-0">Delete</button>
                        <a href="{{ route('karyawan.edit',$karyawan->id) }}" class="badge bg-gradient-warning border-0 mb-0" type="button">Edit</a>
                    </form>   
                </div>
                <div class="card-body pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-3">
                          <tbody>
                            <tr>
                            <th style="width:450px" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">NIK</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->nik }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Nama</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->nama }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Jenis kelamin</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Unit</th>
                            <td class="text-xs font-weight-bold">
                              {{ $karyawan->unit }} / @foreach ($departments as $department)
                              @if($karyawan->unit == $department->kode)
                                {{ $department->department }}
                              @endif
                            @endforeach
                            </td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Tanggal Masuk</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->tanggal_masuk }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Alamat</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->alamat }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Tempat Lahir</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->tempat_lahir }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Tanggal Lahir</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Jabatan</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->jabatan }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Agama</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->agama }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Status Kawin</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->status_kawin }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Golongan Darah</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->goldar }}</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">No Telepon</th>
                            <td class="text-xs font-weight-bold">{{ $karyawan->telp }}</td>
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