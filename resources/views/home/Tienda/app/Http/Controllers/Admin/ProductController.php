<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ProductoFormRequest;

use App\Producto;

use DB;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

   public function index()
   {
       $products = Producto::orderBy('id', 'desc')->paginate(5);
       //dd($products);
       return view('admin/producto/index', compact('products'));
   }

   public function create()
   {

         return view('admin/producto/create');
   }

   public function store(Request $request)
   {
     $products = new Producto;
      $products->nombre=$request->get('nombre');
        $products->slug=str_slug($request->get('nombre'));
      $products->descripcion=$request->get('descripcion');
        $products->extracto=$request->get('extracto');
          $products->caracteristicas=$request->get('caracteristicas');
            $products->precio=$request->get('precio');
              $products->imagen=$request->get('imagen');


      $products->save();
      return Redirect::to('admin/producto');
   }
   public function update(ProductoFormRequest $request,$id)
   {
     $products= Producto::findOrFail($id);
     $products->nombre=$request->get('nombre');
       $products->slug=str_slug($request->get('nombre'));
     $products->descripcion=$request->get('descripcion');
       $products->extracto=$request->get('extracto');
         $products->caracteristicas=$request->get('caracteristicas');
           $products->precio=$request->get('precio');
             $products->imagen=$request->get('imagen');
     $products->update();

       return Redirect::to('/admin/producto');

   }

   public function edit($id)
   {
     $products=Producto::findOrFail($id);
     return view("admin/producto/edit",["producto"=>$products]);
   }
   public function show(ProductoFormRequest $request,$id)
   {
     $products=Producto::find($id);
$products->delete();
return Redirect::to('admin/producto');
   }


   public function destroy(ProductoFormRequest $request,$id)
   {
     $post =Producto::find($id);

     $post->delete();

     return Redirect::to('admin/producto');
   }



}
