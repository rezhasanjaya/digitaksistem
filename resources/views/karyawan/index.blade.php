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
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Karyawan</h5>
                        </div>
                        <a href="{{ url('karyawan/tambah') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah Karyawan</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        NIK
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jabatan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        TTL(Year/Month/Day)
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Unit / Department
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $i = 1;
                               
                                foreach ($karyawans as $karyawan) : ?>
                               
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $i++ }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->nik }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->nama }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->jabatan }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->tempat_lahir }}, {{ $karyawan->tanggal_lahir }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $karyawan->unit }}</p>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('karyawan.destroy',$karyawan->id) }}" method="POST">                                            
                                            <a class="btn btn-link text-dark px-2 mb-0" href="{{ route('karyawan.edit',$karyawan->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-link text-danger px-2 mb-0"><i class="far fa-trash-alt me-2"></i>Delete</button>
                                            <a class="btn btn-link text-success px-2 mb-0" href="{{ route('karyawan.show',$karyawan->id) }}"><i class="fas fa-folder text-success me-2" aria-hidden="true"></i>Lihat</a>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection