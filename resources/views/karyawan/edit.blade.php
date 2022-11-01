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

                        <div class="row mt-1">
                          <div class="col-md-2">
                              <label for="nik" class="form-label">NIK</label>                            
                          </div>
                          <div class="col-md-8 ">
                            <input class="form-control @error('nik') is-invalid @enderror" type="number" min="0" name="nik" id="nik" placeholder="Masukkan NIK" value="{{ $karyawan->nik }}" required>
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
                            <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ $karyawan->nama }}" required>
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
                              <option value="Laki - laki" {{ $karyawan->jenis_kelamin == 'Laki - laki' ? 'selected' : '' }}>
                                Laki - laki
                              </option>
                              <option value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
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
                                @if($department->kode == $karyawan['unit'])
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
                            <input class="form-control @error('tanggal_masuk') is-invalid @enderror" type="date" id="tanggal_masuk" name="tanggal_masuk" value="{{ $karyawan->tanggal_masuk }}" required>
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
                            <textarea class="form-control @error('alamat') is-invalid @enderror" maxlength="255" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat" required>{{ $karyawan->alamat }}</textarea>
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
                            <input class="form-control @error('tempat_lahir') is-invalid @enderror" type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="{{ $karyawan->tempat_lahir }}">
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
                            <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}" required>
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
                              <option value="Manager" {{ $karyawan->jabatan == 'Manager' ? 'selected' : '' }}>
                                Manager
                              </option>   
                              <option value="Leader" {{ $karyawan->jabatan == 'Leader' ? 'selected' : '' }}>
                                Leader
                              </option>
                              <option value="Supervisor" {{ $karyawan->jabatan == 'Supervisor' ? 'selected' : '' }}>
                                Supervisor
                              </option>
                              <option value="Operator" {{ $karyawan->jabatan == 'Operator' ? 'selected' : '' }}>
                                Operator
                              </option>
                              <option value="Staff" {{ $karyawan->jabatan == 'Staff' ? 'selected' : '' }}>
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
                              <option value="Islam" {{ $karyawan->agama == 'Islam' ? 'selected' : '' }}>
                                Islam
                              </option> 
                              <option value="Kristen" {{ $karyawan->agama == 'Kristen' ? 'selected' : '' }}>
                                Kristen
                              </option> 
                              <option value="Katolik" {{ $karyawan->agama == 'Katolik' ? 'selected' : '' }}>
                                Katolik
                              </option> 
                              <option value="Hindu" {{ $karyawan->agama == 'Hindu' ? 'selected' : '' }}>
                                Hindu
                              </option> 
                              <option value="Budha" {{ $karyawan->agama == 'Budha' ? 'selected' : '' }}>
                                Budha
                              </option> 
                              <option value="Konghucu" {{ $karyawan->agama == 'Konghucu' ? 'selected' : '' }}>
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
                              <option value="Belum Menikah" {{ $karyawan->status_kawin == 'Belum Menikah' ? 'selected' : '' }}>
                                Belum Menikah
                              </option> 
                              <option value="Menikah" {{ $karyawan->status_kawin == 'Menikah' ? 'selected' : '' }}>
                                Menikah
                              </option> 
                              <option value="Cerai" {{ $karyawan->status_kawin == 'Cerai' ? 'selected' : '' }}>
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
                              <option value="A+" {{ $karyawan->goldar == 'A+' ? 'selected' : '' }}>
                                A+
                              </option> 
                              <option value="A-" {{ $karyawan->goldar == 'A-' ? 'selected' : '' }}>
                                A-
                              </option> 
                              <option value="B+" {{ $karyawan->goldar == 'B+' ? 'selected' : '' }}>
                                B+
                              </option> 
                              <option value="B-" {{ $karyawan->goldar == 'B-' ? 'selected' : '' }}>
                                B-
                              </option> 
                              <option value="AB+" {{ $karyawan->goldar == 'AB+' ? 'selected' : '' }}>
                                AB+
                              </option>
                              <option value="AB-" {{ $karyawan->goldar == 'AB-' ? 'selected' : '' }}>
                                AB-
                              </option> 
                              <option value="O+" {{ $karyawan->goldar == 'O+' ? 'selected' : '' }}>
                                O+
                              </option>
                              <option value="O-" {{ $karyawan->goldar == 'O-' ? 'selected' : '' }}>
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
                            <input class="form-control @error('telp') is-invalid @enderror" type="text" id="telp" name="telp" placeholder="Masukkan Nomor Telpon" value="{{ $karyawan->telp }}" required>
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
                            <button type="submit" class="btn bg-gradient-warning btn-sm mt-3 mb-4 ms-3 float-end">Ubah</button>
                            <a class="btn bg-gradient-secondary btn-sm mt-3 mb-4 float-end" href="{{ route('karyawan.index') }}">Batal</a>                            
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