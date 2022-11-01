@extends('layouts.main')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success fade show card" role="alert">
                <span class="alert-text"><strong>{{ $message }}</strong>
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button></span>
            </div>
            @endif
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Users</h5>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#Tambah" class="btn bg-gradient-warning btn-sm mb-0" type="button"><i class="fas fa-plus me-2 fa-center" ></i>Tambah User</a>
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
                                        Username
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; ?>
                               
                                @foreach ($users as $user)

                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $i++ }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->username }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->role }}</p>
                                    </td>
                                    <td class="text-center">
                                      <form action="{{ route('user-management.destroy',$user->id) }}" method="POST">
                                          <a class="btn btn-link text-dark px-2 mb-0" href=""><i class="fas fa-pencil-alt text-dark me-2" ></i>Edit</a>
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-link text-danger px-2 mb-0"><i class="far fa-trash-alt me-2"></i>Delete</button>
                                      </form>
                                  </td>
                                </tr>  
                                @endforeach
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

<!-- Modal Tambah -->
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Akun Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('user-management.store') }}" method="POST">
          @csrf

          <div class="row mt-3">
            <div class="col-md-3 mt-1">
              <label class="form-control-label">Username</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" name="username" id="username" type="text" placeholder="Masukkan Username" required>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 mt-1">
              <label class="form-control-label">Nama</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" name="nama" id="nama" type="text" placeholder="Masukkan Nama" required>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-3 mt-1">
              <label class="form-control-label">Email</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" name="email" id="email" type="text" placeholder="Masukkan Email" required>
            </div>
          </div>
          
          <div class="row mt-3">
            <div class="col-md-3 mt-1">
              <label class="form-label">Role</label>
            </div>
            <div class="col-md-9 ms-auto">
              <input class="form-control" type="number" min="0" id="durasi_kontrak" name="durasi_kontrak" value="{{ old('durasi_kontrak') }}" placeholder="Masukkan Role" required>
            </div>
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
<!-- End Modal Tambah-->
 
@endsection