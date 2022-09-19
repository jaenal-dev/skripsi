<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KodeRekening extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_rekening'
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
