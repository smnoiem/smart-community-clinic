<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Practitioner;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $topHospitals = Hospital::latest()->take(5)->get();
        $topDoctors = Doctor::latest()->take(5)->get();
        $topClinics = Clinic::latest()->take(5)->get();
        $topPractitioners = Practitioner::latest()->take(5)->get();

        return view('admin.dashboard.index', compact('topHospitals', 'topDoctors', 'topClinics', 'topPractitioners'));
    }

    public function appoint_form(Request $request, Doctor $doctor) {

        return view('admin.appoint_form', ['hospitals' => Hospital::all(), 'doctor' => $doctor]);
    }

    public function appoint(Request $request, Doctor $doctor) {

        $hospital = Hospital::find($request->input('hospital'));
        $doctor->hospital()->associate($hospital);
        $doctor->update();

        return redirect()->back();
    }
}
