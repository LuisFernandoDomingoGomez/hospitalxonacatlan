<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hojaindicacionesmedicas extends Model
{
use SoftDeletes;
 protected $primaryKey = 'Id_Imedicas';
   
   protected $fillable=['Id_Imedicas','hoja','Numero_Expediente','Nombre','Apellido_P','Apellido_M',
            'Edad','Genero',
            'T_A','Temp','Frec_C','Frec_R','Peso','Talla',
            'Fecha_Elaboracion1','Hora_Elaboracion1','Nota1'];
                         
  protected $date=['deleted_at']; 
}
