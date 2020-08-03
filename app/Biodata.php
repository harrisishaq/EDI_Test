<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodatas';
    protected $fillable = ['users_id', 'posisi', 'nama', 'no_ktp', 'tempat_lahir', 'tanggal_lahir', 'jk', 'agama', 'golongan_darah', 'status', 'alamat_ktp', 'alamat_tinggal', 'email', 'no_telp', 'kontak_darurat', 'skill', 'ketersediaan', 'gaji'];
    protected $dates = ['updated_at', 'created_at'];
}
