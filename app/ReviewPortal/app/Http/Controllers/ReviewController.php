<?php

namespace App\Http\Controllers;

use App\Models\CarMake;
use App\Models\Review;
use App\Models\Dealership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller
{
    public function show(Dealership $dealership)
    {
        // Fetch all car makes and reviews related to the dealership
        $carMakes = CarMake::all();
        $reviews = Review::where('dealership_id', $dealership->id)->get();

        return view('review', compact('dealership', 'carMakes', 'reviews'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'dealership_id' => 'required|exists:dealerships,id',
            'car_make_id' => 'required|exists:car_makes,id',
            'car_year' => 'required|integer|min:1900|max:2099',
            'purchase_date' => 'required|date',
            'review_text' => 'required|string|max:2000',
        ]);

        $validated['user_id'] = Auth::id();
        Review::create($validated);

        return redirect()->back()->with('success', 'Review submitted!');
    }

    public function edit(Dealership $dealership, Review $review)
    {
        // Verify the user owns this review
        if ($review->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('review', [
            'dealership' => $dealership,
            'carMakes' => CarMake::all(),
            'editingReview' => $review // Pass the review being edited
        ]);
    }

    public function update(Request $request, Review $review)
    {
        // Verify the user owns this review
        if ($review->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'purchase_date' => 'required|date',
            'car_make_id' => 'required|exists:car_makes,id',
            'car_year' => 'required|integer|min:1900|max:2099',
            'review_text' => 'required|string',
        ]);

        $review->update($validated);

        return redirect()->route('dealerships', $review->dealership_id)
            ->with('success', 'Review updated successfully!');
    }

    public function destroy(Review $review): RedirectResponse
    {
        // Manually check if the authenticated user is the owner of the review
        if (Auth::id() !== $review->user_id) {
            return redirect()->back()->with('error', 'You are not authorized to delete this review.');
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted!');
    }
}
