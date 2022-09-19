<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pejabat extends Model
{
    use HasFactory;

    // public $incrementing = false;
    // protected $keyType = 'uuid';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'nip', 'pangkat', 'jabatan'
    ];

    // public static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($model) {
    //         if ($model->getKey() == null) {
    //             $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
    //         }
    //     });
    // }
}
