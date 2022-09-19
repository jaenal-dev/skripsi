<?php

namespace App\Models;

use App\Models\{User, Pejabat, Locations, Transports, KodeRekening};
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spt extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor', 'tujuan', 'pejabat_id', 'kode_rekenings_id', 'tgl_pergi', 'tgl_pulang'
    ];

    public function spt_user()
    {
        return $this->belongsTo(SptUser::class, 'id', 'spt_id');
    }

    public function pejabat()
    {
        return $this->belongsTo(Pejabat::class);
    }

    public function rekening()
    {
        return $this->belongsTo(KodeRekening::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'spt_users', 'spt_id', 'users_id');
    }

    public function location()
    {
        return $this->belongsToMany(Locations::class, 'locations_spt', 'spt_id', 'locations_id');
    }

    public function transport()
    {
        return $this->belongsToMany(Transports::class, 'spt_transports', 'spt_id', 'transports_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            // if ($model->getKey() == null) {
            //     $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            // }
            $model->id = Spt::orderBy('id')->max('id') + 1;
            // (int)$nomor = 0;
            // $nomor++;
            $model->nomor = str_pad($model->id, 3, '0', STR_PAD_LEFT) . '/' . '622.96'. '/' . 'um' . '/' . '2891 - setwan' . '/' . '2022';
        });
    }
}
