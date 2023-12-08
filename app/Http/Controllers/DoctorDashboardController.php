<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Practitioner;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function index() {

        $doctor = auth('doctor')->user();

        if(!$doctor) abort(403);

        $hospital = $doctor?->hospital;

        $tickets = Ticket::where('status', 'pending')
                            ->whereHas('practitioner', function (Builder $query) use ($hospital) {
                                $query->where('hospital_id', $hospital->id);
                            })
                            ->latest()
                            ->get();

        // dd($tickets);

        $topClinics = new Clinic;

        if($hospital) {
            $topClinics = $topClinics->where('hospital_id', $hospital->id)->latest()->get();
        }

        $topPractitioners = new Practitioner();

        if($hospital) {
            $topPractitioners = $topPractitioners->where('hospital_id', $hospital->id)->latest()->get();
        }

        return view('doctor.dashboard.index', compact('hospital', 'doctor', 'topClinics', 'topPractitioners', 'tickets'));
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

        return view('doctor.practitioner_appoint_form', ['clinics' => Clinic::all(), 'practitioner' => $practitioner]);
    }

    public function practitioner_appoint(Request $request, Practitioner $practitioner) {

        $clinic = Clinic::find($request->input('clinic'));
        $practitioner->clinic()->associate($clinic);
        $practitioner->hospital()->associate($request->user()->hospital);
        $practitioner->update();

        return redirect()->back();
    }
}
