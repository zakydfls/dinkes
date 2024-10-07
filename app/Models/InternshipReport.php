<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipReport extends Model
{
    use HasFactory;
    protected $table = 'intern_report';

    protected $fillable = ['user_id', 'filename', 'status', 'isi_link', 'file_bukti'];
    protected $casts = [
        'isi_link' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
