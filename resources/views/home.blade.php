@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('partials.messages')
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <div class="btn-group">
                            <h2 class="m-0 text-dark">Dashboard</h2>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="btn-group">
                            <a class="btn bg-primary font-weight-bold mr-1 mb-1" href="{{ route('biodata.add') }}">
                                <i class="fas fa-plus mr-2"></i>
                                @lang(__(' Add Data'))
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive" id="users-table-wrapper">
                        <table class="table table-striped table-borderless fixed">
                            <thead>
                                <tr>
                                    <th style="text-align:center" colspan="2">Biodata</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data))
                                    @foreach ($data as $d)
                                    <tr>
                                        <td><b>Posisi yang dilamar</b>  </td>
                                        <td>{{ $d->posisi }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Nama</b></td>
                                        <td>{{ $d->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>No. KTP</b></td>
                                        <td>{{ $d->no_ktp }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tempat, Tanggal Lahir</b></td>
                                        <td>{{ $d->tempat_lahir }}, {{ $d->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Jenis Kelamin</b></td>
                                        <td>{{ $d->jk }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Agama</b></td>
                                        <td>{{ $d->agama }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Golongan Darah</b></td>
                                        <td>{{ $d->golongan_darah }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Status</b></td>
                                        <td>{{ $d->status }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Alamat KTP</b></td>
                                        <td>{{ $d->alamat_ktp }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Alamat Tinggal</b></td>
                                        <td>{{ $d->alamat_tinggal }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td>{{ $d->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>No. Telp</b></td>
                                        <td>{{ $d->no_telp }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Orang terdekat yang dapat dihubungi</b></td>
                                        <td>{{ $d->kontak_darurat }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Skill yang dimiliki</b></td>
                                        <td>{{ $d->skill }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Bersedia ditempatkan diseluruh kantor perusahaan</b></td>
                                        <td>{{ $d->ketersediaan }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Gaji yang diharapkan</b></td>
                                        <td>{{ $d->gaji }}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="2" style="text-align:center"><em>@lang('Belum ada data.')</em></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive" id="users-table-wrapper">
                        <table class="table table-border fixed">
                            <thead>
                                <tr>
                                    <th style="text-align:center" colspan="2">Pendidikan Terakhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td colspan="2" style="text-align:center"><em>@lang('Belum ada data.')</em></td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive" id="users-table-wrapper">
                        <table class="table table-border fixed">
                            <thead>
                                <tr>
                                    <th style="text-align:center" colspan="2">Riwayat Pelatihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td colspan="2" style="text-align:center"><em>@lang('Belum ada data.')</em></td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive" id="users-table-wrapper">
                        <table class="table table-border fixed">
                            <thead>
                                <tr>
                                    <th style="text-align:center" colspan="2">Riwayat Pekerjaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td colspan="2" style="text-align:center"><em>@lang('Belum ada data.')</em></td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
