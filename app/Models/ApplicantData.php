<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantData extends Model
{
    use HasFactory;
    protected $table = 'applicants_data';
    protected $fillable = [
        'name',
        'name_2',
        'name_3',
        'email',
        'no_hp',
        'nim',
        'nim_2',
        'nim_3',
        'asal_instansi',
        'tgl_masuk',
        'tgl_keluar',
        'filename',
        'status'
    ];
}
