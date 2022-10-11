@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                       
                        <div>
                            <h5 class="mb-0">Data Department</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <hr>
                    <form action="{{ route('department.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kode" class="form-control-label">Kode Unit</label>
                            <input type="text" class="form-control" name="kode" id="kode">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nama Department</label>
                            <input class="form-control" name="department" id="department" type="text">
                        </div>
                        <button type="submit" class="btn bg-gradient-warning btn-sm mt-3 mb-4 float-end">+&nbsp; Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection