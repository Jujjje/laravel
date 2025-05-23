<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // route --> /ninjas/
        // fetch all records & pass into the index view
        // $ninjas = Ninja::all();
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
  
        return view('ninjas.index', ['ninjas' => $ninjas]);
      }
  
      public function show(Ninja $ninja) {
        $ninja->load('dojo');
        return view('ninjas.show', ['ninja' => $ninja]);
      }
  
      public function create() {
        // route --> /ninjas/create
        // render a create view (with web form) to users
        $dojos = Dojo::all();
        return view('ninjas.create', ['dojos' => $dojos]);
      }
  
      public function store(Request $request) {
        // --> /ninjas/ (POST)
        $validated = $request->validate([
          'name' => 'required|string|max:255',
          'skill' => 'required|integer|min:0|max:100',
          'bio' => 'required|string|min:10|max:255',
          'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validated);

        return redirect()->route('ninjas.index')->with('success', 'Ninja Created');
      }
  
      public function destroy(Ninja $ninja) {
        // --> /ninjas/{id} (DELETE)
        $ninja->delete();
        
        return redirect()->route('ninjas.index')->with('success', 'Ninja Deleted');
      }
  
      // edit() and update() for edit view and update requests
      // we won't be using these routes
}
