<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Spt, SptUser, Anggaran};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nppd extends Model
{
    use HasFactory;

    protected $fillable = [
        'kepada', 'dari', 'prihal', 'spt_id', 'anggaran_id'
    ];

    public function spt()
    {
        return $this->belongsTo(Spt::class);
    }

    public function anggaran()
    {
        return $this->belongsTo(Anggaran::class);
    }

    public function spt_user()
    {
        return $this->belongsTo(SptUser::class, 'id', 'spt_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
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
