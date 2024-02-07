<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BorangPermohonan extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'borang_permohonans';

    protected $dates = [
        'dari',
        'hingga',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_pemohon',
        'email',
        'no_sambungan',
        'jawatan',
        'unit_bahagian',
        'nama_mesyuaarat',
        'nama_bilik_id',
        'pengerusi',
        'dari',
        'hingga',
        'bil_ahli',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function nama_bilik()
    {
        return $this->belongsTo(Bilik::class, 'nama_bilik_id');
    }

    public function getDariAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setDariAttribute($value)
    {
        $this->attributes['dari'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getHinggaAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setHinggaAttribute($value)
    {
        $this->attributes['hingga'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
