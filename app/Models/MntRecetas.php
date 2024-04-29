<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MntRecetas extends Model
{
    use HasFactory;

    
    protected $table = 'mnt_recetas';

    public $timestamps = true;
    
    protected $guarded = [
        'id'
    ];

    public function medicos()
    {
        return $this->belongsTo(MntMedicos::class, 'id_medico');
    }

    public function pacientes()
    {
        return $this->belongsTo(MntPacientes::class, 'id_paciente');
    }

    public function establecimientos()
    {
        return $this->belongsTo(CtlEstablecimiento::class, 'id_establecimiento');
    }
}
