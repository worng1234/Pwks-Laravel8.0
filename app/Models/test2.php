<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test2 extends Model
{
    use HasFactory;
    protected $table = "test2";
    protected $fillable = [
        'address',
        'id_number2'
    ];
}
