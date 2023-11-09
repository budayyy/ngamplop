<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amplop extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'user_id', 'alamat', 'tanggal', 'nominal', 'status', 'keterangan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
