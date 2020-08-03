@extends('layouts.app')

@section('content')
<div class="container">
    @if ($edit)
        {!! Form::open(['url' => 'biodata/'.$data->id.'/edit', 'method' => 'PUT', 'id' => 'form']) !!}
    @else
        {!! Form::open(['url' => 'biodata/create', 'id' => 'form']) !!}
    @endif
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <div class="btn-group">
                            <h4 class="m-0 text-dark">Biodata</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="posisi" class="col-md-4 col-form-label text-md-right">{{ __('Posisi') }}</label>

                        <div class="col-md-6">
                            <input id="posisi" type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ $edit ? $data->posisi : old('posisi') }}" placeholder="Posisi" required autocomplete="off" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                        <div class="col-md-6">
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $edit ? $data->nama : old('nama') }}" placeholder="Nama" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_ktp" class="col-md-4 col-form-label text-md-right">{{ __('No KTP') }}</label>

                        <div class="col-md-6">
                            <input id="no_ktp" type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{ $edit ? $data->no_ktp : old('no_ktp') }}" placeholder="No KTP" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_ktp" class="col-md-4 col-form-label text-md-right">{{ __('Tempat, Tanggal Lahir') }}</label>

                        <div class="col-md-3">
                            <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ $edit ? $data->tempat_lahir : old('tempat_lahir') }}" placeholder="Tempat Lahir" required autocomplete="off">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control input-solid" name="tanggal_lahir" id="tanggal_lahir" value="{{ $edit ? $data->tanggal_lahir : old('tanggal_lahir') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jk" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                        <div class="col-md-3">
                            <select class="form-control input-solid" id="jk" name="jk" required>
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="laki-laki" {{ $edit ? ($data->jk == 'laki-laki' ? 'selected' : '') : '' }}>Laki - Laki</option>
                                <option value="perempuan" {{ $edit ? ($data->jk == 'perempuan' ? 'selected' : '') : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="agama" class="col-md-4 col-form-label text-md-right">{{ __('Agama') }}</label>

                        <div class="col-md-6">
                            <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ $edit ? $data->agama : old('agama') }}" placeholder="Agama" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="golongan_darah" class="col-md-4 col-form-label text-md-right">{{ __('Golongan Darah') }}</label>

                        <div class="col-md-6">
                            <input id="golongan_darah" type="text" class="form-control @error('golongan_darah') is-invalid @enderror" name="golongan_darah" value="{{ $edit ? $data->golongan_darah : old('golongan_darah') }}" placeholder="Golongan Darah" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                        <div class="col-md-6">
                            <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ $edit ? $data->status : old('status') }}" placeholder="Status" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat_ktp" class="col-md-4 col-form-label text-md-right">{{ __('Alamat KTP') }}</label>

                        <div class="col-md-6">
                            <textarea name="alamat_ktp" id="alamat_ktp" class="form-control input-solid" placeholder="Alamat KTP" required>{{ $edit ? $data->alamat_ktp : old('alamat_ktp') }}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat_tinggal" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Tinggal') }}</label>

                        <div class="col-md-6">
                            <textarea name="alamat_tinggal" id="alamat_tinggal" class="form-control input-solid" placeholder="Alamat Tinggal" required>{{ $edit ? $data->alamat_tinggal : old('alamat_tinggal') }}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $edit ? $data->email : old('email') }}" placeholder="Email" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('No Telp') }}</label>

                        <div class="col-md-6">
                            <input id="no_telp" type="no_telp" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $edit ? $data->no_telp : old('no_telp') }}" placeholder="No Telp" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kontak_darurat" class="col-md-4 col-form-label text-md-right">{{ __('Kontak Darurat') }}</label>

                        <div class="col-md-6">
                            <input id="kontak_darurat" type="kontak_darurat" class="form-control @error('kontak_darurat') is-invalid @enderror" name="kontak_darurat" value="{{ $edit ? $data->kontak_darurat : old('kontak_darurat') }}" placeholder="Kontak Darurat" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="skill" class="col-md-4 col-form-label text-md-right">{{ __('Skill') }}</label>

                        <div class="col-md-6">
                            <textarea name="skill" id="skill" class="form-control input-solid" placeholder="Skill yang dimiliki" required>{{ $edit ? $data->skill : old('skill') }}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ketersediaan" class="col-md-4 col-form-label text-md-right">{{ __('Bersedia ditempatkan diseluruh kantor perusahaan') }}</label>

                        <div class="col-md-3">
                            <select class="form-control input-solid" id="ketersediaan" name="ketersediaan" required>
                                <option value="">-- Ketersediaan --</option>
                                <option value="ya" {{ $edit ? ($data->ketersediaan == 'ya' ? 'selected' : '') : '' }}>Ya</option>
                                <option value="tidak" {{ $edit ? ($data->ketersediaan == 'tidak' ? 'selected' : '') : '' }}>Tidak</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gaji" class="col-md-4 col-form-label text-md-right">{{ __('Gaji yang diharapkan') }}</label>

                        <div class="col-md-6">
                            <input id="gaji" type="gaji" class="form-control @error('gaji') is-invalid @enderror" name="gaji" value="{{ $edit ? $data->gaji : old('gaji') }}" placeholder="Gaji" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary float-left" id="{{ $edit ? 'btnUpdate' : 'btnAdd' }}">
                                {{ __($edit ? 'Update' : 'Create') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
