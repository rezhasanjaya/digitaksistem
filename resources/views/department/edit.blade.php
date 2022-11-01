@extends('layouts.main')

@section('content')
<div>
    <div class="row">
        <div class="col-12">
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

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Kode Unit</label>                            
                          </div>
                          <div class="col-md-8">
                            <input class="form-control @error('kode') is-invalid @enderror" type="text" id="kode" name="kode" placeholder="Masukkan Kode Unit" value="{{ $department->kode }}">
                            @error('kode')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Nama Department</label>                            
                          </div>
                          <div class="col-md-8">
                            <input class="form-control @error('department') is-invalid @enderror" type="text" id="department" name="department" placeholder="Masukkan Nama Department" value="{{ $department->department }}">
                            @error('department')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                            <button type="submit" class="btn bg-gradient-warning btn-sm mt-3 mb-4 ms-3 float-end">Ubah</button>
                            <a class="btn bg-gradient-secondary btn-sm mt-3 mb-4 float-end" href="{{ route('department.index') }}">Batal</a>
                          </div>
                          <div class="col-md-2"></div>
                        </div>                                                
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection