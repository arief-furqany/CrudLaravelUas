<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud_uas; // 'crud_uas'

class CrudUasController extends Controller
{
    // Display a listing of the records
    public function index()
    {
        $data = crud_uas::all(); // Fetch all records
        return view('cruduas.index', compact('data')); // Load index view with data
    }

    // Show the form for creating a new record
    public function create()
    {
        return view('cruduas.create'); // Load create form view
    }

    // Store a newly created record in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|unique:crud_uas,nim',
            'jurusan' => 'required|string|max:255',
        ]);

        crud_uas::create($request->all()); // Create a new record
        return redirect()->route('cruduas.index')->with('success', 'Record created successfully!');
    }

    // Display the specified record
    public function show($id)
    {
        $data = crud_uas::findOrFail($id); // Fetch specific record
        return view('cruduas.show', compact('data')); // Load show view with data
    }

    // Show the form for editing the specified record
    public function edit($id)
    {
        $data = crud_uas::findOrFail($id); // Fetch specific record
        return view('cruduas.edit', compact('data')); // Load edit form view
    }

    // Update the specified record in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|unique:crud_uas,nim,' . $id,
            'jurusan' => 'required|string|max:255',
        ]);

        $data = crud_uas::findOrFail($id);
        $data->update($request->all()); // Update record
        return redirect()->route('cruduas.index')->with('success', 'Record updated successfully!');
    }

    // Remove the specified record from storage
    public function destroy($id)
    {
        $data = crud_uas::findOrFail($id);
        $data->delete(); // Delete record
        return redirect()->route('cruduas.index')->with('success', 'Record deleted successfully!');
    }
}
