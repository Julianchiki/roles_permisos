<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::get();
        $data=['title'=>'Productos','product'=>$product];
        return view('productos.index', $data);
    }

    public function getproductsadd()
    {
        return view('productos.add');
    }

    public function postproductsadd(Request $request)
    {
        $rules=[
            'name_product'=>'required',
            'date_expiry'=>'required',
            'company'=>'required',
        ];
        $message=[
            'name_product.required'=>'Debe digitar el nombre del producto.',

            'date_expiry.required'=>'Debe digitar la fecha de caducidad.',

            'company.required'=>'Debe digitar el nombre de la empresa.',
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails()):
            return back()->withInput()->withErrors($validator)->with('message_error','Se ha producido un error');
        else:
            $a=new Product;
            $a->name_product=$request->input('name_product');
            $a->date_expiry=$request->input('date_expiry');
            $a->company=$request->input('company');

            if($a->save()){
                return redirect(route('admin.products'))->with('message_confirm','Registro exitoso');
            }
        endif;
    }

    public function getproductsedit($id)
    {
        $a = Product::findOrFail($id);
        $data=['product'=>$a];
        return view('productos.edit', $data);
    }

    public function postproductsedit(Request $request, $id)
    {
        $a = Product::findOrFail($id);
        $a->name_product=$request->input('name_product');
        $a->date_expiry=$request->input('date_expiry');
        $a->company=$request->input('company');

        if($a->save()){
            $products=Product::get();
            $data=['title'=>'Productos','product'=>$products];
            return view('productos.index', $data);
        }
    }

    public function getproductsdelete($id)
    {
        $a = Product::findOrFail($id);
        $a->delete();
        $products=Product::get();
        $data=['title'=>'Productos','product'=>$products];
        return view('productos.index', $data);
    }
}
