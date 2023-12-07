<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Practitioner;
use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function index() {

        $doctor = auth('doctor')->user();
        $hospital = $doctor?->hospital;

        $topClinics = new Clinic;

        if($hospital) {
            $topClinics = $topClinics->where('hospital_id', $hospital->id)->latest()->get();
        }

        $topPractitioners = new Practitioner();

        if($hospital) {
            $topPractitioners = $topPractitioners->where('hospital_id', $hospital->id)->latest()->get();
        }

        return view('doctor.dashboard.index', compact('hospital', 'doctor', 'topClinics', 'topPractitioners'));
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
