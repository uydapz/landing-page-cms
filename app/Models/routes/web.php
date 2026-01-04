<?php
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\FasOlahragaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KantinPujaseraController;
use App\Http\Controllers\KeamananController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LainnyaController;
use App\Http\Controllers\LogoMottoController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\PendiriController;
use App\Http\Controllers\PengasuhController;
use App\Http\Controllers\PetaPesantrenController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfilSingkatController;
use App\Http\Controllers\PsbController;
use App\Http\Controllers\SantriBaruController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SpandukController;
use App\Http\Controllers\StaffPengajarController;
use App\Http\Controllers\UnitAktivitasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

// Nav ==> 0
Route::get('/', [HomeController::class, 'index']);

// Nav ==> 1 X all blog
Route::get('/category/{category:slug}', [BlogController::class, 'category'])->name('category.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/gallery/', [GalleryController::class, 'show'])->name('blog.show');
Route::get('/blog/{article:slug}', [BlogController::class, 'show']);
Route::get('/search', [BlogController::class, 'search'])->name('search');
Route::get('/usepage/{id}', [UserController::class, 'author'])->name('author');


// Nav ==> 2
Route::get('/santri-baru', [SantriBaruController::class, 'index']);
Route::get('/santri', [SantriController::class, 'index']);
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/staff-pengajar', [StaffPengajarController::class, 'index']);
Route::get('/orangtua', [OrangtuaController::class, 'index']);

// Nav ==> 3
Route::get('/profil', [ProfilSingkatController::class, 'index']);
Route::get('/pendiri', [PendiriController::class, 'index']);
Route::get('/pengasuh', [PengasuhController::class, 'index']);
Route::get('/sejarah', [SejarahController::class, 'index']);
Route::get('/logo-motto', [LogoMottoController::class, 'index']);
Route::get('/visi-misi', [VisiMisiController::class, 'index']);
Route::get('/prestasi', [PrestasiController::class, 'index']);

// Nav ==> 4
Route::get('/faskes', [FaskesController::class, 'index']);
Route::get('/unit-aktivitas', [UnitAktivitasController::class, 'index']);
Route::get('/fasorg', [FasOlahragaController::class, 'index']);
Route::get('/kantin-pujas', [KantinPujaseraController::class, 'index']);
Route::get('/keamanan', [KeamananController::class, 'index']);
Route::get('/peta', [PetaPesantrenController::class, 'index']);

//Nav ==> 5
Route::get('/psb', [PsbController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/saran', [SaranController::class, 'index']);
Route::get('/lainnya', [LainnyaController::class, 'index']);

//DASHBOARD
Route::get('/login', [DashboardController::class, 'login'])->middleware('guest');
Route::post('/authanticate', [DashboardController::class, 'authanticate']);
Route::post('/logout', [DashboardController::class, 'logout']);

Route::group(['prefix' => 'dashboard','middleware' => ['auth','isLogin']], function () {
    Route::get('/home', [DashboardController::class, 'index']);
    Route::get('/spanduk', [SpandukController::class, 'index']);
    Route::get('/gallery', [GalleryController::class, 'index']);
    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
});

Route::group(['prefix' => 'store','middleware' => ['auth','isLogin']], function () {
    Route::post('/spanduk', [SpandukController::class, 'store']);
    Route::post('/gallery', [GalleryController::class, 'store']);
    Route::post('/article', [ArticleController::class, 'store']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::post('/user', [UserController::class, 'store']);
});

Route::group(['prefix' => 'update','middleware' => ['auth','isLogin']], function () {
    Route::patch('/spanduk/{id}', [SpandukController::class, 'update']);
    Route::patch('/gallery/{id}', [GalleryController::class, 'update']);
    Route::patch('/article/{id}', [ArticleController::class, 'update']);
    Route::patch('/category/{id}', [CategoryController::class, 'update']);
    Route::patch('/user/{id}', [UserController::class, 'update']);
});

Route::group(['prefix' => 'destroy','middleware' => ['auth','isLogin']], function () {
    Route::post('/spanduk/{id}', [SpandukController::class, 'destroy']);
    Route::post('/gallery/{id}', [GalleryController::class, 'destroy']);
    Route::post('/article/{id}', [ArticleController::class, 'destroy']);
    Route::post('/category/{id}', [CategoryController::class, 'destroy']);
    Route::post('/user/{id}', [UserController::class, 'destroy']);
});


Route::get('/storage/{path}', function ($path) {
    $filePath = storage_path('app/public/' . $path);

    if (!File::exists($filePath)) {
        abort(404);
    }

    $file = File::get($filePath);
    $type = File::mimeType($filePath);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->where('path', '.*');