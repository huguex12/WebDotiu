<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table= 'producto';
  protected $primaryKey= 'id';
  public $timestamps=false;

  protected $fillable=['id','nombre','slug','descripcion','extracto','caracteristicas','precio','imagen'];
  protected $guarded=[];
}
