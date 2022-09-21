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
                            <label class="form-control-label">NIK</label>
                            <input class="form-control" type="text" value="32165498719">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nama</label>
                            <input class="form-control" type="text" value="Reza Putra Sancakala">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                                <option>Non Biner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Unit / Department</label>
                            <select class="form-control" id="unit_department">
                                <option>Logistik</option>
                                <option>Produksi</option>
                                <option>Keamanan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Masuk</label>
                            <input class="form-control" type="date" id="tanggal_masuk" value="2018-11-23">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tempat Lahir</label>
                            <input class="form-control" type="text" id="tempat_lahir" value="UNIKOM">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="tanggal_lahir" value="1918-11-23">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Jabatan</label>
                            <input class="form-control" type="text" id="jabatan" value="Manajer">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Agama</label>
                            <select class="form-control" id="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Buddha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Status Perkawinan</label>
                            <select class="form-control" id="status_kawin">
                                <option>Menikah</option>
                                <option>Belum Menikah</option>
                                <option>Cerai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Golongan Darah</label>
                            <select class="form-control" id="gol_dar">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nomor Telpon</label>
                            <input class="form-control" type="text" id="nomor_telp" value="+6285319105757">
                        </div>
                        <a href="{{ url('department') }}" class="btn bg-gradient-primary btn-sm mt-3 mb-4 float-end" type="button">+&nbsp; Tambah Karyawan</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection