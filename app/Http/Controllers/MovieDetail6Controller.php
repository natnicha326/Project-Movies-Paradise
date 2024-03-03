<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class MovieDetail6Controller extends Controller
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

    return Inertia::render('MovieDetail/6', [
        'movie' => $Movies
    ]);
}
    }

}
