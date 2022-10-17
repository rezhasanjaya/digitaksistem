@extends('layouts.main')

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
                            <h5 class="mb-0">Edit Data Department</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <hr>
                    <form action="{{ route('department.update',$department->kode) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode" class="form-control-label">Kode Unit</label>
                            <input type="text" class="form-control" value="{{ $department->kode }}" name="kode" id="kode">
                            @error('kode')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nama Department</label>
                            <input class="form-control" name="department" value="{{ $department->department }}" id="department" type="text">
                            @error('department')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn bg-gradient-warning btn-sm mt-3 mb-4 float-end">+&nbsp; Edit</button>
                    </form>
                    <a class="btn bg-gradient-secondary btn-sm mt-3 mb-4" href="{{ route('department.index') }}">Batal</a>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection