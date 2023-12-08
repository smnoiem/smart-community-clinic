<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PractitionerDashboardController extends Controller
{
    public function index() {

        $practitioner = auth('practitioner')->user();

        if(!$practitioner) abort(403);

        $clinic = $practitioner?->clinic;

        return view('practitioner.dashboard.index', compact('practitioner', 'clinic'));
    }
}
