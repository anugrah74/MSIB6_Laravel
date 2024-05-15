<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;
    //panggil table yang akan digunakan
    protected $table = 'jenis_produk';

    //pangggil kolom yang ada di tabel (sesuai dengan yang ada didalam tabel )
    protected $fillable = ['nama'];

    public function produk(){
        return $this->hasMany(Produk::class);
    }


}
