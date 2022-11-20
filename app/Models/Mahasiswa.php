<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    /**
    * The primary key associated with the table.
    *
    * @var string
    * @var bool
    * @var array
    */
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $fillable=[
        'nim',
        'nama',
        'umur',
        'alamat',
        'kota',
        'kelas',
        'jurusan'
    ];
}
// Mahardika Surya Kusuma G.231.21.0141
