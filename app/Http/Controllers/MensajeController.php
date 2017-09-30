<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mensaje;
use DB;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
  public function index(){
    $mensajes = Mensaje::all();
    return view('home.foro', compact('mensajes'));

  }

}
