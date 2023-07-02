<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
    ];
}
