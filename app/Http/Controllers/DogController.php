<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Kennel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->admin)
        {
            $dogs = Dog::with('kennel')->all();
        }
        else
        {
            $dogs = Dog::where('user_id', Auth::user()->id)->with('kennel', 'owners')->get();
        }

        return view('dog.index', compact('dogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kennels = Kennel::all();

        return view('dog.create', compact('kennels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required', 'string',
            'colour' => 'required', 'string',
            'size' => 'required', 'string',
        ]);

        $dog = new Dog;
        $dog->name = $request->name;
        $dog->colour = $request->colour;
        $dog->size = $request->size;
        $dog->kennel_id = $request->kennel_id;
        $dog->user_id = Auth::user()->id;

        $dog->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Dog $dog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dog $dog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        //
    }
}
