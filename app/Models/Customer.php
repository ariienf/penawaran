<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'alamat', 'telepon'];

    public function penawarans()
    {
        return $this->hasMany(Penawaran::class);
    }
}

