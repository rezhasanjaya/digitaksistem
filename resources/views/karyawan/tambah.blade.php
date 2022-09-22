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
            <div class="card mb-4 mx-4">
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
                    <form action="{{ route('karyawan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nik" class="form-control-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-control-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option selected>Pilih Jenis Kelamin</option> 
                                <option value="Laki - Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
        
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Unit / Department</label>
                            <select class="form-control" id="unit" name="unit">
                                @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->department }}</option> 
                                @endforeach
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Masuk</label>
                            <input class="form-control" type="date" id="tanggal_masuk" name="tanggal_masuk" value="2022-01-01">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tempat Lahir</label>
                            <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" value="2022-01-01">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Jabatan</label>
                            <select class="form-control" id="jabatan" name="jabatan">  
                                <option selected>Pilih Jabatan </option>       
                                <option value="Manager">Manager</option>
                                <option value="Leader">Leader</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Operator">Operator</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <option selected>Pilih Agama</option> 
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Status Perkawinan</label>
                            <select class="form-control" id="status_kawin" name="status_kawin">
                                <option selected>Pilih Status Perkawinan </option> 
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai">Cerai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Golongan Darah</label>
                            <select class="form-control" id="goldar" name="goldar">
                                <option selected>Pilih Golongan Darah </option> 
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                             
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nomor Telpon</label>
                            <input class="form-control" type="text" id="telp"  name="telp" >
                        </div>
                        <button type="submit" class="btn bg-gradient-primary btn-sm mt-3 mb-4 float-end">+&nbsp; Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection