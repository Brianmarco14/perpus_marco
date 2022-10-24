<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $guarded = ['id'];

    

    public function detail_peminjaman()
    {
        return $this->belongsTo(detail_peminjaman::class);
    }
    public function pengembalian()
    {
        return $this->belongsTo(pengembalian::class);
    }
    public function siswa()
    {
        return $this->hasMany(siswa::class);
    }
    public function petugas()
    {
        return $this->hasMany(petugas::class);
    }
}
