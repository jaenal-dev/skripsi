<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominal'
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

    // public function getRouteKeyName()
    // {
    //     return 'uuid';
    // }
}
