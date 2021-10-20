<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class studentcoreModels extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "student_core";
    protected $fillable = [
        'student_id_card',
        'studentID',
        'student_major',
        'student_class',
        'student_room',
        'prename',
        'prename_eng',
        'name_eng',
        'name_cen_eng',
        'surname_eng',
        'birth_year',
        'birth_month',
        'birth_day',
        'nickname',
        'gender',
        'bloodgroup',
        'religion',
        'origin',
        'nationality',
        'language',
        'tel_s',
        'email',
        'fname',
        'name_cen',
        'surname',
        'rememberToken',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'student_id',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
