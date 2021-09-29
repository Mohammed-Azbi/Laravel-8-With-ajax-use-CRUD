<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PMS extends Model
{
    use HasFactory;
    protected $table = 'pms';

    protected $fillable = [
        'cumtomer_name','item','price',
    ];
}
