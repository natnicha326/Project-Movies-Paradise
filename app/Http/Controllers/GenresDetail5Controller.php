<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Movie;
use App\Models\Genres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class GenresDetail5Controller extends Controller
{

   public function index()
{
    $genres = Genres::all();

    $movies = Movie::all();

    return Inertia::render('GenresDetail/5', [
        'genres' => $genres,
        'movie' => $movies
    ]);

}
}
