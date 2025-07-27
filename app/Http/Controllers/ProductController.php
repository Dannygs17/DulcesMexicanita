<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Products\StoreRequest;
use App\Http\Requests\Products\UpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products = Product::get(); //Obtener todos los datos
        $products = Product::paginate(4);
        return view('admin/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$brands = Brand::get(); Para obtener todos los datos de un modelo o tabla.
        $brands = Brand::pluck('id', 'brand'); // Obtener Solo Datos Específicos de una tabla o modelo.
        //dd($brands); // Verificar que los datos que se extraen de una tabla son correctos.
        return view ('admin/products/create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //echo "Los datos se están pasando";
        //dd($request->all());
        // $request->validate([ //esta es una validación directa
        //     'name_product' => 'required|min:5|max:50' ,
        //     'brand_id' => 'required|integer',
        //     'stock' => 'required|integer',
        //     'unit_price' => 'required|decimal:2,4',
        //     'image'=>'required',
        // ]);
        
        // guardar imagen antes de generar el registro en la base de datos
        $data= $request->all(); // guardamos todos los datos en una variable para manipularlos

        /// Condición si el campo imagen tiene información
        if(isset($data["image"])){
            //Cambiar el nombre del archivo que se guardará
            $data["image"] = $filename = time().".".$data["image"]->extension();
            //// nombreirignalimg -> 25022025.jgp
            $request->image->move(public_path("imgs/products"), $filename);
        }

        Product::create($data); /// Agregar los datos modificados
        return to_route('products.index')-> with ('success', 'Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view ('admin/products/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::Pluck('id', 'brand');
        return view ('admin/products/edit', compact('product', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Product $product)
    {
        // $request->validate([ //esta es una validación directa
        //     'name_product' => 'required|min:5|max:50' ,
        //     'brand_id' => 'required|integer',
        //     'stock' => 'required|integer',
        //     'unit_price' => 'required|decimal:2,4',
        //     'image'=>'required',
        // ]);
       //dd($request->all());

       $data= $request->all(); 

       if(isset($data["image"])){
           $data["image"] = $filename = time().".".$data["image"]->extension();
           $request->image->move(public_path("imgs/products"), $filename);
       }


       $product->update($data); //Actualizar en la base de datos a través del modelo
       return to_route('products.index')-> with ('success', 'Producto Actualizado');
    }

    public function delete(Product $product){

        echo view ('admin/products/delete', compact('product'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index')-> with ('notsuccess', __('Deleted Product'));
    }
}
