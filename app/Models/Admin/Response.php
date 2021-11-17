<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'complaint_id',
        'response',
        'user_id',
    ];

    public function user() {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
