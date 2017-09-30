<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoriaFormRequest;
use DB;

class CategoriaController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }


    public function index()
    {
        $categories = Categoria::all();
        //dd($categories);

        return view('admin.categoria.index', compact('categories'));
    }

    public function show(Categoria $categoria)
    {
  return $categoria;
    }

    public function edit($id)
    {
    	$categoria=Categoria::findOrFail($id);
    	return view("admin/categoria/edit",["categoria"=>$categoria]);
    }


    public function update(CategoriaFormRequest $request, $id)

      {
       $categoria= Categoria::findOrFail($id);
       $categoria->nombre=$request->get('nombre');
       $categoria->descripcion=$request->get('descripcion');
       $categoria->color=$request->get('color');
       $categoria->update();

         return Redirect::to('admin/categoria');

      }

      public function destroy(CategoriaFormRequest $request,$id)
      {
      	$post =Categoria::find($id);

      	$post->delete();

      	return Redirect::to('admin/categoria')->with('message', 'Post deleted');
      }



    public function create()
    {
        return view('admin.categoria.create');
    }

    public function store(Request $request)
    {
      $categoria = new Categoria;
       $categoria->nombre=$request->get('nombre');
       $categoria->descripcion=$request->get('descripcion');
       $categoria->slug=str_slug($request->get('nombre'));
       $categoria->color=$request->get('color');
       $categoria->save();
       return Redirect::to('admin/categoria');
      }









}
