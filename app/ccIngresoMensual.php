<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ccIngresoMensual extends Model
{
    //
    public $table = 'cc_ingreso_mensual'
    public $fillable = ['fecha','monto','estado','cms_users_od'];


}
