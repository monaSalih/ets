<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'training_info_id',
        'is_newsletter',
        'provider_id',
        'birthdate',
        'email_verification',
        'is_email_verified',
        'mobile',
        'mobile_verification',
        'is_mobile_verified',
        'nationality',
        'country',
        'passport_number',
        'national_id',
        'birthdate',
        'first_name',
        'second_name',
        'third_name',
        'last_name',
        'ar_first_name',
        'ar_second_name',
        'ar_third_name',
        'ar_last_name',
        'gender',
        'martial_status',
        'remember_token',
        'education',
        'educational_status',
        'field',
        'educational_background',
        'ar_writing',
        'ar_speaking',
        'en_writing',
        'en_speaking',
        'city',
        'address',
        'relative_mobile_1',
        'relative_relation_1',
        'fullName_1',
        'relative_mobile_2',
        'relative_relation_2',
        'fullName_2',
        'is_committed',
        'is_submitted',
        'status',
        'result_1',
        'academy_location',
        'id_img',
        'personal_img',
        'vaccination_img',

    ];

  

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
