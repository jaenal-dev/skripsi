<?php

namespace App\Models;

use App\Models\{Spt, SptUser};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sppd extends Model
{
    use HasFactory;

    // public $incrementing = false;
    // protected $keyType = 'uuid';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'nomor', 'spt_id', 'user_id', 'tempat_berangkat', 'instansi', 'mata_anggaran', 'keterangan'
    ];

    public function spt_user()
    {
        return $this->belongsTo(SptUser::class, 'id', 'spt_id');
    }

    public function spt()
    {
        return $this->belongsTo(Spt::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            // if ($model->getKey() == null) {
            //     $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            // }
            $model->id = Sppd::orderBy('id')->max('id') + 1;
            $model->nomor = str_pad($model->id, 3, '0', STR_PAD_LEFT) . '/' . 'SPPD'. '/' . 'PNS' . '/' . 'setwan' . '/' . '2022';
        });
    }
}
