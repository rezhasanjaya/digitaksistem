@extends('layouts.main')

@section('content')
<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tambah Karyawan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <hr>
                    <form action="{{ route('karyawan.store') }}" method="POST">
                        @csrf
                        <div class="row mt-1">
                          <div class="col-md-2">
                              <label for="nik" class="form-label">NIK</label>                            
                          </div>
                          <div class="col-md-8 ">
                            <input class="form-control @error('nik') is-invalid @enderror" type="number" name="nik" id="nik" placeholder="Masukkan NIK" value="{{ old('nik') }}" required>
                            @error('nik')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-2"></div>
                        </div>                        

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label for="nama" class="form-label">Nama</label>                          
                          </div>
                          <div class="col-md-8">
                            <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}" required>
                            @error('nama')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin<label>                           
                          </div>
                          <div class="col-md-8">
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                              <option value="" selected disabled>Pilih Jenis Kelamin</option> 
                              <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>
                                Laki-Laki
                              </option>
                              <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                              </option>
                          </select>
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Unit / Department</label>                         
                          </div>
                          <div class="col-md-8">
                            <select class="form-select" id="unit" name="unit" required>
                              <option value="" selected disabled>Pilih Bagian Unit </option>
                              @foreach ($departments as $department)
                                @if(old('unit') == $department->kode)
                                  <option value="{{ $department->kode }}" selected>{{ $department->department }}</option> 
                                @else
                                  <option value="{{ $department->kode }}">{{ $department->department }}</option> 
                                @endif 
                              @endforeach                             
                          </select>
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Tanggal Masuk</label>                          
                          </div>
                          <div class="col-md-8">
                            <input class="form-control @error('tanggal_masuk') is-invalid @enderror" type="date" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" required>
                            @error('tanggal_masuk')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Alamat</label>                         
                          </div>
                          <div class="col-md-8">
                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat" required>{{ old('alamat') }}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Tempat Lahir</label>                           
                          </div>
                          <div class="col-md-8">
                            <input class="form-control @error('tempat_lahir') is-invalid @enderror" type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Tanggal Lahir</label>                          
                          </div>
                          <div class="col-md-8">
                            <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Jabatan</label>                           
                          </div>
                          <div class="col-md-8">
                            <select class="form-select" id="jabatan" name="jabatan" required>  
                              <option value="" disabled selected>Pilih Jabatan </option>
                              <option value="Manager" {{ old('jabatan') == 'Manager' ? 'selected' : '' }}>
                                Manager
                              </option>   
                              <option value="Leader" {{ old('jabatan') == 'Leader' ? 'selected' : '' }}>
                                Leader
                              </option>
                              <option value="Supervisor" {{ old('jabatan') == 'Supervisor' ? 'selected' : '' }}>
                                Supervisor
                              </option>
                              <option value="Operator" {{ old('jabatan') == 'Operator' ? 'selected' : '' }}>
                                Operator
                              </option>
                              <option value="Staff" {{ old('jabatan') == 'Staff' ? 'selected' : '' }}>
                                Staff
                              </option>    
                          </select>
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Agama</label>                          
                          </div>
                          <div class="col-md-8">
                            <select class="form-select" id="agama" name="agama" required>
                              <option value="" disabled selected>Pilih Agama</option> 
                              <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>
                                Islam
                              </option> 
                              <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>
                                Kristen
                              </option> 
                              <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>
                                Katolik
                              </option> 
                              <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>
                                Hindu
                              </option> 
                              <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>
                                Budha
                              </option> 
                              <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>
                                Konghucu
                              </option>   
                          </select>
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Status Perkawinan</label>                            
                          </div>
                          <div class="col-md-8">
                            <select class="form-select" id="status_kawin" name="status_kawin" required>
                              <option value="" disabled selected>Pilih Status Perkawinan </option> 
                              <option value="Belum Menikah" {{ old('status_kawin') == 'Belum Menikah' ? 'selected' : '' }}>
                                Belum Menikah
                              </option> 
                              <option value="Menikah" {{ old('status_kawin') == 'Menikah' ? 'selected' : '' }}>
                                Menikah
                              </option> 
                              <option value="Cerai" {{ old('status_kawin') == 'Cerai' ? 'selected' : '' }}>
                                Cerai
                              </option> 
                          </select>
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Golongan Darah</label>                           
                          </div>
                          <div class="col-md-8">
                            <select class="form-select" id="goldar" name="goldar" required>
                              <option value="" disabled selected>Pilih Golongan Darah </option> 
                              <option value="A+" {{ old('goldar') == 'A+' ? 'selected' : '' }}>
                                A+
                              </option> 
                              <option value="A-" {{ old('goldar') == 'A-' ? 'selected' : '' }}>
                                A-
                              </option> 
                              <option value="B+" {{ old('goldar') == 'B+' ? 'selected' : '' }}>
                                B+
                              </option> 
                              <option value="B-" {{ old('goldar') == 'B-' ? 'selected' : '' }}>
                                B-
                              </option> 
                              <option value="AB+" {{ old('goldar') == 'AB+' ? 'selected' : '' }}>
                                AB+
                              </option>
                              <option value="AB-" {{ old('goldar') == 'AB-' ? 'selected' : '' }}>
                                AB-
                              </option> 
                              <option value="O+" {{ old('goldar') == 'O+' ? 'selected' : '' }}>
                                O+
                              </option>
                              <option value="O-" {{ old('goldar') == 'O-' ? 'selected' : '' }}>
                                O-
                              </option>
                          </select>
                          </div>
                          <div class="col-md-2"></div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-2">
                            <label class="form-label">Nomor Telpon</label>                            
                          </div>
                          <div class="col-md-8">
                            <input class="form-control @error('telp') is-invalid @enderror" type="text" id="telp"  name="telp" placeholder="Masukkan Nomor Telpon" value="{{ old('telp') }}" required>
                            @error('telp')
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
                            <button type="submit" class="btn bg-gradient-warning btn-sm mt-3 mb-4 float-end">Tambah</button>
                          </div>
                          <div class="col-md-2"></div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  input:required:invalid {
    color: #adb5bd;
  }
  select:required:invalid {
    color: #adb5bd;
  }
  option[value=""][disabled] {
    display: none;
  }
  option {
    color: #000000;
  }
</style>
 
@endsection