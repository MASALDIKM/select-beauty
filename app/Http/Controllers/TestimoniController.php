<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Testimoni::latest()->get(); 
        return view('content.index',[ 
            'testimonis' => $data 
        ]); 

    }
    public function shop()
    {
        $data = Testimoni::latest()->get(); 
        return view('content.shop',[ 
            'testimonis' => $data 
        ]); 

    }
    public function about()
    {
        $data = Testimoni::latest()->get(); 
        return view('content.about',[ 
            'testimonis' => $data 
        ]); 

    }
    public function contact()
    {
        $data = Testimoni::latest()->get(); 
        return view('content.contact',[ 
            'testimonis' => $data 
        ]); 

    }
    public function services()
    {
        $data = Testimoni::latest()->get(); 
        return view('content.services',[ 
            'testimonis' => $data 
        ]); 

    }
    public function listProduct()
    {
        $data = Testimoni::latest()->get(); 
        return view('content.listProduct',[ 
            'testimonis' => $data 
        ]); 

    }


    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('coment.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'komentar' => 'required|string',
        ]);

        Testimoni::create($validated);

        return redirect('/')->with('success', 'Komentar Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        //
    }
}
