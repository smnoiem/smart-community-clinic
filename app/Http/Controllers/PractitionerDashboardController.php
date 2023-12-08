<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use App\Models\Visit;
use Illuminate\Http\Request;

class PractitionerDashboardController extends Controller
{
    public function index() {

        $practitioner = auth('practitioner')->user();

        if(!$practitioner) abort(403);

        $clinic = $practitioner?->clinic;

        return view('practitioner.dashboard.index', compact('practitioner', 'clinic'));
    }

    public function enqueue_form() {

        $practitioner = auth('practitioner')->user();

        if(!$practitioner) abort(403);

        $visits = Visit::where('practitioner_id', $practitioner->id)->where('status', 'in_queue')->latest()->get();

        return view('practitioner.enqueue_form', compact('visits'));
    }

    public function enqueue(Request $request) {

        $practitioner = auth('practitioner')->user();

        if(!$practitioner) abort(403);

        $visit = new Visit();

        $visit->patient_name = $request->input('name');
        $visit->age = $request->input('age');
        $visit->status = 'in_queue';
        $visit->clinic_id = $practitioner?->clinic?->id ?? 0;
        $visit->practitioner_id = $practitioner?->id ?? 0;

        $visit->save();

        return redirect(route('practitioner.queue'));
    }


    public function queue() {

        $practitioner = auth('practitioner')->user();

        if(!$practitioner) abort(403);

        $visits = Visit::where('practitioner_id', $practitioner->id)->where('status', 'in_queue')->latest()->get();

        $clinic = $practitioner?->clinic;

        return redirect(route('practitioner.enqueue'));
    }

    public function collect_medical_history(Visit $visit) {
        return view('practitioner.dashboard.collect_medical_history', compact('visit'));
    }

    public function store_medical_history(Request $request, Visit $visit) {

        $medicalHistory = new MedicalHistory();

        $medicalHistory->visit_id = $visit->id;
        $medicalHistory->symptom_type = $request->input('type');
        $medicalHistory->symptom_value = $request->input('value');

        $medicalHistory->save();

        return redirect(route('practitioner.collect_medical_history', $visit->id));
    }

}
