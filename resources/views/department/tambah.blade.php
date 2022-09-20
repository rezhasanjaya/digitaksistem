@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Department</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <hr>
                    <form action="" method="">
                        <div class="form-group">
                            <label class="form-control-label">Kode Unit</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nama</label>
                            <input class="form-control" type="text">
                        </div>
                        <a href="{{ url('department') }}" class="btn bg-gradient-primary btn-sm mt-3 mb-4 float-end" type="button">+&nbsp; Tambah Unit</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection