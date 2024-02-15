<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobCoach;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [  "id" , "user_role" ];


    public function jobCoach()
    {
        return $this->hasOne(JobCoach::class, 'id', 'user_id');
    }

    // public function company()
    // {
    //     return $this->hasOne(Company::class, 'id', 'company_id');
    // }
}
