<?php

namespace App\Http\Controllers;

use App\Models\CarMake;
use App\Models\Dealership;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
