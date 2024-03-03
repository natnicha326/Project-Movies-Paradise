<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Movie;
use App\Models\Genres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class GenresController extends Controller
{

   public function index()
{
    $genres = Genres::all();

    $movies = Movie::all();

    return Inertia::render('Genres/Index', [
        'genres' => $genres,
        'movie' => $movies
    ]);

    $otherController1 = new GenresDetail1Controller();
        $otherData1 = $otherController1->getData();

        $otherController2 = new GenresDetail2Controller();
$otherData2 = $otherController2->getData();

$otherController3 = new GenresDetail3Controller();
$otherData3 = $otherController3->getData();

$otherController4 = new GenresDetail4Controller();
$otherData4 = $otherController4->getData();

$otherController5 = new GenresDetail5Controller();
$otherData5 = $otherController5->getData();

$otherController6 = new GenresDetail6Controller();
$otherData6 = $otherController6->getData();

$otherController7 = new GenresDetail7Controller();
$otherData7 = $otherController7->getData();

$otherController8 = new GenresDetail8Controller();
$otherData8 = $otherController8->getData();

$otherController9 = new GenresDetail9Controller();
$otherData9 = $otherController9->getData();

$otherController10 = new GenresDetail10Controller();
$otherData10 = $otherController10->getData();
}
}
