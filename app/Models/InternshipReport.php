<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipReport extends Model
{
    use HasFactory;
    protected $table = 'intern_report';

    protected $fillable = ['user_id', 'filename', 'status', 'revision_notes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
