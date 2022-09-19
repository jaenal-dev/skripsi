<?php

namespace App\Models;

use App\Models\Sppd;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor', 'laporan', 'spt_id', 'user_id'
    ];

    public function spt()
    {
        return $this->belongsTo(Spt::class, 'spt_id', 'id');
    }
    public function sppd()
    {
        return $this->belongsTo(Sppd::class, 'sppd_id', 'id');
    }

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
