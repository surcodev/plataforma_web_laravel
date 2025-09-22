<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Property;

class AdminTypeController extends Controller
{
    public function index()
    {
        $types = Type::orderBy('id','asc')->get();
        return view('admin.type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:types,name'],
        ]);

        $type = new Type();
        $type->name = $request->name;
        $type->save();

        return redirect()->route('admin_type_index')->with('success', 'Registro guardado');
    }

    public function edit($id)
    {
        $type = Type::where('id',$id)->first();
        return view('admin.type.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'unique:types,name,'.$id],
        ]);

        $type = Type::where('id',$id)->first();
        $type->name = $request->name;
        $type->save();

        return redirect()->route('admin_type_index')->with('success', 'Registro actualizado');
    }

    public function delete($id)
    {
        // If type has any property associated with it, you can not delete this type
        $property = Property::where('type_id',$id)->first();
        if($property) {
            return redirect()->route('admin_type_index')->with('error', 'El tipo no se puede eliminar porque está asociado a una propiedad');
        }

        $type = Type::where('id',$id)->first();
        $type->delete();
        
        return redirect()->route('admin_type_index')->with('success', 'Registro eliminado exitosamente');
    }
}
