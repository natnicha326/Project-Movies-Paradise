<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $MovieData = Movie::all();

    if (request()->wantsJson()) {
        return response()->json([
            'movies' => $MovieData
        ], 200);
    }

    $Movies = Movie::all();

    return Inertia::render('AllMovie/Index', [
        'movie' => $Movies
    ]);

$otherController1 = new MovieDetail1Controller();
        $otherData1 = $otherController1->getData();

        $otherController2 = new MovieDetail2Controller();
        $otherData2 = $otherController2->getData();

        $otherController3 = new MovieDetail3Controller();
        $otherData3 = $otherController3->getData();

        $otherController4 = new MovieDetail4Controller();
        $otherData4 = $otherController4->getData();

        $otherController5 = new MovieDetail5Controller();
        $otherData5 = $otherController5->getData();

        $otherController6 = new MovieDetail6Controller();
        $otherData6 = $otherController6->getData();

        $otherController7 = new MovieDetail7Controller();
        $otherData7 = $otherController7->getData();

        $otherController8 = new MovieDetail8Controller();
        $otherData8 = $otherController8->getData();

        $otherController9 = new MovieDetail9Controller();
        $otherData9 = $otherController9->getData();

        $otherController10 = new MovieDetail10Controller();
        $otherData10 = $otherController10->getData();

        $otherController11 = new MovieDetail11Controller();
        $otherData11 = $otherController11->getData();

        $otherController12 = new MovieDetail12Controller();
        $otherData12 = $otherController12->getData();

        $otherController13 = new MovieDetail13Controller();
        $otherData13 = $otherController13->getData();

        $otherController14 = new MovieDetail14Controller();
        $otherData14 = $otherController14->getData();

        $otherController15 = new MovieDetail15Controller();
        $otherData15 = $otherController15->getData();

        $otherController16 = new MovieDetail16Controller();
        $otherData16 = $otherController16->getData();

        $otherController = new GenresController();
        $otherData = $otherController->getData();

        $otherController17 = new RatingController();
        $otherData17 = $otherController17->getData();

        $otherController18 = new ReviewController();
        $otherData18 = $otherController18->getData();
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'movie_id' => 'required|string',
        'title' => 'required|string',
        'poster' => 'required|string',
        'synopsis' => 'required|string',
        'genres' => 'required|string',
        'duration' => 'required|string',
        'director' => 'required|string',
        'cast' => 'required|string',
        'trailer' => 'required|string',
    ]);


    $movie = Movie::create($validated);


    return response()->json(['message' => 'Movie Create successfully'], 200);
}


    /**
     * Display the specified resource.
     */
    public function show(Request $request, Movie $MovieData)
    {
      Log::info("movies->".$MovieData);
            $movie_id = $request->MovieData;
            $MovieData = Movie::find($movie_id);
            return response()->json(
                [
                    'message' => 'Movie get successfully',
                    'data' => $MovieData
                ],
                200
            );
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
{
    $validated = $request->validate([
        'title' => 'required|string',
        'poster' => 'required|string',
        'synopsis' => 'required|string',
        'genres' => 'required|string',
        'duration' => 'required|string',
        'director' => 'required|string',
        'cast' => 'required|string',
        'trailer' => 'required|string',
    ]);

    $movie->update($validated);

    return response()->json(['message' => 'Movie update successfully'], 200);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
{

    if ($request->has('movie_id')) {

        $movie = Movie::where('movie_id', $request->movie_id)->first();


        if ($movie) {
            $movie->delete();

            return response()->json(['message' => 'Movie deleted successfully'], 200);
        } else {

            return response()->json(['message' => 'Movie not found'], 404);
        }
    } else {

        return response()->json(['message' => 'Invalid request. Missing movie_id parameter.'], 400);
    }
}
}
