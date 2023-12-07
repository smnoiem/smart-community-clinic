<?php

namespace App\Http\Controllers;

use App\Models\Practitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PractitionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $practitioners = Practitioner::paginate(2);

        if(request()->wantsJson()) {
            return response()->json(json_encode($practitioners));
        }

        return view('practitioners.index', ['practitioners' => $practitioners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('practitioners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $practitioner = new Practitioner();

        $practitioner->name = $request->input('name');
        $practitioner->address = $request->input('address');
        $practitioner->email = $request->input('email');
        $practitioner->secret_key = Str::random(30);

        $practitioner->save();

        return redirect(route('practitioners.show', ['practitioner' => $practitioner->id, 'secret_key' => $practitioner->secret_key]));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
