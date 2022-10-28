<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table ='review_barang';

    protected $primaryKey = 'id_review';

    protected $fillable = [
        'id_barang',
        'waktu_review',
        'review',
        'barang_terjual'
    ];
}
