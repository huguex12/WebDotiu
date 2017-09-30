<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categoria';
protected $primaryKey='id';
protected $fillable = ['nombre', 'slug', 'descripcion', 'color'];

public $timestamps = false;

  public function products()
  {
      return $this->hasMany('App\Product');
  }
}
