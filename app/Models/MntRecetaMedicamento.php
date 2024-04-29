<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MntRecetaMedicamento extends Model
{
    use HasFactory;

    protected $table = 'mnt_receta_medicamentos';

    public $timestamps = true;
    
    protected $guarded = [
        'id'
    ];

    public function receta()
    {
        return $this->belongsTo(MntRecetas::class, 'id_receta');
    }

    public function medicamento()
    {
        return $this->belongsTo(MntMedicamentos::class, 'id_medicamento');
    }

}
