<?php
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieDetail1Controller;
use App\Http\Controllers\MovieDetail2Controller;
use App\Http\Controllers\MovieDetail3Controller;
use App\Http\Controllers\MovieDetail4Controller;
use App\Http\Controllers\MovieDetail5Controller;
use App\Http\Controllers\MovieDetail6Controller;
use App\Http\Controllers\MovieDetail7Controller;
use App\Http\Controllers\MovieDetail8Controller;
use App\Http\Controllers\MovieDetail9Controller;
use App\Http\Controllers\MovieDetail10Controller;
use App\Http\Controllers\MovieDetail11Controller;
use App\Http\Controllers\MovieDetail12Controller;
use App\Http\Controllers\MovieDetail13Controller;
use App\Http\Controllers\MovieDetail14Controller;
use App\Http\Controllers\MovieDetail15Controller;
use App\Http\Controllers\MovieDetail16Controller;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GenresDetail10Controller;
use App\Http\Controllers\GenresDetail9Controller;
use App\Http\Controllers\GenresDetail8Controller;
use App\Http\Controllers\GenresDetail7Controller;
use App\Http\Controllers\GenresDetail6Controller;
use App\Http\Controllers\GenresDetail5Controller;
use App\Http\Controllers\GenresDetail4Controller;
use App\Http\Controllers\GenresDetail3Controller;
use App\Http\Controllers\GenresDetail2Controller;
use App\Http\Controllers\GenresDetail1Controller;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/movie', [MovieController::class, 'index']);
Route::middleware('auth:sanctum')->post('/movie', [MovieController::class, 'store']);
Route::middleware('auth:sanctum')->put('/movie', [MovieController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/movie', [MovieController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/moviedetail/1', [MovieDetail1Controller::class, 'index'])->name('moviedetail1');
Route::middleware('auth:sanctum')->get('/moviedetail/2', [MovieDetail2Controller::class, 'index'])->name('moviedetail2');
Route::middleware('auth:sanctum')->get('/moviedetail/3', [MovieDetail3Controller::class, 'index'])->name('moviedetail3');
Route::middleware('auth:sanctum')->get('/moviedetail/4', [MovieDetail4Controller::class, 'index'])->name('moviedetail4');
Route::middleware('auth:sanctum')->get('/moviedetail/5', [MovieDetail5Controller::class, 'index'])->name('moviedetail5');
Route::middleware('auth:sanctum')->get('/moviedetail/6', [MovieDetail6Controller::class, 'index'])->name('moviedetail6');
Route::middleware('auth:sanctum')->get('/moviedetail/7', [MovieDetail7Controller::class, 'index'])->name('moviedetail7');
Route::middleware('auth:sanctum')->get('/moviedetail/8', [MovieDetail8Controller::class, 'index'])->name('moviedetail8');
Route::middleware('auth:sanctum')->get('/moviedetail/9', [MovieDetail9Controller::class, 'index'])->name('moviedetail9');
Route::middleware('auth:sanctum')->get('/moviedetail/10', [MovieDetail10Controller::class, 'index'])->name('moviedetail10');
Route::middleware('auth:sanctum')->get('/moviedetail/11', [MovieDetail11Controller::class, 'index'])->name('moviedetail11');
Route::middleware('auth:sanctum')->get('/moviedetail/12', [MovieDetail12Controller::class, 'index'])->name('moviedetail12');
Route::middleware('auth:sanctum')->get('/moviedetail/13', [MovieDetail13Controller::class, 'index'])->name('moviedetail13');
Route::middleware('auth:sanctum')->get('/moviedetail/14', [MovieDetail14Controller::class, 'index'])->name('moviedetail14');
Route::middleware('auth:sanctum')->get('/moviedetail/15', [MovieDetail15Controller::class, 'index'])->name('moviedetail15');
Route::middleware('auth:sanctum')->get('/moviedetail/16', [MovieDetail16Controller::class, 'index'])->name('moviedetail16');

Route::middleware('auth:sanctum')->get('/genresdetail/1', [GenresDetail1Controller::class, 'index'])->name('genresdetail1');
Route::middleware('auth:sanctum')->get('/genresdetail/2', [GenresDetail2Controller::class, 'index'])->name('genresdetail2');
Route::middleware('auth:sanctum')->get('/genresdetail/3', [GenresDetail3Controller::class, 'index'])->name('genresdetail3');
Route::middleware('auth:sanctum')->get('/genresdetail/4', [GenresDetail4Controller::class, 'index'])->name('genresdetail4');
Route::middleware('auth:sanctum')->get('/genresdetail/5', [GenresDetail5Controller::class, 'index'])->name('genresdetail5');
Route::middleware('auth:sanctum')->get('/genresdetail/6', [GenresDetail6Controller::class, 'index'])->name('genresdetail6');
Route::middleware('auth:sanctum')->get('/genresdetail/7', [GenresDetail7Controller::class, 'index'])->name('genresdetail7');
Route::middleware('auth:sanctum')->get('/genresdetail/8', [GenresDetail8Controller::class, 'index'])->name('genresdetail8');
Route::middleware('auth:sanctum')->get('/genresdetail/9', [GenresDetail9Controller::class, 'index'])->name('genresdetail9');
Route::middleware('auth:sanctum')->get('/genresdetail/10', [GenresDetail10Controller::class, 'index'])->name('genresdetail10');
Route::middleware('auth:sanctum')->get('/rating', [RatingController::class, 'index'])->name('rating');
Route::middleware('auth:sanctum')->get('/admin', [AdminController::class, 'index'])->name('admin');

Route::middleware('auth:sanctum')->get('/genres', [GenresController::class, 'index']);
Route::middleware('auth:sanctum')->get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/login', [UserController::class, 'store']);
Route::middleware('auth:sanctum')->delete('/logout/{user}', [UserController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/review', [ReviewController::class, 'index'])->name('review');
Route::middleware('auth:sanctum')->post('/review', [ReviewController::class, 'store']);
Route::post('/upload', [ReportController::class, 'store']);

