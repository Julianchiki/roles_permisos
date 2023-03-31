<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use Illuminate\Http\Request;
use Validator;

class ApprenticeController extends Controller
{
    public function index()
    {
        $cbums=Apprentice::get();
        $data=['title'=>'Usuarios','users'=>$cbums];
        return view('usuarios.index', $data);
    }

    public function getusersadd()
    {
        return view('usuarios.add');
    }

    public function postusersadd(Request $request)
    {
        $rules=[
            'name'=>'required',
            'document_number'=>'required',
            'email'=>'required',
            'telephone'=>'required'
        ];
        $message=[
            'name.required'=>'Debe digitar el nombre.',
            'name.min'=>'El nombre debe tener almenos 7 caracteres.',
            'name.alpha'=>'El nombre debe tener solo letras.',

            'document_number.required'=>'Debe digitar el numero de documento.',
            'document_number.integer'=>'Debe digitar solo numeros, sin simbolos ni letras.',
            'document_number.min'=>'El numero de documento debe tener minimo 6 digitos.',
            'document_number.max'=>'El numero de documento debe tener máximo 10 digitos.',

            'email.required'=>'Debe digitar el correo electrónico.',
            'email.email'=>'Debe tener la estructura de un correo, Ej: nombre@correo.com.',

            'telephone.required'=>'Debe digitar el numero de teléfono o celular.',
            'telephone.integer'=>'Debe digitar solo numero, sin simbolos ni letras.',
            'telephone.size'=>'El numero de celular debe tener 10 digitos.'
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails()):
            return back()->withInput()->withErrors($validator)->with('message_error','Se ha producido un error');
        else:
            $a=new Apprentice;
            $a->name=$request->input('name');
            $a->document_number=$request->input('document_number');
            $a->email=$request->input('email');
            $a->telephone=$request->input('telephone');

            if($a->save()){
                return redirect(route('users'))->with('message_confirm','Registro exitoso');
            }
        endif;
    }

    public function getusersedit($id)
    {
        $a = Apprentice::findOrFail($id);
        $data=['users'=>$a];
        return view('usuarios.edit', $data);
    }

    public function postusersedit(Request $request, $id)
    {
        $a = Apprentice::findOrFail($id);
        $a->name=$request->input('name');
        $a->document_number=$request->input('document_number');
        $a->email=$request->input('email');
        $a->telephone=$request->input('telephone');

        if($a->save()){
            $cbums=Apprentice::get();
            $data=['title'=>'Usuarios','users'=>$cbums];
            return view('usuarios.index', $data);
        }
    }

    public function getusersdelete($id)
    {
        $a = Apprentice::findOrFail($id);
        $a->delete();
        $cbums=Apprentice::get();
        $data=['title'=>'Usuarios','users'=>$cbums];
        return view('usuarios.index', $data);
    }
}
