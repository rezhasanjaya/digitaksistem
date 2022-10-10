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
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Edit Data Karyawan</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <hr>
    
                    <form action="{{ route('karyawan.update',$karyawan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nik" class="form-control-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik"  value="{{ $karyawan->nik }}">
                            @error('nik')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-control-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama"  value="{{ $karyawan->nama }}">
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option selected>Pilih Jenis Kelamin</option> 
                                <option value="Laki - Laki" {{ $karyawan->jenis_kelamin == 'Laki - Laki'? 'selected': ''}} >Laki-Laki</option>
                                <option value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan'? 'selected': ''}} >Perempuan</option>
        
                            </select>
                        </div>

           

                        <div class="form-group">
                            <label class="form-control-label">Unit / Department</label>
                            <select class="form-control" id="unit" name="unit">
                                <option selected>Pilih Bagian Unit </option>
                                @foreach ($departments as $department)
                                <?php if ($department->kode == $karyawan['unit']) : ?>
                                <option value="{{ $department->kode }}" selected>{{ $department->department }}</option> 
                                <?php else : ?>
                                <option value="{{ $department->kode }}">{{ $department->department }}</option> 
                                <?php endif; ?>
                                @endforeach
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Masuk</label>
                            <input class="form-control" type="date" id="tanggal_masuk" name="tanggal_masuk"  value="{{ $karyawan->tanggal_masuk }}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $karyawan->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tempat Lahir</label>
                            <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir"  value="{{ $karyawan->tempat_lahir }}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir"  value="{{ $karyawan->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Jabatan</label>
                            <select class="form-control" id="jabatan" name="jabatan">  
                                <option selected>Pilih Jabatan </option>       
                                <option value="Manager" {{ $karyawan->jabatan == 'Manager'? 'selected': ''}}>Manager</option>
                                <option value="Leader" {{ $karyawan->jabatan == 'Leader'? 'selected': ''}}>Leader</option>
                                <option value="Supervisor" {{ $karyawan->jabatan == 'Supervisor'? 'selected': ''}}>Supervisor</option>
                                <option value="Operator" {{ $karyawan->jabatan == 'Operator'? 'selected': ''}}>Operator</option>
                                <option value="Staff" {{ $karyawan->jabatan == 'Staff'? 'selected': ''}}>Staff</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <option selected>Pilih Agama</option>
                                <option value="Islam" {{ $karyawan->agama == 'Islam'? 'selected': ''}}>Islam</option>
                                <option value="Kristen" {{ $karyawan->agama == 'Kristen'? 'selected': ''}}>Kristen</option>
                                <option value="Katolik" {{ $karyawan->agama == 'Katolik'? 'selected': ''}}>Katolik</option>
                                <option value="Hindu" {{ $karyawan->agama == 'Hindu'? 'selected': ''}}>Hindu</option>
                                <option value="Budha" {{ $karyawan->agama == 'Budha'? 'selected': ''}}>Budha</option>
                                <option value="Konghucu" {{ $karyawan->agama == 'Konghucu'? 'selected': ''}}>Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Status Perkawinan</label>
                            <select class="form-control" id="status_kawin" name="status_kawin">
                                <option selected>Pilih Status Perkawinan </option> 
                                <option value="Belum Menikah" {{ $karyawan->status_kawin == 'Belum Menikah'? 'selected': ''}}>Belum Menikah</option>
                                <option value="Menikah" {{ $karyawan->status_kawin == 'Menikah'? 'selected': ''}}>Menikah</option>
                                <option value="Cerai" {{ $karyawan->status_kawin == 'Cerai'? 'selected': ''}}>Cerai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Golongan Darah</label>
                            <select class="form-control" id="goldar" name="goldar">
                                <option selected>Pilih Golongan Darah </option> 
                                <option value="A+" {{ $karyawan->goldar == 'A+'? 'selected': ''}}>A+</option>
                                <option value="A-" {{ $karyawan->goldar == 'A-'? 'selected': ''}}>A-</option>
                                <option value="B+" {{ $karyawan->goldar == 'B+'? 'selected': ''}}>B+</option>
                                <option value="B-" {{ $karyawan->goldar == 'B-'? 'selected': ''}}>B-</option>
                                <option value="AB+" {{ $karyawan->goldar == 'AB+'? 'selected': ''}}>AB+</option>
                                <option value="AB-" {{ $karyawan->goldar == 'AB-'? 'selected': ''}}>AB-</option>
                                <option value="O+" {{ $karyawan->goldar == 'O+'? 'selected': ''}}>O+</option>
                                <option value="O-" {{ $karyawan->goldar == 'O-'? 'selected': ''}}>O-</option>
                             
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nomor Telpon</label>
                            <input class="form-control" type="text" id="telp"  name="telp"  value="{{ $karyawan->telp }}" >
                        </div>
                        <button type="submit" class="btn bg-gradient-warning btn-sm mt-3 mb-4 float-end"> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection