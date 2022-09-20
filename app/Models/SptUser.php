<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SptUser extends Model
{
    use HasFactory;

    protected $table = 'spt_users';

    public function user() {	
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
