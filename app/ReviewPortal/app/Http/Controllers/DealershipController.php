<?php

namespace App\Http\Controllers;

use App\Models\Dealership;
use Illuminate\Http\Request;

class DealershipController extends Controller
{

    public function showAll(Request $request)
    {
        $query = Dealership::query();

        // Apply state filter if present
        if ($request->filled('state')) {
            $query->where('state', $request->input('state'));
        }

        $dealerships = $query->get();

        // For dropdown options (unique list of states)
        $states = \App\Models\Dealership::select('state')->distinct()->orderBy('state')->pluck('state');

        return view('dealership', compact('dealerships', 'states'));
    }






}
