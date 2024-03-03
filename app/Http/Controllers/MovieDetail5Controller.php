<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class MovieDetail5Controller extends Controller
{

    public function index()
    {
{
    $MovieData = Movie::all();

    if (request()->wantsJson()) {
        return response()->json([
            'movies' => $MovieData
        ], 200);
    }

        $Movies = Movie::all();

    return Inertia::render('MovieDetail/5', [
        'movie' => $Movies
    ]);
}
    }

}
