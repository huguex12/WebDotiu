<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
  protected $table = 'foro';
protected $fillable = ['idMensaje', 'idUsuario', 'titulo', 'mensaje', 'fecha'];
protected $primaryKey = 'idMensaje';
protected $foreignKey= 'idUsuario';
}
