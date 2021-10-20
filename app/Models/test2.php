<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test2 extends Model
{
    protected $table = "test2";
    protected $fillable = [
        'name',
        'surname',
        'image',
        'file_pdf',
        'CheckBox',
        'id_number2'
    ];
}
