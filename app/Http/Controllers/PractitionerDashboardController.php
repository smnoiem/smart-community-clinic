<?php

namespace App\Http\Controllers;

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
        return view('practitioner.enqueue_form');
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

        $visits = Visit::where('practitioner_id', $practitioner->id)->get();

        $clinic = $practitioner?->clinic;

        return view('practitioner.dashboard.queue', compact('practitioner', 'clinic', 'visits'));
    }

}
