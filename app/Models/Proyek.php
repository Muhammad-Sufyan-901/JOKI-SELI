<?php

namespace App\Models;

use App\Models\Testimonial;
use App\Models\GambarProyek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Proyek extends Model
{
    use HasFactory;
 
    public $timestamps = false;
    protected $table = 'proyek';
    protected $primaryKey = 'id_proyek';
  
    protected $fillable = [
        'nama_proyek',
        'lokasi_proyek',
        'tahun_proyek',
        'size_proyek',
        'budget_proyek',
        'deskripsi_proyek',
        'foto_utama_proyek',
    ];

    public function gambarProyek(): HasMany
    {
        return $this->hasMany(GambarProyek::class, 'id_proyek','id_proyek');
    }

    public function testimoni(): HasOne
    {
        return $this->hasOne(Testimonial::class, 'id_proyek','id_proyek');
    }
}
