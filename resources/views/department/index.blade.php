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
            @if ($errors->any())
              <div class="alert alert-danger fade show card">
                <div class="row">
                  <div class="col-md-9">
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li><span class="alert-text"><strong>{{ $error }}</strong></li></span>
                      @endforeach
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                </div>
              </div>
            @endif
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Department</h5>                           
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#Tambah" class="btn bg-gradient-warning btn-sm mb-0" type="button"><i class="fas fa-plus me-2 fa-center" ></i>Tambah Unit</a>
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
                                        Kode
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Unit / Department
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($departments as $dpr)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $i++ }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $dpr->kode }}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $dpr->department }}</span>
                                    </td>
                                    <td class="text-center">                                     
                                        <form action="{{ route('department.destroy',$dpr->kode) }}" method="POST">
                                          <a class="btn btn-link text-dark px-2 mb-0" href="{{ route('department.edit',$dpr->kode) }}"><i class="fas fa-pencil-alt text-dark me-2" ></i>Edit</a>
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
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Unit Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('department.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label class="form-control-label">Kode Unit</label>
            <input class="form-control" name="kode" id="kode" type="text" placeholder="Masukkan Kode Unit" required>
          </div>
          <div class="form-group">
            <label class="form-control-label">Nama Department</label>
            <input class="form-control" name="department" id="department" type="text" placeholder="Masukkan Nama Department" required>
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

<!-- Modal Edit -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit Unit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('department.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="kode" class="form-control-label">Kode Unit</label>
            <input type="text" class="form-control" name="kode" id="kode" required>
          </div>
          <div class="form-group">
            <label class="form-control-label">Nama Department</label>
            <input class="form-control" name="department" id="department" type="text" required>
          </div>   
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn bg-gradient-warning">Edit</button>
          <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Batal</button>
        </form>
      </div>        
    </div>
  </div>
</div>
<!-- End Modal Edit-->

<!-- Modal Hapus -->
<div class="modal fade" id="Hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Hapus Unit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('department.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="kode" class="form-control-label">Kode Unit</label>
            <input type="text" class="form-control" name="kode" id="kode" required>
          </div>
          <div class="form-group">
            <label class="form-control-label">Nama Department</label>
            <input class="form-control" name="department" id="department" type="text" required>
          </div>   
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn bg-gradient-warning">Hapus</button>
          <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Batal</button>
        </form>
      </div>        
    </div>
  </div>
</div>
<!-- End Modal Hapus-->

@endsection