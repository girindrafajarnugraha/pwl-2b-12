<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\mahasiswa1;

class Kelas extends Model
{
    use HasFactory;
    protected $table='kelas';

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
