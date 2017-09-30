<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{

  public function index()
  {
      $users = User::orderBy('name')->paginate(5);

      return view('admin.usuario.index', compact('users'));
  }
  public function destroy(User $id)
  {
    $post =User::find($id);

    $post->delete();

    return Redirect::to('admin/usuario');
  }

}
