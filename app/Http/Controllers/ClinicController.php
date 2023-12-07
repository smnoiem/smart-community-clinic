<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Hospital;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clinics = Clinic::paginate(2);

        if(request()->wantsJson()) {
            return response()->json(json_encode($clinics));
        }

        return view('clinics.index', ['clinics' => $clinics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clinics.create', ['hospitals' => Hospital::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clinic = new Clinic();

        $clinic->name = $request->input('name');
        $clinic->address = $request->input('address');
        $clinic->hospital()->associate($request->input('hospital'));

        $clinic->save();

        return redirect(route('clinics.index'));
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
