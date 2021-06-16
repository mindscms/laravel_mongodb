<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SonController extends Controller
{

    public function index()
    {
        $sons = auth()->user()->sons;
        return view('sons.index', compact('sons'));
    }

    public function create()
    {
        return view('sons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required|date_format:Y-m-d'
        ]);

        auth()->user()->sons()->create([
            'name' => $request->input('name'),
            'birth_date' => $request->input('birth_date'),
        ]);

        return back()->with('status', 'Son is created');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
