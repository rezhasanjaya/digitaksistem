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
                    <a href="{{ url('karyawan/create') }}" class="btn bg-gradient-primary btn-sm" type="button">Hapus</a>
                    <a href="{{ url('karyawan/create') }}" class="btn bg-gradient-primary btn-sm" type="button">Edit</a>
                </div>
                <div class="card-body pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-3">
                          <tbody>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <td class="text-xs font-weight-bold">dhk.asdp@indonesiaferry.co.id</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                            <td class="text-xs font-weight-bold">asdp_ferry</td>
                            </tr>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                            <td class="text-xs font-weight-bold"> ****** </td>
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