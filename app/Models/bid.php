<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bid extends Model
{
    use HasFactory;
    protected $table="bid";
    protected $fillable = [
        'Nama',
        'id_gambar',
        'Bid',
        'No_telphone',
        

    ];
}
