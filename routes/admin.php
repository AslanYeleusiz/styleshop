    <?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\OdezhdaColorController;
use App\Http\Controllers\Admin\OdezhdaTypeController;
use App\Http\Controllers\Admin\OdezhdaFacturerController;
use App\Http\Controllers\Admin\OdezhdaFormController;
use App\Http\Controllers\Admin\OdezhdaController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return Inertia::render('home');})->name('index');
Route::resource('colors', OdezhdaColorController::class)->except(['show'])->names('colors');
Route::resource('types', OdezhdaTypeController::class)->except(['show'])->names('types');
Route::resource('facturers', OdezhdaFacturerController::class)->except(['show'])->names('facturers');
Route::resource('forms', OdezhdaFormController::class)->except(['show'])->names('forms');
Route::resource('odezhdalar', OdezhdaController::class)->except(['show'])->names('odezhdalar');
//
