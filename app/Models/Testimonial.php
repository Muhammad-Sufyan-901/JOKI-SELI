<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'testimonial';
    protected $primaryKey = 'id_testimoni';

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'id_proyek');
    }
}
