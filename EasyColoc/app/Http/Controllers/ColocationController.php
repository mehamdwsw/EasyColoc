<?php

namespace App\Http\Controllers;

use App\Models\Colocation;
use App\Models\Leadership;
use Illuminate\Http\Request;

class ColocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Colocations');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'Description' => 'required|string',
        ]);
        $colocation=Colocation::create([
            'name' => $request->name,
            'Description' => $request->Description,
            'status' => 'active',
        ]);
        // dd($colocation->users());
        Leadership::create([    
            'user_id'       => auth()->id(),
            'colocation_id' => $colocation->id,
            'role'          => 'owner',
            'joined_at'     => now(),
        ]);


        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colocation $colocation)
    {
        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Colocation $colocation)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colocation $colocation)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colocation $colocation)
    {
        $colocation->status = "cancelled";
        $colocation->update();
        return redirect('/dashboard');
    }
}
