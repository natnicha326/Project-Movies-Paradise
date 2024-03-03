<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
       public function index()
{
    $Reviews = Review::all();

    $Movies = Movie::all();

    $Users = User::all();
    return Inertia::render('Review/Index', [
        'review' => $Reviews,
        'movie' => $Movies,
        'user' => $Users
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    $validatedData = $request->validate([
        'movie_name' => 'required|string',
        'feedback' => 'required|string',
    ]);

    Review::create($validatedData);

    return response()->json(['message' => 'created successfully'], 201);
}



    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
