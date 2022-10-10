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
                            <h5 class="mb-0">Data Karyawan</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <hr>
                    <form action="{{ route('karyawan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nik" class="form-control-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik" value="{{ old('nik') }}">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-control-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option selected>Pilih Jenis Kelamin</option> 
                                <option value="Laki - Laki"
                                    {{ old('jenis_kelamin') == 'Laki - Laki' ? 'selected=selected' : '' }}>Laki - Laki
                                </option>
                                <option value="Perempuan"
                                    {{ old('jenis_kelamin') == 'Perempuan' ? 'selected=selected' : '' }}>Perempuan
                                </option>      
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Unit / Department</label>
                            <select class="form-control" id="unit" name="unit">
                                <option selected>Pilih Bagian Unit </option>
                                @foreach ($departments as $department)
                                @if(old ('unit')== $department->kode)
                                <option value="{{ $department->kode }}" selected>{{ $department->department }}</option> 
                                @else
                                <option value="{{ $department->kode }}">{{ $department->department }}</option> 
                                @endif 
                                @endforeach
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Masuk</label>
                            <input class="form-control" type="date" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ old('alamat') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tempat Lahir</label>
                            <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Jabatan</label>
                            <select class="form-control" id="jabatan" name="jabatan">  
                                <option selected>Pilih Jabatan </option>
                                <option value="Manager"
                                    {{ old('jabatan') == 'Manager' ? 'selected=selected' : '' }}>Manager
                                </option>   
                                <option value="Leader"
                                    {{ old('jabatan') == 'Leader' ? 'selected=selected' : '' }}>Leader
                                </option>
                                <option value="Supervisor"
                                    {{ old('jabatan') == 'Supervisor' ? 'selected=selected' : '' }}>Supervisor
                                </option>
                                <option value="Operator"
                                    {{ old('jabatan') == 'Operator' ? 'selected=selected' : '' }}>Operator
                                </option>
                                <option value="Staff"
                                    {{ old('jabatan') == 'Staff' ? 'selected=selected' : '' }}>Staff
                                </option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <option selected>Pilih Agama</option> 
                                <option value="Islam"
                                    {{ old('agama') == 'Islam' ? 'selected=selected' : '' }}>Islam
                                </option> 
                                <option value="Kristen"
                                    {{ old('agama') == 'Kristen' ? 'selected=selected' : '' }}>Kristen
                                </option> 
                                <option value="Katolik"
                                    {{ old('agama') == 'Katolik' ? 'selected=selected' : '' }}>Katolik
                                </option> 
                                <option value="Hindu"
                                    {{ old('agama') == 'Hindu' ? 'selected=selected' : '' }}>Hindu
                                </option> 
                                <option value="Budha"
                                    {{ old('agama') == 'Budha' ? 'selected=selected' : '' }}>Budha
                                </option> 
                                <option value="Konghucu"
                                    {{ old('agama') == 'Konghucu' ? 'selected=selected' : '' }}>Konghucu
                                </option>   
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Status Perkawinan</label>
                            <select class="form-control" id="status_kawin" name="status_kawin">
                                <option selected>Pilih Status Perkawinan </option> 
                                <option value="Belum Menikah"
                                    {{ old('status_kawin') == 'Belum Menikah' ? 'selected=selected' : '' }}>Belum Menikah
                                </option> 
                                <option value="Menikah"
                                    {{ old('status_kawin') == 'Menikah' ? 'selected=selected' : '' }}>Menikah
                                </option> 
                                <option value="Cerai"
                                    {{ old('status_kawin') == 'Cerai' ? 'selected=selected' : '' }}>Cerai
                                </option> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Golongan Darah</label>
                            <select class="form-control" id="goldar" name="goldar">
                                <option selected>Pilih Golongan Darah </option> 
                                <option value="A+"
                                    {{ old('goldar') == 'A+' ? 'selected=selected' : '' }}>A+
                                </option> 
                                <option value="A-"
                                     {{ old('goldar') == 'A-' ? 'selected=selected' : '' }}>A-
                                </option> 
                                <option value="B+"
                                    {{ old('goldar') == 'B+' ? 'selected=selected' : '' }}>B+
                                </option> 
                                <option value="B-"
                                     {{ old('goldar') == 'B-' ? 'selected=selected' : '' }}>B-
                                </option> 
                                <option value="AB+"
                                    {{ old('goldar') == 'AB+' ? 'selected=selected' : '' }}>AB+
                                </option>
                                <option value="AB-"
                                    {{ old('goldar') == 'AB-' ? 'selected=selected' : '' }}>AB-
                                </option> 
                                <option value="O+"
                                    {{ old('goldar') == 'O+' ? 'selected=selected' : '' }}>O+
                                </option>
                                <option value="O-"
                                    {{ old('goldar') == 'O-' ? 'selected=selected' : '' }}>O-
                                </option>  
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nomor Telpon</label>
                            <input class="form-control" type="text" id="telp"  name="telp" value="{{ old('telp') }}">
                        </div>
                        <button type="submit" class="btn bg-gradient-primary btn-sm mt-3 mb-4 float-end">+&nbsp; Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection