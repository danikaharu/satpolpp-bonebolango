<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'address',
        'email',
        'phone',
        'description',
        'vision',
        'mission',
        'task',
        'function',
        'logo',
        'structure',
    ];
}
