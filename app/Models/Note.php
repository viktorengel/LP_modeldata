<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    /* protected $table = "Notas"; */
    protected $table = 'notes'; //Vinculación con el sistema de presistencia (DB)

    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done'
    ]; //Son los campos podran ser cumpimentados o editados
    
    protected $guarded = [

    ];//Son los campos que no podran ser cumpimentados o editados

    protected $casts = [
        'deadline' => 'date'
    ]; //Cuando queremos que un campo debe ser de un tipo especifico, si no llega en el dato esperado el sistema tratará de hacer casting

    protected $hidden = ['password'];//Ocultar datos -> Evitar entregar datos que no deben ser entregados
}
