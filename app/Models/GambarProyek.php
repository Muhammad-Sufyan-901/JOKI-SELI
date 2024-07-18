<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarProyek extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'gambar_proyek';
    protected $primaryKey = 'id_gambar_proyek';
    
    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'id_proyek');
    } 
}
