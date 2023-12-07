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

    public function practitioner_appoint_form(Request $request, Practitioner $practitioner) {

        return view('admin.practitioner_appoint_form', ['hospitals' => Hospital::all(), 'practitioner' => $practitioner]);
    }

    public function practitioner_appoint(Request $request, Practitioner $practitioner) {

        $hospital = Hospital::find($request->input('hospital'));
        $practitioner->hospital()->associate($hospital);
        $practitioner->update();

        return redirect()->back();
    }

    public function clinic_appoint_form(Request $request, Clinic $clinic) {

        return view('admin.clinic_appoint_form', ['hospitals' => Hospital::all(), 'clinic' => $clinic]);
    }

    public function clinic_appoint(Request $request, Clinic $clinic) {

        $hospital = Hospital::find($request->input('hospital'));
        $clinic->hospital()->associate($hospital);
        $clinic->update();

        return redirect()->back();
    }
}
