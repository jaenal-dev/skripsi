<?php

namespace App\Models;

use DateTimeInterface;
use App\Models\KodeRekening;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Spt, SptUser, Anggaran};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nppd extends Model
{
    use HasFactory;

    protected $fillable = [
        'kepada', 'dari', 'prihal', 'spt_id', 'anggaran_id', 'status', 'keterangan'
    ];

    public function spt()
    {
        return $this->belongsTo(Spt::class, 'spt_id', 'id');
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
}
