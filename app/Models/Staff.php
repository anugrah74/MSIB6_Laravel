<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nip', 'nama', 'alamat', 'email'];

}