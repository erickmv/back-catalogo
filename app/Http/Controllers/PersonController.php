<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    // Mostrar todas las personas
    public function index()
    {
        $people = Person::all();
        return response()->json($people);
    }

    // Agregar una nueva persona
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $person = Person::create($validatedData);

        return response()->json($person, 201);
    }

    // Actualizar una persona existente
    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return response()->json($person);
    }

    // Eliminar una persona existente
    public function destroy(Person $person)
    {
        $person->delete();
        return response()->json(null, 204);
    }
}
