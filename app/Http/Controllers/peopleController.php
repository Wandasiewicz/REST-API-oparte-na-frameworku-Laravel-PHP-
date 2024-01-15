<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people;

class peopleController extends Controller
{
        public function index()
        {
            return people::all();
        }
    
        public function store(request $request)
        {
            // CREATE a new record
            $validatedData = $request->validate([
                'name' => 'required|string',
                'surname' => 'required|string',
                'phonenumber' => 'required|string',
                'street' => 'required|string',
                'city' => 'required|string',
            ]);
    
            $person = People::create($validatedData);
    
            return response()->json($person, 201);
        }
    
        public function show($id)
        {
            $people = People::find($id);
            return response()->json($people);
        }
    
        public function update(request $request, $id)
        {
            $people = People::find($id);
            $people->update($request->all());
            return response()->json($people, 200);
        }
    
        public function destroy($id)
        {
            $people = People::find($id);
            $people->delete();
            return response()->json(null, 204);
        }
}
